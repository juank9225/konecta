<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){//carga los usuarios 
        $users = DB::table('users')->get();
        return view('usuarios', ['users' => $users]);
    }

    public function eliminarUsuario(Request $request){//elimina un usuario

        DB::table('users')->where('id', $request->id)->delete();
      }

    public function mostrarUsuario(Request $request){//manda los datos al usuario

        $users = DB::table('users')->where('id', $request->id)->get();
        return $users;

      }

      public function actualizarUsuario(Request $request){//update

        $affected = DB::table('users')
              ->where('id', $request->id)
              ->update(['name' => $request->name],['email' => $request->email]);

              return $affected;
      }


}

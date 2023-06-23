<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }
    public function store(Request $request)
    {
        $respuesta = [];
        $validar = $this->validar($request->all());
        if (!is_array($validar)) {
            $user = new User();
            $user->name = $request->name;
            $user->lastname = $request->lastname;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->id_type_document = $request->id_type_document;
            $user->save();

            array_push($respuesta, ['status' => '¡Se creo correctamente el usuario!']);
            return response()->json($respuesta);
        } else {
            return response()->json($validar);
        }
    }

    public function show($id)
    {
        $respuesta = [];
        $user = User::find($id);
        if ($user) {
            return response()->json($user);
        } else {
            array_push($respuesta, ['status' => 'error']);
            array_push($respuesta, ['errors' => ['id' => ['No existe el ID']]]);
        }
        return response()->json($respuesta);
        
    }


    public function update(Request $request)
    {
        $respuesta = [];
        $validar = $this->validar($request->all());
        if (!is_array($validar)) {
            $id = $request->id;
            $user = User::find($id);
            if ($user) {
                $user->name = $request->name;
                $user->lastname = $request->lastname;
                $user->email = $request->email;
                $user->password = Hash::make($request->password);
                $user->id_type_document = $request->id_type_document;
                $user->save();

                array_push($respuesta, ['status' => '¡Se Actualizo correctamente el usuario!']);
            } else {
                array_push($respuesta, ['status' => 'error']);
                array_push($respuesta, ['errors' => ['id' => ['No existe el ID']]]);
            }
            return response()->json($respuesta);
        } else {
            return response()->json($validar);
        }
    }


    public function destroy(Request $request)
    {
        $respuesta = [];
        $user = User::destroy($request->id);
        if ($user) {

            array_push($respuesta, ['status' => '¡Se Elimino correctamente el usuario!']);
        } else {
            array_push($respuesta, ['status' => 'error']);
            array_push($respuesta, ['errors' => ['id' => ['No existe el ID']]]);
        }
        return response()->json($respuesta);
    }

    public function validar($parametros)
    {
        $respuesta = [];
        $messages = [
            'max' => 'El campo :attribute No debe tener más de :max caracteres',
            'required' => 'El campo :attribute No debe de estar vacio',
            'email.email' => 'Debe ingresar un formato de correo valido',
            'id_type_document.numeric'=> 'Debe ser numerico',
            'id_type_document.between'=> 'Debe estar entre los valores 1 y 4',

        ];
        $attributes = [
            'name' => 'nombre',
            'lastname' => 'apellido',
            'email' => 'correo',
            'password' => 'contraseña',
            'id_type_document' => 'id tipo de documento'

        ];
        $validacion = Validator::make(
            $parametros,
            [
                'name' => 'required|max:80',
                'lastname' => 'required|max:80',
                'email' => 'required|email',
                'password' => 'required',
                'id_type_document' => 'required|numeric|between:1,4'
            ],
            $messages,
            $attributes
        );
        //para saber si falla la validacion , nos retorne el estado y que error se genero
        if ($validacion->fails()) {
            array_push($respuesta, ['status' => 'error']);
            array_push($respuesta, ['errors' => $validacion->errors()]);
            return $respuesta;
        } else {
            return true;
        }
    }
}

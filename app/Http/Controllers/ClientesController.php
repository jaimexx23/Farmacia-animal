<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;
use Session;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ItemCreateRequest;
use App\Http\Requests\ItemUpdateRequest;
use DB;
use Storage;

class ClientesController extends Controller
{
    // Método para mostrar el formulario de creación de clientes
    public function crear()
    {
        $clientes = Clientes::all();
        return view('admin.clientes.crear', compact('clientes'));
    }

    // Método para almacenar un nuevo cliente en la base de datos
    public function store(Request $request)
    {
        // Validación de los datos del formulario
        $this->validate($request, [
            'nombre' => 'required|string|max:255',
            'Apellidopaterno' => 'required|string|max:255',
            'ApellidoMaterno' => 'required|string|max:255',
            'Edad' => 'required|integer',
            'Correo' => 'required|string|email|max:255',
        ]);

        // Instancia del modelo Clientes que representa la tabla 'clientes'
        $clientes = new Clientes;

        // Asignación de los datos del formulario al modelo
        $clientes->nombre = $request->nombre;
        $clientes->Apellidopaterno = $request->Apellidopaterno;
        $clientes->ApellidoMaterno = $request->ApellidoMaterno;
        $clientes->Edad = $request->Edad;
        $clientes->Correo = $request->Correo;

        // Guardado del registro en la base de datos
        $clientes->save();

        // Redirección a la vista principal con un mensaje de éxito
        return redirect('admin/clientes')->with('message', 'Guardado Satisfactoriamente !');
    }

    // Método para mostrar los detalles de un cliente específico
    public function show($id)
    {
        $clientes = Clientes::find($id);
        return view('admin.clientes.detalles', compact('clientes'));
    }

    // Método para mostrar el formulario de actualización de un cliente
    public function actualizar($id)
    {
        $clientes = Clientes::find($id);
        return view('admin.clientes.actualizar', compact('clientes'));
    }

    // Método para procesar la actualización de un cliente
    public function update(Request $request, $id)
    {
        // Validación de los datos del formulario
        $this->validate($request, [
            'nombre' => 'required|string|max:255',
            'Apellidopaterno' => 'required|string|max:255',
            'ApellidoMaterno' => 'required|string|max:255',
            'Edad' => 'required|integer',
            'Correo' => 'required|string|email|max:255',
        ]);

        // Encontrar el cliente por su ID
        $clientes = Clientes::find($id);

        // Asignar los datos actualizados del formulario al modelo
        $clientes->nombre = $request->nombre;
        $clientes->Apellidopaterno = $request->Apellidopaterno;
        $clientes->ApellidoMaterno = $request->ApellidoMaterno;
        $clientes->Edad = $request->Edad;
        $clientes->Correo = $request->Correo;

        // Guardar los cambios en la base de datos
        $clientes->save();

        // Redireccionar con un mensaje de éxito
        Session::flash('message', 'Editado Satisfactoriamente !');
        return Redirect::to('admin/clientes');
    }

    // Método para eliminar un cliente
    public function eliminar($id)
    {
        // Encontrar el cliente por su ID
        $clientes = Clientes::find($id);

        // Eliminar el registro de la base de datos
        Clientes::destroy($id);

        // Redireccionar con un mensaje de éxito
        Session::flash('message', 'Eliminado Satisfactoriamente !');
        return Redirect::to('admin/clientes');
    }

    // Listar todos los clientes en la vista principal
    public function index()
    {
        $clientes = Clientes::all();
        return view('admin.clientes.Admin.index', compact('clientes'));
    }
}

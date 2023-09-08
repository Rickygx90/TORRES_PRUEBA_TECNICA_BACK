<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->usuario = $request->usuario;
        $user->pnombre = $request->pnombre;
        $user->snombre = $request->snombre;
        $user->papellido = $request->papellido;
        $user->sapellido = $request->sapellido;
        $user->email = $request->email;
        $user->departamento = $request->departamento;
        $user->cargo = $request->cargo;
        
        $user->save();
        return response()->json('Data Saved');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $user->usuario = $request->usuario;
        $user->pnombre = $request->pnombre;
        $user->snombre = $request->snombre;
        $user->papellido = $request->papellido;
        $user->sapellido = $request->sapellido;
        $user->email = $request->email;
        $user->departamento = $request->departamento;
        $user->cargo = $request->cargo;
        
        $user->save();
        return response()->json('Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();
        return response()->json('Data Deleted');
    }
}

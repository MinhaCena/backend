<?php

namespace App\Http\Controllers;

use App\Models\Registrant;
use Illuminate\Http\Request;

class RegistrantController extends Controller
{
    public function store(Request $request)
    {
        $data = new Registrant();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->role = $request->role;
        $data->whatsapp = $request->whatsapp;
        $data->save();

        return response()->json(['message' => 'Registrant created'], 201);
    }
}

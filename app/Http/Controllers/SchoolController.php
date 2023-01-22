<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function store(Request $request)
    {
        $data = new School();
        $data->name = $request->name;
        $data->cnpj = $request->cnpj;
        $data->city = $request->city;
        $data->type = $request->type;
        $data->uf = $request->uf;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->registrant_id = $request->input('registrant_id');
        $data->save();
        return response()->json(['message' => 'School created'], 201);
    }
}

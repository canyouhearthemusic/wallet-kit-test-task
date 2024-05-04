<?php

namespace App\Http\Controllers;

use App\Http\Resources\ClientResource;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return response()->json([
            'data' => ClientResource::collection(Client::all())
        ]);
    }

    public function show(Client $client)
    {
        return response()->json([
            'data' => ClientResource::make($client)
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{

    public function list() 
    {
        $clients = Client::orderBy('name')->paginate(10);

        return view('client.list', compact('clients'));
    }

    public function save(Request $request, Client $client = null) 
    {
        try {

            if(!$client) {
                $client = new Client;
            }

            $requestData = $request->all();
            
            $client->fill($requestData);

            if($request->image) {

                if ($client->photo) {
                    Storage::disk('public')->delete($client->photo);
                }

                $client->photo = Storage::disk('public')->put('client_photo', $request->image);
            }

            $client->save();
    
            Session::flash('success', 'Cadastro realizado com sucesso!');

        } catch(\Exception $e) {
            Session::flash('error', '<b>Erro!</b><br>'.$e->getMessage());
        }
         
        return redirect()->route('client.list');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
		
		return view('index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados = $request->all();
		Client::create($dados);
		
		return back()->with(['success' => 'Cliente cadastrado com sucesso']);
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::findOrFail($id);
		return view('edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $client = $request->all();
		 $id = Client::findOrFail($id);
		 $id->update($client);
		 
		 return back()->with(['success' => 'Cliente editado com sucesso']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client_delete = Client::findOrFail($id);
		$client_delete->delete($id);
		
		return back()->with(['success' => 'Cliente deletado com sucesso']);
    }
}

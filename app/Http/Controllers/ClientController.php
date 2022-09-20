<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('welcome', compact('clients'));
    }
    public function search(Request $request)
    {
        $data = $request->validate([
            'name' => 'nullable'
        ]);
        $searchTerm = $data['name'];
        $clients = Client::where('name', 'LIKE', '%' . $searchTerm . '%')->get();
        return view('welcome', compact('clients'));
    }
    public function register()
    {
        return view('create');
    }
    public function create(Request $request)
    {
        $data = $this->validateForm($request);
        Client::insert($data);

        return redirect('/');
    }
    public function edit($id)
    {
        $client = Client::find($id);
        return view('edit', compact('client'));
    }
    public function update(Request $request, $id)
    {
        $data = $this->validateForm($request);
        Client::find($id)->update($data);
        return redirect('/');
    }
    public function delete($id)
    {
        Client::find($id)->delete();
        return redirect('/');
    }
    public function validateForm(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'telephone' => 'required',
            'direction' => 'required'
        ]);
        return $validatedData;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClientFormRequest;
use App\Models\Client;

class ClientController extends Controller
{
    public function index(){
        $clients=Client::all();
        return view('admin.clients.index',compact('clients'));
    }

    public function create(){
        return view('admin.clients.create');
    }

    public function store(ClientFormRequest $request){
        $data=$request->validated();

        $client=new Client;
        $client->first_name=$data['fname'];
        $client->last_name=$data['lname'];
        $client->contact=$data['contact'];
        $client->email=$data['email'];
        $client->gender=$data['gender'];
        $client->dob_year=$data['year'];
        $client->dob_month=$data['month'];
        $client->dob_date=$data['date'];
        $client->str_no=$data['strno'];
        $client->str_add=$data['stradd'];
        $client->city=$data['city'];
        $client->status=$request->status == true ? 1 : 0 ;

        $client->save();
        return redirect(route('admin.client'))->with('message','Client Added Successfully');
        

   }

   public function edit($client_id){
    $client=Client::findOrFail($client_id);
    return view('admin.clients.edit',compact('client'));
}

public function update(ClientFormRequest $request,$client_id){

    $data=$request->validated();

    $client=Client::findOrFail($client_id);

        $client->first_name=$data['fname'];
        $client->last_name=$data['lname'];
        $client->contact=$data['contact'];
        $client->email=$data['email'];
        $client->gender=$data['gender'];
        $client->dob_year=$data['year'];
        $client->dob_month=$data['month'];
        $client->dob_date=$data['date'];
        $client->str_no=$data['strno'];
        $client->str_add=$data['stradd'];
        $client->city=$data['city'];
        $client->status=$request->status == true ? 1 : 0 ;

        $client->update();

   return redirect(route('admin.client'))->with('message','Client Updated Successfully');

}

public function delete(Request $request){
         
    $client=Client::findOrFail($request->client_delete_id);

    if($client){
        $client->delete();
        return redirect(route('admin.client'))->with('message','Client Deleted Successfully');
    }
    else{
        return redirect(route('admin.client'))->with('message','Client ID Not Found');
    }
}
}

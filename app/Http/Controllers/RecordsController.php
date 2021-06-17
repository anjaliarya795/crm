<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Records;

class RecordsController extends Controller
{
    
    public function index(){
        return view('home',["data"=>Records::all()]);
    }
    
    public function insertData(){
        return view('insert');
    }

    public function store(Request $req){
        $req->validate([
            'name' => 'required',
            'contact' => 'required',
            'email' => 'required',
            'address' => 'required',
            'remarks' => 'required',
        ]);

        $records = new Records();

        $records->name = $req->name;
        $records->contact = $req->contact;
        $records->email = $req->email;
        $records->address = $req->address;
        $records->remarks = $req->remarks;
        $records->save();

        return redirect()->route('home');
    }

    public function delete($id){

        Records::find($id)->delete();
        return redirect()->route('home');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;

class CRUDController extends Controller
{
    public function ShowImage(){
        return view('pages.image');
    }

    public function index(){
        $data = ArtikelModel::get_all();
        return view('pages.artikel', compact('data'));
    }

    public function create(){
        return view ('pages.form');
    }
    
    public function ProsesCreate(Request $request){
        $data = $request->all();
        unset($data["_token"]);
        $data = ArtikelModel::save($data);
        return redirect ('/artikel');
    }

    public function detail($id){
        $data = ArtikelModel::detail($id);
        return view('pages.detail', compact('data'));
    }

    public function edit($id){
        $data = ArtikelModel::detail($id);
        return view('pages.edit', compact('data'));
    }

    public function ProsesEdit(Request $request){
        $data = $request->all();
        unset($data["_token"]);
        unset( $data["_method"]);
        ArtikelModel::update($data);
        return redirect ('/artikel');
    }

    public function ProsesDelete($id){
        $data = ArtikelModel::delete($id);
        return redirect ('/artikel');
    }

}

<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

Class ArtikelModel{

    public static function get_all(){
        $data = DB::table('artikel')->get();
        return $data;
    }

    public static function save($id){
        $data = DB::table('artikel')->insert($id);
        return $data;
    }
    public static function detail($id){
        $data = DB::table('artikel')->where('id',$id)->first();
        return $data;
    }

    public static function update($id){
        $data = DB::table('artikel')->where('id',$id)->update($id);
        return $data;
    }

    public static function delete($id){
        $data = DB::table('artikel')->where('id',$id)->delete();
        return $data;
    }

    


}


<?php

namespace App\Http\Controllers\BackEnd;
use Illuminate\Database\Eloquent\Model;



class Home extends BackEndController
{
    //
    public  function  index(){
        return view('back-end.home');
    }
}

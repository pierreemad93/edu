<?php

namespace App\Http\Controllers\BackEnd;


use App\Models\User;

class Users extends BackEndController
{
    //
    public function  index(){
       /*
        * User-> Model
        * paginate(10)-> Display 10 users at one page
        * compact function -> send the var form Controller to view
        *                  ->if var ==> $user then ==> compact(user)
        *                  -> without ($)
        * */
        $rows = User::paginate(10);
        return view('back-end.users.index' , compact('rows'));
    }
    public  function  create(){

        return view('back-end.users.create');
    }

    public  function  store(){

    }

    public  function  edit($id){
        return view('back-end.users.edit');
    }

    public  function  update($id){

    }

    public  function  delete($id){

    }
}

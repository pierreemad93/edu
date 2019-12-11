<?php

namespace App\Http\Controllers\BackEnd;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


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

    public  function  store(Request $request){
      User::create([
          'name' => $request->username ,
          'email' =>$request -> email ,
          'password' => Hash::make($request->password)
      ]);
      return redirect()->route('users.index');
    }

    public  function  edit($id){
        return view('back-end.users.edit');
    }

    public  function  update($id){

    }

    public  function  delete($id){

    }
}

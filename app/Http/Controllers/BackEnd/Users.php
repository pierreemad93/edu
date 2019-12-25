<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\BackEnd\Users\Store;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class Users extends BackEndController
{
    //
    public  function __construct(User $model)
    {
        parent::__construct($model);
    }
    
    public function store(Store $request)
    {
        $requestArray =$request->all();
        $requestArray['password'] = Hash::make($requestArray['password']); 
        User::create();
        return redirect()->route('users.index');
    }

   

    public function update($id, Request $request)
    {
        $row = User::FindOrFail($id);
        /*
           we make that $requestArray -> make all mustly requried
          updated by click at the button
         if change the password => changed will be send at database
        if  not changes sent username | email only
        */
        $requestArray = [
            'name' => $request->name,
            'email' => $request->email,
        ];
        if (request()->has('password') && request()->get('password') != '') {
            $requestArray = $requestArray + ['password' => Hash::make($request->password)];
        }

        //dd($requestArray);
        $row->update($requestArray);
        return redirect()->route('users.edit', ['id' => $row->id]);
    }


}

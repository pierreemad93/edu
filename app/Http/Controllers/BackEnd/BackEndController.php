<?php
 
namespace App\Http\Controllers\BackEnd;
/*
 * that's mean controller for dashboard
 * any Controller inside dashboard extends form BackEndController
 * */

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
class BackEndController extends Controller
{
    //
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        /*
         * User-> Model
         * paginate(10)-> Display 10 users at one page
         * compact function -> send the var form Controller to view
         *                  ->if var ==> $user then ==> compact(user)
         *                  -> without ($)
         * */
        $rows = $this->model->paginate(10);
        //dd($this->getClassNameFromModel());
        return view('back-end.'.$this->getClassNameFromModel().'.index', compact('rows'));
    }
    public function create()
    {

        return view('back-end.'.$this->getClassNameFromModel().'.create');
    }
    public function edit($id)
    {
        $row = $this->model->FindOrFail($id);
        return view('back-end.'.$this->getClassNameFromModel().'.edit', compact('row'));
    }
    public function destroy($id)
    {
        $this->model->FindOrFail($id)->delete();
        return redirect()->route($this->getClassNameFromModel().'.index');
    }
      protected function getClassNameFromModel()
    {
        return str_plural(strtolower(class_basename($this->model)));
    }

}

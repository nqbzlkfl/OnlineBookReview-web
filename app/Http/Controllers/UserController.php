<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    function userLogin(Request $req)
    {
        $data= $req->input();
        $req->session()->put('email',$data['email']);
        return redirect('index');
    }

    public function rolediff(Request $req){
        $users = User::all()->where('id', '>=' , Auth::User()->id);
        $req->session()->put('id',Auth::User()->id);
        $req->session()->put('role',Auth::User()->role);
        foreach ($users as $rowData) {
            if($rowData['role'] == '1') {
                return redirect('gotoAdminView');
            }
            else {
                return redirect('gotoUserView');
            }
        }
    }
}

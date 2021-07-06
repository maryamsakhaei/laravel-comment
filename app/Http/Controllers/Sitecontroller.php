<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\userslist;
use Validator;
use Redirect;
use Input;
use Hash;

class Sitecontroller extends Controller
{
    public function create(){       
        return View('register');
    }
      //===============login=========================
    public function store(Request $req){
        $validatedData = $req->validate([
            'mobile.required'=>'الزامیست',
            'email.required'=>'الزامیست',
            'password.required'=>'الزامیست',
            ]
        );
        $pass=$req->password."aaa";
        userslist::create(['name' => $req->name,'mobile' => $req->mobile, 'email' => $req->email,'password' => bcrypt($pass)]);
        $url=url('');
        return redirect($url);
    }
    //===============login=========================
    public function index(){
        return View('login');
    }
    //===============login-opration=========================
    public function checklogin(Request $req){
            $mobile=$req->mobile;
            $email=$req->email;
            $users = DB::table('userslist')->select('id','mobile', 'email')->where([
                ['mobile', '=',$mobile ],
                ['email', '=', $email],
                ])->get();//'get yani BEGIR'
                $chechredirect=strlen($users);
                if($chechredirect>=3){
                    $url=url('');
                    return redirect($url);
                    // echo "ok";
                }
                else{
                    $url=url('create');
                    return redirect($url);

                }
    }


}

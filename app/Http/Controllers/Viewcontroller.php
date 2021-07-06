<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use App\usercomment;
use App\product;
use DB;
use Validator;
use Redirect;
use Input;
use Hash;
class Viewcontroller extends Controller
{
    public function creates(){
        $usercomment = DB::select('select * from usercomment');
        return view ('ali')->with('color',$usercomment);
        return View('ali');

    }
    public function stores(Request $req){
        $validatedData = $req->validate([
            'name.required'=>'الزامیست',
            'email.required'=>'الزامیست',
            ]
        );
        usercomment::create(['name' => $req->name,'email' => $req->email,'color' => $req->color,'quality' => $req->quality,'price' => $req->price,'speed' => $req->speed,'material' => $req->material,'possetive_point' => $req->possetive_point,'negative_point' => $req->negative_point]);
        echo  $req->negative_point;
        $usercomment = DB::select('select * from usercomment');
        return view ('ali')->with('color',$usercomment);
    }
//     public function showcomment(){
//         $usercomment = DB::select('select * from usercomment');
//         return view ('ali')->with('color',$usercomment);
//    }
}


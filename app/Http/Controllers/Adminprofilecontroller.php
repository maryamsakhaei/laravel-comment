<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Session;
use App\adminlist;
use App\usercomment;
use App\product;
use App\userslist;
use DB;
use Validator;
use Redirect;
use Input;
use Hash;
class Adminprofilecontroller extends Controller
{
    public function admin(){
        $session=Session::has('admin');
        if($session){
            return view('profile');
        }
        else{   
            $url=url('adminlogin');
            return redirect($url);
        }
    }
    public function viewuser(){
        $model = DB::select('select * from userslist');
        return view ('viewuser')->with('name',$model);
   }
   public function viewproduct(){
    $product = DB::select('select * from product');
    return view ('viewproduct')->with('product_id',$product);
    }
    public function insert_product(Request $req)  {
        request()->validate([
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time().'.'.request()->photo->getClientOriginalExtension();
        request()->photo->move(public_path('/images/'), $imageName);  
        product::create(
            ['photo' => $imageName,
            'product_id' => $req->product_id,
            'name' => $req->name,
            'variable1' => $req->variable1,
            'variable2' => $req->variable2,
            'variable3' => $req->variable3,
            'variable4' => $req->variable4,
            'variable5' => $req->variable5,
            'negative_point' => $req->negative_point,
            'possetive_point' => $req->possetive_point
            ]
        );
         return back()
        ->with('success','You have successfully upload image.');

    }
}



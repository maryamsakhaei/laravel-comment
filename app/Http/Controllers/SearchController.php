<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use App\product;
use App\Usercomment;
use DB;
use Validator;
use Redirect;
use Hash;
class SearchController extends Controller
{
    public function search(){
        return View('search');
    }
//=================searchengin====================================//
public function searchengin(){
    $searchterm = Input::get ( 'name' );
    $model = product::where('name','LIKE','%'.$searchterm.'%')->get();
    if(count($model) > 0){
        return view('show')->withDetails($model)->withQuery ( $searchterm );
    }
    else{
        echo "No Details found. Try to search again !";
    }
}
//==================comment====================================//
    public function comment($id){
        $product=product::find($id);
        $usercomments=usercomment::query()->where('product_id','=',$id)->get();
        //dd( $usercomments);    
         return view('comment',['product'=>$product,'usercomments'=>$usercomments]);
     }
//======================= نظرات کاربرن و ثبت نظر======================//

// public function showcomment(Request $req){
//     $usercomment = DB::select('select * from usercomment');
//     dd($usercomment);
//     //return view ('comment')->with('color',$usercomment);
// }
public function creates(){
    $usercomment = DB::select('select * from usercomment');
    return view ('comment')->with('color',$usercomment);
    return View('comment');

}
    public function stores(Request $req){
        $validatedData = $req->validate([
            'name.required'=>'الزامیست',
            'email.required'=>'unique:usercomment,email,null,null,active,0',
 
            ]);
             // $rand= rand(000,999);
             usercomment::create(['name' => $req->name,'product_id' => $req->idproduct,'email' => $req->email,
             'variable1' => $req->variable1,'variable2' => $req->variable2,'variable3' => $req->variable3,
             'variable4' => $req->variable4,'variable5' => $req->variable5,'negative_point' => $req->negative_point,
             'possetive_point' => $req->possetive_point]);
             $usercomments=usercomment::query()->where('product_id','=',$req->idproduct)->get();
             $product=product::find($req->idproduct);
            //  return view('comment',['product'=>$product,'usercomments'=>$usercomments]);
            return view('search');
        }
}

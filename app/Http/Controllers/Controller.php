<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function add_product(Request $request){
//        return $request;
        $imageName = time() . '3.' . $request->file->getClientOriginalExtension();
        $request->file->move(public_path('image'), $imageName);

          $pr = new Products();
          $pr->title=$request->title;
          $pr->price=$request->price;
          $pr->description=$request->description;
          $pr->image='image/'.$imageName;
          $pr->save();

//          $pr->img=$request->img;
        return redirect()->back();


    }


    public function delete_product(Request $request){
//        return $request;
            Products::where('id',$request->id)->delete();
            return redirect()->back();

    }



}

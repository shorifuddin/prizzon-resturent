<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Menus;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class MenusController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $alldata=Menus::where('menus_status',1)->orderBy('menus_id','DESC')->where('menus_status',1)->get();
        return view('backend.menus.all',compact('alldata'));
    }

    public function add(){
        $categorydata=Category::all();
        return view('backend.menus.add',compact('categorydata'));
    }

    public function insert(Request $request){
        $validated = $request->validate([
            'menus_name' => 'required|max:255',
            'menus_details' => 'required|max:255',
            'menus_price' => 'required|max:255',

        ],[
            'menus_name.required'=>'Fill The Tile',
            'menus_details.required'=>'Fill The Details',

        ]);
        if ($request->hasFile('menus_image')) {
            $menus_image = $request->file('menus_image');
            $image_name = time() . '_' . rand(100000, 10000000) . '.' . $menus_image->getClientOriginalExtension();
            Image::make($menus_image)->resize(720, 720)->save('upload/website/menus/' . $image_name);

        }else{
            $image_name = '';
        }

        $insert=Menus::insert([
            'menus_name' => $request->menus_name,
            'menus_details' => $request->menus_details,
            'menus_price' => $request->menus_price,
            'menus_category' => $request->menus_category,
            'menus_image' => $image_name,
            'menus_slug' => Str::slug($request->menus_name),
            'menus_creator' => Auth::user()->id,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        if($insert){
            Session::flash('success','Value');
            return redirect()->route('menus_all');
        }else{
            Session::flash('error','Value');
            return redirect()->route('menus_add');
        }
    }

    public function view($id){
        $data=Menus::where('menus_id',$id)->where('menus_status',1)->firstOrFail();
        return view('backend.menus.view',compact('data'));
    }

    public function edit($id){
        $data=Menus::where('menus_id',$id)->where('menus_status',1)->firstOrFail();
         return view('backend.menus.edit',compact('data'));
    }

    public function update(Request $request, $id ){
         $request->validate([
            'menus_name' => 'required|max:255',
        ]);
        $updatemenus = Menus::where('menus_id', $id)->first();
        if ($request->hasFile('menus_image')) {
            if (File::exists('upload/website/menus/'.$updatemenus->menus_image)) {
                File::delete('upload/website/menus/'.$updatemenus->menus_image);
            }
            $menus_image = $request->file('menus_image');
            $image_name = time() . '_' . rand(100000, 10000000) . '.' . $menus_image->getClientOriginalExtension();
            Image::make($menus_image)->resize(720, 720)->save('upload/website/menus/' . $image_name);
        }else{
            $image_name = $updatemenus->menus_image;
        }

        $update = Menus::where('menus_id',$id)->where('menus_status',1)->update([
            'menus_name' => $request->menus_name,
            'menus_details' => $request->menus_details,
            'menus_price' => $request->menus_price,
            'menus_image' => $image_name,
            'menus_slug' => Str::slug($request->menus_name),
            'menus_editor' => Auth::user()->id,
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        if($update){
            Session::flash('success','Value');
            return redirect()->route('menus_all');
        }else{
            Session::flash('error','Value');
            return redirect('/dashboard/menus/edit/'.$id);
        }
    }

    public function softdelete($id){
        $softdelete=Menus::where('menus_status',1)->where('menus_id',$id)->update([
            'menus_status'=> 0,
        ]);
        if($softdelete){
            Session::flash('success','Value');
            return redirect()->route('menus_all');
        }else{
            Session::flash('error','Value');
            return redirect()->route('menus_all');
        }
    }
    public function restoredata(){
        $alldata=Menus::where('menus_status',0)->orderBy('menus_id','ASC')->get();
        return view('backend.menus.restore',compact('alldata'));
    }
    public function restore($id){
        $restore=Menus::where('menus_status',0)->where('menus_id',$id)->update([
            'menus_status'=> 1,
        ]);
        if($restore){
            Session::flash('success','Value');
            return redirect()->route('menus_all');
        }else{
            Session::flash('error','Value');
            return redirect()->route('menus_all');
        }
    }
    public function delete($id){
        $delete=Menus::where('menus_status',0)->where('menus_id',$id)->delete();

        if ($delete) {
            Session::flash('success','Value');
           return redirect()->route('menus_all');
        }else{
            Session::flash('error','Value');
            return redirect()->route('menus_all');

        }
    }
}

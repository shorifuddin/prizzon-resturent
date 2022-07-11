<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Speciality;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class specialController extends Controller{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $alldata=Speciality::where('special_status',1)->orderBy('special_id','DESC')->get();
        return view('backend.special.all',compact('alldata'));
    }

    public function add(){
        return view('backend.special.add');
    }

    public function insert(Request $request){
        $validated = $request->validate([
            'special_name' => 'required|max:255',
            'special_image' => 'required|max:255',

        ],[
            'special_name.required'=>'Fill The Spicial Item Name',
            'special_image.required'=>'Fill The Spicial Item Image',

        ]);
        if ($request->hasFile('special_image')) {
            $special_image = $request->file('special_image');
            $image_name = time() . '_' . rand(100000, 10000000) . '.' . $special_image->getClientOriginalExtension();
            Image::make($special_image)->resize(720, 720)->save('upload/website/special/' . $image_name);

        }else{
            $image_name = '';
        }

        $insert = Speciality::insert([
            'special_name' => $request->special_name,
            'special_image' => $image_name,
            'special_slug' => Str::slug($request->special_title),
            'special_creator' => Auth::user()->id,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        if($insert){
            Session::flash('success','Value');
            return redirect()->route('special_all');
        }else{
            Session::flash('error','Value');
            return redirect()->route('special_add');
        }
    }

    public function view($id){
        $data=Speciality::where('special_id',$id)->firstOrFail();
        return view('backend.special.view',compact('data'));
    }

    public function edit($id){
        $data=Speciality::where('special_id',$id)->firstOrFail();
         return view('backend.special.edit',compact('data'));
    }

    public function update(Request $request, $id ){
         $request->validate([
            'special_name' => 'required|max:255',
        ]);
        $updatespecial = Speciality::where('special_id', $id)->first();
        if ($request->hasFile('special_image')) {
            if (File::exists('upload/website/special/'.$updatespecial->special_image)) {
                File::delete('upload/website/special/'.$updatespecial->special_image);
            }
            $special_image = $request->file('special_image');
            $image_name = time() . '_' . rand(100000, 10000000) . '.' . $special_image->getClientOriginalExtension();
            Image::make($special_image)->resize(720, 720)->save('upload/website/special/' . $image_name);
        }else{
            $image_name = $updatespecial->special_image;
        }

        $update = Speciality::where('special_id',$id)->update([
            'special_name' => $request->special_name,
            'special_image' => $image_name,
            'special_slug' => Str::slug($request->special_title),
            'special_editor' => Auth::user()->id,
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        if($update){
            Session::flash('success','Value');
            return redirect()->route('special_all');
        }else{
            Session::flash('error','Value');
            return redirect('/dashboard/special/edit/'.$id);
        }
    }

    public function softdelete($id){
        $softdelete=Speciality::where('special_status',1)->where('special_id',$id)->update([
            'special_status'=> 0,
        ]);
        if($softdelete){
            Session::flash('success','Value');
            return redirect()->route('special_all');
        }else{
            Session::flash('error','Value');
            return redirect()->route('special_all');
        }
    }
    public function restoredata(){
        $alldata=Speciality::where('special_status',0)->orderBy('special_id','ASC')->get();
        return view('backend.special.restore',compact('alldata'));
    }
    public function restore($id){
        $restore=Speciality::where('special_status',0)->where('special_id',$id)->update([
            'special_status'=> 1,
        ]);
        if($restore){
            Session::flash('success','Value');
            return redirect()->route('special_all');
        }else{
            Session::flash('error','Value');
            return redirect()->route('special_all');
        }
    }
    public function delete($id){
        $delete=Speciality::where('special_status',0)->where('special_id',$id)->delete();

        if ($delete) {
            Session::flash('success','Value');
           return redirect()->route('special_all');
        }else{
            Session::flash('error','Value');
            return redirect()->route('special_all');

        }
    }
}

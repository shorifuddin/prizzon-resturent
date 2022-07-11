<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Chef;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class ChefController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $alldata=Chef::where('chef_status',1)->orderBy('chef_id','DESC')->get();
        return view('backend.chef.all',compact('alldata'));
    }

    public function add(){
        return view('backend.chef.add');
    }

    public function insert(Request $request){
        $validated = $request->validate([
            'chef_title' => 'required|max:255',
            'chef_details' => 'required|max:255',
            // 'chef_image'=>'required|max:255',

        ],[
            'chef_title.required'=>'Fill The Tile',
            'chef_details.required'=>'Fill The Details',
            // 'chef_image.required'=>'Upload The ICON',

        ]);
        if ($request->hasFile('chef_image')) {
            $chef_image = $request->file('chef_image');
            $image_name = time() . '_' . rand(100000, 10000000) . '.' . $chef_image->getClientOriginalExtension();
            Image::make($chef_image)->resize(720, 720)->save('upload/website/chef/' . $image_name);

        }else{
            $image_name = '';
        }

        $insert=Chef::insert([
            'chef_title' => $request->chef_title,
            'chef_details' => $request->chef_details,
            'chef_image' => $image_name,
            'chef_slug' => Str::slug($request->chef_title),
            'chef_creator' => Auth::user()->id,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        if($insert){
            Session::flash('success','Value');
            return redirect()->route('chef_all');
        }else{
            Session::flash('error','Value');
            return redirect()->route('chef_add');
        }
    }

    public function view($id){
        $data=Chef::where('chef_id',$id)->firstOrFail();
        return view('backend.chef.view',compact('data'));
    }

    public function edit($id){
        $data=Chef::where('chef_id',$id)->firstOrFail();
         return view('backend.chef.edit',compact('data'));
    }

    public function update(Request $request, $id ){
         $request->validate([
            'chef_title' => 'required|max:255',
        ]);
        $updatechef = Chef::where('chef_id', $id)->first();
        if ($request->hasFile('chef_image')) {
            if (File::exists('upload/website/chef/'.$updatechef->chef_image)) {
                File::delete('upload/website/chef/'.$updatechef->chef_image);
            }
            $chef_image = $request->file('chef_image');
            $image_name = time() . '_' . rand(100000, 10000000) . '.' . $chef_image->getClientOriginalExtension();
            Image::make($chef_image)->resize(720, 720)->save('upload/website/chef/' . $image_name);
        }else{
            $image_name = $updatechef->chef_image;
        }

        $update = Chef::where('chef_id',$id)->update([
            'chef_title' => $request->chef_title,
            'chef_details' => $request->chef_details,
            'chef_image' => $image_name,
            'chef_slug' => Str::slug($request->chef_title,rand(100,5000)),
            'chef_editor' => Auth::user()->id,
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        if($update){
            Session::flash('success','Value');
            return redirect()->route('chef_all');
        }else{
            Session::flash('error','Value');
            return redirect('/dashboard/chef/edit/'.$id);
        }
    }

    public function softdelete($id){
        $softdelete=Chef::where('chef_status',1)->where('chef_id',$id)->update([
            'chef_status'=> 0,
        ]);
        if($softdelete){
            Session::flash('success','Value');
            return redirect()->route('chef_all');
        }else{
            Session::flash('error','Value');
            return redirect()->route('chef_all');
        }
    }
    public function restoredata(){
        $alldata=Chef::where('chef_status',0)->orderBy('chef_id','ASC')->get();
        return view('backend.chef.restore',compact('alldata'));
    }
    public function restore($id){
        $restore=Chef::where('chef_status',0)->where('chef_id',$id)->update([
            'chef_status'=> 1,
        ]);
        if($restore){
            Session::flash('success','Value');
            return redirect()->route('chef_all');
        }else{
            Session::flash('error','Value');
            return redirect()->route('chef_all');
        }
    }
    public function delete($id){
        $delete=Chef::where('chef_status',0)->where('chef_id',$id)->delete();

        if ($delete) {
            Session::flash('success','Value');
           return redirect()->route('chef_all');
        }else{
            Session::flash('error','Value');
            return redirect()->route('chef_all');

        }
    }
}

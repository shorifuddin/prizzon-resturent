<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class FeatureController extends Controller{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $alldata=Feature::where('feature_status',1)->orderBy('feature_id','DESC')->get();
        return view('backend.feature.all',compact('alldata'));
    }

    public function add(){
        return view('backend.feature.add');
    }

    public function insert(Request $request){
        $validated = $request->validate([
            'feature_title' => 'required|max:255',
            'feature_details' => 'required|max:255',
            // 'feature_icon'=>'required|max:255',

        ],[
            'feature_title.required'=>'Fill The Tile',
            'feature_details.required'=>'Fill The Details',
            // 'feature_icon.required'=>'Upload The ICON',

        ]);
        if ($request->hasFile('feature_icon')) {
            $feature_icon = $request->file('feature_icon');
            $icon_name = time() . '_' . rand(100000, 10000000) . '.' . $feature_icon->getClientOriginalExtension();
            Image::make($feature_icon)->resize(720, 720)->save('upload/website/feature/' . $icon_name);

        }else{
            $icon_name = '';
        }

        $insert=Feature::insert([
            'feature_title' => $request->feature_title,
            'feature_details' => $request->feature_details,
            'feature_icon' => $icon_name,
            'feature_slug' => Str::slug($request->feature_title,rand(100,5000)),
            'feature_creator' => Auth::user()->id,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        if($insert){
            Session::flash('success','Value');
            return redirect()->route('feature_all');
        }else{
            Session::flash('error','Value');
            return redirect()->route('feature_add');
        }
    }

    public function view($id){
        $data=Feature::where('feature_id',$id)->firstOrFail();
        return view('backend.feature.view',compact('data'));
    }

    public function edit($id){
        $data=Feature::where('feature_id',$id)->firstOrFail();
         return view('backend.feature.edit',compact('data'));
    }

    public function update(Request $request, $id ){
         $request->validate([
            'feature_title' => 'required|max:255',
        ]);
        $updatefeature = Feature::where('feature_id', $id)->first();
        if ($request->hasFile('feature_icon')) {
            if (File::exists('upload/website/feature/'.$updatefeature->feature_icon)) {
                File::delete('upload/website/feature/'.$updatefeature->feature_icon);
            }
            $feature_icon = $request->file('feature_icon');
            $icon_name = time() . '_' . rand(100000, 10000000) . '.' . $feature_icon->getClientOriginalExtension();
            Image::make($feature_icon)->resize(720, 720)->save('upload/website/feature/' . $icon_name);
        }else{
            $icon_name = $updatefeature->feature_icon;
        }

        $update = Feature::where('feature_id',$id)->update([
            'feature_title' => $request->feature_title,
            'feature_details' => $request->feature_details,
            'feature_icon' => $icon_name,
            'feature_slug' => Str::slug($request->feature_title,rand(100,5000)),
            'feature_editor' => Auth::user()->id,
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        if($update){
            Session::flash('success','Value');
            return redirect()->route('feature_all');
        }else{
            Session::flash('error','Value');
            return redirect('/dashboard/feature/edit/'.$id);
        }
    }

    public function softdelete($id){
        $softdelete=Feature::where('feature_status',1)->where('feature_id',$id)->update([
            'feature_status'=> 0,
        ]);
        if($softdelete){
            Session::flash('success','Value');
            return redirect()->route('feature_all');
        }else{
            Session::flash('error','Value');
            return redirect()->route('feature_all');
        }
    }
    public function restoredata(){
        $alldata=Feature::where('feature_status',0)->orderBy('feature_id','ASC')->get();
        return view('backend.feature.restore',compact('alldata'));
    }
    public function restore($id){
        $restore=Feature::where('feature_status',0)->where('feature_id',$id)->update([
            'feature_status'=> 1,
        ]);
        if($restore){
            Session::flash('success','Value');
            return redirect()->route('feature_all');
        }else{
            Session::flash('error','Value');
            return redirect()->route('feature_all');
        }
    }
    public function delete($id){
        $delete=Feature::where('feature_status',0)->where('feature_id',$id)->delete();

        if ($delete) {
            Session::flash('success','Value');
           return redirect()->route('feature_all');
        }else{
            Session::flash('error','Value');
            return redirect()->route('feature_all');

        }
    }
}

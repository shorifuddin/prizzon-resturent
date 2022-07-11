<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
class EventController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $alldata=event::where('event_status',1)->orderBy('event_id','DESC')->get();
        return view('backend.event.all',compact('alldata'));
    }

    public function add(){
        return view('backend.event.add');
    }

    public function insert(Request $request){
        $validated = $request->validate([
            'event_title' => 'required|max:255',
            'event_time' => 'required|max:255',
            // 'event_image'=>'required|max:255',

        ],[
            'event_title.required'=>'Fill The Tile',
            'event_time.required'=>'Fill The time',
            // 'event_image.required'=>'Upload The ICON',

        ]);
        if ($request->hasFile('event_image')) {
            $event_image = $request->file('event_image');
            $image_name = time() . '_' . rand(100000, 10000000) . '.' . $event_image->getClientOriginalExtension();
            Image::make($event_image)->resize(720, 720)->save('upload/website/event/' . $image_name);

        }else{
            $image_name = '';
        }

        $insert=event::insert([
            'event_title' => $request->event_title,
            'event_time' => $request->event_time,
            'event_image' => $image_name,
            'event_slug' => Str::slug($request->event_title),
            'event_creator' => Auth::user()->id,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        if($insert){
            Session::flash('success','Value');
            return redirect()->route('event_all');
        }else{
            Session::flash('error','Value');
            return redirect()->route('event_add');
        }
    }

    public function view($id){
        $data=event::where('event_id',$id)->firstOrFail();
        return view('backend.event.view',compact('data'));
    }

    public function edit($id){
        $data=event::where('event_id',$id)->firstOrFail();
         return view('backend.event.edit',compact('data'));
    }

    public function update(Request $request, $id ){
         $request->validate([
            'event_title' => 'required|max:255',
        ]);
        $updateevent = event::where('event_id', $id)->first();
        if ($request->hasFile('event_image')) {
            if (File::exists('upload/website/event/'.$updateevent->event_image)) {
                File::delete('upload/website/event/'.$updateevent->event_image);
            }
            $event_image = $request->file('event_image');
            $image_name = time() . '_' . rand(100000, 10000000) . '.' . $event_image->getClientOriginalExtension();
            Image::make($event_image)->resize(720, 720)->save('upload/website/event/' . $image_name);
        }else{
            $image_name = $updateevent->event_image;
        }

        $update = event::where('event_id',$id)->update([
            'event_title' => $request->event_title,
            'event_time' => $request->event_time,
            'event_image' => $image_name,
            'event_slug' => Str::slug($request->event_title,rand(100,5000)),
            'event_editor' => Auth::user()->id,
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        if($update){
            Session::flash('success','Value');
            return redirect()->route('event_all');
        }else{
            Session::flash('error','Value');
            return redirect('/dashboard/event/edit/'.$id);
        }
    }

    public function softdelete($id){
        $softdelete=event::where('event_status',1)->where('event_id',$id)->update([
            'event_status'=> 0,
        ]);
        if($softdelete){
            Session::flash('success','Value');
            return redirect()->route('event_all');
        }else{
            Session::flash('error','Value');
            return redirect()->route('event_all');
        }
    }
    public function restoredata(){
        $alldata=event::where('event_status',0)->orderBy('event_id','ASC')->get();
        return view('backend.event.restore',compact('alldata'));
    }
    public function restore($id){
        $restore=event::where('event_status',0)->where('event_id',$id)->update([
            'event_status'=> 1,
        ]);
        if($restore){
            Session::flash('success','Value');
            return redirect()->route('event_all');
        }else{
            Session::flash('error','Value');
            return redirect()->route('event_all');
        }
    }
    public function delete($id){
        $delete=event::where('event_status',0)->where('event_id',$id)->delete();

        if ($delete) {
            Session::flash('success','Value');
           return redirect()->route('event_all');
        }else{
            Session::flash('error','Value');
            return redirect()->route('event_all');

        }
    }
}

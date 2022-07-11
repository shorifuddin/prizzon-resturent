<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class ReservationController extends Controller
{
    public function index(){
        $alldata=Reservation::where('rtable_status',0)->orderBy('rtable_id','DESC')->get();
        return view('backend.rtable.request',compact('alldata'));
    }

    public function approved(){
        $alldata=Reservation::where('rtable_status',1)->orderBy('rtable_id','DESC')->get();
        return view('backend.rtable.approv',compact('alldata'));
    }

    public function insert(Request $request){

        $insert=Reservation::insert([
            'rtable_time' => $request->rtable_time,
            'rtable_member' => $request->rtable_member,
            'rtable_date' => $request->rtable_date,
            'rtable_phone' => $request->rtable_phone,
            'rtable_name' => $request->rtable_name,
            'rtable_email' => $request->rtable_email,
            'rtable_sms' => $request->rtable_sms,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        if($insert){
            Session::flash('success','Value');
            return redirect()->back();
        }else{
            Session::flash('error','Value');
            return redirect()->route('rtable_add');
        }
    }

    public function view($id){
        $data=Reservation::where('rtable_id',$id)->firstOrFail();
        return view('backend.rtable.view',compact('data'));
    }

    public function edit($id){
        $data=Reservation::where('rtable_status',0)->where('rtable_id',$id)->firstOrFail();
         return view('backend.rtable.edit',compact('data'));
    }

    public function update(Request $request, $id ){

        $updatertable = Reservation::where('rtable_id', $id)->first();

        $update = Reservation::where('rtable_id',$id)->update([
            'rtable_status' => $request->rtable_status,
            'rtable_editor' => Auth::user()->id,
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        if($update){
            Session::flash('success','Value');
            return redirect()->back();
        }else{
            Session::flash('error','Value');
            return redirect('/dashboard/rtable/edit/'.$id);
        }
    }

    public function softdelete($id){
        $softdelete=Reservation::where('rtable_status',1)->where('rtable_id',$id)->update([
            'rtable_status'=> 0,
        ]);
        if($softdelete){
            Session::flash('success','Value');
            return redirect()->route('rtable_approved');
        }else{
            Session::flash('error','Value');
            return redirect()->route('rtable_approved');
        }
    }
    public function restoredata(){
        $alldata=Reservation::where('rtable_status',0)->orderBy('rtable_id','ASC')->get();
        return view('backend.rtable.restore',compact('alldata'));
    }
    public function restore($id){
        $restore=Reservation::where('rtable_status',0)->where('rtable_id',$id)->update([
            'rtable_status'=> 1,
        ]);
        if($restore){
            Session::flash('success','Value');
            return redirect()->route('rtable_approved');
        }else{
            Session::flash('error','Value');
            return redirect()->route('rtable_approved');
        }
    }
    public function delete($id){
        $delete=Reservation::where('rtable_status',0)->where('rtable_id',$id)->delete();

        if ($delete) {
            Session::flash('success','Value');
           return redirect()->route('rtable_approved');
        }else{
            Session::flash('error','Value');
            return redirect()->route('rtable_approved');

        }
    }
}

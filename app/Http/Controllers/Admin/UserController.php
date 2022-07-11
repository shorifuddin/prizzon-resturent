<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;


class UserController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }

    public function all(){
        $alldata=User::where('user_status',1)->orderBy('id','DESC')->get();
        return view('backend.user.alluser',compact('alldata'));
    }

    public function add(){
        $roledata=Role::all();
        return view('backend.user.adduser',compact('roledata'));
    }

    public function insert(Request $request){
        $validated = $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required|max:255',
            'email'=>'required|unique:users',
            'password' => 'required|confirmed|required_with:password_confirmation|same:password_confirmation',
            // 'password_confirmation' => 'required|confirmed',
            'role' => 'required|max:255',
            'image' => 'required|max:255',
        ],[
            'name.required'=>'Fill The Name',
            'phone.required'=>'Fill The Phone',
            'email.required'=>'Fill The Email',
            'email.unique'=> 'This Email already used',
            'password.required'=>'Fill The password',
            'password.confirmed'=>'Please Match Confirme Password',
            // 'password_confirmation.confirmed' =>'Could Not Match Password',
            'role.required'=>'Fill The Role',
            'image.required'=>'Fill The image',
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '_' . rand(100000, 10000000) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(720, 720)->save('upload/user/' . $image_name);
        }else{
            $image_name = '';
        }

        $insert=User::insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'password'=>Hash::make($request->password),
            'role'=>$request->role,
            'image'=>$image_name,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);
        // if ($request->hasFile('image')) {
        //     $pic=$request->file('image');
        //     $imgname='user' . time().'-'.'.'. $pic->getClientOriginalExtension();
        //     Image::make($pic)->save('upload/user/'.$imgname);

        //     user::where('id', $insert)->update([
        //         'image'=>$imgname,
        //     ]);
        //  }

        if($insert){
            Session::flash('success','Value');
            return redirect()->route('alluser');
        }else{
            Session::flash('error','Value');
            return redirect('/dashboard/user/add');
        }
    }

    public function view($id){
        $data=User::where('id',$id)->firstOrFail();
        return view('backend.user.viewuser',compact('data'));
    }

    public function edit($id){
       $data=User::where('id',$id)->firstOrFail();
        return view('backend.user.edituser',compact('data'));
    }

    public function update(Request $request, $id ){
        $validated = $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required|max:255',
            'password' => 'required|confirmed|required_with:password|same:password',
            // 'image' => 'required|max:255',
            // 'password_confirmation' => 'required|confrimed|required_with:password|same:password',
            // 'email'=>'required|unique:users',

        ],[
            'name.required'=>'Fill The Name',
            'phone.required'=>'Fill The Phone Numbere',
            'password.required'=>'Fill The password',
            'password.confirmed'=>'Please Match Confirme Password',
            // 'image.required'=>'Upload Your Image',
            // 'email.required'=>'Fill The Email',
            // 'email.unique'=> 'This Email already used'
        ]);
        $updateuser = User::where('id', $id)->first();
        if ($request->hasFile('image')) {
            if (File::exists('upload/user/'.$updateuser->image)) {
                File::delete('upload/user/'.$updateuser->image);
            }
            $image = $request->file('image');
            $image_name = time() . '_' . rand(100000, 10000000) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(720, 720)->save('upload/user/' . $image_name);
        }else{
            $image_name = $updateuser->image;
        }

        $update=User::where('id',$id)->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'image' => $image_name,
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        // if ($request->hasFile('image')) {
        //    $pic=$request->file('image');
        //    $imagename='user'. time() . '.' .$pic->getClientOriginalExtension();
        //    Image::make($pic)->save('upload/user/'.$imagename);

        //    User::where('id',$id)->update([
        //        'image'=>$imagename,
        //    ]);
        // }
        if($update){
            Session::flash('success','Value');
            return redirect()->route('alluser');
        }else{
            Session::flash('error','Value');
            return redirect('/dashboard/user/edit/'.$id);
        }
    }
    public function softdelete($id){
        $softdelete=user::where('user_status',1)->where('id',$id)->update([
            'user_status'=> 0,
        ]);
        if($softdelete){
            Session::flash('success','Value');
            return redirect('/dashboard/user/all');
        }else{
            Session::flash('error','Value');
            return redirect('/dashboard/user/add');
        }
    }
    public function restoredata(){
        $alldata=User::where('user_status',0)->orderBy('id','ASC')->get();
        return view('backend.user.restore',compact('alldata'));
    }
    public function restore($id){
        $restore=user::where('user_status',0)->where('id',$id)->update([
            'user_status'=> 1,
        ]);
        if($restore){
            Session::flash('success','Value');
            return redirect('/dashboard/user/all');
        }else{
            Session::flash('error','Value');
            return redirect('/dashboard/user/add');
        }
    }
    public function delete($id){
        $delete=user::where('user_status',0)->where('id',$id)->delete();

        if ($delete) {
            Session::flash('success','Value');
           return redirect('dashboard/user/all');
        }else{
            Session::flash('error','Value');
            return redirect('dashboard/user/all');

        }
    }

    public function tb(){
        return view('backend.user.tb');
    }
}

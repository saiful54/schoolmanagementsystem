<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SaifModel;
use Auth;
use App\Client;
use App\User;
use Image;
use DB;

class linkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getedit($id){
        $editdata= Client::findOrFail($id);
        return view('admin.pages.editclient', compact('editdata'));
    }

    public function dashboard()
    {
        if(Auth::check()){
            return view('admin.pages.dashboard');
        }else{
            return redirect('login');
        }
    }

    public function adduser()
    {
        if(Auth::check()){
            $alldata=Client::paginate(5000);
            return view('admin.pages.adduser', compact('alldata')); 
        }else{
            return redirect('login');
        }
    }

    public function user_list()
    { 
        if (Auth::check()) {
            $alldata=SaifModel::paginate(5000);

            return view('admin.pages.user_list', compact('alldata'));
        }else{
            return redirect('login');
        }
        
    }

    public function profile()
    {
        if(Auth::check()){
            return view('admin.pages.profile', array('user' => Auth::user()));
        }else{
            return redirect('login');
        }
    }

    public function update_avatar(Request $request)
    {
        if ($request->hasFile('avatar')) {
            $avatar= $request->file('avatar');
            $filename= time(). '.' .$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save(public_path('img/avatar/' . $filename));

            $user= Auth::user();
            $user->avatar= $filename;
            $user->save();      
        }
        
        return view('admin.pages.profile', array('user' => Auth::user()));
        
    }

    public function fileshow()
    {
        if(Auth::check()){
            return view('admin.pages.addclient');
        }else{
            return redirect('login');
        }
    }

    public function store(Request $request)
    {
        if(Auth::check()){
            $input= $request->all();
            SaifModel::create($input);
            return redirect('user_list');
        }else{
            return redirect('login');
        }
        
    }

    public function logout()
    {
        if(Auth::check()){
            return view('auth.login');
        }else{
            return redirect('login');
        }
    }

    public function performLogout(Request $request) 
    { 
        Auth::logout(); 
        return redirect('logout'); 
    }

    public function edit($id)
    {
        if(Auth::check()){
            $alldata=SaifModel::findOrFail($id);
            $users = DB::table('users');
            return view('admin.pages.editclient', array('alldata'=>$alldata));    
        }else{
            return redirect('login');
        }


    }

    public function update(Request $request, $id)
    {
        if(Auth::check()){
            $input= $request->all();
            $alldata=SaifModel::findOrFail($id);
            $alldata->update($input);
            return redirect('user_list');
        }else{
            return redirect('login');
        }
    }

    public function destroy($id)
    {
        $data= SaifModel::findOrFail($id);
        $data->delete();
        return redirect('user_list');
    }

    
}

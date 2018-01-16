<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SaifModel;
use App\Client;
use App\district;
use DB;
use Auth;
use Image;
use File;
use Storage;
class SaifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "hi";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('boot.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();
        SaifModel::create($input);
        return redirect('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        if (Auth::check()) {
            $alldata=SaifModel::paginate(5000);

            return view('admin.pages.index', compact('alldata'));
        }else{
            return redirect('login');
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //echo "hi";
        $alldata=Client::findOrFail($id);
        $district = DB::table('districts')->pluck('district');
        return view('admin.pages.editclient', array('alldata'=>$alldata, 'district'=>$district));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->hasFile('photo')) {

            

            $name = $request->input('name');
            $fname = $request->input('fname');
            $mname = $request->input('mname');
            $email = $request->input('email');
            $address = $request->input('address');
            $phone = $request->input('phone');
            $education = $request->input('education');
            $gender = $request->input('gender');
            $district = $request->input('district');

            $filename= $request->photo->getClientOriginalName();
            $request->photo->storeAs('public', $filename);

            $obj= new Client;
            $obj->name= $name;
            $obj->fname= $fname;
            $obj->mname= $mname;
            $obj->email= $email;
            $obj->address= $address;
            $obj->phone= $phone;
            $obj->education= $education;
            $obj->gender= $gender;
            $obj->district= $district;
            $oldFilename= $obj->photo;

            $obj->photo= $filename;
            
             //unlink($one);
             //var_dump($one);die();
            $obj->save();   
       }

        $input= $request->all();
        $data= Client::findOrFail($id);
        $data->update($input);
        return redirect('addclient');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data= Client::findOrFail($id);
        $data->delete();
        return redirect('addclient');
    }
}

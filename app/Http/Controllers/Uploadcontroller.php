<?php

namespace App\Http\Controllers;

use App\Upload;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Uploadcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function upload()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function show(Upload $upload)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function edit(Upload $upload)
    {
        if(Auth::users()){
            $users = User::find(Auth::users()->id);

            if($users) {
            return view('info')->withUser($users);
            } else {
                return redirect()->back();
            }
        }else{
                return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Upload $upload){
        $users = User::find(Auth::user()->id);
        if($request->hasFile('anh')){
            $fileimg = $request->anh->getClientOriginalName('anh');  
            $request->anh->move('images',$fileimg);
        if ($users) {
            $users->name = $request['name'];
            $users->sdt = $request['sdt'];
            $users->email = $request['email'];
            $users->diachi = $request['diachi'];
            $users->gioitinh = $request['gioitinh'];
            $users->anh = $fileimg;
            $users->save();
    
            return redirect()->back()->with('success','Cập nhật thông tin thành công');
        }} else {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function destroy(Upload $upload)
    {
        //
    }
}

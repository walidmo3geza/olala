<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminControlling');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->adminCreation)
            $newAdminCreation=1;
        else
            $newAdminCreation=0;
        $form_data = array(
            'name'             =>   $request->name,
            'email'            =>   $request->email,
            'password'         =>   Hash::make($request['pass']),
            'adminCreation'    =>   $newAdminCreation,
            'api_token'        =>   Str::random(60)
        );

        User::create($form_data);

        return redirect('admin')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = User::findOrFail($id);
        return view('view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::findOrFail($id);
        return view('edit', compact('data'));
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
        if ($request->adminCreation)
            $newAdminCreation=1;
        else
            $newAdminCreation=0;
        $form_data = array(
            'name'              =>   $request->name,
            'email'             =>   $request->email,
            'password'          =>   $request->password,
            'adminCreation'     =>   $newAdminCreation
        );

        User::whereId($id)->update($form_data);

        return redirect('admin')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = User::findOrFail($id);
        $data->delete();
        return redirect('admin')->with('success','Data Deleted Successfly!');
    }
}

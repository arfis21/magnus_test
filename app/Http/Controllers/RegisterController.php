<?php

namespace App\Http\Controllers;

use App\Models\register;
use Illuminate\Http\Request;
use Alert;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $register = register::all();
        // dd($register);

        return view("masters",compact('register'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        // dd($request->all());
        $register = new register;
        $register->name = ucfirst($request->nama);
        $register->gender = $request->gender;

        // $register->hobi = $request->hobi;

        if ($request->hobi != null) {
            $regs = implode(',', $request->hobi);
            $register->hobi = $regs;
        }else {
            Alert::error('Error', 'Hobi is required');
            return redirect()->back();
        }

        $register->email = $request->email;
        $register->telp = $request->telp;
        $register->username = $request->username;
        $register->password = $request->password;
        $save = $register->save();

        if ($save) {
            Alert::success('Congrats', 'You\'ve Successfully Registered');
            return redirect()->back();

        }else {
            Alert::error('Error', 'You\'ve Failed Registered');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\register  $register
     * @return \Illuminate\Http\Response
     */
    public function show(register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\register  $register
     * @return \Illuminate\Http\Response
     */
    public function edit(register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\register  $register
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\register  $register
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $register = register::destroy($id);
        Alert::success('Congrats', 'You\'ve Successfully deleted');
        return redirect()->back();

    }
}

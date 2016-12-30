<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeToanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getMau1()
    {
        return view('user.ketoan.mau1');
    }
    public function getMau2()
    {
        return view('user.ketoan.mau2');
    }
    public function getMau3()
    {
        return view('user.ketoan.mau3');
    }
    public function getMau4()
    {
        return view('user.ketoan.mau4');
    }
    public function getMau5()
    {
        return view('user.ketoan.mau5');
    }
    public function getMau6()
    {
        return view('user.ketoan.mau6');
    }
    public function getMau7()
    {
        return view('user.ketoan.mau7');
    }
     public function getMau7tt()
    {
        return view('user.ketoan.mau7tt');
    }


    
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

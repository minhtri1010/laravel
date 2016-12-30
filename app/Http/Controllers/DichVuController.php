<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DichVuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getHanhChinh()
    {
        return view('user.thongtin.dichvuhanhchinh');
    }
    public function getHanhChinhTiepTheo()
    {
        return view('user.thongtin.dichvuhanhchinhtieptheo');
    }
    public function getDichVuKyThuat()
    {
        return view('user.thongtin.dichvukythuat');
    }
    public function getDichVuKeToan()
    {
        return view('user.thongtin.dichvuketoan');
    }
    public function getThongTin()
    {
        return view('user.thongtin.thongtincdvd');
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
    public function index()
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

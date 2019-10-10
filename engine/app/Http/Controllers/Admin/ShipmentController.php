<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mapper;

class ShipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dikirim = $this->get('orders');
        return view("admin.pengiriman.sedangdikirim", ['data' => $dikirim]);
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

    public function tracking($id)
    {
        $dikirim = $this->get("orders/$id");
        $d["coord"] = "-6.9214".","."107.6088".",".url('assets/driver.png');
        $d["from"] = $dikirim->from->coordinates[0].",".$dikirim->from->coordinates[1].",".url('assets/from.png');
        $d["to"] = $dikirim->to->coordinates[0].",".$dikirim->to->coordinates[1].",".url('assets/to.png');
        return view("admin.pengiriman.maps", $d);
    }

    /*public function mapper($lat, $long, $lat2, $long2)
    {
        Mapper::map(-6.9665945, 107.5378117);
        return view("admin.pengiriman.maps");
    }*/
}

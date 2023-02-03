<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use App\Models\Category;
use App\Models\Troubleshoot;

class TroubleshootController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $troubleshoots = Troubleshoot::All();
        $devices = Device::All();
        $categories = Category::All();
        return view('troubleshoot.index')->with('categories',$categories)->with('devices',$devices)->with('troubleshoots',$troubleshoots);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $devices = Device::All();
        $categories = Category::All();

        return view('troubleshoot.create')->with('categories',$categories)->with('devices',$devices);
   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->All();
        Troubleshoot::create($input);
        return redirect('troubleshoot')->with('flash_message','Troublesoot Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $troubleshoots= Troubleshoot::All();
        return view('troubleshoot.show')->with('troubleshoots',$troubleshoots);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $devices = Device::All();
        $categories = Category::All();
        $troubleshoots = Troubleshoot::find($id);
        return view('troubleshoot.edit')->with('troubleshoots',$troubleshoots)->with('devices',$devices)->with('categories',$categories);
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
        $troubleshoots = Troubleshoot::find($id);
        $input= $request->All();
        $troubleshoots->update($input);
        return redirect('troubleshoot')->with('flash_message','Troubleshoot Added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Troubleshoot::destroy($id);
        return redirect('troubleshoot')->with('flash_message','Troubleshoot Deleted');
    }
}
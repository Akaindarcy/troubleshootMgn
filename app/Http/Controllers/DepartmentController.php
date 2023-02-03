<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\User;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments= Department::All();
        return view('department.index')->with('departments',$departments);
    }

    // public function getUser()
    // {
    //     $users= User::All();
    //     return view('department.index')->with('users',$users);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users= User::All();
        return view('department.create')->with('users',$users);
  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $departments = new Department;
        $departments->name_department= $request->name_department;
        $departments->chief_id= $request->chief_id;
        $departments->save();

        return redirect('department')->with('flash_message','Departement Added');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $departments = Department::find($id);
        return view('department.show')->with('departments',$departments);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departments=Department::find($id);
        $users=User::All();
        return view('department.edit')->with('departments',$departments)->with('users',$users);

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
        $departments=Department::find($id);
        $input = $request->All();
        $departments->update($input);

        return redirect('department')->with('flash_message','Department Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Department::destroy($id);
        return redirect('department')->with('flash_message','Department deleted');     
    }
}

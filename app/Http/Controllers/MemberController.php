<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;


class MemberController extends Controller
{
   function index(){
    // $members = \App\Models\Member::all();

    // return view('index', [
    //     'member' => $members
    // ]);
    return view('index')->with('members', Member::all());
   }
   
   function welcome(){
    return view('welcome');
   }

   function create(){
    return view('create');
   }

    function store(Request $request)
   {
       $members = new Member;

       $members->name                   = $request->name;
       $members->email                  = $request->email;
       $members->membership_expiration  = $request->membership_expiration;

       $members->save();

       return redirect()->route('create')->with('success', 'New member added successfully!');
   }

   public function edit($id)
    {
        $members = Member::find($id);

        return view('edit')->with('members', $members);
    }

    public function update(Request $request)
    {
        $members = Member::find($request->id);

        $members->name                      = $request->name;
        $members->email                     = $request->email;
        $members->membership_type           = $request->membership_type;
        $members->membership_expiration     = $request->membership_expiration;

        $members->save();

        return redirect()->route('index')->with('success', 'Member updated successfully!');
    }
  

public function destroy($id)
    {
        $members = Member::find($id);
        $members->delete();

        return redirect()->route('index')->with('success', 'Member deleted successfully!');
    }

 


}

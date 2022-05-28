<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view("users.login");
    }
    public function loginauth(Request $request)
    {
        $user=User::where('id','=',$request->post('usercode'))->where('password','=',$request->post('pwd'))->first();
        if($user!==null)
        {
            
            return redirect()->route('user.index');
        }
    }
    public function index()
    {
        $users=User::get();
        return view("users.index",compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("users.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=new User();
        $user->name=$request->post('name');
        $user->phone=$request->post('phone');
        $user->email=$request->post('email');
        $user->password=$request->post('password');
        $user->plate=$request->post('plate');
        $user->tcno=$request->post('tcno');
        $user->address=$request->post('address');
        $user->save();

        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=User::where('id','=',$id)->first();
        return view("users.show",compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $user=User::where('id','=',$id)->first();
        return view("users.edit",compact('user'));
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
        $user=User::find($id);
        $user->name=$request->post('name');
        $user->phone=$request->post('phone');
        $user->email=$request->post('email');
        $user->password=$request->post('password');
        $user->plate=$request->post('plate');
        $user->tcno=$request->post('tcno');
        $user->address=$request->post('address');
        $user->save();
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      
    }
}

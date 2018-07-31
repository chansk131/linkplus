<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    //
          /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $users = \App\User::all();
    // return $users;
    return view('dev.user', compact('users'));
  }

  public function create()
  {
    return view('dev.userCreate');
  }

  public function store()
  {
    $this->validate(request(), [
      'name' => 'required',
      'email' => 'required|email',
      'password' => 'required|confirmed'
    ]);
    
    User::create(request(['name', 'email', 'password']));

    return redirect('/dev/user');
  }
}

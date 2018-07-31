<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminItemController extends Controller
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
    $items = \App\Item::all();
    // return $users;
    return view('dev.item', compact('items'));
  }

  public function create()
  {
    return view('dev.itemCreate');
  }
}

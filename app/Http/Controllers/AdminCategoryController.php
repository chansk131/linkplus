<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class AdminCategoryController extends Controller
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
    $categories = \App\Category::all();
    // return $categories;
    return view('dev.category', compact('categories'));
  }
  
  public function create()
  {
    return view('dev.categoryCreate');
  }

  public function store()
  {
    $this->validate(request(), [
      'category' => 'required'
    ]);
    
    Category::create([
      'name' => request('category')
    ]);

    return redirect('/dev/category');
  }
}

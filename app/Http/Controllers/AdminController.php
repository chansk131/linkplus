<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Filesystem\Filesystem;

class AdminController extends Controller
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
    return view('dev.table');
  }

  public function upload()
  {
    return view('dev.upload');
  }

  public function create(Request $request)
  {
    $image = $request->file('image');
    $imageFileName = time() . '.' . $image->getClientOriginalExtension();

    $s3 = \Storage::disk('s3');
    $filePath = '/support-tickets/' . $imageFileName;
    // $s3->put($filePath, file_get_contents($image), 'public');
  }
}

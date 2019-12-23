<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Kegiatan;

class BlogController extends Controller
{
    public function index(Posts  $posts){
      $data = $posts->orderBy('created_at','desc')->get();
      return view('desa', compact('data'));
    }


    public function isi_blog($slug){
      $data = Posts::where('slug', $slug)->get();
      return view('blog.artikel', compact('data'));
    }

}

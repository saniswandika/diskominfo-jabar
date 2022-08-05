<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class GalleryPageController extends Controller
{
    public function index()
    {

        // $posts = post::first();
   
        // $categories = Category::all();
        $berita = post::where('posts.category_id','4')->orderBy('created_at', 'DESC')->paginate(8);
        $berita->setCollection($berita->sortByDesc('created_at'));
        
        
        // $count = DB::table('posts')->count();
        return view('halaman_depan.GalleryPage',compact('berita'));
    }
}

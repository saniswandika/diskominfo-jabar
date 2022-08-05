<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\models\Post;
use App\models\User;
use Illuminate\Support\Facades\DB;


class PostPageController extends Controller
{
    public function index()
    {
    
        return view('halaman_depan.PostPage');
    }
    public function show(Request $request, $id)
    {
        post::find($id)->increment('views');
        $syarat = post::find($id);
        $user = User::where('name','basit') -> first();
        $posts = post::orderBy('created_at', 'DESC')->paginate(2);
        $posts->setCollection($posts->sortByDesc('created_at'));
    
        $berita = post::orderBy('created_at', 'DESC')->paginate(10);
        $berita->setCollection($berita->sortByDesc('created_at'));
        return view('halaman_depan.PostPage',compact('posts','user','syarat','berita'));
    }
}

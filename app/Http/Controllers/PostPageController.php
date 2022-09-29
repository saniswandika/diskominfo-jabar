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
        $posts = post::orderBy('updated_at', 'DESC')->paginate(2);
        $posts->setCollection($posts->sortByDesc('created_at'));
    
        $berita = post::orderBy('created_at', 'DESC')->paginate(2);
        $berita->setCollection($berita->sortByDesc('created_at'));

        
        return view('halaman_depan.PostPage',compact('posts','user','syarat','berita'));
    }
    // public function getname(Request $request, $id)
    // {

    //     $pagination  = 5;
    //     $articles    = post::when($request->keyword, function ($query) use ($request) {
    //         $query
    //         ->where('title', 'like', "%{$request->keyword}%");
    //     })->orderBy('created_at', 'desc')->paginate($pagination);
    
    //     $articles->appends($request->only('keyword'));
    
    //     return view('admin.index', [
    //         'title'    => 'Articles',
    //         'articles' => $articles,
    //     ])->with('i', ($request->input('page', 1) - 1) * $pagination);
    // }
}

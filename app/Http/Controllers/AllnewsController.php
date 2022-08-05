<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\models\Post;
use App\models\User;
use Illuminate\Support\Facades\DB;

class AllnewsController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $count = DB::table('posts')->where('posts.category_id','2')->count();
        $posts = post::select('posts.*','categories.name as nama_categori')->join('categories','categories.id','=' , 'posts.category_id')->where('posts.category_id','2')->get();
        
        $publikasi = post::where('posts.category_id','4')->orderBy('created_at', 'DESC')->paginate(8);
        $publikasi->setCollection($publikasi->sortByDesc('created_at'));

        $layanan = post::where('posts.category_id','2')->orderBy('created_at', 'DESC')->paginate(8);
        $layanan->setCollection($layanan->sortByDesc('created_at'));

        $berita = post::where('posts.category_id','3')->orderBy('created_at', 'DESC')->paginate(6);
        $berita->setCollection($berita->sortByDesc('created_at'));

        $publikasi = post::where('posts.category_id','4')->orderBy('created_at', 'DESC')->paginate(8);
        $publikasi->setCollection($publikasi->sortByDesc('created_at'));

        $program = post::where('posts.category_id','1')->orderBy('created_at', 'DESC')->paginate(8);
        $program->setCollection($program->sortByDesc('created_at'));

        // dd($layanan);

        // dd($berita);
        return view('halaman_depan.Allnews',compact('posts','publikasi','layanan','berita','program'));
    }
    public function show($id)
    {
        post::find($id)->increment('views');
        $syarat = post::find($id);
        $user = User::where('name','basit') -> first();
        $posts = post::orderBy('created_at', 'DESC')->paginate(2);
        $posts->setCollection($posts->sortByDesc('created_at'));
    
        $berita = post::where('posts.category_id','3')->orderBy('created_at', 'DESC')->paginate(8);
        $berita->setCollection($berita->sortByDesc('created_at'));


        return view('halaman_depan.AllNews',compact('posts','user','syarat','berita'));
    }
}

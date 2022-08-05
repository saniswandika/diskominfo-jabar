<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\models\Post;
class HomeController extends Controller
{

    /**
     * Provision a new web server.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $count = DB::table('posts')->count();
        $posts = post::select('posts.*','categories.name as nama_categori')->join('categories','categories.id','=' , 'posts.category_id')->get();
        return view('admin.index',compact('count','posts'));
    }

    public function hapus(Request $request, $id)
    {
    DB::table('posts')->where('id', $id)->delete();
    
    return redirect('/')->with('status', 'Data Siswa Berhasil DiHapus');
    }
}

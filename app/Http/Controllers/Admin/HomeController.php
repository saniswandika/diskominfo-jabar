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
    public function __invoke(Request $request)
    {
        $count = DB::table('posts')->count();
        
        $posts = post::select('posts.*','categories.name as nama_categori')->join('categories','categories.id','=' , 'posts.category_id')->get();
        $name = $request->name;
        $categories = post::where('title', 'like', "%" . $name . "%")->paginate(10);
        $viewer = post::select(DB::raw("SUM(views) as count"))

        ->orderBy("category_id")

        ->groupBy(DB::raw("category_id"))

        ->get()->toArray();

        $viewer = array_column($viewer, 'count');

        $All_viewer = DB::table('posts')->sum('views');
        $price = DB::table('posts')->max('views');

        // dd($viewer);
        return view('admin.index',compact('count','posts','categories','All_viewer'))->with('viewer',json_encode($viewer,JSON_NUMERIC_CHECK));
        
    }

    public function hapus(Request $request, $id)
    {
    DB::table('posts')->where('id', $id)->delete();
    
    return redirect('/')->with('status', 'Data Siswa Berhasil DiHapus');
    }
    
    public function cari(Request $request)
    {
	// menangkap data pencarian
	$cari = $request->cari;
 
 	// mengambil data dari table pegawai sesuai pencarian data
	$pegawai = DB::table('posts')
	->where('slug','like',"%".$cari."%")
	->paginate(2);
 
    	// mengirim data posts ke view index
	return view('admin.forms',['posts' => $pegawai]);
 
    }
}

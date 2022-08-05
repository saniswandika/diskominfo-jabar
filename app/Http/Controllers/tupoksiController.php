<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\models\Post;
use App\models\User;
use Illuminate\Support\Facades\DB;

class tupoksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $user = User::where('name','basit') -> first();
        $posts = post::orderBy('created_at', 'DESC')->paginate(2);
        $posts->setCollection($posts->sortByDesc('created_at'));
    
        $berita = post::orderBy('created_at', 'DESC')->paginate(10);
        $berita->setCollection($berita->sortByDesc('created_at'));
        return view('halaman_depan.tupoksi',compact('posts','user','berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        post::find($id)->increment('views');
        $syarat = post::find($id);
        $user = User::where('name','basit') -> first();
        $posts = post::orderBy('created_at', 'DESC')->paginate(2);
        $posts->setCollection($posts->sortByDesc('created_at'));
    
        $berita = post::orderBy('created_at', 'DESC')->paginate(10);
        $berita->setCollection($berita->sortByDesc('created_at'));
        return view('halaman_depan.tupoksi',compact('posts','user','syarat','berita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

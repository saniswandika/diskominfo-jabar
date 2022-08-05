<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\models\Post;
use Illuminate\Support\Facades\Redirect;
class ListDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count = DB::table('posts')->count();
        $posts = post::select('posts.*','categories.name as nama_categori')->join('categories','categories.id','=' , 'posts.category_id')->paginate(8);
        return view('admin.lisdata',compact('count','posts'));
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
        return view('admin.halaman-edit');
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
        $request->validate([
            'title' => 'required',
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
                'content' => 'required',
                'slug' => 'required|string|max:255',
                'category_id' => 'required|exists:App\Models\Category,id'
            ]);
            $update = ['title' => $request->title, 'description' => $request->description, 'content' => $request->content, 'slug' => $request->slug];
            if ($files = $request->file('image')) {
            $destinationPath = public_path('uploads'); // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $update['image'] = "$profileImage";
            }
            $update['title'] = $request->get('title');
            $update['product_code'] = $request->get('product_code');
            $update['description'] = $request->get('description');
            post::where('id',$id)->update($update);
            return Redirect::to('products')
            ->with('success','Great! Product updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    DB::table('posts')->where('id', $id)->delete();
    return back()->with('success', 'Succesfully Added');
    }
}

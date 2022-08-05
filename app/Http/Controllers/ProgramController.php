<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;


class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories = Category::all();
        // $posts = post::all();
        $count = DB::table('posts')->where('posts.category_id','3')->count();
        $posts = post::select('posts.*','categories.name as nama_categori')->join('categories','categories.id','=' , 'posts.category_id')->where('posts.category_id','3')->paginate(8);
        return view('admin.forms',compact('count','posts','categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $categories = Category::all();
        return view('admin.post.create',compact('categories'));
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
                'content' => 'required',
                'slug' => 'required|string|max:255',
                'category_id' => 'required|exists:App\Models\Category,id'
        ]);
        $input['mata_kuliah '] = $request->input('mata_kuliah ');


        if ($request->all()) {
            $uploadPath = public_path('uploads');

            if (!File::isDirectory($uploadPath)) {
                File::makeDirectory($uploadPath, 0755, true, true);
            }

            $file = $request->file('image');
            $explode = explode('.', $file->getClientOriginalName());
            $originalName = $explode[0];
            $extension = $file->getClientOriginalExtension();
            $rename = 'file_' . date('YmdHis') . '.' . $extension;
            $mime = $file->getClientMimeType();
            $filesize = $file->getSize();
            
            // $dosen =  $request->nama_pembimbing;

            if ($file->move($uploadPath, $rename)) {
                $post = new post;
                $post->name = $originalName;
                $post->image = $rename;
                $post->extension = $extension;
                $post->size = $filesize;
                $post->mime = $mime;
                $post->title = $request->title;
                $post->content = $request->content;
                $post->category_id = $request->category_id;
                $post->slug = Str::slug($post->title, '-');
                $post->save();
            }
   
            return redirect()->back()->with('success', 'your message,here');
           
        }
        
    }
        
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show (Post $id)
    {
        $syarat = post::find($id);
        
        return view('admin.forms', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Post $post)
    {
        $categories = Category::all();

        return view('posts.edit', compact('categories', 'post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $post->title = $request->title;
        $post->slug = Str::slug($request->slug);
        $post->description = $request->description;
        $post->category_id = $request->category_id;
        $post->save();

        return redirect()->route('admin.forms')->with('status', 'Post Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $id)
    {
        DB::table('posts')->where('id', $id)->delete();
        return back()->with('success', 'Succesfully Added');
    }
    function getExcerpt($str, $startPos=0, $maxLength=100) {
        if(strlen($str) > $maxLength) {
            $excerpt   = substr($str, $startPos, $maxLength-3);
            $lastSpace = strrpos($excerpt, ' ');
            $excerpt   = substr($excerpt, 0, $lastSpace);
            $excerpt  .= '...';
        } else {
            $excerpt = $str;
        }
        
        return $excerpt;
    }
}

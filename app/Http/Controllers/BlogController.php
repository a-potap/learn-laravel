<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['posts'] = Blog::orderBy('id','desc')->paginate(10);

        return view('blog.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
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
            'product_code' => 'required',
            'description' => 'required',
        ]);

        Blog::create($request->all());

        return Redirect::to('products')
            ->with('success','Greate! Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $where = array('id' => $id);
        $data['product_info'] = Blog::where($where)->first();

        return view('blog.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'product_code' => 'required',
            'description' => 'required',
        ]);

        $update = ['title' => $request->title, 'description' => $request->description];
        Blog::where('id',$id)->update($update);

        return Redirect::to('blog')
            ->with('success','Great! Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blog::where('id',$id)->delete();

        return Redirect::to('blog')->with('success','Post deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Actions\Post\StorePostAction;
use App\Actions\Post\UpdatePostAction;
use App\Http\Requests\Post\PostStoreRequest;
use Illuminate\View\View;

class PostsController extends Controller {
    /**
    * Display a listing of the resource.
    */
    
    /**
     * index
     *
     * @return void
     */
    public function index() :View
     {
        $data = Post::get();
        return view( 'posts.view',compact('data') );
    }

    /**
    * Show the form for creating a new resource.
    */

    public function create() {
        //
        return view( 'posts.create' );
    }

    /**
    * Store a newly reated resource in storage.
    */

    public function store( PostStoreRequest $request ) 
    {
        app(StorePostAction::class)->handle($request->validated());
        return redirect()->route('posts.index');
    }

    /**
    * Display the specified resource.
    */

    public function show( string $id ) {
        //
    }

    /**
    * Show the form for editing the specified resource.
    */

    public function edit( Post $post ) {
        //
        return view( 'posts.edit',compact('post') );

    }

    /**
    * Update the specified resource in storage.
    */

    public function update( PostStoreRequest $request, Post $post ) {
        //
        app(UpdatePostAction::class)->handle( $post , $request->validated());
        return redirect()->route('posts.index');
    }

    /**
    * Remove the specified resource from storage.
    */

    public function destroy(Post $post) {
        $post->delete();
        return redirect()->route('posts.index');
        //
    }
}
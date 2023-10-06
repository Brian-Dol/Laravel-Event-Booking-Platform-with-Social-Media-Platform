<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Post;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function social_home()
    {
        $customers=Customer::all();
        $posts = Post::orderBy('created_at', 'desc')->get(); // Fetch all posts from the database in descending order of creation date
        
        return view('socialdashboard', ['posts' => $posts, 'customers'=>$customers]); // Pass the $posts variable to the view
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
    public function edit($id)
    {
        //
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

    public function create_post(Request $request)
        {
            $request->validate([
                'body' => 'required|max:1000'
                
            ]);

            
            $customerId=session('data')[0]->id;
            $data=new Post;
            $data->customer_id=$customerId;
            $data->body=$request->body;
            $data->save();

            return redirect('/social-home')->with('success','Post successfully created!');
    }

    public function delete_post($post_id)
    {
        $post = Post::find($post_id);
        if (!$post) {
            // Post not found
            return redirect()->back()->with(['error' => 'Post not found.']);
        }
        if (session()->has('customerlogin') && $post->customer_id == session('data')[0]->id) {
            // Customer is logged in and is the owner of the post
            $post->delete();
            return redirect('social-home/deletepost/{post_id}')->with(['success', 'Post Successfully deleted!']);
        } else {
            // Customer is not logged in or is not the owner of the post
            return redirect()->back()->with(['error' => 'You do not have permission to delete this post.']);
        }
    }


    public function update_post(Request $request, $post_id)
    {
        $request->validate([
            'body' => 'required|max:1000'
        ]);

        // Check if the post exists
        $post = Post::find($post_id);
        if (!$post) {
            return redirect()->back()->with('error', 'Post not found!');
        }

        // Check if the current customer owns the post
        $customerId = session('data')[0]->id;
        if ($post->customer_id != $customerId) {
            return redirect()->back()->with('error', 'You are not authorized to edit this post!');
        }

        // Update the post
        $post->body = $request->body;
        $post->save();

        return redirect('social-home')->with('success', 'Post successfully updated!');
    }


    public function edit_post($post_id)
    {
        // Check if the post exists
        $post = Post::find($post_id);
        if (!$post) {
            return redirect()->back()->with('error', 'Post not found!');
        }

        // Check if the current customer owns the post
        $customerId = session('data')[0]->id;
        if ($post->customer_id != $customerId) {
            return redirect()->back()->with('error', 'You are not authorized to edit this post!');
        }

        // Return the edit post view with the post data
        return view('socialaccount.edit_post', ['post' => $post]);
    }

    

    public function settings_page()
    {
        
        
        
        return view('socialaccount.settings_page'); // Pass the $posts variable to the view
    }

    public function account_page()
    {
        
        
        $customers=Customer::all();
        $posts = Post::all();
        return view('socialaccount.account_page',['posts' => $posts, 'customers'=>$customers]); // Pass the $posts variable to the view
    }







    

}

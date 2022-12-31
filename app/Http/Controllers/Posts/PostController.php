<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Http\Controllers\General\FileUploadController;
use App\Models\Post;
use App\Models\Category;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    public function __construct ()
    {
        $this->file = new FileUploadController;
    }

    // ***-- Posts - View --*** //

    /**
     * Return data for /posts page
     * 
     * @return \Illuminate\View\View
     */
    public function postsIndex ()
    {
        $posts = Post::select('id', 'user_id', 'slug', 'title', 'type', 'created_at')->where('status', 'Active')->latest()->with('user:id,firstname,lastname')->with('categories:id,slug,name')->get();

        return view ( 'cms.posts.posts', compact('posts'));
    }

    /**
     * Return data for /posts/{slug}/view page
     * 
     * @param String $slug
     * @return \Illuminate\View\View
     */
    public function postsViewPost (String $slug)
    {
        $post = Post::select('id', 'user_id', 'slug', 'title', 'content', 'created_at')->where('slug', $slug)->where('status', 'Active')->latest()->with('user:id,firstname,lastname')->with('categories:id,slug,name')->first();
        return view ( 'cms.posts.view.posts', compact('post'));
    }

    /**
     * Return form data for /posts/create page
     * 
     * @return \Illuminate\View\View
     */
    public function postsCreateNewPostPage ()
    {
        $categories = Category::select('id', 'name')->where('status', 'Active')->get();
        return view ( 'cms.posts.create.posts', compact('categories'));
    }

    // ***-- Posts - Create --*** //

    /**
     * Handle process for creating new posts
     *
     * @param \Illuminate\Http\Request $request
     */
    public function postsCreateNewPost (Request $request)
    {
        // Validate content
        $request->validate( 
            [
                'post_title' => 'required'
            ],
            [
                'post_title.required' => 'This field is required.'
            ]
        );

        // Slug preparation
        $slug = str_replace(' ', '-', $request->post_title . ' ' . date('Y-m-d h-i-s')); // Replaces all spaces with hyphens, add current date and time to slug
        $slug = preg_replace('/[^A-Za-z0-9\-]/', '', $slug); // Removes special chars
        $slug = preg_replace('/-+/', '-', $slug); // Replaces multiple hyphens with single one

        // Initialize Post object
        $post = new Post;

        // Post content
        $post->slug = $slug;
        $post->title = $request->post_title;
        $post->type = $request->post_type;
        $post->desc = $request->post_desc;
        $post->content = $request->post_content;
        $post->sm_autopost = $request->post_sm_autopost;

        // Post author
        $post->user_id = session('userID');

        // Post thumbnail
        if($request->file('file')) $post->thumbnail = $this->file->uploadImage($request, 'thumbnails');

        // Post save info
        $post->save();
        $post->refresh();
    
        // Post categories
        if($request->post_categories_id) $categories = explode(',', $request->post_categories_id);
        $post->categories()->attach($categories);

        // // Post media gallery
        // if($request->post_media_image_name){
        //     $gallery = explode(',', substr($request->image_name, 0, -1));

        //     foreach($gallery as $image):
        //         $media = new Media;
        //         $media->media_name = $image;
        //         $media->post()->associate($post);
        //         $media->save();
        //     endforeach;
        // }

        // // Log activity
        // $message = 'A new post has been created: <b>' . $post->post_title . '</b>';
        // $this->inputLog(session('userID'), session('schoolToPost'), $message);
        
        // $this->alertDetails($message, 'success');

        // return redirect('cms/posts/posts');
    }

    // ***-- Posts - Update --*** //

    // ***-- Posts - Archive --*** //
}

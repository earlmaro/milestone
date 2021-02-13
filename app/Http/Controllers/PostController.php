<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ip;
use App\Models\Post;
use App\Models\Log;


use DB;
use Stevebauman\Location\Facades\Location;

class PostController extends Controller
{
     public function index(Request $request)
    {
        $ipAddress = $request->ip();

       


        $ipCheck = Ip::where('ip',$ipAddress)->first();
        if($ipCheck == null){
            $ipAddress = $request->ip();
            $newIpAddress = new Ip;
            $newIpAddress->ip = $ipAddress;
            $newIpAddress->save();
        }
        $registeredIp = Ip::all();
$registeredIp = count($registeredIp);


return view('createpost', compact('registeredIp'));

    }



public function create(Request $request)
    {

        request()->validate([
            'post' => 'required',
            'posted_by' => 'required',
            'views' => 'required',
            'post_title' => 'required|unique:posts',

            ]);
            
            // dd($request);

            $post = new Post;
            $post->post = $request->post;
            $post->post_title = $request->post_title;
            $post->posted_by =$request->posted_by;
            $post->views =$request->views;
            $post->save();
        // return view('ceatePost', compact('allPosts'));
        return redirect()->back()->with('message', 'Your Have Succesfully Created A New Post!!');

    }

     public function all(Request $request)
    {
        // $allPosts = Post::all()->paginate(15);
        // $allPosts = Post::where('post' != '')->paginate(15);
        $allPosts = DB::table('posts')
                ->where('post', '!=', null)->latest()->paginate(3);

                
             
        return view('allPosts', compact('allPosts'));
    }

    public function view(Request $request ,$id)
    {
        
        $ipAddress = $request->ip();
        $logsCheck = Log::where([['viewed_by', $ipAddress], ['post_id', $id]])->first();
        if($logsCheck == null){
            
            $post = Post::where('id',$id)->first();
            $post->views = $post->views + 1;
            $post->update();
            
            $updateLogs = new Log;
            $updateLogs->viewed_by = $ipAddress;
            $updateLogs->post_id = $id;
            $updateLogs->save();
        return view('viewPost', compact('post'));

        }
        $post = Post::where('id', $id)->first();


        return view('viewPost', compact('post'));
}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specialty;
use App\Models\Profile;
use App\Models\Post;
use App\Models\Publication;

class HomeController extends Controller
{
    //
    public function index()
    {
        $id = 1; // Assuming you want to fetch the profile with ID 1
        $posts = Post::with('category','profile')->published()
             ->orderBy('published_at', 'desc')
             ->paginate(4);
        $profile = Profile::with([
            'educations', 
            'experiences', 
            'certifications', 
            'awards', 
            'organizations',
            'specialties',
            'galleries',
            'achievements'
        ])->find($id);
        $books = Publication::where('profile_id',$id)->where('category','Book')->orderBy('year','desc')->get();
        $publications = Publication::where('profile_id',$id)->where('category','<>','Book')->get();
        return view('welcome', compact('profile', 'posts','books','publications'));
    }
}

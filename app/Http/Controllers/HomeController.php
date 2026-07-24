<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\inquiry;
use App\schedule;
use App\newsletter;
use App\post;
use App\banner;
use App\Models\Blog;
use App\imagetable;
use DB;
use Mail;
use View;
use Session;
use App\Http\Helpers\UserSystemInfoHelper;
use App\Http\Traits\HelperTrait;
use Auth;
use App\Profile;
use App\Page;
use Image;

class HomeController extends Controller
{
    use HelperTrait;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // use Helper;

    public function __construct()
    {
        //$this->middleware('auth');

        $logo = imagetable::select('img_path')
            ->where('table_name', '=', 'logo')
            ->first();

        $favicon = imagetable::select('img_path')
            ->where('table_name', '=', 'favicon')
            ->first();

        View()->share('logo', $logo);
        View()->share('favicon', $favicon);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = DB::table('pages')->where('id', 1)->first();
        $about = DB::table('pages')->where('id', 2)->first();
        $about_sec = DB::table('sections')->where('page_id', 2)->get();
        $book = DB::table('pages')->where('id', 8)->first();
        $book_sec = DB::table('sections')->where('page_id', 8)->get();
        $banners = DB::table('banners')->where('status',1)
        ->orderBy('sort_order')
        ->get();
        $testimonial = DB::table('testimonial')->where('status',1)->get();

        return view('welcome', compact('page' , 'banners', 'about', 'about_sec', 'book', 'book_sec', 'testimonial'));
    }

    public function about()
    {
        $page = DB::table('pages')->where('id', 2)->first();
        $section = DB::table('sections')->where('page_id', 2)->get();

        return view('about-the-author', compact('page' , 'section'));
    }

    public function book()
    {
        $page = DB::table('pages')->where('id', 8)->first();
        $section = DB::table('sections')->where('page_id', 8)->get();
        return view('about-the-book', compact('page' , 'section'));
    }

    public function blog()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->get();
        return view('blogs', compact('blogs'));
    }

    public function blog_detail($id)
    {
        $blog = Blog::findOrFail($id);
        $recentBlogs = Blog::orderBy('created_at', 'desc')->limit(3)->get();
        return view('blog_detail', compact('blog', 'recentBlogs'));
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blog-detail', compact('blog'));
    }

    public function contact()
    {
        $page = DB::table('pages')->where('id', 4)->first();
        $section = DB::table('sections')->where('page_id', 4)->get();
        return view('contact-me', compact('page' , 'section'));
    }

    public function careerSubmit(Request $request)
    {


        inquiry::create($request->all());


        return response()->json(['message' => 'Thank you for contacting us. We will get back to you asap', 'status' => true]);
        return back();
    }

    public function newsletterSubmit(Request $request)
    {

        $is_email = newsletter::where('newsletter_email', $request->newsletter_email)->count();
        if ($is_email == 0) {
            $inquiry = new newsletter;
            $inquiry->newsletter_email = $request->newsletter_email;
            $inquiry->save();
            return response()->json(['message' => 'Thank you for contacting us. We will get back to you asap', 'status' => true]);
        } else {
            return response()->json(['message' => 'Email already exists', 'status' => false]);
        }
    }

    public function updateContent(Request $request)
    {
        $id = $request->input('id');
        $keyword = $request->input('keyword');
        $htmlContent = $request->input('htmlContent');
        if ($keyword == 'page') {
            $update = DB::table('pages')
                ->where('id', $id)
                ->update(array('content' => $htmlContent));

            if ($update) {
                return response()->json(['message' => 'Content Updated Successfully', 'status' => true]);
            } else {
                return response()->json(['message' => 'Error Occurred', 'status' => false]);
            }
        } else if ($keyword == 'section') {
            $update = DB::table('section')
                ->where('id', $id)
                ->update(array('value' => $htmlContent));
            if ($update) {
                return response()->json(['message' => 'Content Updated Successfully', 'status' => true]);
            } else {
                return response()->json(['message' => 'Error Occurred', 'status' => false]);
            }
        }
    }
}

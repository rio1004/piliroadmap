<?php

namespace App\Http\Controllers;

use App\Models\Archive;
use Illuminate\Http\Request;
use App\Models\LocationTag;
use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Gallery;
use App\Models\GalleryCategory;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $location = LocationTag::get();
        return view('admin.admin',compact('location'));
    }
    public function mapping()
    {
        $location = LocationTag::get();
        return view('admin.location_tag.mapping',compact('location'));
    }
    public function articles()
    {
        $articles = Article::get();
        $articleCategories = ArticleCategory::get();
        return view ('admin.articles.articles',compact('articles', 'articleCategories'));
    }
    public function about()
    {
        return view ('admin.about');
    }
    public function archives()
    {
        $archives = Archive::get();
        return view ('admin.arcives.archives', compact('archives'));
    }
    public function gallery()
    {
        $gallery = Gallery::get();
        $galleryCategories = GalleryCategory::get();
        return view ('admin.gallery.gallery', compact('gallery','galleryCategories'));
    }
    public function contact()
    {

        return view ('admin.contact-us');
    }


}

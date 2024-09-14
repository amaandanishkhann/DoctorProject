<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Contact;
use App\Models\Image;
use App\Models\Service;
use App\Models\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //go to index page
    public function index()
    {
        $about = About::first();
        $service = Service::all();
        $image = Image::all();
        $banner = Banner::all();
        return view('home.index', compact('banner', 'image', 'service', 'about'));
    }
    //go to about page
    public function abouts()
    {
        $about = About::first();
        $service = Service::all();
        return view('home.about', compact('service', 'about'));
    }
    //go to services page
    public function services()
    {
        $service = Service::all();
        return view('home.services', compact('service'));
    }
    //go to image page
    public function images()
    {
        $service = Service::all();
        $image = Image::all();
        return view('home.photo-gallery', compact('image', 'service'));
    }

    //go to video page
    public function videos()
    {
        $service = Service::all();
        $video = Video::all();
        return view('home.video-gallery', compact('video', 'service'));
    }
    //go to contact page 1 
    public function contact()
    {
        $about = About::first();
        $service = Service::all();
        return view('home.contact', compact('service', 'about'));
    }
    //contact page 2 
    public function usercontacts(Request $request)
    {
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->city = $request->city;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->route('home.home');
    }
    //
    public function servicelist($slug)
    {
        $service = Service::find($slug);
        return view('home.servicelist', compact('service'));
    }
}

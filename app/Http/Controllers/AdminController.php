<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Contact;
use App\Models\image;
use App\Models\Service;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    // go to admin dash
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    // go to user messages
    public function user()
    {
        $contact = Contact::all();
        return view('admin.user ', compact('contact'));
    }
    // Slider updataion page 1
    public function banner()
    {
        return view('admin.banner ');
    }
    // Slider updataion page 2
    public function addbanner(Request $request)
    {
        $banner = new Banner();
        $banner->name = $request->name;
        $banner->description = $request->description;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('banner'), $imageName);
            $banner->image = $imageName;
        }
        $banner->save();
        return redirect()->route('admin.banner');
    }

    // view banner page
    public function viewbanner()
    {
        $banner = Banner::all();
        return view('admin.viewbanner', compact('banner'));
    }
    //services updation page 1
    public function service()
    {
        return view('admin.service ');
    }
    //services updation page 2
    public function addservice(Request $request)
    {
        $service = new Service();
        $service->name = $request->name;
        $service['slug'] = Str::slug($request->name);

        $service->short_Description = $request->short_Description;
        $service->long_description = $request->long_description;


        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('service'), $imageName);
            $service->image = $imageName;
        }
        $service->save();
        return redirect()->route('admin.service');
    }
    // about  updation page 1
    public function about($id)
    {
        $about = About::find($id);
        return view('admin.about', compact('about'));
    }
    // about  updation page 2

    public function addabout(Request $request, $id)
    {
        $about = About::find($id);
        $about->name = $request->name;
        $about->title = $request->title;
        $about->email = $request->email;
        $about->phone = $request->phone;
        $about->qualification = $request->qualification;
        $about->work_experience = $request->work_experience;
        $about->short_description = $request->short_description;
        $about->long_description = $request->long_description;
        $about->address = $request->address;
        $about->Consultation_Timing = $request->Consultation_Timing;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('about'), $imageName);
            $about->image = $imageName;
        }
        $about->save();
        return redirect()->back();
    }
    //
    public function viewservices()
    {

        $service = Service::all();
        return view('admin.viewservices', compact('service'));
    }
    // image updation page 1
    public function image()
    {

        $image = image::all();
        return view('admin.image', compact('image'));
    }
    // image updation page 2
    public function addimage(Request $request)
    {
        $image = new Image();

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('image'), $imageName);
            $image->image = $imageName;
        }
        $image->save();
        return redirect()->route('admin.image');
    }
    // view image page
    public function viewimage()
    {
        $image = image::all();
        return view('admin.viewphoto', compact('image'));
    }
    // video updation page 1 
    public function video()
    {
        $video = Video::all();
        return view('admin.video', compact('video'));
    }
    // video updation page 2
    public function addvideo(Request $request)
    {
        $video = new Video();

        if ($request->hasFile('video')) {
            $videoName = time() . '.' . $request->video->extension();
            $request->video->move(public_path('video'), $videoName);
            $video->video = $videoName;
        }
        $video->save();
        return redirect()->route('admin.video');
    }
    // view video page
    public function viewvideo()
    {
        $video = Video::all();
        return view('admin.viewvideo', compact('video'));
    }
    //edit service page
    public function editservices($id)
    {
        $service = Service::find($id);
        return view('admin.editservices', compact('service'));
    }
    //edit service page
    public function upservice(Request $request, $id)
    {
        $service = Service::find($id);
        $service->name = $request->name;
        $service->short_Description = $request->short_Description;
        $service->long_description = $request->long_description;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('service'), $imageName);
            $service->image = $imageName;
        }
        $service->save();
    }
    //
    public function deletebanner($id)
    {
        $servicedit = banner::findOrFail($id);
        $servicedit->delete();

        return redirect()->route('admin.viewbanner');
    }
    //
    public function deleteimage($id)
    {
        $servicedit = image::findOrFail($id);
        $servicedit->delete();

        return redirect()->route('admin.viewimage');
    }
    //
    public function deletevideo($id)
    {
        $servicedit = video::findOrFail($id);
        $servicedit->delete();

        return redirect()->route('admin.viewvideo');
    }
    //
    public function deleteservice($id)
    {
        $servicedit = service::findOrFail($id);
        $servicedit->delete();

        return redirect()->route('admin.viewservices');
    }
    //
    //go to login page
    public function login()
    {
        return view('admin.login ');
    }
    // 
    public function loginuser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);
        if ($validator->passes()) {

            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('admin.login')
                    ->with('error', 'password is incorrect.');
            }
        } else {
            return redirect()->route('admin.login')
                ->withInput()
                ->withErrors($validator);
        }
    }
    //
    public function register()
    {
        return view('admin.register');
    }
    //
    public function registeruser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        if ($validator->passes()) {

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;

            $user->password = Hash::make($request->password);

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->extension();
                $image->move(public_path('Admin'), $imageName);
                $user->image = $imageName;
            }

            $user->save();
            return redirect()->route('admin.login');
        } else {
            return redirect()->route('admin.register')->withErrors($validator);
        }
    }

    //
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home.home');
    }
}

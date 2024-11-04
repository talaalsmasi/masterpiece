<?php

namespace App\Http\Controllers\Website;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Rating;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Models\Post;
use App\Models\Pet;
use App\Models\Product;
use App\Models\Doctor;




class HomeController extends Controller
{
    public function index()
    {
        // استرداد التقييمات مع تفاصيل المستخدم
        $ratings = Rating::with('user')->get(); // تأكد من وجود العلاقة المناسبة في النموذج

        // استرداد جميع الحيوانات
        $pets = Pet::take(12)->get();

        $doctors = Doctor::with('user')->get();

        $usersCount = User::count();

        // استرجاع عدد الأطباء
        $doctorsCount = Doctor::count();

        // استرجاع عدد الحيوانات الأليفة
        $petsCount = Pet::count();

        // استرجاع عدد المنتجات
        $productsCount = Product::count();

        // استرداد البوستات مع تفاصيل المستخدم، والطلب من الأحدث إلى الأقدم
        $posts = Post::with('user')->latest()->get(); // تأكد من وجود العلاقة المناسبة في النموذج

        // تمرير البيانات إلى الـ View
        return view('index', compact('ratings', 'posts', 'pets','doctors','usersCount', 'doctorsCount', 'petsCount', 'productsCount'));
    }


    public function showFeedback()
    {
        // استرداد التقييمات مع تفاصيل المستخدم
        $ratings = Rating::with('user')->get();

        return view('home.feedback', compact('ratings'));
    }


    public function showGallery()
    {
        // جلب 11 صورة بشكل عشوائي من جدول pets
        $pets = Pet::inRandomOrder()->take(11)->get();
        return view('gallery', compact('pets'));
    }
    public function showContact()
    {
        return view('home.contactus');
    }

    public function sendMessage(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Rename 'message' to 'userMessage' when passing to the view
        $data['userMessage'] = $data['message'];
        unset($data['message']);

        // Send the email
        Mail::raw('This is a test email', function ($message) {
            $message->to('pet2024pal@example.com')
                    ->subject('Test Email');
        });


        return back()->with('success', 'Message sent successfully!');
    }





}

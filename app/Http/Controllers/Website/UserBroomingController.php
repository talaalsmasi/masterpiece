<?php
namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Pet;
use App\Models\BroomingService;
use App\Models\Brooming;
use Illuminate\Http\Request;

class UserBroomingController extends Controller
{
    // عرض صفحة إنشاء الحجز
    public function create()
{
    // التحقق مما إذا كان المستخدم مسجل الدخول
    if (!auth()->check()) {
        // تحويل المستخدم إلى صفحة تسجيل الدخول مع رسالة
        return redirect()->route('login')->with('error', 'You have to login first');
    }

    // جلب الحيوانات الخاصة بالمستخدم الحالي والخدمات المتاحة
    $pets = Pet::where('user_id', auth()->id())->get();
    $services = BroomingService::all();

    // تمرير البيانات إلى صفحة إنشاء الحجز
    return view('grooming.createBrooming', compact('pets', 'services'));
}

    public function show($petId)
    {
        // جلب جميع مواعيد الـ grooming المرتبطة بالحيوان
        $broomings = Brooming::with('pet', 'service')
            ->where('pet_id', $petId)
            ->get();

        // التأكد من وجود مواعيد
        if ($broomings->isEmpty()) {
            return redirect()->back()->with('error', 'No grooming appointments found for this pet.');
        }

        // تمرير البيانات إلى العرض (view)
        return view('grooming.showBrooming', compact('broomings'));
    }
}

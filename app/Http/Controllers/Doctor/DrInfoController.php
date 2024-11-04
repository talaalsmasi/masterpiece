<?php
namespace App\Http\Controllers\Doctor;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\About;

class DrInfoController extends Controller
{
    public function show()
    {
        $doctor = Auth::user();
        $about = $doctor->about;

        return view('doctor.info.show', compact('doctor', 'about'));
    }

    public function edit()
    {
        $doctor = Auth::user();
        $about = $doctor->about;

        return view('doctor.info.edit', compact('doctor', 'about'));
    }

    public function update(Request $request)
    {
        $doctor = Auth::user();

        // التحقق من البيانات المدخلة
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $doctor->id,
            'phone' => 'required|string|max:15',
            'about' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // التحقق من البيانات
        dd($validatedData); // Debug to check the data

        // تحديث معلومات المستخدم
        $doctor->update([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
        ]);

        // تحديث "عن الطبيب"
        if ($doctor->about) {
            $doctor->about->update(['about' => $validatedData['about']]);
        } else {
            $doctor->about()->create(['about' => $validatedData['about']]);
        }

        // تحديث الصورة الشخصية إذا تم رفع صورة جديدة
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('img/doctors', 'public');
            $doctor->update(['image' => $imagePath]);
        }

        return redirect()->route('doctor.info.show')->with('success', 'Information updated successfully.');
    }
}



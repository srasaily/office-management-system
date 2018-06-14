<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class AttendanceController extends Controller
{
    public function index()
    {
        $users = User::all();
//        $users->attendances()
//            ->where('attendance','=', true)
//            ->get();
        return view('attendance.index', compact('users'));
    }

    public function markUserPresent()
    {
        $user = Auth::user();
        $data = ['attendance' => true];

        $user->attendances()->create($data);

        return redirect()->route('dashboard.index');
    }
}

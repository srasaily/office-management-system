<?php

namespace App\Http\Controllers;

use App\User;
use App\Expense;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index()
    {
        $users = User::limit(5)->get();
        $userCount = User::count();
        $expenseTotal = Expense::sum('amount_spent');

        return view ('dashboard.index', compact('users','userCount', 'expenseTotal'));
    }

    public function profile()
    {
        $user = Auth::user();
        return view ('users.profile', compact('user'));
    }
}

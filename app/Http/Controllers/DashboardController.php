<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = useGetAuth();

        $role = $user->role;

        if ($user->status !== 'verified') {
            toastr()->warning('Akun anda belum terverifikasi, silahkan hubungi admin sirab');
            Auth::logout();
            return back();
        }

        return view('dashboard');
    }
}

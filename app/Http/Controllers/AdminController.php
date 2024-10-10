<?php
namespace App\Http\Controllers;

use App\Models\User;  // Pastikan ini mengimport model User
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function submenu1()
    {
        // Mengambil semua data dari tabel users
        $users = User::all();
        
        // Mengirim data user ke view submenu1
        return view('admin.submenu1', compact('users'));
    }
}

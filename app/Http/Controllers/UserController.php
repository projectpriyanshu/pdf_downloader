<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use PDF;
// website link for surce code " https://programmingfields.com/how-to-generate-pdf-in-laravel-8-using-dompdf/  "
class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users', compact('users'));
    }

    /**
     * Export content to PDF with View
     *
     * @return void
     */
    public function downloadPdf()
    {
        $users = User::all();

        // share data to view
        view()->share('users-pdf',$users);
        $pdf = PDF::loadView('users-pdf', ['users' => $users]);
        return $pdf->download('users.pdf');
    }
}


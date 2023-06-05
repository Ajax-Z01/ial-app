<?php

namespace App\Http\Controllers;

use App\Models\FormResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormResponseController extends Controller
{
    /**
     * Menampilkan halaman messages
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messagesPerPage = 5;
        $totalMessages = FormResponse::count();
        $totalPages = ceil($totalMessages / $messagesPerPage);
        $currentPage = request()->page ?? 1;

        $query = FormResponse::query();

        if (request()->filled('search')) {
            $search = request()->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('full_name', 'LIKE', '%' . $search . '%');
            });
        }

        $messages = $query->skip(($currentPage - 1) * $messagesPerPage)->take($messagesPerPage)->get();

        return view('messages', compact('messages', 'currentPage', 'totalPages'));
    }

    /**
     * Menampilkan menyimpan data form
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi input form
        $validator = Validator::make($request->all(), [
            'full_name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Jika validasi gagal, kirimkan pesan error dan redirect kembali ke halaman sebelumnya
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Jika validasi berhasil, simpan data ke database
        FormResponse::create([
            'full_name' => $request->input('full_name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ]);

        // Redirect ke halaman sukses dengan pesan success
        return redirect()->route('contact')->with('success', 'Form submitted successfully!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function tentang()
    {
        return view('pages.tentang');
    }

    public function layanan()
    {
        return view('pages.layanan');
    }

    public function artikel()
    {
        return view('pages.artikel');
    }

    public function kontak()
    {
        return view('pages.kontak');
    }

    public function handleContactForm(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
            'g-recaptcha-response' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

        $recaptchaResponse = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => env('RECAPTCHA_V2_SECRET_KEY'),
            'response' => $request->input('g-recaptcha-response'),
        ])->json();

        if (!($recaptchaResponse['success'] ?? false)) {
            return response()->json(['message' => 'Verifikasi reCAPTCHA gagal. Silakan coba lagi.'], 400);
        }

        return response()->json(['message' => 'Pesan Anda telah berhasil terkirim! Kami akan segera menghubungi Anda.']);
    }
}

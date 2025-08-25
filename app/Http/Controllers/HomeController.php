<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function competitions()
    {
        $competitions = [
            [
                'name' => 'Web Development',
                'description' => 'Kompetisi pengembangan website untuk siswa SMA/SMK, tim 3-4 orang',
                'deadline' => '2025-08-26',
                'prize' => 'Uang Tunai + Sertifikat + Piala + Medali'
            ],
            [
                'name' => 'Sayembara Logo – VIZION',
                'description' => 'Kompetisi desain logo untuk mahasiswa TI UNIKOM, individu',
                'deadline' => '2025-08-26',
                'prize' => 'Uang Tunai + Sertifikat + Piala + Medali'
            ],
            [
                'name' => 'Capture The Flag (CTF)',
                'description' => 'Kompetisi cybersecurity 24 jam untuk siswa SMA/SMK, individu',
                'deadline' => '2025-08-20',
                'prize' => 'Uang Tunai + Sertifikat + Piala + Medali'
            ],
            [
                'name' => 'Mobile Legends Tournament',
                'description' => 'Turnamen ML untuk siswa SMA/SMK, tim 5+1 cadangan',
                'deadline' => '2025-08-20',
                'prize' => 'Uang Tunai + Sertifikat + Piala + Medali'
            ]
        ];

        return view('pages.competitions', compact('competitions'));
    }

    public function timeline()
    {
        $timeline = [
            ['date' => '2025-08-18', 'event' => 'Opening Ceremony (Google Meet)'],
            ['date' => '2025-08-19', 'event' => 'Mulai Web Dev, CTF, Logo & ML Penyisihan'],
            ['date' => '2025-08-20', 'event' => 'Selesai CTF & ML Semifinal'],
            ['date' => '2025-08-26', 'event' => 'Deadline Web Dev & Logo Design'],
            ['date' => '2025-08-29', 'event' => 'Pengumuman Top 5 Web Dev & Top 3 Logo'],
            ['date' => '2025-08-30', 'event' => 'Seminar, Final & Awarding (UNIKOM)']
        ];

        return view('pages.timeline', compact('timeline'));
    }

    public function registration()
    {
        return view('pages.registration');
    }

    public function faq()
    {
        $faqs = [
            [
                'question' => 'Siapa yang bisa mengikuti Innoventure Unikom 2025?',
                'answer' => 'Mahasiswa aktif dari seluruh Indonesia, baik individu maupun tim.'
            ],
            [
                'question' => 'Berapa biaya pendaftaran?',
                'answer' => 'Pendaftaran gratis untuk semua kategori lomba.'
            ],
            [
                'question' => 'Bagaimana cara mendaftar?',
                'answer' => 'Daftar melalui form online di halaman pendaftaran website ini.'
            ]
        ];

        return view('pages.faq', compact('faqs'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function contactStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'copyEmail' => 'boolean'
        ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
            'copy_email' => $request->has('copyEmail')
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Pesan berhasil dikirim! Kami akan merespon dalam 24 jam.'
        ]);
    }
}
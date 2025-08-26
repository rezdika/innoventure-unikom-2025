<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompetitionController extends Controller
{
    public function show($id)
    {
        // Mock data - dalam aplikasi nyata, ambil dari database
        $competitions = [
            1 => [
                'id' => 1,
                'title' => 'Web Development Challenge',
                'category' => 'technology',
                'date' => '19-30 Agustus 2025',
                'start_date' => '19 Agustus 2025',
                'end_date' => '30 Agustus 2025',
                'registration_deadline' => '22 Agustus 2025',
                'submission_deadline' => '26 Agustus 2025',
                'prize' => 'Rp 10.000.000',
                'participants' => 100,
                'status' => 'open',
                'description' => 'Buat aplikasi web inovatif yang menyelesaikan masalah dunia nyata. Tantangan ini fokus pada teknologi web modern dan pengalaman pengguna.',
                'requirements' => [
                    'Desain responsif yang bekerja di semua perangkat',
                    'Menggunakan framework web modern (React, Vue, Angular, dll)',
                    'Kode yang bersih dan terdokumentasi dengan baik',
                    'Solusi inovatif untuk masalah nyata',
                    'Aplikasi siap deploy'
                ],
                'timeline' => [
                    ['date' => '11 Agustus 2025', 'event' => 'Pendaftaran Dibuka'],
                    ['date' => '22 Agustus 2025', 'event' => 'Pendaftaran Ditutup'],
                    ['date' => '19 Agustus 2025', 'event' => 'Kompetisi Dimulai'],
                    ['date' => '26 Agustus 2025', 'event' => 'Deadline Submission'],
                    ['date' => '30 Agustus 2025', 'event' => 'Pengumuman Pemenang']
                ],
                'prize_breakdown' => [
                    ['position' => 'Juara 1', 'amount' => 'Rp 1.500.000'],
                    ['position' => 'Juara 2', 'amount' => 'Rp 1.000.000'],
                    ['position' => 'Juara 3', 'amount' => 'Rp 500.000']
                ],

                'image' => 'programming.jpg'
            ],
            2 => [
                'id' => 2,
                'title' => 'Sayembara Logo VIZION',
                'category' => 'design',
                'date' => '19-30 Agustus 2025',
                'start_date' => '19 Agustus 2025',
                'end_date' => '30 Agustus 2025',
                'registration_deadline' => '22 Agustus 2025',
                'submission_deadline' => '26 Agustus 2025',
                'prize' => 'Rp 10.000.000',
                'participants' => 100,
                'status' => 'open',
                'description' => 'Desain logo untuk VIZION yang mencerminkan inovasi dan teknologi masa depan.',
                'requirements' => [
                    'Logo original dan belum pernah dipublikasikan',
                    'Format file: AI, EPS, PNG (300 DPI)',
                    'Logo dapat digunakan dalam berbagai media',
                    'Menyertakan konsep dan filosofi desain',
                    'Tidak mengandung unsur SARA atau konten negatif'
                ],
                'timeline' => [
                    ['date' => '11 Agustus 2025', 'event' => 'Pendaftaran Dibuka'],
                    ['date' => '22 Agustus 2025', 'event' => 'Pendaftaran Ditutup'],
                    ['date' => '19 Agustus 2025', 'event' => 'Kompetisi Dimulai'],
                    ['date' => '26 Agustus 2025', 'event' => 'Deadline Submission'],
                    ['date' => '30 Agustus 2025', 'event' => 'Pengumuman Pemenang']
                ],
                'prize_breakdown' => [
                    ['position' => 'Juara 1', 'amount' => 'Rp 1.500.000'],
                    ['position' => 'Juara 2', 'amount' => 'Rp 1.000.000'],
                    ['position' => 'Juara 3', 'amount' => 'Rp 500.000']
                ],
                'image' => 'logodesign.jpg'
            ],
            3 => [
                'id' => 3,
                'title' => 'Capture The Flag (CTF)',
                'category' => 'security',
                'date' => '19-30 Agustus 2025',
                'start_date' => '19 Agustus 2025',
                'end_date' => '30 Agustus 2025',
                'registration_deadline' => '22 Agustus 2025',
                'submission_deadline' => '26 Agustus 2025',
                'prize' => 'Rp 10.000.000',
                'participants' => 100,
                'status' => 'open',
                'description' => 'Kompetisi cybersecurity dengan berbagai tantangan ethical hacking dan keamanan sistem.',
                'requirements' => [
                    'Peserta individu (1 orang)',
                    'Memiliki pengetahuan dasar cybersecurity',
                    'Laptop dengan tools security yang diperlukan',
                    'Koneksi internet stabil',
                    'Mengikuti kode etik ethical hacking'
                ],
                'timeline' => [
                    ['date' => '11 Agustus 2025', 'event' => 'Pendaftaran Dibuka'],
                    ['date' => '22 Agustus 2025', 'event' => 'Pendaftaran Ditutup'],
                    ['date' => '19 Agustus 2025', 'event' => 'Kompetisi Dimulai'],
                    ['date' => '26 Agustus 2025', 'event' => 'Deadline Submission'],
                    ['date' => '30 Agustus 2025', 'event' => 'Pengumuman Pemenang']
                ],
                'prize_breakdown' => [
                    ['position' => 'Juara 1', 'amount' => 'Rp 1.500.000'],
                    ['position' => 'Juara 2', 'amount' => 'Rp 1.000.000'],
                    ['position' => 'Juara 3', 'amount' => 'Rp 500.000']
                ],
                'image' => 'cyber.jpg'
            ],
            4 => [
                'id' => 4,
                'title' => 'Mobile Legends Tournament',
                'category' => 'gaming',
                'date' => '19-30 Agustus 2025',
                'start_date' => '19 Agustus 2025',
                'end_date' => '30 Agustus 2025',
                'registration_deadline' => '22 Agustus 2025',
                'submission_deadline' => '26 Agustus 2025',
                'prize' => 'Rp 10.000.000',
                'participants' => 100,
                'status' => 'open',
                'description' => 'Turnamen Mobile Legends dengan format tim 5v5 untuk pelajar SMA/SMK se-Jawa Barat.',
                'requirements' => [
                    'Tim terdiri dari 5-6 orang (5 main + 1 substitute)',
                    'Pelajar SMA/SMK se-Jawa Barat',
                    'Smartphone dengan Mobile Legends terbaru',
                    'Koneksi internet stabil',
                    'Fair play dan sportivitas tinggi'
                ],
                'timeline' => [
                    ['date' => '11 Agustus 2025', 'event' => 'Pendaftaran Dibuka'],
                    ['date' => '22 Agustus 2025', 'event' => 'Pendaftaran Ditutup'],
                    ['date' => '19 Agustus 2025', 'event' => 'Kompetisi Dimulai'],
                    ['date' => '26 Agustus 2025', 'event' => 'Deadline Submission'],
                    ['date' => '30 Agustus 2025', 'event' => 'Pengumuman Pemenang']
                ],
                'prize_breakdown' => [
                    ['position' => 'Juara 1', 'amount' => 'Rp 1.500.000'],
                    ['position' => 'Juara 2', 'amount' => 'Rp 1.000.000'],
                    ['position' => 'Juara 3', 'amount' => 'Rp 500.000']
                ],
                'image' => 'mobilelegends.jpg'
            ]
        ];

        $competition = $competitions[$id] ?? abort(404);

        return view('pages.competition-details', compact('competition'));
    }
}
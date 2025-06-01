@extends('layouts.app')

@section('title', 'FAQ - Mentor Kita')

@section('content')
    <style>
        .faq-container {
            min-height: calc(100vh - 64px);
            background-color: #f5f5f5;
            padding: 20px;
            display: flex;
            align-items: flex-start;
            justify-content: center;
            position: relative;
        }
        .faq-left {
            width: 200px;
            margin-right: 20px;
            text-align: center;
        }
        .faq-left img {
            width: 150px;
            margin-bottom: 10px;
        }
        .faq-content {
            flex-grow: 1;
            max-width: 600px;
            position: relative;
        }
        .faq-header h1 {
            font-size: 24px;
            color: #a52a2a; /* Warna merah tua untuk judul */
            margin: 0 0 20px 0;
            font-weight: bold;
        }
        .faq-questions {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .faq-question {
            background-color: #a52a2a; /* Warna merah untuk kotak pertanyaan */
            color: #fff;
            padding: 15px;
            border-radius: 5px;
            font-size: 16px;
            line-height: 1.5;
        }
        .btn-signup {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #a0d911; /* Warna hijau muda untuk tombol */
            color: #333;
            text-decoration: none;
            font-weight: bold;
            border-radius: 20px;
            text-transform: uppercase;
            transition: background-color 0.3s;
        }
        .btn-signup:hover {
            background-color: #8ab417; /* Warna lebih gelap saat hover */
        }
        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            background: linear-gradient(180deg, #d1d5db, #f5f5f5);
            height: 100px;
            display: flex;
            justify-content: center;
            gap: 20px;
            align-items: center;
        }
        .footer .circle {
            width: 50px;
            height: 50px;
            background-color: #d1d5db;
            border-radius: 50%;
        }
        .decoration {
            position: absolute;
            bottom: 110px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 100px;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="50" fill="%23d1d5db"/></svg>') no-repeat;
            background-size: cover;
        }
        .faq-logo-bottom {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 100px;
            height: auto;
        }
        .profile-logo {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #d1d5db; /* Placeholder tanpa gambar */
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            color: #4b5563;
        }
    </style>

    <div class="faq-container">
        <div class="faq-left">
            <img src="{{ asset('images/tes.png') }}" alt="Mentor Kita Logo">
        </div>
        <div class="faq-content">
            <div class="profile-logo">?</div> <!-- Placeholder untuk logo profil -->
            <div class="faq-header">
                <h1>FAQ</h1>
            </div>
            <div class="faq-questions">
                <div class="faq-question">Tentang Mentoring...</div>
                <div class="faq-question">• Apa itu MentorKita? <br> • Bagaimana cara kerja MentorKita?</div>
                <div class="faq-question">Pendaftaran & Akun <br> • Bagaimana cara mendaftar di MentorKita? <br> • Apakah saya bisa menjadi mentor dan mentee sekaligus?</div>
                <div class="faq-question">Sistem Mentoring <br> • Apa saja cara mentor membantu sesi mentoring? <br> • Apakah sesi bimbingan dilakukan secara online atau offline?</div>
                <div class="faq-question">Bagi Mentor... <br> • Bagaimana cara menjadi mentor di MentorKita? <br> • Apakah mentor mendapatkan kompensasi?</div>
                <div class="faq-question">Pembayaran & Biaya <br> • Apakah saya harus membayar untuk mendapatkan mentor? <br> • Bagaimana sistem pembayaran untuk sesi mentoring?</div>
            </div>

@endsection
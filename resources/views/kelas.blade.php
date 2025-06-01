@extends('layouts.app')

@section('title', 'Kelas - Mentor Kita')

@section('content')
    <style>
        .kelas-container {
            min-height: calc(100vh - 64px);
            background-color: #f5f5f5;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .kelas-header {
            text-align: center;
            margin-bottom: 40px;
        }
        .kelas-header h1 {
            font-size: 48px; /* Memperbesar teks header */
            color: #a52a2a; /* Warna merah tua untuk "MATH" */
            margin: 0;
            font-weight: bold;
        }
        .kelas-grid {
            display: grid;
            grid-template-columns: 1fr; /* Mengubah menjadi satu kolom */
            gap: 40px; /* Meningkatkan jarak antar kotak */
            width: 80%; /* Membatasi lebar agar tidak terlalu penuh */
            margin-bottom: 40px;
        }
        .kelas-card {
            background-color: #fff;
            border-radius: 20px; /* Meningkatkan radius sudut */
            padding: 40px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); /* Meningkatkan bayangan */
            height: 70vh; /* Mendekati tinggi layar */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            transition: transform 0.3s ease; /* Efek hover */
        }
        .kelas-card:hover {
            transform: scale(1.02); /* Membesar sedikit saat hover */
        }
        .kelas-card img {
            width: 300px; /* Memperbesar logo */
            height: auto;
            margin-bottom: 20px;
        }
        .btn-start {
            display: inline-block;
            padding: 15px 40px; /* Memperbesar tombol */
            background-color: #d4e157;
            color: #333;
            text-decoration: none;
            font-weight: bold;
            font-size: 18px; /* Memperbesar teks tombol */
            border-radius: 30px;
            transition: background-color 0.3s;
        }
        .btn-start:hover {
            background-color: #c0ca33;
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
    </style>

    <div class="kelas-container">
        <div class="kelas-header">
            <h1>MATH</h1>
        </div>
        <div class="kelas-grid">
            <div class="kelas-card">
                <img src="{{ asset('images/tes.png') }}" alt="Mentor Kita Logo">
            </div>
            <div class="kelas-card">
                <img src="{{ asset('images/tes.png') }}" alt="Mentor Kita Logo">
            </div>
            <div class="kelas-card">
                <img src="{{ asset('images/tes.png') }}" alt="Mentor Kita Logo">
            </div>
        </div>
        <a href="{{ route('register') }}" class="btn-start">Start Now!</a>
    </div>

@endsection
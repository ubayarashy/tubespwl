@extends('layouts.app')

@section('title', 'Dashboard - Mentor Kita')

@section('content')
    <style>
        .dashboard-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 64px); /* Menyesuaikan dengan tinggi navbar */
            background-color: #f5f5f5;
            padding: 20px;
            position: relative;
        }
        .text-section {
            text-align: left;
            max-width: 400px;
            margin-right: 50px;
        }
        .text-section h1 {
            font-size: 48px;
            font-weight: bold;
            color: #e3342f; /* Warna merah untuk "Belajar Seru" */
            margin: 0;
            position: relative;
            line-height: 1.2;
        }
        .text-section h1 span.blue {
            color: #3b82f6; /* Warna biru untuk "Bertumbuh" */
        }
        .text-section h1 span.yellow {
            color: #facc15; /* Warna kuning untuk "Hebat" */
        }
        .text-section h1::before,
        .text-section h1::after {
            content: '*';
            color: #e3342f;
            font-size: 48px;
            position: absolute;
            top: -5px;
        }
        .text-section h1::before {
            left: -30px;
        }
        .text-section h1::after {
            right: -30px;
        }
        .text-section p {
            font-size: 18px;
            color: #6b7280;
            margin-top: 10px;
        }
        .text-section .btn-daftar {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #facc15;
            color: #000;
            text-decoration: none;
            font-weight: bold;
            border-radius: 20px;
            text-transform: uppercase;
        }
        .logo-section {
            position: relative;
        }
        .logo-section .circle {
            width: 300px;
            height: 300px;
            background-color: #fff;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        .logo-section img {
            width: 200px;
        }
        .logo-section .decoration {
            position: absolute;
            width: 340px;
            height: 340px;
            border: 2px solid #d1d5db;
            border-radius: 50%;
            top: -20px;
            left: -20px;
        }
        .logo-section .decoration-rays {
            position: absolute;
            top: -30px;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 0;
            border-left: 20px solid transparent;
            border-right: 20px solid transparent;
            border-bottom: 40px solid #facc15;
        }
        .logo-section .decoration-rays::before,
        .logo-section .decoration-rays::after {
            content: '';
            position: absolute;
            width: 10px;
            height: 40px;
            background-color: #facc15;
        }
        .logo-section .decoration-rays::before {
            left: -15px;
            transform: rotate(30deg);
        }
        .logo-section .decoration-rays::after {
            right: -15px;
            transform: rotate(-30deg);
        }
        .logo-section .decoration-zigzag {
            position: absolute;
            width: 30px;
            height: 30px;
            top: 0;
            right: 20px;
            border-top: 3px solid #60a5fa;
            border-left: 3px solid #60a5fa;
            transform: rotate(45deg);
        }
        .logo-section .decoration-line {
            position: absolute;
            width: 50px;
            height: 10px;
            background-color: #4ade80;
            border-radius: 5px;
            bottom: 30px;
            right: 20px;
            transform: rotate(-30deg);
        }
        .logo-section .decoration-line:nth-child(2) {
            background-color: #f472b6;
            transform: rotate(30deg);
            bottom: 50px;
            right: 10px;
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

    <div class="dashboard-container">
        <div class="text-section">
            <h1><span>*</span>Belajar Seru <span class="blue">Bertumbuh</span> <span class="yellow">Hebat</span><span>*</span></h1>
            <p>tumbuh lebih baik cari pengalamanmu</p>
            <a href="{{ route('register') }}" class="btn-daftar">Daftar Sekarang!</a>
        </div>
        <div class="logo-section">
            <div class="decoration"></div>
            <div class="decoration-rays"></div>
            <div class="decoration-zigzag"></div>
            <div class="decoration-line"></div>
            <div class="decoration-line"></div>
            <div class="circle">
                <img src="{{ asset('images/tes.png') }}" alt="Mentor Kita Logo">
            </div>
        </div>
    </div>

@endsection
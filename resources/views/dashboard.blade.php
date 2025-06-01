@extends('layouts.app')

@section('title', 'Dashboard - Mentor Kita')

@section('content')
    <style>
        .dashboard-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 64px);
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
            color: #e3342f;
            margin: 0;
            position: relative;
            line-height: 1.2;
        }
        .text-section h1 span.blue {
            color: #3b82f6;
        }
        .text-section h1 span.yellow {
            color: #facc15;
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

        /* Section About */
        .about-section {
            background: linear-gradient(135deg, #ff6b6b, #ff9999);
            padding: 80px 20px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .about-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 50px;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"><path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" fill="%23f5f5f5"/><path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" fill="%23f5f5f5"/><path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" fill="%23f5f5f5"/></svg>') no-repeat center;
            background-size: cover;
            transform: rotate(180deg);
        }
        .about-content {
            max-width: 800px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            gap: 50px;
        }
        .about-text {
            flex: 1;
            text-align: left;
        }
        .about-text h2 {
            color: white;
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .about-text p {
            color: white;
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 15px;
        }
        .about-card {
            background: white;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transform: rotate(-5deg);
            position: relative;
        }
        .about-card::before {
            content: '★';
            position: absolute;
            top: -10px;
            left: -10px;
            color: #facc15;
            font-size: 24px;
        }
        .about-card h3 {
            color: #e3342f;
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .about-card p {
            color: #6b7280;
            font-size: 14px;
        }

        /* Quote Section */
        .quote-section {
            background: linear-gradient(180deg, #87CEEB 0%, #5F9FE8 100%);
            padding: 100px 20px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .quote-content {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 10;
        }
        .quote-text {
            font-size: 36px;
            font-weight: bold;
            color: #2d3748;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(255,255,255,0.3);
            line-height: 1.3;
            letter-spacing: 1px;
        }
        .quote-author {
            font-size: 18px;
            color: #2d3748;
            font-style: italic;
            opacity: 0.8;
        }
        
        /* Static Clouds (No Animation) */
        .cloud {
            position: absolute;
            background: white;
            border-radius: 50px;
            opacity: 0.9;
        }
        .cloud::before,
        .cloud::after {
            content: '';
            position: absolute;
            background: white;
            border-radius: 50px;
        }
        .cloud1 {
            width: 120px;
            height: 60px;
            top: 15%;
            left: 10%;
        }
        .cloud1::before {
            width: 80px;
            height: 80px;
            top: -40px;
            left: 20px;
        }
        .cloud1::after {
            width: 60px;
            height: 60px;
            top: -30px;
            right: 15px;
        }
        .cloud2 {
            width: 80px;
            height: 40px;
            top: 60%;
            right: 15%;
        }
        .cloud2::before {
            width: 50px;
            height: 50px;
            top: -25px;
            left: 15px;
        }
        .cloud2::after {
            width: 40px;
            height: 40px;
            top: -20px;
            right: 10px;
        }
        .cloud3 {
            width: 100px;
            height: 50px;
            top: 25%;
            right: 10%;
        }
        .cloud3::before {
            width: 60px;
            height: 60px;
            top: -30px;
            left: 20px;
        }
        .cloud3::after {
            width: 50px;
            height: 50px;
            top: -25px;
            right: 15px;
        }
        .cloud4 {
            width: 90px;
            height: 45px;
            top: 70%;
            left: 20%;
        }
        .cloud4::before {
            width: 55px;
            height: 55px;
            top: -27px;
            left: 18px;
        }
        .cloud4::after {
            width: 45px;
            height: 45px;
            top: -22px;
            right: 12px;
        }
/* Wave dengan Lekukan-lekukan */

/* Quote Section */
.quote-section {
    background: linear-gradient(180deg, #87CEEB 0%, #5F9FE8 100%);
    padding: 100px 20px;
    text-align: center;
    position: relative;
    overflow: visible;
}

/* Wave dengan lekukan tajam (default) */
.quote-section::after {
    content: '';
    position: absolute;
    bottom: -1px;
    left: 0;
    width: 100%;
    height: 80px;
    background: #98B563;
    clip-path: polygon(
        0% 100%, 
        5% 80%, 
        10% 60%, 
        15% 70%, 
        25% 50%, 
        35% 65%, 
        45% 45%, 
        55% 60%, 
        65% 40%, 
        75% 55%, 
        85% 35%, 
        95% 50%, 
        100% 30%, 
        100% 100%
    );
    z-index: 1;
}

/* Wave bulat (lembut dan tidak tajam) */
.bulat-wavy::after {
    content: '';
    position: absolute;
    bottom: -1px;
    left: 0;
    width: 100%;
    height: 60px;
    background: #98B563;
    border-radius: 100% 100% 0 0;
    transform: scaleX(1.5);
    transform-origin: bottom;
    z-index: 1;
}

/* Varian lain (biarkan tetap ada) */
.smooth-wavy::after { ... } /* biarkan seperti semula */
.dramatic-wavy::after { ... }
.organic-wavy::after { ... }
.double-wavy::before { ... }
.double-wavy::after { ... }
.animated-wavy::after { ... }
.soft-curves::after { ... }
.mountain-wavy::after { ... }

/* Responsive waves */
@media (max-width: 768px) {
    .quote-section::after,
    .smooth-wavy::after,
    .dramatic-wavy::after,
    .organic-wavy::after,
    .bulat-wavy::after {
        height: 50px;
    }

    .dramatic-wavy::after {
        height: 70px;
    }

    .mountain-wavy::after {
        height: 60px;
    }
}

@media (max-width: 480px) {
    .quote-section::after,
    .smooth-wavy::after,
    .organic-wavy::after,
    .bulat-wavy::after {
        height: 40px;
    }

    .dramatic-wavy::after {
        height: 50px;
    }

    .mountain-wavy::after {
        height: 45px;
    }
}

/* Usage Instructions:
   Tambahkan class berikut ke .quote-section untuk variasi:
   - Default: otomatis ada lekukan tajam
   - .smooth-wavy: lekukan halus
   - .dramatic-wavy: lekukan dramatic
   - .organic-wavy: lekukan natural banyak
   - .double-wavy: gelombang berlapis
   - .animated-wavy: lekukan bergerak
   - .mountain-wavy: seperti pegunungan
   - .bulat-wavy: ombak bulat dan lembut ✅
*/

        /* Categories Section - Refined & Integrated */
.categories-section {
    background: linear-gradient(180deg, 
 #98B563 0%, 
  #98B563 15%, 
  #98B563 25%, 
         #98B563 40%, 
         #98B563 60%, 
         #98B563 80%, 
        #98B563 100%
    );
    padding: 0;
    text-align: center;
    position: relative;
    min-height: 100vh;
    overflow: hidden;
}

/* Smooth wave transition from previous section */

/* Animated clouds */


/* Flying birds */
.bird {
    position: absolute;
    color: rgba(51, 51, 51, 0.6);
    font-size: 14px;
    animation: flyAcross 35s infinite linear;
    font-family: Arial, sans-serif;
}

.bird1 {
    top: 18%;
    left: -60px;
    animation-delay: 0s;
}

.bird2 {
    top: 22%;
    left: -60px;
    animation-delay: -8s;
}

.bird3 {
    top: 25%;
    left: -60px;
    animation-delay: -16s;
}

@keyframes flyAcross {
    0% { transform: translateX(-60px); }
    100% { transform: translateX(calc(100vw + 60px)); }
}

/* Rolling hills background */

/* Main content */
.categories-content {
    position: relative;
    z-index: 10;
    padding: 120px 20px 60px;
}

.categories-title {
    font-size: clamp(24px, 5vw, 36px);
    font-weight: 800;
    color: #DC143C;
    margin-bottom: 80px;
    text-shadow: 3px 3px 6px rgba(255,255,255,0.6);
    font-family: 'Comic Sans MS', cursive;
    letter-spacing: 2px;
    position: relative;
}

.categories-title::after {
    content: '✨';
    position: absolute;
    right: -40px;
    top: -10px;
    font-size: 0.8em;
    animation: twinkle 2s infinite ease-in-out;
}

@keyframes twinkle {
    0%, 100% { opacity: 0.7; transform: scale(1); }
    50% { opacity: 1; transform: scale(1.2); }
}

.categories-container {
    max-width: 700px;
    margin: 0 auto;
    position: relative;
}

.categories-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-template-rows: repeat(2, 1fr);
    gap: 50px;
    justify-items: center;
    align-items: center;
    margin-bottom: 60px;
    padding: 20px;
}

.category-item {
    width: 160px;
    height: 160px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    color: white;
    font-size: 18px;
    text-transform: uppercase;
    box-shadow: 
        0 10px 25px rgba(0,0,0,0.15),
        0 5px 15px rgba(0,0,0,0.1),
        inset 0 2px 5px rgba(255,255,255,0.3);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    cursor: pointer;
    position: relative;
    font-family: 'Arial', sans-serif;
    letter-spacing: 1px;
    overflow: hidden;
}

.category-item::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    border-radius: 50%;
    background: linear-gradient(135deg, rgba(255,255,255,0.3), transparent);
    opacity: 0;
    transition: opacity 0.3s ease;
}

.category-item:hover::before {
    opacity: 1;
}

.category-item:hover {
    transform: scale(1.15) translateY(-10px);
    box-shadow: 
        0 20px 40px rgba(147, 192, 166, 0.25),
        0 10px 25px rgba(0,0,0,0.15),
        inset 0 2px 5px rgba(255,255,255,0.4);
}

.category-item:active {
    transform: scale(1.05) translateY(-5px);
}

/* Category specific styles */
.category-math {
    background: linear-gradient(135deg, #FF69B4, #FF1493, #DC143C);
    grid-column: 1;
    grid-row: 1;
}

.category-social {
    background: linear-gradient(135deg, #4682B4, #1E90FF, #0066CC);
    grid-column: 2;
    grid-row: 1;
}

.category-math2 {
    background: linear-gradient(135deg, #DC143C, #B22222, #8B0000);
    grid-column: 3;
    grid-row: 1;
    position: relative;
}

.category-math2::after {
    content: '';
    position: absolute;
    top: -5px;
    left: -5px;
    right: -5px;
    bottom: -5px;
    border-radius: 50%;
    border: 3px dashed #DC143C;
    opacity: 0.8;
    animation: rotateBorder 8s infinite linear;
}

@keyframes rotateBorder {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

.category-science {
    background: linear-gradient(135deg, #FFD700, #FFA500, #FF8C00);
    grid-column: 1;
    grid-row: 2;
    position: relative;
}

.category-science::after {
    content: '';
    position: absolute;
    top: -5px;
    left: -5px;
    right: -5px;
    bottom: -5px;
    border-radius: 50%;
    border: 3px dashed #FFD700;
    opacity: 0.8;
    animation: rotateBorder 6s infinite linear reverse;
}

.category-art {
    background: linear-gradient(135deg, #20B2AA, #008B8B, #006666);
    grid-column: 3;
    grid-row: 2;
}

/* Decorative floating flowers */
.flower {
    position: absolute;
    color: rgba(255,255,255,0.9);
    font-size: 32px;
    animation: floatFlower 4s infinite ease-in-out;
    z-index: 5;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
}

.flower1 {
    top: 25%;
    left: 8%;
    animation-delay: 0s;
}

.flower2 {
    top: 30%;
    right: 12%;
    animation-delay: 1s;
}

.flower3 {
    bottom: 35%;
    left: 5%;
    animation-delay: 2s;
}

.flower4 {
    bottom: 40%;
    right: 8%;
    animation-delay: 0.5s;
}

.flower5 {
    top: 45%;
    left: 2%;
    animation-delay: 1.5s;
}

.flower6 {
    top: 50%;
    right: 3%;
    animation-delay: 2.5s;
}

@keyframes floatFlower {
    0%, 100% { 
        transform: translateY(0px) rotate(0deg) scale(1); 
        opacity: 0.8; 
    }
    50% { 
        transform: translateY(-15px) rotate(180deg) scale(1.1); 
        opacity: 1; 
    }
}

/* Responsive design */
@media (max-width: 768px) {
    .categories-content {
        padding: 100px 15px 40px;
    }
    
    .categories-title {
        margin-bottom: 60px;
    }
    
    .categories-grid {
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: repeat(3, 1fr);
        gap: 35px;
        padding: 15px;
    }
    
    .category-item {
        width: 140px;
        height: 140px;
        font-size: 16px;
    }
    
    .category-math2 {
        grid-column: 1;
        grid-row: 2;
    }
    
    .category-science {
        grid-column: 2;
        grid-row: 2;
    }
    
    .category-art {
        grid-column: 1;
        grid-row: 3;
        grid-column-end: 3;
    }
    
    .hill1, .hill2, .hill3 {
        height: 120px;
    }
    
    .cloud1, .cloud2, .cloud3 {
        transform: scale(0.7);
    }
}

@media (max-width: 480px) {
    .categories-grid {
        gap: 25px;
    }
    
    .category-item {
        width: 120px;
        height: 120px;
        font-size: 14px;
    }
    
    .flower {
        font-size: 24px;
    }
}
        /* Contact Section */
        .contact-section {
            background: linear-gradient(135deg, #deb887, #f4a460);
            padding: 80px 20px;
            text-align: center;
            position: relative;
        }
       
        .contact-title {
            font-size: 28px;
            font-weight: bold;
            color: white;
            margin-bottom: 30px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
        }
        .contact-info {
            max-width: 400px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            color: #6b7280;
        }
        .contact-item:last-child {
            margin-bottom: 0;
        }
        .contact-icon {
            width: 20px;
            height: 20px;
            margin-right: 15px;
            border-radius: 50%;
        }
        .icon-red { background-color: #e3342f; }
        .icon-blue { background-color: #3b82f6; }
        .icon-green { background-color: #10b981; }

        /* Wave Background */
        .wave-bg {
            position: relative;
            background: #f5f5f5;
        }
        .wave-bg::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            right: 0;
            height: 40px;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 60"><path d="M0,0 C300,40 600,40 900,20 C1050,10 1125,15 1200,20 L1200,60 L0,60 Z" fill="%23fff"/></svg>') repeat-x;
            background-size: 1200px 60px;
        }
        .wave-top {
            position: relative;
        }
        .wave-top::before {
            content: '';
            position: absolute;
            top: -40px;
            left: 0;
            right: 0;
            height: 40px;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 60"><path d="M0,60 C300,20 600,20 900,40 C1050,50 1125,45 1200,40 L1200,0 L0,0 Z" fill="%23fff"/></svg>') repeat-x;
            background-size: 1200px 60px;
        }

        /* About MentorKita Section */
        .mentorkita-section {
            background: #fff;
            padding: 80px 20px;
            position: relative;
            overflow: hidden;
        }
        .mentorkita-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            gap: 60px;
        }
        .mentorkita-card {
            position: relative;
            background: #e3342f;
            padding: 40px 30px;
            border-radius: 20px;
            transform: rotate(-3deg);
            box-shadow: 0 15px 40px rgba(227, 52, 47, 0.3);
            max-width: 350px;
            flex-shrink: 0;
        }
        .mentorkita-card::before {
            content: '';
            position: absolute;
            top: -15px;
            left: -10px;
            width: 60px;
            height: 80px;
            background: #facc15;
            border-radius: 10px;
            transform: rotate(15deg);
            z-index: -1;
        }
        .mentorkita-card::after {
            content: '📚';
            position: absolute;
            bottom: -20px;
            left: -20px;
            font-size: 40px;
            z-index: 10;
        }
        .mentorkita-card h2 {
            color: white;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .mentorkita-text {
            flex: 1;
            padding-left: 40px;
        }
        .mentorkita-text p {
            font-size: 16px;
            line-height: 1.8;
            color: #4a5568;
            margin-bottom: 20px;
            text-align: justify;
        }
        .mentorkita-text p:last-child {
            margin-bottom: 0;
        }
        
        /* Decorative Elements */
        .triangle-decoration {
            position: absolute;
            top: 20%;
            right: 10%;
            width: 0;
            height: 0;
            border-left: 25px solid transparent;
            border-right: 25px solid transparent;
            border-bottom: 40px solid #facc15;
            opacity: 0.6;
        }
        .circle-decoration {
            position: absolute;
            bottom: 15%;
            right: 5%;
            width: 30px;
            height: 30px;
            background: #3b82f6;
            border-radius: 50%;
            opacity: 0.7;
        }
        .zigzag-decoration {
            position: absolute;
            top: 30%;
            right: 20%;
            width: 40px;
            height: 3px;
            background: #10b981;
            transform: rotate(15deg);
            opacity: 0.6;
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

        @media (max-width: 768px) {
            .dashboard-container {
                flex-direction: column;
                text-align: center;
            }
            .text-section {
                margin-right: 0;
                margin-bottom: 30px;
            }
            .text-section h1 {
                font-size: 36px;
            }
            .mentorkita-content {
                flex-direction: column;
                gap: 30px;
                text-align: center;
            }
            .mentorkita-text {
                padding-left: 0;
            }
            .mentorkita-card {
                transform: rotate(0deg);
                margin: 0 auto;
            }
            .quote-text {
                font-size: 24px;
            }
            .about-content {
                flex-direction: column;
                gap: 30px;
            }
            .categories-grid {
                gap: 20px;
            }
            .category-item {
                width: 100px;
                height: 100px;
                font-size: 14px;
            }
        }
    </style>

    <!-- Hero Section -->
    <div class="dashboard-container wave-bg">
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

    <!-- About MentorKita Section -->
    <div class="mentorkita-section wave-top">
        <div class="triangle-decoration"></div>
        <div class="circle-decoration"></div>
        <div class="zigzag-decoration"></div>
        <div class="mentorkita-content">
            <div class="mentorkita-card">
                <h2>Apa itu<br>MentorKita?</h2>
            </div>
            <div class="mentorkita-text">
                <p>MentorKita adalah platform bimbingan yang menghubungkan individu dengan mentor berpengalaman sesuai dengan kebutuhan dan minat mereka. Dari akademik hingga profesional, kami hadir untuk membantu setiap orang mencapai potensi terbaiknya.</p>
                <p>Dari keterampilan akademik hingga kreativitas dan soft skills, MentorKita membantu anak-anak siap menghadapi masa depan dengan percaya diri.</p>
            </div>
        </div>
    </div>

    <!-- Quote Section -->
    <div class="quote-section">
        <div class="cloud cloud1"></div>
        <div class="cloud cloud2"></div>
        <div class="cloud cloud3"></div>
        <div class="cloud cloud4"></div>
        <div class="quote-content">
            <div class="quote-text">"A WINNER IS A DREAMER WHO NEVER GIVES UP"</div>
            <div class="quote-author">—Nelson Mandela</div>
        </div>
    </div>

    



    <!-- Categories Section -->
<div class="categories-section">
    <!-- Animated Sky Elements -->
    <div class="cloud cloud1"></div>
    <div class="cloud cloud2"></div>
    <div class="cloud cloud3"></div>
    
    <!-- Flying Birds -->
    <div class="bird bird1">⌃</div>
    <div class="bird bird2">⌃</div>
    <div class="bird bird3">⌃</div>
    
    <!-- Rolling Hills Background -->
    <div class="hills-bg">
        <div class="hill hill1"></div>
        <div class="hill hill2"></div>
        <div class="hill hill3"></div>
    </div>
    
    <!-- Main Content -->
    <div class="categories-content">
        <h1 class="categories-title">MAU BELAJAR APA HARI INI?</h1>
        
        <div class="categories-container">
            <!-- Floating Decorative Flowers -->
            <div class="flower flower1">✿</div>
            <div class="flower flower2">❀</div>
            <div class="flower flower3">✻</div>
            <div class="flower flower4">❀</div>
            <div class="flower flower5">✿</div>
            <div class="flower flower6">✻</div>
            
            <!-- Categories Grid -->
            <div class="categories-grid">
                <div class="category-item category-math" onclick="selectCategory('MATH')">
                    MATH
                </div>
                <div class="category-item category-social" onclick="selectCategory('SOCIAL')">
                    SOCIAL
                </div>
                <div class="category-item category-math2" onclick="selectCategory('MATH 2')">
                    MATH 2
                </div>
                <div class="category-item category-science" onclick="selectCategory('SCIENCE')">
                    SCIENCE
                </div>
                <div class="category-item category-art" onclick="selectCategory('ART')">
                    ART
                </div>
                <!-- Wave Separator -->
<div class="wave-container">
    <svg viewBox="0 0 1440 320">
        <path fill="#ffffff" fill-opacity="1" d="M0,224L48,218.7C96,213,192,203,288,181.3C384,160,480,128,576,106.7C672,85,768,75,864,96C960,117,1056,171,1152,181.3C1248,192,1344,160,1392,144L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
    </svg>
</div>

            </div>
        </div>
    </div>
</div>

    <!-- Contact Section -->
    <div class="contact-section">
        <div class="contact-title">Hubungi Kami!</div>
        <div class="contact-info">
            <div class="contact-item">
                <div class="contact-icon icon-red"></div>
                <span>admin@mentorkita.com</span>
            </div>
            <div class="contact-item">
                <div class="contact-icon icon-blue"></div>
                <span>+62 812-3456-7890</span>
            </div>
            <div class="contact-item">
                <div class="contact-icon icon-green"></div>
                <span>www.mentorkita.com</span>
            </div>
        </div>
    </div>

@endsection
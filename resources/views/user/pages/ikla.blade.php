@extends('user.layouts.master')
@section('content')
    <header class="banner-header">
        <div class="header-container">
            <h1 class="main-title">Xalqaro Qiyosiy Adabiyotshunoslik Assotsiatsiyasi</h1>
            <p class="subtitle">(ICLA)</p>
        </div>
    </header>

    <main class="content-area">
        <section class="block-intro sparkle-box">
            <h2 class="section-title">ICLA haqida</h2>
            <p class="text-body">1955 yilda tashkil etilgan ICLA butun dunyo bo'ylab qiyosiy olimlarni birlashtiradi va ularning hamkorligini qo'llab-quvvatlaydi.</p>
        </section>

        <section class="block-events gradient-box">
            <h2 class="section-title">Kongresslar</h2>
            <p class="text-body">Har uch yilda bir marta ICLA Butunjahon Kongressini o'tkazadi. Navbatdagi Kongress 2025 yil 28 iyul – 1 avgust kunlari Seul shahrida bo'lib o'tadi.</p>
            <a href="https://icla2025-seoul.kr/en" target="_blank" class="fancy-link">Ro'yxatdan o'tish</a>
        </section>

        <section class="block-committees shadow-box">
            <h2 class="section-title">Tadqiqot Qo'mitalari</h2>
            <div class="list-wrapper">
                <h3 class="list-heading">Doimiy qo'mitalar:</h3>
                <ul class="fancy-list">
                    <li>Evropa tillaridagi adabiyotlarning qiyosiy tarixi</li>
                    <li>Janubiy Osiyo adabiyoti va madaniyati</li>
                    <li>Komikslar va grafik rivoyat</li>
                </ul>
                <h3 class="list-heading">Qisqa muddatli qo'mitalar:</h3>
                <ul class="fancy-list">
                    <li>Adabiyot, san'at va OAV</li>
                    <li>Afrika adabiyotlarini qiyosiy tahlil qilish</li>
                </ul>
            </div>
        </section>

        <section class="block-contact diamond-box">
            <h2 class="section-title">Aloqa</h2>
            <p class="text-body">ICLA haqida batafsil ma'lumot olish uchun quyidagi rasmiy veb-saytga tashrif buyuring:</p>
            <a href="https://www.ailc-icla.org/" target="_blank" class="fancy-link">ICLA Rasmiy Sayti</a>
        </section>
    </main>

@endsection

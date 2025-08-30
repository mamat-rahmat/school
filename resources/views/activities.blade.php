@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-5">Aktivitas Sekolah</h1>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('images/academic.jpeg') }}" class="card-img-top activity-img" alt="Academic Activities">
                <div class="card-body">
                    <h5 class="card-title">Program Akademik Unggulan</h5>
                    <p class="card-text">Program akademik khusus kami membantu siswa mencapai potensi penuh mereka melalui kesempatan belajar tingkat lanjut dan bimbingan yang dipersonalisasi.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('images/sports.jpg') }}" class="card-img-top activity-img" alt="Sports Activities">
                <div class="card-body">
                    <h5 class="card-title">Program Pengembangan Olahraga</h5>
                    <p class="card-text">Program olahraga komprehensif meliputi sepak bola, bola basket, renang, dan atletik untuk mengembangkan kebugaran fisik dan semangat tim.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('images/arts.jpeg') }}" class="card-img-top activity-img" alt="Arts Activities">
                <div class="card-body">
                    <h5 class="card-title">Program Seni & Budaya</h5>
                    <p class="card-text">Pameran seni, pertunjukan musik, dan festival budaya rutin untuk mengembangkan kreativitas dan ekspresi artistik.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('images/organizations.jpeg') }}" class="card-img-top activity-img" alt="Student Organizations">

                <div class="card-body">
                    <h5 class="card-title">Organisasi Siswa</h5>
                    <p class="card-text">Berbagai klub dan organisasi siswa yang mengembangkan jiwa kepemimpinan, kerja sama tim, dan tanggung jawab sosial.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('images/community.jpg') }}" class="card-img-top activity-img" alt="Community Service">

                <div class="card-body">
                    <h5 class="card-title">Program Pengabdian Masyarakat</h5>
                    <p class="card-text">Kegiatan pelayanan masyarakat rutin yang membantu siswa mengembangkan rasa empati dan kesadaran sosial.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('images/events.jpeg') }}" class="card-img-top activity-img" alt="Special Events">

                <div class="card-body">
                    <h5 class="card-title">Acara Khusus</h5>
                    <p class="card-text">Festival sekolah tahunan, pameran sains, dan perayaan khusus yang menyatukan komunitas sekolah kami.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

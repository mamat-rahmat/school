@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-5 fw-bold">Aktivitas Sekolah</h1>

    @php
    $activities = [
        [
            'image' => 'academic.jpeg',
            'alt' => 'Academic Activities',
            'title' => 'Program Akademik Unggulan',
            'description' => 'Program akademik khusus kami membantu siswa mencapai potensi penuh mereka melalui kesempatan belajar tingkat lanjut dan bimbingan yang dipersonalisasi.'
        ],
        [
            'image' => 'sports.jpg',
            'alt' => 'Sports Activities',
            'title' => 'Program Pengembangan Olahraga',
            'description' => 'Program olahraga komprehensif meliputi sepak bola, bola basket, renang, dan atletik untuk mengembangkan kebugaran fisik dan semangat tim.'
        ],
        [
            'image' => 'arts.jpeg',
            'alt' => 'Arts Activities',
            'title' => 'Program Seni & Budaya',
            'description' => 'Pameran seni, pertunjukan musik, dan festival budaya rutin untuk mengembangkan kreativitas dan ekspresi artistik.'
        ],
        [
            'image' => 'organizations.jpeg',
            'alt' => 'Student Organizations',
            'title' => 'Organisasi Siswa',
            'description' => 'Berbagai klub dan organisasi siswa yang mengembangkan jiwa kepemimpinan, kerja sama tim, dan tanggung jawab sosial.'
        ],
        [
            'image' => 'community.jpg',
            'alt' => 'Community Service',
            'title' => 'Program Pengabdian Masyarakat',
            'description' => 'Kegiatan pelayanan masyarakat rutin yang membantu siswa mengembangkan rasa empati dan kesadaran sosial.'
        ],
        [
            'image' => 'events.jpeg',
            'alt' => 'Special Events',
            'title' => 'Acara Khusus',
            'description' => 'Festival sekolah tahunan, pameran sains, dan perayaan khusus yang menyatukan komunitas sekolah kami.'
        ]
    ];
    @endphp

    <div class="row g-4">
        @foreach($activities as $activity)
        <div class="col-md-4">
            <div class="card h-100 shadow-sm hover-shadow">
                <img src="{{ asset('images/' . $activity['image']) }}" class="card-img-top activity-img" alt="{{ $activity['alt'] }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $activity['title'] }}</h5>
                    <p class="card-text">{{ $activity['description'] }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection

@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1 class="text-center mb-5 fw-bold">Berita Terkini</h1>

        @php
            $news = [
                (object)[
                    'title' => 'Pengumuman Penerimaan Siswa Baru 2024',
                    'created_at' => \Carbon\Carbon::create(2024, 3, 15),
                    'content' => 'Pendaftaran siswa baru tahun ajaran 2024/2025 telah dibuka. Silakan mendaftar di kantor sekolah.'
                ],
                (object)[
                    'title' => 'Jadwal Ujian Semester Genap',
                    'created_at' => \Carbon\Carbon::create(2024, 3, 10),
                    'content' => 'Ujian semester genap akan dilaksanakan mulai tanggal 1 April 2024.'
                ],
                (object)[
                    'title' => 'Kegiatan Ekstrakurikuler Baru',
                    'created_at' => \Carbon\Carbon::create(2024, 3, 5),
                    'content' => 'Sekolah membuka pendaftaran untuk ekstrakurikuler robotika dan bahasa Jepang.'
                ]
            ];
        @endphp

        <div class="row justify-content-center">
            <div class="col-md-10">
                @forelse($news as $item)
                    <div class="card mb-4 shadow-sm border-0 hover-shadow">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h3 class="card-title mb-0">{{ $item->title }}</h3>
                                <span class="badge bg-secondary">{{ $item->created_at->format('d M Y') }}</span>
                            </div>
                            <div class="news-content">
                                <p class="card-text text-muted">{{ $item->content }}</p>
                            </div>
                            {{-- <div class="text-end">
                                <a href="#" class="btn btn-outline-primary btn-sm">Baca selengkapnya</a>
                            </div> --}}
                        </div>
                    </div>
                @empty
                    <div class="alert alert-info text-center">
                        <i class="fas fa-info-circle me-2"></i>Belum ada berita tersedia.
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0"><i class="fas fa-info-circle me-2"></i>Tentang Kami</h5>
            </div>
            <div class="card-body">
                <p>SMPN 1 Bandung adalah salah satu sekolah menengah pertama negeri unggulan yang berlokasi di pusat Kota Bandung. Didirikan pada tahun 1950, sekolah kami telah berkomitmen untuk memberikan pendidikan berkualitas tinggi selama lebih dari 70 tahun.</p>
                <p>Dengan visi menjadi lembaga pendidikan yang unggul dalam prestasi akademik dan non-akademik, SMPN 1 Bandung terus mengembangkan program-program inovatif yang mendukung perkembangan siswa secara holistik. Sekolah kami dilengkapi dengan fasilitas modern, termasuk laboratorium sains, perpustakaan digital, dan ruang multimedia.</p>
                <p>Didukung oleh tim pengajar yang berpengalaman dan berkualifikasi tinggi, kami berkomitmen untuk mempersiapkan siswa-siswi kami menghadapi tantangan masa depan. Prestasi akademik dan non-akademik yang telah diraih oleh siswa-siswi kami di tingkat kota, provinsi, nasional, bahkan internasional menjadi bukti nyata dedikasi kami dalam dunia pendidikan.</p>
            </div>
        </div>

        <div class="mt-4">
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0"><i class="fas fa-info-circle me-2"></i>Informasi Kontak</h5>
                </div>
                <div class="card-body">
                    <div class="mb-4">
                        <h6 class="fw-bold text-primary">
                            <i class="fas fa-map-marker-alt me-2"></i>Alamat
                        </h6>
                        <p class="mb-0 text-muted">
                            Jl. Kesatriaan No.12, Arjuna<br>
                            Kec. Cicendo, Kota Bandung<br>
                            Jawa Barat 40172
                        </p>
                    </div>
                    
                    <div class="mb-4">
                        <h6 class="fw-bold text-primary">
                            <i class="fas fa-phone me-2"></i>Telepon
                        </h6>
                        <p class="mb-0 text-muted">
                            <a href="tel:+622270123456" class="text-decoration-none">(022) 7012-3456</a>
                        </p>
                    </div>
                    
                    <div class="mb-4">
                        <h6 class="fw-bold text-primary">
                            <i class="fas fa-envelope me-2"></i>Email
                        </h6>
                        <p class="mb-0 text-muted">
                            <a href="mailto:info@smpn1bandung.sch.id" class="text-decoration-none">info@smpn1bandung.sch.id</a>
                        </p>
                    </div>
                    
                    <div class="mb-4">
                        <h6 class="fw-bold text-primary">
                            <i class="fas fa-clock me-2"></i>Jam Operasional
                        </h6>
                        <p class="mb-1 text-muted"><strong>Senin - Jumat:</strong> 07:00 - 15:00</p>
                        <p class="mb-0 text-muted"><strong>Sabtu:</strong> 07:00 - 12:00</p>
                    </div>
                    
                    <div class="mb-0">
                        <h6 class="fw-bold text-primary">
                            <i class="fas fa-share-alt me-2"></i>Media Sosial
                        </h6>
                        <div class="d-flex gap-2">
                            <a href="#" class="btn btn-outline-primary btn-sm">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="btn btn-outline-info btn-sm">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="btn btn-outline-danger btn-sm">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="btn btn-outline-success btn-sm">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card shadow-sm mt-4">
                <div class="card-header bg-info text-white">
                    <h5 class="mb-0"><i class="fas fa-map me-2"></i>Lokasi Sekolah</h5>
                </div>
                <div class="card-body p-0">
                    <div class="ratio ratio-16x9">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.0!2d107.6!3d-6.9!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwNTQnMDAuMCJTIDEwN8KwMzYnMDAuMCJF!5e0!3m2!1sen!2sid!4v1234567890" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

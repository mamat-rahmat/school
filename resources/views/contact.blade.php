@extends('layouts.app')

@section('content')
        <!-- Formulir Kontak -->
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0"><i class="fas fa-envelope me-2"></i>Formulir Kontak</h4>
                </div>
                <div class="card-body">
                    <p class="text-muted mb-4">Silakan isi formulir di bawah ini untuk menghubungi kami. Kami akan merespons pesan Anda sesegera mungkin.</p>
                    
                    <form id="contactForm" action="#" method="POST" onsubmit="return validateForm()">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="nama" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                                <div class="invalid-feedback" id="namaError"></div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="email" name="email" required>
                                <div class="invalid-feedback" id="emailError"></div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="telepon" class="form-label">Nomor Telepon</label>
                                <input type="tel" class="form-control" id="telepon" name="telepon">
                                <div class="invalid-feedback" id="teleponError"></div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="subjek" class="form-label">Subjek <span class="text-danger">*</span></label>
                                <select class="form-select" id="subjek" name="subjek" required>
                                    <option value="">Pilih Subjek</option>
                                    <option value="informasi_umum">Informasi Umum</option>
                                    <option value="pendaftaran">Pendaftaran Siswa Baru</option>
                                    <option value="akademik">Akademik</option>
                                    <option value="ekstrakurikuler">Ekstrakurikuler</option>
                                    <option value="fasilitas">Fasilitas Sekolah</option>
                                    <option value="lainnya">Lainnya</option>
                                </select>
                                <div class="invalid-feedback" id="subjekError"></div>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="pesan" name="pesan" rows="5" placeholder="Tulis pesan Anda di sini..." required></textarea>
                            <div class="invalid-feedback" id="pesanError"></div>
                        </div>
                        
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="fas fa-paper-plane me-2"></i>Kirim Pesan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection

@push('scripts')
<script src="{{ asset('js/contact-form.js') }}"></script>
@endpush

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>{{ __('Daftar Kontak Masuk') }}</h4>
                    <small class="text-muted">Total: {{ $contacts->total() }} kontak</small>
                </div>

                <div class="card-body">
                    @if($contacts->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="table-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Subjek</th>
                                        <th>Pesan</th>
                                        <th>Tanggal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($contacts as $contact)
                                    <tr>
                                        <td>{{ $loop->iteration + ($contacts->currentPage() - 1) * $contacts->perPage() }}</td>
                                        <td>
                                            <strong>{{ $contact->name }}</strong>
                                        </td>
                                        <td>
                                            <a href="mailto:{{ $contact->email }}" class="text-decoration-none">
                                                {{ $contact->email }}
                                            </a>
                                        </td>
                                        <td>
                                            <span class="badge bg-primary">{{ $contact->subject }}</span>
                                        </td>
                                        <td>
                                            <div class="message-preview" style="max-width: 300px;">
                                                {{ Str::limit($contact->message, 100) }}
                                                @if(strlen($contact->message) > 100)
                                                    <button class="btn btn-sm btn-link p-0 ms-1" 
                                                            data-bs-toggle="modal" 
                                                            data-bs-target="#messageModal{{ $contact->id }}">
                                                        Lihat Selengkapnya
                                                    </button>
                                                @endif
                                            </div>
                                        </td>
                                        <td>
                                            <small class="text-muted">
                                                {{ $contact->created_at->format('d/m/Y H:i') }}
                                                <br>
                                                <em>{{ $contact->created_at->diffForHumans() }}</em>
                                            </small>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <button class="btn btn-sm btn-outline-info" 
                                                        data-bs-toggle="modal" 
                                                        data-bs-target="#messageModal{{ $contact->id }}">
                                                    <i class="fas fa-eye"></i> Detail
                                                </button>
                                                <a href="mailto:{{ $contact->email }}?subject=Re: {{ $contact->subject }}" 
                                                   class="btn btn-sm btn-outline-success">
                                                    <i class="fas fa-reply"></i> Balas
                                                </a>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- Modal untuk pesan lengkap -->
                                    <div class="modal fade" id="messageModal{{ $contact->id }}" tabindex="-1">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Detail Kontak dari {{ $contact->name }}</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <strong>Nama:</strong><br>
                                                            {{ $contact->name }}
                                                        </div>
                                                        <div class="col-md-6">
                                                            <strong>Email:</strong><br>
                                                            <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <strong>Subjek:</strong><br>
                                                            {{ $contact->subject }}
                                                        </div>
                                                        <div class="col-md-6">
                                                            <strong>Tanggal:</strong><br>
                                                            {{ $contact->created_at->format('d F Y, H:i') }}
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <strong>Pesan:</strong><br>
                                                    <div class="border p-3 bg-light rounded">
                                                        {!! nl2br(e($contact->message)) !!}
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="mailto:{{ $contact->email }}?subject=Re: {{ $contact->subject }}" 
                                                       class="btn btn-success">
                                                        <i class="fas fa-reply"></i> Balas Email
                                                    </a>
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination -->
                        <div class="d-flex justify-content-center mt-4">
                            {{ $contacts->links() }}
                        </div>
                    @else
                        <div class="text-center py-5">
                            <i class="fas fa-inbox fa-3x text-muted mb-3"></i>
                            <h5 class="text-muted">Belum ada kontak masuk</h5>
                            <p class="text-muted">Kontak yang dikirim melalui form akan muncul di sini.</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    // Auto refresh setiap 30 detik
    setTimeout(function(){
        location.reload();
    }, 30000);
</script>
@endsection
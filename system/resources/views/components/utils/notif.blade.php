@foreach(['success', 'warning', 'danger', 'primary', 'info'] as $status)
    @if(session($status))
    <div class="alert alert-{{ $status }} alert-dismissible fade show" role="alert">
        <center><strong>Selesai !!</strong> {{ session($status) }}</center>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
@endforeach


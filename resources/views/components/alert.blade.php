@if(session('success'))
    <div class="alert alert-success success-msg fixed-top" role="alert">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-warning error-msg fixed-top" role="alert">
        {{ session('error') }}
    </div>
@endif

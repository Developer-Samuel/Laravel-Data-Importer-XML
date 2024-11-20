@if(session()->has('success'))
<div class="alert alert-success">
    <div class="message">
        {{ session('success') }}
    </div>
</div>
@endif

@if(session()->has('error'))
<div class="alert alert-error">
    <div class="message">
        {{ session('error') }}
    </div>
</div>
@endif

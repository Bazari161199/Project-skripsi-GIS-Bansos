@if(session()->has('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if(session()->has('info'))
    <div class="alert alert-info">{{ session('info') }}</div>
@endif

@if(session()->has('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif

@if(session()->has('errors'))
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>    
            @endforeach
        </ul>
    </div>
@endif

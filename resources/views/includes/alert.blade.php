@if (session('status'))
    <div class="alert alert-{{ session('msg') ? session('status') : 'success' }}" role="alert">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session('msg') ?? session('status') }}
    </div>
@endif
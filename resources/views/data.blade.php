@foreach ($posts as $post)
<div class="col-4">
    <div class="card">
        <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $post->id }} : {{ $post->title }}</h5>
            <p class="card-text">{!! $post->body !!}</p>
        </div>
    </div>
</div>
@endforeach
@foreach(\App\Products::all() as $key)

    <div>
        <img  style="width: 300px" src="{{ $key->image }}" alt="">
        <h1>{{ $key->title }}</h1>
        <h1>{{ $key->price }} amd</h1>
        <p style="width: 200px;">{{ $key->description }}</p>

@endforeach
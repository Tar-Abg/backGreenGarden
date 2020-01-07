<form action="add_product" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="text" name="title">
    <input type="text" name="price">
    <textarea name="description" id="" cols="30" rows="10"></textarea>
    {{ csrf_field() }}
    <input type="submit">
</form>



@foreach(\App\Products::all() as $key)

    <form action="delete_product" method="POST">
        <h1>{{ $key->title }}</h1>
        <img src="{{ $key->image }}" style="width: 100px" alt="">
        <p>{{ $key->description }}</p>
        <p>{{ $key->price }}</p>
        <input type="text" name="id" value="{{ $key->id }}">
        <input type="submit">
        {{ csrf_field() }}

    </form>

@endforeach
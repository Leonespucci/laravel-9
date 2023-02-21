<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Edit || {{$posts->title}}</title>
    <link rel="stylesheet"
        href="{{ asset('bootstrap/css/bootstrap.min.css') }}"integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
        crossorigin="anonymous">
</head>

<body>
<div class="container">
    <h1>Ubah Postingan</h1>
    <form method="POST" action="{{ url("posts/{$posts->id}") }}" class="form-control">
    @csrf
    @method('PATCH')
        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$posts->title}}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Konten</label>
            <textarea name="content" id="content" class="form-control" cols="30" rows="10">{{$posts->content}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <br>
        <br>
        <a href="{{ url("posts") }}" class="mt-lg-5"><=back</a>
    </form>

</div>
<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"
integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>
</body>

</html>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link rel="stylesheet"
        href="{{ asset('bootstrap/css/bootstrap.min.css') }}"integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
        crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="mt-4">
            habar urang cempaka
            <a href="{{ url('posts/create') }}" class="btn btn-info">+Buat Postingan</a>
        </h1>
        {{-- <p>{{$hello}}</p> memanggil array dari sebuah function --}}

        @foreach ($posts as $post)
            {{-- foreach di laravel menggunakan @ --}}
            <div class="card mt-5">
                <div class="card-header">
                    <h5 class="card-title">{{ $post->title }}</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">{{ $post->content }}</p>
                    <a href="{{ url("posts/$post->id")}}" class="btn btn-primary">Selengkapnya...</a>
                    <a href="{{ url("posts/$post->id/edit")}}" class="btn btn-warning">edit</a>
                    <p class="card-text"><small class="text-muted">Last updated at {{ date("d M Y H:i",strtotime($post->updated_at) )  }}</small></p>
                </div>
            </div>
            <h2></h2>
            <p></p>
        @endforeach
    </div>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    </body>

    </html>


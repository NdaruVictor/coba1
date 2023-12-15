<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyData</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body style="background: lightgray">
    <div class="sidebar">
        <a class="active" href="#home">Dashboard</a>
        <a href="{{route('posts.index')}}">Post</a>
        <a href="{{ route('recipes.index') }}">Recipe</a>
    </div>


      <div class="content">
        <div class="container mt-5">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div>
                        <h3 class="text-center my-4">HALAMAN SHOW POST</h3>
                        <hr>
                    </div>
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100 overflow-x-auto">
                        <div class="ms-3">
                            <p href="">Image :</p>
                            <img src="{{ asset('storage/posts/'.$post->image) }}" width="100px" class="img-fluid" alt="...">
                        </div>
                        <div class="ms-3">
                            <p href="">Judul :</p>
                            <p>{{$post->title}}</p>
                        </div>
                        <div class="ms-3">
                            <p href="">Content :</p>
                            <p> {!!$post->content!!} </p>
                        </div>
                        <div class="ms-3">
                            <a href="/posts" class="btn btn-dark">Back</a>
                        </div>
                        </div>
                    </div>
                </div>
             </div>
        </div>
      </div>

</body>

</html>

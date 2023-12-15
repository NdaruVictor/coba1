<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Post</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body style="background: lightgray">
    <div class="sidebar">
        <a class="active" href="#home">Dashboard</a>
        <a href="{{ route('posts.index') }}">Post</a>
        <a href="{{ route('recipes.index') }}">Recipe</a>
        <a href="{{ route('logout') }}" class="">Logout</a>
    </div>


    <div class="content">
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <h3 class="text-center my-4">HALAMAN CREATE RECIPE</h3>
                        <hr>
                    </div>

                    <div class="card border-0 shadow-sm rounded">
                        <div class="card-body">
                            <form action="{{ route('recipes.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="font-weight-bold">MENU</label>
                                    <select name="post_id" id="post_id" class="form-select form-select-lg mb-3"
                                        aria-label="Large select example"">
                                        @foreach ($posts as $post)
                                            <option value="{{ $post->id }}" @selected(!empty($post) && $post->id == $post->post_id)>
                                                {{ $post->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold">RECIPE</label>
                                    <textarea class="form-control @error('recipe') is-invalid @enderror" name="recipe" rows="5"
                                        placeholder="Masukkan Konten recipe"></textarea>
                                    <!-- error message untuk content -->
                                    @error('recipe')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-md btn-primary">CREATE</button>
                                    <button type="reset" class="btn btn-md btn-warning">RESET</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js">
        < /script > <
        script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" >
    </script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
</body>

</html>

@extends('layout.app')
@section('content')
    <!--Section: Contact v.2-->
    <section class="mb-4 mt-5">

        <!--Section heading-->
        <!-- content produk -->
        <div class="container mt-10">
            <div class="">
                <div class="row row-cols-1 row-cols-md-3 g-4 mt-4 mb-5">
                    @forelse ($posts as $post)
                        <div class="col">
                            <div class="card rounded-0" style="border: 2px solid #F5EEC8;">
                                <img src="{{ asset('/storage/posts/' . $post->image) }}" class="card-img-top rounded-0"
                                    alt="img" style="height: 370px;">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <p class="card-text" style="height: 10px;">{!! $post->content !!}</p>
                                </div>
                                <div class="m-4">
                                    <a href="{{route('recipe.show', $post->id)}}">
                                        <button type="submit" class="btn btn-md btn-primary">Recipe</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="alert alert-danger">
                            Data Kosong
                        </div>
                    @endforelse
                </div>
            </div>
        </div>

    </section>
    <!--Section: Contact v.2-->
@endsection

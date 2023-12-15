@extends('layout.app')

@section('content')
    <section class="container mx-auto mt-5">
        <div class="mx-auto px-4 py-4"> <!-- Updated padding classes -->

            <div class="card shadow p-4 mb-4 bg-white rounded"> <!-- Added Bootstrap card class -->
                 <div class="text-center md:text-left mb-4">
                        <h2 class="h2 font-weight-bold text-dark"> <!-- Updated text classes -->
                            {{ $post->title }}
                        </h2>
                    </div>
                <div class="d-flex justify-content-center align-items-center">
                    <div class="w-50 ml-4"> <!-- Updated width and margin classes -->
                        <img src="{{ asset('storage/posts/' . $post->image) }}" alt="..." class="img-fluid rounded-lg" />
                    </div>
                    <div class="w-50 ml-4"> <!-- Updated width and margin classes -->
                        <div class="p-4">
                            <div style="max-height: 4.8em; overflow: hidden;">
                                <p class="text-dark">
                                    {!! $post->content !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pt-4 d-flex flex-wrap"> <!-- Updated padding class and added flex-wrap class -->
                    <div class="w-50 mr-4"> <!-- Updated width and margin classes -->
                        <h1 class="h3 font-weight-bold text-dark"># Recipe</h1> <!-- Updated text classes -->
                        <div class="pt-2">
                            @foreach ($post->recipes as $recipe)
                                <p class="text-dark">{{ $recipe->recipe }}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

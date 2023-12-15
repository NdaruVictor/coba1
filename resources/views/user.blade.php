@extends('layout.app')
@section('content')
<!-- produk -->
<div class="card text-bg-dark border-0 rounded-0">
    <img src="img/bg2.jpeg" class="card-img" alt="img" height="550px" >
    <div class="card-img-overlay cntn-fasilitas">
      <h5 style="margin-top: 215px; text-align: center; font-size:60px;font-family: 'Dancing Script', cursive; color: #CF714E;" class="card-title">JAWIR FOOD</h5>
      <h6 style="text-align: center; font-size: 27px; font-family:Arial, Helvetica, sans-serif; color: #495E57;" class="card-title">Selamat Datang Di Jawir Food</h6>
    </div>
  </div>

  <div class="container">
  <form action="" method="get">
    <div class="input-group my-4">
      <input type="search" name="keyword" class="form-control" placeholder="Search" aria-describedby="button-addon2">
      <button class="btn btn-warning" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
    </div>
  </form>
</div>

<!-- content produk -->
  <div class="container">
    <div class>
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-4 mb-5">
      @forelse ($posts as $post)
        <div class="col">
          <div class="card rounded-0" style="border: 2px solid #F5EEC8;">
            <img src="{{ asset('/storage/posts/'.$post->image) }}" class="card-img-top rounded-0" alt="img" style="height: 370px;">
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
  @endsection

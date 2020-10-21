@extends('layout.main')

@section('content')

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">
        <h1 class="my-4">Shop Name</h1>
        <div class="list-group">
          <a href="#" class="list-group-item active">Category 1</a>
          <a href="#" class="list-group-item">Category 2</a>
          <a href="#" class="list-group-item">Category 3</a>
        </div>
      </div>
      <!-- /.col-lg-3 -->
      
      <div class="col-lg-9">
      @foreach($products as $product)
        <div class="card mt-4">
        
          <img class="col-lg-6 card-img-top img-fluid" src="{{ $product->image_url }}" alt="">
          <div class="card-body">
            <h3 class="card-title">{{ $product->name }}</h3>
            <h4>{{ $product->net_price }} Ft</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente dicta fugit fugiat hic aliquam itaque facere, soluta. Totam id dolores, sint aperiam sequi pariatur praesentium animi perspiciatis molestias iure, ducimus!</p>
            <form action="/cart" method="POST">
                {{ csrf_field() }}
            <input type="hidden" name="identifier" value=" {{ $product->identifier }} ">
            <input type="hidden" name="name" value=" {{ $product->name }} ">
            <input type="hidden" name="net_price" value=" {{ $product->net_price }} ">
            <button class="btn btn-primary">Kosárba helyezem</button>
            <a href="" class="btn btn-primary">Add hozzá</a>
        </form>
        @endforeach
          </div>
        
        </div>
        
      
      </div>
      <!-- /.col-lg-9 -->

    </div>

  </div>
  <!-- /.container -->
  @endsection
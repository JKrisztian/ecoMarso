@extends('layout.main')

@section('content')

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">
        <h2 class="my-4">Gumi webáruház</h2>
        <div class="list-group">
          
        </div>
        <form action="{{URL('/searchResult')}}" method="GET" role="search">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="text" class="form-control" name="keres"
                    placeholder="Keresés"> <span class="input-group-btn">
                    <button type="submit" class="btn btn-default">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
          </div>
          </form>
          <a href="#" class="list-group-item">Évszak</a>
          <a href="#" class="list-group-item">Méret</a>
          <a href="#" class="list-group-item">Ár</a>
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
            <button class="btn btn-danger">Kosárba helyezem</button>
        </form>
        @endforeach
          </div>
        
        </div>
        
      
      </div>
      <!-- /.col-lg-9 -->

    </div>

  </div>
  <!-- /.container -->
  
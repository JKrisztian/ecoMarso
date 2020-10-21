@extends('layout.main')

    
  @section('content')
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h2 class="my-4">Gumi webáruház</h2>
        <div class="list-group">
          <a href="#" class="list-group-item">Category 1</a>
          <a href="#" class="list-group-item">Category 2</a>
          <a href="#" class="list-group-item">Category 3</a>
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

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">
        
        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
        
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          
          <div class="carousel-inner" role="listbox">
            @foreach($products as $product)
            <div class="carousel-item active">
            
              <img class="d-block img-fluid" src="{{ $product->image_url }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="{{ $product->image_url }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="{{ $product->image_url }}" alt="Third slide">
            </div>
          @endforeach
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
          
        </div>

        <div class="row">
        @foreach($products as $product)
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="/products/{{ $product->identifier }}"><img class="card-img-top" src="{{ $product->image_url }}" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="/products/{{ $product->identifier }}">{{ $product->name }}</a>
                </h4>
                <h5>{{ $product->net_price }}Ft</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>   
                        
            </div>   
            <form action="/cart" method="POST">
                {{ csrf_field() }}
              <input type="hidden" name="identifier" value=" {{ $product->identifier }} ">
              <input type="hidden" name="name" value=" {{ $product->name }} ">
              <input type="hidden" name="net_price" value=" {{ $product->net_price }} ">
              <button class="btn btn-primary">Kosárba helyezem</button>          
          </div>
        @endforeach
        
        </div>
        <!-- /.row -->
        
      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
@endsection
  

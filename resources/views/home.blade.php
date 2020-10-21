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
        <h2 style="text-align:center;">Kiemelt termékek</h2>
       

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
            <form action="/cart" method="POST" >
                {{ csrf_field() }}
              <input type="hidden" name="identifier" value=" {{ $product->identifier }} ">
              <input type="hidden" name="name" value=" {{ $product->name }} ">
              <input type="hidden" name="net_price" value=" {{ $product->net_price }} ">
              <button class="btn btn-danger" >Kosárba helyezem</button>          
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
  

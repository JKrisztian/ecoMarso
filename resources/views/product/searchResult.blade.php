@extends('layout.main')

@section('content')

    <!-- Page Content -->
  <div class="container" style="padding-top:56px;">
  
  <div class="row">

    <div class="col-lg-3">

      <h1 class="my-4">Shop Name</h1>
      <div class="list-group">
        <a href="#" class="list-group-item">Category 1</a>
        <a href="#" class="list-group-item">Category 2</a>
        <a href="#" class="list-group-item">Category 3</a>

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

    </div>
    <!-- /.col-lg-3 -->


    <div class="col-lg-9">      

      <div class="row">

        @foreach($products as $key=>$data)

        <div class="col-lg-4 col-md-6 mb-4">          
          <div class="card h-100">
            
            <a href="products/{{ $data->identifier }}"><img class="card-img-top" src="{{ $data->image_url }}" alt=""></a>
            
            <div class="card-body">
              <h4 class="card-title">
              
                <a href="products/{{ $data->identifier }}"> {{ $data->name }} </a>
                
              </h4>
              <h5>
              {{ $data->net_price }} Ft
              </h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
            </div>
            
          </div>            
        </div>
        
        @endforeach
        <div>{{ $products->render("pagination::bootstrap-4") }}</div>
      </div>
      <!-- /.row -->
     
      
    </div>
    <!-- /.col-lg-9 -->
    
  </div>
  <!-- /.row -->
  
</div>
<!-- /.container -->

@endsection
@extends('layout.main')

@section('content')
  <!-- Page Content -->
  <div class="container" style="padding-top:56px;">
  
    <div class="row">

      <div class="col-lg-3">

        <h2 class="my-4">Gumi webáruház</h2>
        <div class="list-group">         
          
          <!-- keresés -->
          <form action="{{URL('/searchResult')}}" method="GET" role="search">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="text" class="form-control" name="keres"
                    placeholder="Keresés"> <span class="input-group-btn">
                    <button type="submit" class="btn btn-default">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                      <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                    </svg>                    
                    </button>
                </span>
            </div>
          </form>
      </div>
          <!-- keresés vége -->

          <!-- szűrő -->
        <div class="col-lg-3">
          <form action="{{URL('/filterResult')}}" method="GET" role="filter">
            <div class="dropdown" style="padding-top:10px;">
              <button class="btn btn-danger btn-lg dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Évszak
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                <div class="form-check">
                  <input class="form-check-input" type="radio" name="evszak" id="evszak1" value="summer">
                  <label class="form-check-label" for="evszak1">
                  Nyári
                  </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="radio" name="evszak" id="evszak2" value="winter">
                  <label class="form-check-label" for="evszak2">
                  Téli
                  </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="radio" name="evszak" id="evszak3" value="all weather">
                  <label class="form-check-label" for="evszak3">
                  4 évszakos
                  </label>
                </div>

              </div>
            </div>
            

            <div class="dropup" style="padding-top:3px;">
              <button class="btn btn-danger btn-lg dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Méret
              </button>
              <div class="dropdown-menu" style="height: 200px; overflow-y:scroll;" aria-labelledby="dropdownMenuButton">

                <div class="form-check">
                  <input class="form-check-input" type="radio" name="meret" id="exampleRadios1" value="R12">
                  <label class="form-check-label" for="meret">
                  R12
                  </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="radio" name="meret" id="exampleRadios2" value="R13">
                  <label class="form-check-label" for="meret">
                  R13
                  </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="radio" name="meret" id="exampleRadios2" value="R14">
                  <label class="form-check-label" for="meret">
                  R14
                  </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="radio" name="meret" id="exampleRadios2" value="R15">
                  <label class="form-check-label" for="meret">
                  R15
                  </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="radio" name="meret" id="exampleRadios2" value="R16">
                  <label class="form-check-label" for="meret">
                  R16
                  </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="radio" name="meret" id="exampleRadios2" value="R17">
                  <label class="form-check-label" for="meret">
                  R17
                  </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="radio" name="meret" id="exampleRadios2" value="R18">
                  <label class="form-check-label" for="meret">
                  R18
                  </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="radio" name="meret" id="exampleRadios2" value="R19">
                  <label class="form-check-label" for="meret">
                  R19
                  </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="radio" name="meret" id="exampleRadios2" value="R20">
                  <label class="form-check-label" for="meret">
                  R20
                  </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="radio" name="meret" id="exampleRadios2" value="R21">
                  <label class="form-check-label" for="meret">
                  R21
                  </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="radio" name="meret" id="exampleRadios2" value="R22">
                  <label class="form-check-label" for="meret">
                  R22
                  </label>
                </div>

              </div>
            </div>

            <div class="dropup" style="padding-top:3px;">
              <button class="btn btn-danger btn-lg dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Gyártó
              </button>
              <div class="dropdown-menu" style="height: 200px; overflow-y:scroll;" aria-labelledby="dropdownMenuButton">

                @foreach($brand as $brands)
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gyarto" id="exampleRadios1" value="{{ $brands->short_name }}">
                  <label class="form-check-label" for="gyarto">
                  {{ $brands->short_name }}
                  </label>
                </div>
                @endforeach

                

              </div>
            </div>            
          <button type="submit" class="btn btn-lg btn-dark" style="margin-top:10px;">Szűrés</button>
          </form>
          </div>
        <!-- form vége -->
        </div>
        <!-- szűrő vége -->


      <div class="col-lg-9">      

        <div class="row">

          @foreach($sum as $key=>$data)

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
          <div>{{ $sum->appends(Request::all())->render("pagination::bootstrap-4") }}</div>
        </div>
        <!-- /.row -->
       
        
      </div>
      <!-- /.col-lg-9 -->
      
    </div>
    <!-- /.row -->
    
  </div>
  <!-- /.container -->
  
  @endsection

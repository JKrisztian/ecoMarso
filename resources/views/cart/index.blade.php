@extends('layout.main')

@section('content')
    <!-- Page Content -->
    <div class="container" style="padding-top:56px;">

    @if (session()->has('succes'))
        <div class="alert alert-succes">
            {{ session()->get('succes') }}
        </div>
    @endif

    @if (Cart::count() >0)

        <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col"> </th>
                                <th scope="col">Termék</th>
                                <th scope="col">Készlet</th>
                                <th scope="col" class="text-center">Mennyiség</th>
                                <th scope="col" class="text-right">Ára</th>
                                <th> </th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach(Cart::content() as $item)
                            <tr>
                                <td></td>
                                <td>{{ $item->name}}</td>
                                <td>Raktáron</td>
                                <td><input class="form-control" type="text" value="1" /></td>
                                <td class="text-right">{{$item->price}} Ft</td>
                                <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                            </tr>
                        @endforeach
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Szállítás</td>
                                <td class="text-right">2500 Ft</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><strong>Összesen</strong></td>
                                <td class="text-right"><strong>{{Cart::getTotal()+2500}} Ft</strong></td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col mb-2">
                <div class="row">
                    <div class="col-sm-12  col-md-6">
                        <button class="btn btn-block btn-light">Folytatom a vásárlást</button>
                    </div>
                    <div class="col-sm-12 col-md-6 text-right">
                        <button class="btn btn-lg btn-block btn-success text-uppercase">Tovább a fizetéshez</button>
                    </div>
                </div>
            </div>
        </div>
    @else
        <h2>A kosár még üres!</h2>
    @endif
        <!-- /.container -->
    
@endsection
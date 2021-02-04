@extends('layout.master')
@section('content')
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @include('partials.message')
                    <table class="table table-striped ">
                        <tr class="" >
                            <th>#</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Expire Date</th>
                            <th colspan="2" style="text-align: center">Action</th>
                        </tr>
                        @php
                        $i=0;
                        @endphp
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{$product->product_name}}</td>
                                <td>{{$product->product_price}}</td>
                                <td>{{$product->expire_date}}</td>
                                <td><a class="btn btn-primary" href="{{route('products.edit', $product->id)}}">EDIT</a>

                                </td>
                                <td> 
                                    <form action="{{route('products.destroy', $product->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">DELETE</button>
                                    </form>
                                 </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection

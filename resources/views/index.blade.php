@extends('layout.master')
@section('content')
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @include('partials.message')
                    <table class="table table-striped ">
                        <tr>
                            <th>#</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Expire Date</th>
                            <th>Action</th>
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
                                <td><a class="btn btn-primary" href="{{route('product.edit', $product->id)}}">Edit</a>
                                    <a href="{{route('product.delete', $product->id)}}"
                                       class="btn btn-danger">Delete</a>
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

@extends('layouts')

@section('content')
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Item Name</th>
        <th scope="col">Item Price</th>
        <th scope="col">Item description</th>
        <th scope="col">Category name</th>
    </tr>
    </thead>
    <tbody>


    @foreach($items as $item)
        <tr>
            <th scope="row">{{$item -> id}}</th>
            <td>{{$item -> name}}</td>
            <td>{{$item -> price}}</td>
            <td>{{$item -> description}}</td>
            <td>{{$item -> categoryName}}</td>
        </tr>
    @endforeach

    </tbody>

</table>
@stop
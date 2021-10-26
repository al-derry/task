@extends('layouts')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            add item
        </div>
        @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif
        <form method="POST" action="{{route('offers.store')}}" enctype="multipart/form-data">
            @csrf
            {{-- <input name="_token" value="{{csrf_token()}}"> --}}

            <div class="form-group">
                <label for="exampleInputEmail1">name</label>
                <input type="text" class="form-control" name="name">
                @error('name')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
            <label
                for="exampleFormControlTextarea1"> cateigories </label>
                <select class="form-control form-control-sm"
                        id="exampleFormControlSelect1" name="cate_id">
                        <option selected disabled>Choose the category...</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                </select>

            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">price</label>
                <input type="text" class="form-control" name="price">
                @error('price')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">description</label>
                <input type="text" class="form-control" name="description"
                       >
                @error('description')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">send items</button>
        </form>
    </div>
</div>
@stop
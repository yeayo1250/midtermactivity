@extends('base')

@section('content')
<div class="container">
    <div class="mt-2"><a href="{{ url('/dashboard') }}" class="btn btn-info text-white">Back</a></div>
<div class="row">
    <div class="col-md-5 offset-4">
        <div class="card">
            <div class="card-header text-center bg-info text-white">
                <h3>Edit Item</h3>
            </div>
            <div class="card-body">
                <form action="{{url('/dashboard/edit/' . $item->id)}}" method="post">
                    @csrf
                    @method('patch')
                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name"  value="{{$item->name}}" id="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="description">Description</label>
                        <input type="text" name="description" value="{{$item->description}}" id="description" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="price">Price</label>
                        <input type="text" name="price" value="{{$item->price}}" id="price" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="quantity">Quantity</label>
                        <input type="text" name="quantity" value="{{$item->quantity}}" id="quantity" class="form-control">
                    </div>
                    <button class="btn btn-primary" type="submit">Done</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
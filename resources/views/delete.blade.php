@extends('base')

@section('content')
<div class="row mt-4">
    <div class="col-md-4 offset-4">
        <div class="card">
            <div class="card-header bg-danger text-white">
                <h3>Delete Item?</h3>
            </div>
            <div class="card-body">
                <form action="{{url('/dashboard/delete/' . $item->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <h6 class="mt-2 mb-3">
                        Delete this item {{ $item->name }}? 
                    </h6>
                    
                    <div>
                        <button class="btn btn-danger" type="submit">Delete</button>
                        <a href="{{ url('/dashboard') }}" class="btn btn-primary text-white">Cancel</a>   
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
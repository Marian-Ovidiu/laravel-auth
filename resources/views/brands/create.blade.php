@extends('templates.base')

@section('title', 'Home Brands')

@section('content')

<form action="{{route('brand.store')}}" method="POST">
    @csrf
    @method('POST')

    <div class="form-group">
        <label for="name">Brand Name</label>
        <input class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" type="text"
            name="name" placeholder="Name Brand" value = "">
        <div class="invalid-feedback">
            {{$errors->first('name')}}
        </div>
    </div>

    <div class="form-group">
        <label for="country">Nationality</label>
        <input class="form-control {{$errors->has('country') ? 'is-invalid' : ''}}" type="text"
            name="country" placeholder="Nationality" value = "">
        <div class="invalid-feedback">
            {{$errors->first('country')}}
        </div>
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control {{$errors->has('description') ? 'is-invalid' : ''}}" type="text"
            name="description" value = "">
        </textarea>
        <div class="invalid-feedback">
            {{$errors->first('description')}}
        </div>
    </div>

    <button type="submit" class="btn btn-dark">
       Insert Brand
    </button>

</form>


@endsection

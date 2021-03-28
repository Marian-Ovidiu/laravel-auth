@extends('templates.base')

@section('title', 'Home Brands')

@section('content')

<table class="table table-striped table-dark" style="width: 80%; margin: 15px auto;">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Country</th>
        <th scope="col">Description</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($brand as $brands)
      <tr>
        <td scope="row">{{$brands->id}}</td>
        <td scope="row">{{$brands->name}}</td>
        <td scope="row">{{$brands->country}}</td>
        <td scope="row">{{$brands->description}}</td>
        <td style="width: 100px;">
            <a href="{{route('public.brand.show', ['brand'=>$brands])}}" style="display: block; margin-bottom: 5px;">
                <button class="btn btn-primary" style="width: 50px;">
                    <i class="fas fa-eye"></i>
                </button>
            </a>
            @if(Auth::check())
            <a href="{{route('brand.edit', ['brand'=>$brands])}}" style="display: block; margin-bottom: 5px;">
                <button class="btn btn-primary" style="width: 50px;">
                    <i class="fas fa-edit"></i>
                </button>
            </a>
            <form action="{{route('brand.destroy', ['brand'=>$brands])}}" method="POST">
                @method('DELETE')
                @csrf
                <button class="btn btn-primary" style="width: 50px;">
                    <i class="fas fa-meteor"></i>
                </button>
            </form>
            @endif
        </td>
    </tr>
      @endforeach
    </tbody>
  </table>


@endsection

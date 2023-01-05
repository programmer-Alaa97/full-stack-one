
@extends('product.layout')

@section('content')


<div class="jumbotron container">

    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <a class="btn btn-primary btn-lg" href="{{ route('categories.create')}}" role="button">Create  </a>
    <a class="btn btn-success btn-lg" href="{{ route('home')}}" role="button">Home  </a>

  </div>


  <div class="container">
      @if ($message = Session::get('success'))
      <div class="alert alert-primary" role="alert">
        {{$message}}
        </div>
      @endif

  </div>


  <div class="container">
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">category name</th>
            <th scope="col" style="width: 400px">Actions</th>
          </tr>
        </thead>
        <tbody>
            @php
                $i = 0;
            @endphp
            @foreach ($categories as $category)
            <tr>
                <th scope="row">{{++$i}}</th>
                <td>{{ $category->name }}</td>
                <td>

                    <div class="row">


                        <div class="col-sm">
                            <form action="{{ route('categories.destroy',$category->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"> Delete</button>
                                </form>
                        </div>
                      </div>


                </td>
              </tr>
            @endforeach

        </tbody>
      </table>


  </div>

@endsection

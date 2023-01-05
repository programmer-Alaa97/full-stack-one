@extends('product.layout')

@section('content')



  <div class="container" style="margin-top: 100px">
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
            <th scope="col">اسم العنص</th>
            <th scope="col">اسم السعر</th>
            <th scope="col">الصوره</th>
            <th scope="col" style="width: 400px">Actions</th>
          </tr>
        </thead>
        <tbody>
            @php
                $i = 0;
            @endphp
            @foreach ($products as $item)
            <tr>
                <th scope="row">{{++$i}}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->price }} IQD </td>
                <td> <img src="{{$item->photo}}"  class="img-thumbnail" width="100px" height="100px"> </td>


                <td>

                    <div class="row">

                        <div class="col-sm">
                            <a  class="btn btn-primary" href="{{ route('products.show',$item->id)}}"> عرض</a>

                        </div>

                        <div class="col-sm">
                            <form action="{{ route('products.destroy',$item->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"> حذف</button>
                                </form>
                        </div>

                        <div class="col-sm">
                            <a class="btn btn-primary btn" href="{{ route('products.create')}}" role="button">اضافة  </a>

                        </div>

                        <div class="col-sm">
                            <a class="btn btn-success btn" href="{{ route('home')}}" role="button">الرئيسية  </a>

                        </div>
                      </div>


                </td>
              </tr>
            @endforeach

        </tbody>
      </table>

     {!! $products->links() !!}
  </div>

@endsection

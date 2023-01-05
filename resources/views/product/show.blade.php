@extends('product.layout')

@section('content')

<div class="container"   style="padding-top: 12%; text-align: end;">
    <div class="card ">

         <div class="card-body">

          <p class="card-text">  <span><a class="btn btn-primary" href="{{ route('products.index')}}">
                         عرض جميع العناصر
        </a> </span> اسم العنصر : {{ $product->name  }}  </p>
        </div>
      </div>
</div>


<div class="container" style="padding-top: 2%; text-align: end;">
        <div class="form-group">
          <label for="exampleFormControlInput1">  {{ $product->name  }}</label>
        </div>
        <div class="form-group">
            د.ع <label for="exampleFormControlInput1">  {{ $product->price  }} </label>
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">  <img src="{{$product->photo}}"  class="img-thumbnail" width="100px" height="100px"></label>

        </div>
</div>





@endsection

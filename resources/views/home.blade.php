@extends('layouts.app')





@section('content')






<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="text-align: end">
                <div class="card-header">اضافة الفئات</div>

                <div class="card-body">




                    @if(count($errors)>0)
                    <ul class="navbar-nav mr-auto">
                            @foreach ($errors->all() as $error)
                            <li class="nav-item active">
                                     {{$error}}
                                  </li>
                            @endforeach

                          </ul>
                          @endif



                    <form action="{{route('categories.store')}}" method="POST"  >
                        {{ csrf_field()}}
                        <div class="form-group">
                          <label for="name">اسم الفئة</label>
                          <input type="text" class="form-control" name="name" style="text-align: end"  placeholder="ادخل الفئة">
                         </div>



                        <button type="submit" class="btn btn-primary">حفظ</button>
                      </form>








                </div>
            </div>
        </div>
    </div>
</div>
@endsection

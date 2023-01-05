@extends('product.layout')

@section('content')



    <div class="container" style="padding-top: 2%; text-align:end; margin-top:100px;">
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1"> اسم العنصر</label>
                <input type="text" name="name" class="form-control" style="text-align: end" placeholder="ادخل اسم العنصر">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1"> السعر</label>
                <input type="text" name="price" class="form-control" style="text-align: end" placeholder=" ادخل سعر العنصر ">
            </div>

            <div class="form-group">
                <label for="categoryID">:{{ 'فئة العنصر' }}<span class="text-danger">*</span></label>
                <select class="custom-select mr-sm-2" name="categoryID">
                    <option selected disabled style="text-align: end">...{{ 'اختر الفئة للعنصر' }}</option>
                    @foreach ($catgories as $catgory)
                        <option value="{{ $catgory->id }}" style="text-align: end">{{ $catgory->name }}</option>
                    @endforeach
                </select>
            </div>


            <div class="form-group">
                <label for="photo">اضافة صورة</label>
                <input type="file" class="form-control-file" name="photo" style="text-align: end" placeholder="اختيار الصورة"  >
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">حفظ</button>

            </div>



        </form>
    </div>
@endsection

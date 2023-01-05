
    <title> Benz </title>
@extends('layouts.master')
@section('css')
@endsection
@section('title')
    Benz
@stop

@section('content')
    <!-- food section -->

    <section class="food_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Our Menu
                </h2>
            </div>

            <ul class="filters_menu">
                @foreach ($categories as $category)
                    {{--  <li data-filter= your route ? id = {{$category->id}}>{{$category->name}}</li>  --}}
                    {{-- <li><a href=your route ? id={{ $category->id }}>{{ $category->name }}</a></li> --}}
                    {{-- <a href=your route ? id={{ $category->id }}><li>{{ $category->name }}</li></a> --}}


                    {{-- <li><a href="{{route('/category/{'.$category->id.'}')  }}">{{ $category->name }}</a></li> --}}
                    <li><a href="{{ URL::to('category/'.$category->id ) }}">{{ $category->name }}</a></li>
                    {{-- <li><a href="{{ route('category/'.$category->id)  }}">{{ $category->name }}</a></li> --}}
                @endforeach
            </ul>

            <div class="filters-content">
                <div class="row grid">

                    @if ($items->count() == 0)
                        {{ 'there is no items' }}
                    @else
                        @foreach ($items as $item)
                            <div class="col-sm-6 col-lg-4 all pasta">
                                <div class="box">
                                    <div>
                                        <div class="img-box">
                                            <img src="{{ URL::asset('assets/images/f9.png') }}" alt="">

                                        </div>
                                        <div class="detail-box">
                                            <h5>
                                                {{-- {{$item->name}} --}}
                                            </h5>

                                            <div class="options">
                                                <h6>
                                                    {{-- {{$item->price}} د.ع --}}
                                                </h6>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif




                </div>
            </div>
        </div>
    </section>

    <!-- end food section -->

@endsection
@section('js')
@endsection

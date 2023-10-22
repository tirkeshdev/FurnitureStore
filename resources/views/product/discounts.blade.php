@extends('layouts.app')

@section('title')
    @lang('app.appName')
@endsection

@section('body')
    <div class="my-5 display-3 fw-light text-danger text-center">
        @lang('app.discount')
    </div>
    <div class="mt-5">
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4 mb-4">
            @foreach($products as $product)
                <div class="col">
                    @include('app.product')
                </div>
            @endforeach
        </div>
    </div>
    {{$products->links()}}
@endsection
@extends('layouts.app')

@section('title')
    @lang('app.appName')
@endsection

@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                @include('app.nav')
            </div>
            <div class="col-10">
                @include('app.banner')
                <div class="py-3">
                    <a href="{{route('discounts')}}" class="text-danger h3 text-decoration-none">
                        @lang('app.discount') <small class="text-warning">({{$discounts_count}})</small>
                    </a>
                </div>
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4 mb-4">
                    @foreach($discount_products as $product)
                        <div class="col">
                            @include('app.product')
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
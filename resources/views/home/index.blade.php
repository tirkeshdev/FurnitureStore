@extends('layouts.app')

@section('title')
    @lang('app.appName')
@endsection

@section('body')
        @include('app.banner')
        <div class="py-3">
            <div class="py-3">
                <a href="{{route('discounts')}}" class="text-danger h1 text-decoration-none ps-2">
                    @lang('app.discount')
                    <small class="text-warning">({{$discounts_count}})</small>
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
        <div class="pt-5">
            <div class="py-3">
                <a href="{{route('builts')}}" class="text-warning h1 text-decoration-none ps-2">
                    @lang('app.built')
                    <small class="text-danger">({{$builts_count}})</small>
                </a>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4 mb-4">
                @foreach($built_products as $product)
                    <div class="col">
                        @include('app.product')
                    </div>
                @endforeach
            </div>
        </div>
@endsection
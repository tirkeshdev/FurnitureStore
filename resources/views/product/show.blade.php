@extends('layouts.app')
@section('title')
    {{ $product->name }} - @lang('app.appName')
@endsection
@section('body')
    <div class="container-xl py-4">
        <div class="row g-4 mb-4">
            <div class="col-10 col-sm-8 col-md-6 col-lg-4">
                <div class="d-flex">
                    <img src="{{  $product->image}}"
                         alt="{{ $product->name}}" class="img-fluid border rounded" style="height: 400px;">
                    <div class="position-absolute">
                        @if($product->isDiscount())
                            <div class="m-2">
                                <span class="d-inline-block small text-bg-danger rounded py-1 px-2">
                                    <i class="bi-percent"></i> @lang('app.discount')
                                </span>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="mb-2">
                    <span class="fs-5 fw-semibold">{{ $product->name }}</span>
                    <div class="text-secondary">{{ $product->category->getName() }}</div>
                </div>
                <div class="fs-5 mb-2">
                    @foreach($product->sellers as $seller)
                        <a href="{{route('seller_show', $seller->id)}}" class="text-decoration-none link-dark">
                            <i class="bi-person-fill text-secondary"></i> {{ $seller->name }} {{$loop->last ? '' :','}}
                        </a>
                    @endforeach
                </div>
                @if($product->isDiscount())
                    <del class="fs-5 text-secondary">
                        {{ number_format($product->price, 2, '.', ' ') }}
                        TMT
                    </del>
                    <div class="fs-4 fw-semibold text-danger mb-2">
                        {{ number_format($product->getPrice(), 2, '.', ' ') }}
                        <small>TMT</small>
                    </div>
                @else
                    <div class="fs-4 fw-semibold text-primary mb-2">
                        {{ number_format($product->price, 2, '.', ' ') }}
                        <small>TMT</small>
                    </div>
                @endif
                <div class="h5 text-secondary pt-2">
                    @lang('app.brand'): {{$product->brand->name}}
                </div>
                <div class="h5 text-secondary">
                    @lang('app.color'): {{$product->color->getName()}}
                </div>
                <div class="h5 text-secondary">
                    @lang('app.material'): {{$product->material->getName()}}
                </div>
                <div class="h5 text-secondary">
                    {{$product->made->name}}
                </div>
                <div class="h5 text-secondary pb-2">
                    {{$product->size->getName()}}
                </div>
                @if($product->description)
                    <div class="mb-2">
                        {{ $product->description }}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
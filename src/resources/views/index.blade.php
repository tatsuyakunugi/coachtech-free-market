@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="main__content">
    <div class="main__content--heading">
        <div class="">
            <a href="">おすすめ</a>
        </div>
        <div class="">
            <a href="">マイリスト</a>
        </div>
    </div>
    <div class="main__content--body">
        @if(!$items)
        <div class="item__wrapper">
            <p>出品された商品はありません</p>
        </div>
        @else
        <div class="item__wrapper">
            @foreach($items as $item)
            <div class="item-card">
                <a class="item__link" href="/item/{{ $item->id }}">
                    <img src="{{ Storage::url($item->image_path) }}" alt="">
                </a>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</div>
@endsection
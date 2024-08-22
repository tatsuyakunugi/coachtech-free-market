@extends('layouts.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection

@section('content')
<div class="top-page__content">
    <div class="top-page__heading">
        <p>管理ページTOP</p>
    </div>
    <div class="link-form">
        <a class="link-form__button" href="{{ route('admin.showUserList') }}">
            ユーザー一覧
        </a>
    </div>
</div>
@endsection
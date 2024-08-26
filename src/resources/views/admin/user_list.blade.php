@extends('layouts.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('css/user_list.css') }}">
@endsection

@section('content')
<div class="list-page__content">
    <div class="list-page__heading">
        <div class="list-page__heading--item">
            <a class="top-page__link" href="/admin">
                <i class="fa-solid fa-chevron-left"></i>
            </a>
        </div>
        <div class="list-page__heading--item">
            <p>ユーザー一覧</p>
        </div>
    </div>
    <div class="list-table">
        <div class="list-table__alert">
            @if (session('message'))
            <div class="list-table__alert--success">{{ session('message') }}</div>
            @endif 
        </div>
        <div class="list-table__heading">
            <form class="search-form" action="{{ route('admin.showUserList') }}" method="get">
                @csrf
                <input type="text" name="keyword">
                <button class="search-form__button" type="submit">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <table class="list-table__inner">
            <tbody>
                <tr class="list-table__title-row">
                    <th class="list-table__title">ID</th>
                    <th class="list-table__title">名前</th>
                    <th class="list-table__title"></th>
                    <th class="list-table__title"></th>
                </tr>            
                @foreach($users as $user)
                <tr class="list-table__item-row">
                    <td class="list-table__item">{{ $user->id }}</td>
                    <td class="list-table__item">{{ $user->profile->name }}</td>
                    <td class="list-table__item">
                        <a class="comment_detail__link" href="{{ route('admin.showCommentDetail', $user->id) }}">投稿一覧</a>
                    </td>
                    <td  class="list-table__item">
                        <a class="user_detail__link" href="{{ route('admin.showUserDetail', $user->id) }}">ユーザー詳細</a>
                    </td>                        
                </tr>
                @endforeach
            </tbody>
        </table>  
    </div>                
</div>
@endsection
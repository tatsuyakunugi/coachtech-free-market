@extends('layouts.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('css/user_detail.css') }}">
@endsection

@section('content')
<div class="detail-page__content">
    <div class="detail-page__heading">
        <a href="/admin/user_list"><</a>
        <p>ユーザー詳細</p>
    </div>
    <div class="detail-table">
        <table class="detail-table__inner">            
            <tr class="detail-table__row">
                <th class="detail-table__title">名前：</th>
            </tr>
            <tr class="detail-table__row">
                <th class="detail-table__title">メール：</th>
            </tr>
            <tr class="detail-table__row">
                <th class="detail-table__title">住所：</th>
            </tr>
            <tr class="detail-table__row">
                <th class="detail-table__title">登録日：</th>
            </tr>
            <tr class="detail-table__row">
                <th class="detail-table__title"></th>
            </tr>
            <tr class="detail-table__row">
                <td class="detail-table__item">{{ $user->profile->name }}</td>
            </tr>
            <tr class="detail-table__row">
                <td class="detail-table__item">{{ $user->email }}</td>
            </tr>
            <tr class="detail-table__row">
                <td class="detail-table__item">{{ $user->profile->address }}{{ $user->profile->building }}</td>
            </tr>
            <tr class="detail-table__row">
                <td class="detail-table__item">{{ $user->created_at->format('Y-m-d H:i') }}</td>
            </tr>
            <tr class="detail-table__row">
                <td class="detail-table__item">
                    <form action="" method="">
                        <button>削除する</button>
                    </form>
                </td>
            </tr>
        </table>  
    </div>                
</div>
@endsection
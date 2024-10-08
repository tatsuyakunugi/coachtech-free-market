<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>caochtech-free-market</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    <link href="https://use.fontawesome.com/releases/v6.5.2/css/all.css" rel="stylesheet">
    @yield('css')
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <div class="header__title">
                <a class="header__logo" href="/">
                    <img src="{{ Storage::url('public/logo/bBd0bvlYq4GEcqhlYtDj3KfPAZtCCUM6t2XB8N9i.svg') }}" alt="">
                </a>
            </div>
            <div class="header__utility">
                <div class="header__item">
                    <form class="search-form" action="{{ route('item.index') }}" method="get">
                        @csrf
                        <input type="text" name="keyword" placeholder="何をお探しですか？">
                        <button class="search-form__button" type="submit">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                </div>
                @if(Auth::check())
                <div class="header__item">
                    <form class="logout-form" action="/logout" method="post">
                        @csrf
                        <button class="logout-form__button-submit" type="submit">ログアウト</button>
                    </form>
                </div>
                <div class="header__item">
                    <a class="mypage-link" href="/mypage">マイページ</a>
                </div>
                <div class="header__item">
                    <form class="sell-form" action="/sell" method="get">
                        @csrf
                        <button class="sell-form__button-submit" type="submit">出品</button>
                    </form>
                </div>
                @else
                <div class="header__item">
                    <a class="login-link" href="/login">ログイン</a>
                </div>
                <div class="header__item">
                    <a class="register-link" href="/register">会員登録</a>
                </div>
                <div class="header__item">
                    <form class="sell-form" action="/sell" method="get">
                        @csrf
                        <button class="sell-form__button-submit" type="submit" disabled>出品</button>
                    </form>
                </div>
                @endif
            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>
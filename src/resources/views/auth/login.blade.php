<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>caochtech-free-market</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                <img src="{{ Storage::url('public/logo/bBd0bvlYq4GEcqhlYtDj3KfPAZtCCUM6t2XB8N9i.svg') }}" alt="">
            </a>
        </div>
    </header>
    <main>
        <div class="login-form__content">
            <div class="login-form__heading">
                <p>ログイン</p>
            </div>
            <form class="login-form" action="/login" method="post">
                @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label">メールアドレス</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--email">
                            <input type="email" name="email">
                        </div>
                    </div>
                    @error('email')
                    <div class="form__error">
                        <p class="form__error-message">
                            {{ $errors->first('email') }}
                        </p>
                    </div>
                    @enderror
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label">パスワード</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--password">
                            <input type="password" name="password">
                        </div>
                    </div>
                    @error('password')
                    <div class="form__error">
                        <p class="form__error-message">
                            {{ $errors->first('password') }}
                        </p>
                    </div>
                    @enderror
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">ログインする</button>
                </div>
            </form>
            <div class="link">
                <a class="register-link" href="/register">会員登録はこちら</a>
            </div>
        </div>
    </main>
</body>
</html>
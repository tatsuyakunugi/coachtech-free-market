<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>caochtech-free-market</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
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
        <div class="register-form__content">
            <div class="register-form__heading">
                <p>会員登録</p>
            </div>
            <form class="register-form" action="/register" method="post">
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
                    <button class="form__button-submit" type="submit">登録する</button>
                </div>
            </form>
            <div class="link">
                <a class="login-link" href="/login">ログインはこちら</a>
            </div>
        </div>
    </main>
</body>
</html>
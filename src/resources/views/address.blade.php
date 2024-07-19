<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>caochtech-free-market</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/address.css') }}" />
</head>
<body>
    <header class="header">
        <div class="header__inner"></div>
    </header>
    <main>
        <div class="address__content">
            <div class="address__heading">
                <p>住所の変更</p>
            </div>
            <form class="adderss-form" action="" method="post">
                @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label">郵便番号</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--postcode">
                            <input type="" name="">
                        </div>
                    </div>
                    <div class="form__error">
                        <!--ここにバリデーション-->
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label">住所</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--address">
                            <input type="" name="">
                        </div>
                    </div>
                    <div class="form__error">
                        <!--ここにバリデーション-->
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label">建物名</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--building">
                            <input type="" name="">
                        </div>
                    </div>
                    <div class="form__error">
                        <!--ここにバリデーション-->
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">変更する</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
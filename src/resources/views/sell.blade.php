<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>caochtech-free-market</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sell.css') }}" />
</head>
<body>
    <header class="header">
        <div class="header__inner"></div>
    </header>
    <main>
        <div class="sell-form__content">
            <div class="sell-form__heading">
                <p>商品の出品</p>
            </div>
            <form class="sell-form" action="" method="">
                @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label">商品画像</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--img">
                            <input type="file" name="">
                        </div>
                    </div>
                    <div class="form__error">
                        <p class="form__error-message">
                            <!--バリデーション-->
                        </p>
                    </div>
                </div>
                <div class="form__group-sentence">
                    <p>商品の詳細</p>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label">カテゴリー</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--category">
                            <input type="" name="">
                        </div>
                    </div>
                    <div class="form__error">
                        <p class="form__error-message">
                            <!--バリデーション-->
                        </p>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label">商品の状態</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--condition">
                            <input type="" name="">
                        </div>
                    </div>
                    <div class="form__error">
                        <p class="form__error-message">
                            <!--バリエーション-->
                        </p>
                    </div>
                </div>
                <div class="form__group-sentence">
                    <p>商品名と説明</p>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label">商品名</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--name">
                            <input type="" name="">
                        </div>
                    </div>
                    <div class="form__error">
                        <p class="form__error-message">
                            <!--バリエーション-->
                        </p>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label">商品の説明</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--description">
                            <input type="" name="">
                        </div>
                    </div>
                    <div class="form__error">
                        <p class="form__error-message">
                            <!--バリエーション-->
                        </p>
                    </div>
                </div>
                <div class="form__group-sentence">
                    <p>販売価格</p>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label">販売価格</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--price">
                            <input type="" name="">
                        </div>
                    </div>
                    <div class="form__error">
                        <p class="form__error-message">
                            <!--バリエーション-->
                        </p>
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">出品する</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
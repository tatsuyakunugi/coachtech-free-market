<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>caochtech-free-market</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/address.css') }}" />
    <link href="https://use.fontawesome.com/releases/v6.5.2/css/all.css" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="header__inner"></div>
    </header>
    <main>
        <div class="address__content">
            <div class="address__heading">
                <a class="purchase-index__link" href="{{ route('purchase.index', $item->id) }}">
                    <i class="fa-solid fa-angle-left"></i>
                </a>
                <p class="address__heading-title">住所の変更</p>
            </div>
            @if(empty($customer))
            <form class="adderss-form" action="{{ route('shippingAddress.store', $item->id) }}" method="post">
                @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label">郵便番号</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--postcode">
                            <input type="text" name="shipping_post_code" placeholder="{{ $profile->post_code }}">
                        </div>
                    </div>
                    <div class="form__error">
                        @error('shipping_post_code')
                        <div class="form__error">
                            {{ $errors->first('shipping_post_code') }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label">住所</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--address">
                            <input type="text" name="shipping_address" placeholder="{{ $profile->address }}">
                        </div>
                    </div>
                    <div class="form__error">
                        @error('shipping_address')
                        <div class="form__error">
                            {{ $errors->first('shipping_address') }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label">建物名</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--building">
                            <input type="text" name="shipping_building" placeholder="{{ $profile->building }}">
                        </div>
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">変更する</button>
                </div>
            </form>
            @else
            <form class="adderss-form" action="{{ route('shippingAddress.update', $item->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label">郵便番号</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--postcode">
                            <input type="text" name="shipping_post_code" placeholder="{{ $customer->shipping_post_code }}">
                        </div>
                    </div>
                    <div class="form__error">
                        @error('shipping_post_code')
                        <div class="form__error">
                            {{ $errors->first('shipping_post_code') }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label">住所</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--address">
                            <input type="text" name="shipping_address" placeholder="{{ $customer->shipping_address }}">
                        </div>
                    </div>
                    <div class="form__error">
                        @error('shipping_address')
                        <div class="form__error">
                            {{ $errors->first('shipping_address') }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label">建物名</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--building">
                            <input type="text" name="shipping_building" placeholder="{{ $customer->shipping_building }}">
                        </div>
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">変更する</button>
                </div>
            </form>
            @endif
        </div>
    </main>
</body>
</html>
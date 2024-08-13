<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>caochtech-free-market</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sell.css') }}" />
    <link href="https://use.fontawesome.com/releases/v6.5.2/css/all.css" rel="stylesheet">
    @livewireStyles
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <div class="header__item">
                <a class="header__logo" href="/">
                    <img src="{{ Storage::url('public/logo/bBd0bvlYq4GEcqhlYtDj3KfPAZtCCUM6t2XB8N9i.svg') }}" alt="">
                </a>
            </div>
        </div>
    </header>
    <main>
        <div class="sell__alert">
            @if (session('message'))
            <div class="sell__alert--success">{{ session('message') }}</div>
            @endif 
        </div>
        <div class="sell__content">
            <div class="sell__heading">
                <p>商品の出品</p>
            </div>
            <form class="sell-form" action="{{ route('sell_item.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label">商品画像</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--img">
                            <input class="form__input--img-input" type="file" name="image">
                        </div>
                    </div>
                    @error('image')
                    <div class="form__error">
                        {{ $errors->first('image') }}
                    </div>
                    @enderror
                </div>
                <div class="form__group-sentence">
                    <p>商品の詳細</p>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label">カテゴリー</span>
                    </div>
                    <livewire:categories :categories="$categories">
                    @error('category')
                    <div class="form__error">
                        {{ $errors->first('category') }}
                    </div>
                    @enderror
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label">商品の状態</span>
                    </div>
                    <div class="form__group-content">
                        <select class="form__select--condition" name="condition" id="condition_id">
                            <option value="">選択してください</option>
                            @foreach($conditions as $condition)
                            <option value="{{ $condition->id }}">{{ $condition->condition}}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('condition')
                    <div class="form__error">
                        {{ $errors->first('condition') }}
                    </div>
                    @enderror
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
                            <input type="text" name="name">
                        </div>
                    </div>
                    @error('name')
                    <div class="form__error">
                        {{ $errors->first('name') }}
                    </div>
                    @enderror
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label">商品の説明</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--description">
                            <textarea rows="10" name="description"></textarea>
                        </div>
                    </div>
                    @error('description')
                    <div class="form__error">
                        {{ $errors->first('description') }}
                    </div>
                    @enderror
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
                            <input type="text" name="price">
                        </div>
                    </div>
                    @error('price')
                    <div class="form__error">
                        {{ $errors->first('price') }}
                    </div>
                    @enderror
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">出品する</button>
                </div>
            </form>
        </div>
    </main>
    @livewireScripts
</body>
</html>
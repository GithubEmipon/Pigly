<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PiGLy</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/set.css') }}" />
</head>
<body>
    <main class="set-form">
        <h1 class="set-form__heading">PiGLy</h1>
        <h3 class="set-heading">新規会員登録</h3>
        <h6 class="set-heading_1">STEP2 体重データの入力</h6>
        <div class="set-form__inner">
            <form class="set-form__form" action="/register.step2" method="post">
            @csrf
            <div class="set-form__group">
                <label class="set-form__label" for="text">現在の体重</label>
                <input class="set-form__input" type="text" name="weight" id="weight" placeholder="現在の体重を入力" value="{{ old('email') }}" />kg
                <p>
                @error('password')
                {{ $message }}
                @enderror
                </p>
                <label class="set-form__label" for="set_weight">目標の体重</label>
                <input class="set-form__input" type="text" name="target_weight" id="target_weight" placeholder="目標の体重" value="{{ old('target_weight') }}" />kg
                <p class="set-form__error-message">
                @error('name')
                {{ $message }}
                @enderror
                </p>
            </div>
                <input class="set-form__btn" type="submit" value="アカウント作成">
            </form>
        </div>
    </main>
</body>
</html>
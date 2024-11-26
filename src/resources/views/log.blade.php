<!DOCTYPE html>
<html lang="ja">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PiGLy</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/log.css') }}" />
</head>
<body>
    <div class="app">
        <header class="header">
        <h1 class="header__heading">PiGLy</h1>
        <ul class="header-nav">
        @if (Auth::check())
        <a class="header-nav__link" href="/create">目標体重設定</a>
        <a class="header-nav__button" href="/login" >ログアウト</a>
        </a>
        @endif
        </ul>
        </header>
    </div>

    <main class="main_form">
        <h2>Weight Log</h2>
            <form action="/goal_setting" method="post">
            @csrf
                <div class="form__group">
                    <label class="label">日付<span class="contact-form__required">必須</span></label>
                    <input class="log_form" type="date" name="date" placeholder="2024年1月1日" value="{{ old('date') }}" />
                    <p class="log-form__error-message">
                    @error('date')
                    {{ $message }}
                    @enderror
                    </p>
                </div>
                <div class="form__group">
                    <label class="label">体重<span class="contact-form__required">必須</span></label><br>
                    <input class="log_form" type="text" name="weight" placeholder="50.0" value="{{ old('weight') }}" />kg<br>
                    <p class="log-form__error-message">
                    @error('weight')
                    {{ $message }}
                    @enderror
                    </p>
                </div>
                <div class="form__group">
                    <label class="label">摂取カロリー<span class="contact-form__required">必須</span></label><br>
                    <input class="log_form" type="text" name="calories" placeholder="1200" value="{{ old('calories') }}" />col<br>
                    <p class="log-form__error-message">
                    @error('calories')
                    {{ $message }}
                    @enderror
                    </p>
                </div>
                <div class="form__group">
                    <label class="label">運動時間<span class="contact-form__required">必須</span></label><br>
                    <input class="log_form" type="time" name="exercise_time" placeholder="00:00"value="{{ old('exercise_time') }}" />
                    <p class="log-form__error-message">
                    @error('exercise_time')
                    {{ $message }}
                    @enderror
                    </p>
                </div>
                <div class="form__group">
                    <label class="label">運動内容<span class="contact-form__required">必須</span></label><br>
                    <textarea class="log_content" cols="30" rows="5"
                    placeholder="運動内容を追加" name="exercise_content" class="textarea" value="{{ old('exercise_content') }}" ></textarea>
                    <p class="log-form__error-message">
                    @error('exercise_content')
                    {{ $message }}
                    @enderror
                    </p>
                </div>
                <div class="log_button_content">
                    <a href="/weight_logs" class="log_back">
                    戻る</a>
                    <button type="submit" class="button-register">更新</button>
                </div>
            </form>
    </main>
</body>
</html>
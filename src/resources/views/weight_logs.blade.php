<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PiGLy</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/weight_logs.css')}}">
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

    <main class="admin">
        <table class="target_weight_group">
            <tr class="target-table__row">
                <th>目標体重 </th>
                <th>目標まで </th>
                <th>最新目標 </th>
            <td class="target-table__item">
            </tr>
        </table>

        <div class="admin__inner">
            <form class="search-form" action="/weight_logs" method="get">
            @csrf
            <input class="search-form__date" type="date" name="date" placeholder="年/月/日" value="{{request('date')}}">
            〜
            <input class="search-form__date" type="date" name="date" placeholder="年/月/日" value="{{request('date')}}">
            <div class="search-form__actions">
            <input class="search-form__search-btn btn" type="submit" value="検索">
            </div>
            </form>
            <table class="admin__table">
                <tr class="admin__box">
                    <th class="admin__label">日付</th>
                    <th class="admin__label">体重</th>
                    <th class="admin__label">食事摂取カロリー</th>
                    <th class="admin__label">運動時間</th>
                    <th class="admin__label"></th>
                </tr>
                @foreach($this as $this)
                <tr class="admin__row">
                    <td class="admin__data">{{$this->date}}</td>
                    <td class="admin__data">{{$this->weight}}</td>
                    <td class="admin__data">{{$this->calories}}</td>
                    <td class="admin__data">{{$this->exercise_time}}</td>
                    <td class="admin__data">{{$this->exercise_content}}</td>
                    <td class="admin__data">
                    <a class="admin__detail-btn" href="/goal_setting">データ追加</a>
                    </td>
                </tr>

            <div class="modal" id="{{$this->id}}">
                <a href="#!" class="modal-overlay"></a>
                <div class="modal__inner">
                <div class="modal__content">
                <form class="modal__detail-form" action="/update" method="post">
                    @csrf
                    <div class="modal-form__group">
                        <label class="modal-form__label" for="">日付</label><span class="modal-form__required">必須</span><br>
                        <p>{{$this->date}}</p>
                    </div>

                    <div class="modal-form__group">
                        <label class="modal-form__label" for="">体重</label><span class="modal-form__required">必須</span><br>
                        <p>{{$WeightLog->weight}}</p>kg
                    </div>

                    <div class="modal-form__group">
                        <label class="modal-form__label" for="">摂取カロリー</label><span class="modal-form__required">必須</span><br>
                        <p>{{$this->calories}}</p>cal
                    </div>

                    <div class="modal-form__group">
                        <label class="modal-form__label" for="">運動時間</label><span class="modal-form__required">必須</span><br>
                        <p>{{$this->exercise_time}}</p>
                    </div>

                    <div class="modal-form__group">
                        <label class="modal-form__label" for="">運動内容</label>
                        <span class="modal-form__required">必須</span><br>
                        <p>{{$this->exercise_content}}</p>
                    </div>

                    <input type="hidden" name="id" value="{{ $WeightLogs ?? '' ?? ''->id }}">
                    <input class="modal-form__update-btn btn" type="submit" value="登録">

                </form>
                </div>
                <a href="#" class="modal__close-btn" value="戻る"></a>
                </div>
            </div>
            @endforeach
            </table>
        </div>
    </main>
</body>
</html>

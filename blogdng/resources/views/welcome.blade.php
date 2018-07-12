<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
      <div class="flex-center position-ref full-height">
          @if (Route::has('login'))
              <div class="top-right links">
                  <form action="{{ route('switchLang') }}" class="form-lang" method="post">
                      <select name="locale" onchange='this.form.submit();'>
                          <option value="en">{{ trans('label.lang.en') }}</option>
                          <option value="vn"{{ Lang::locale() === 'vn' ? 'selected' : '' }}>
                          {{ trans('label.lang.vi') }}</option>
                          <option value="ja"{{ Lang::locale() === 'ja' ? 'selected' : '' }}>
                          {{ trans('label.lang.jp') }}</option>
                      </select>
                      {{ csrf_field() }}
                  </form>
                  <a href="{{ url('/login') }}">{{ Lang::get('label.login') }}</a>
                  <a href="{{ url('/register') }}">{{ Lang::get('label.register') }}</a>
              </div>
          @endif

          <div class="content">
              <div class="title m-b-md">
                  {{ trans('label.laravel') }}
              </div>
              <div class="links">
                  <a href="https://laravel.com/docs">{{ trans('label.doc') }}</a>
                  <a href="https://laravel-news.com">{{ trans('label.new') }}</a>
              </div>
          </div>
      </div>
  </body>
</html>

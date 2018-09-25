<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Forbidden!</title>
    </head>
    <body style="margin: 0!important;">
        <div style="height: 100vh; position: absolute; left: 0; right: 0; display: flex; justify-content: center; align-items: center; background: #505f98;">
            <div style="text-align: center; width: 100%;">
                <img src="{{ asset('images/php_elephant.png') }}">
                <div style="background: #384480; padding: 30px; margin-top: 100px;">
                    <h2 style="color: white; font-family: SansSerif; letter-spacing: 1.6">{{ $exception->getMessage() }}</h2>
                </div>
            </div>
        </div>
</body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="card-deck" style="margin: auto;">
            <div class="card border-primary mb-4">
                <img class="card-img-top" src="{{ $image_1 }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">李亨利 1 號</h5>
                    <p class="card-text">寫程式時要保持這種心態：就好像將來要維護你這些程式的人是一位殘暴的精神病患者，而且他知道你住在哪。</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">最後更新時間在 1 小時內</small>
                </div>
            </div>
            <div class="card border-secondary mb-4">
                <img class="card-img-top" src="{{ $image_2 }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">李亨利 2 號</h5>
                    <p class="card-text">傻瓜都能寫出電腦能理解的程式，優秀的工程師寫出的是人類能讀懂的程式。</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">最後更新時間在 1 小時內</small>
                </div>
            </div>
            <div class="card border-success mb-4">
                <img class="card-img-top" src="{{ $image_3 }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">李亨利 3 號</h5>
                    <p class="card-text">任何你寫的程式，超過 6 個月不去看它，當你再度開啓時，看起來都像是別人寫的。</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">最後更新時間在 1 小時內</small>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </body>
</html>

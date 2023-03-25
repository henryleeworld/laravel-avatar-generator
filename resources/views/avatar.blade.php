<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Laravel</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <div class="container py-3">
            <main>
                <div class="row row-cols-1 row-cols-md-3 mb-3">
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ $image_1 }}" class="card-img-top" alt="Card image cap" />
                            <div class="card-body">
                                <h5 class="card-title">李亨利 1 號</h5>
                                <p class="card-text">寫程式時要保持這種心態：就好像將來要維護你這些程式的人是一位殘暴的精神病患者，而且他知道你住在哪。</p>
                            </div>
                            <div class="card-footer"><small class="text-muted">最後更新時間在 1 小時內</small></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ $image_2 }}" class="card-img-top" alt="Card image cap" />
                            <div class="card-body">
                                <h5 class="card-title">李亨利 2 號</h5>
                                <p class="card-text">傻瓜都能寫出電腦能理解的程式，優秀的工程師寫出的是人類能讀懂的程式。</p>
                            </div>
                            <div class="card-footer"><small class="text-muted">最後更新時間在 1 小時內</small></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ $image_3 }}" class="card-img-top" alt="Card image cap" />
                            <div class="card-body">
                                <h5 class="card-title">李亨利 3 號</h5>
                                <p class="card-text">任何你寫的程式，超過 6 個月不去看它，當你再度開啓時，看起來都像是別人寫的。</p>
                            </div>
                            <div class="card-footer"><small class="text-muted">最後更新時間在 1 小時內</small></div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name') }}</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <div class="container py-3">
            <main>
                <div class="row row-cols-1 row-cols-md-3 mb-3">
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ $image_1 }}" class="card-img-top" alt="Card image cap" />
                            <div class="card-body">
                                <h5 class="card-title">{{ __('Henry Lee No. :number', ['number' => 1]) }}</h5>
                                <p class="card-text">{{ __('Write programs as if the person who is going to maintain them is a cruel psychopath who knows where you live.') }}</p>
                            </div>
                            <div class="card-footer"><small class="text-muted">{{ __('Last updated within :hour hour', ['hour' => 1]) }}</small></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ $image_2 }}" class="card-img-top" alt="Card image cap" />
                            <div class="card-body">
                                <h5 class="card-title">{{ __('Henry Lee No. :number', ['number' => 2]) }}</h5>
                                <p class="card-text">{{ __('Any fool can write a program that a computer can understand, and a good engineer can write a program that humans can read.') }}</p>
                            </div>
                            <div class="card-footer"><small class="text-muted">{{ __('Last updated within :hour hour', ['hour' => 1]) }}</small></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ $image_3 }}" class="card-img-top" alt="Card image cap" />
                            <div class="card-body">
                                <h5 class="card-title">{{ __('Henry Lee No. :number', ['number' => 3]) }}</h5>
                                <p class="card-text">{{ __('Any program you write that you don\'t look at for more than 6 months will look like it was written by someone else when you open it again.') }}</p>
                            </div>
                            <div class="card-footer"><small class="text-muted">{{ __('Last updated within :hour hour', ['hour' => 1]) }}</small></div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>
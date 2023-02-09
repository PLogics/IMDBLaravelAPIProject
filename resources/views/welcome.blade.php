<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/app.css">
    <link rel="stylesheet" href="./css/main.css">
    <title>Movies Info</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="row height d-flex align-items-center">
                <div class="col-md-12">
                    <form method="post" action="{{url('search_movie')}}">
                        @csrf
                        <div class="search">
                            <i class="fa fa-search"></i>
                            <input type="text" class="form-control" placeholder="Type movie" name="search" />
                            <input type="submit" class="bt1" value="Search" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="cards-wrapper">
                        @for($i=0;$i<=6;$i++) <a href="{{url('details').$data['d'][$i]['id'] }}">
                            <div class="card">
                                <a href="{{url('details').$data['d'][$i]['id'] }}">
                                    @if (empty($data['d'][$i]['i']['imageUrl']))
                                    <img src="./images/logo.png" class="card-img-top" alt="...">
                                    @else
                                    <img src="{{$data['d'][$i]['i']['imageUrl']}}" class="card-img-top" alt="...">
                                    @endif
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">Movie Title:
                                        @if (!empty($data['d'][$i]['l'])) {{$data['d'][$i]['l']}}
                                        @endif
                                    </h5>
                                    <h5 class="card-title">Rank:
                                        @if (!empty($data['d'][$i]['rank'])) {{$data['d'][$i]['rank']}}
                                        @endif
                                    </h5>
                                    <h5 class="card-title">Actors & Actoress:
                                        @if (!empty($data['d'][$i]['s'])) {{$data['d'][$i]['s']}}
                                        @endif
                                    </h5>
                                    <h5 class="card-title">Year:
                                        @if (!empty($data['d'][$i]['y'])) {{$data['d'][$i]['y']}}
                                        @endif
                                    </h5>
                                </div>
                            </div>
                            @endfor
                    </div>
                </div>

            </div>
        </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
    </section>
</body>

</html>
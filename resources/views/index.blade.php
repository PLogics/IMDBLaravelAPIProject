<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/app.css">
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
        <div class="main1">
            <div class="main2">
                <div class="container2">
                    @for($i=0;$i<=6;$i++) <a href="{{url('details').$data['d'][$i]['id'] }}">
                        @if (empty($data['d'][$i]['i']['imageUrl']))
                        <img src=" ./images/logo.png" class="image">
                        @else
                        <img src="{{$data['d'][$i]['i']['imageUrl']}} " alt="Image Processing" class="image">
                        @endif
                        </a>
                        <div class="movie-info">
                            <div><label>Movie Title: </label>
                                @if (!empty($data['d'][$i]['l'])) {{ $data['d'][$i]['l']}}
                                @endif
                            </div>
                            <div><label>Rank: </label>
                                @if (!empty($data['d'][$i]['rank'])) {{$data['d'][$i]['rank']}}
                                @endif
                            </div>
                            <div><label>Actors & Actoress: </label>
                                @if (!empty($data['d'][$i]['s'])) {{$data['d'][$i]['s']}}
                                @endif
                            </div>
                            <div><label>Year: </label>
                                @if (!empty($data['d'][$i]['y'])) {{$data['d'][$i]['y']}}
                                @endif
                            </div>
                        </div>
                        @endfor
                </div>
            </div>
        </div>
    </section>
</body>

</html>
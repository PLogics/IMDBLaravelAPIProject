<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/app.css">
    <title>Detail Movie Info</title>
</head>

<body>
    <div class="detailmain">
        <button onclick="history.go(-1)">Go Back</button>
        <div class="detailcontainer2">
            @if (empty($data['title']['image']['url']))
            <img src="./images/logo.png" class="detailimage">
            @else
            <img src="{{$data['title']['image']['url']}}" alt="Image Processing" class="detailimage">
            @endif
        </div>
        <div class="detailmovie-info">
            <div><label>Movie Title:</label>@if (!empty($data['title']['title'])) {{$data['title']['title']}} @endif
            </div>
            <div><label>Title Type:</label>@if (!empty($data['title']['titleType'])) {{$data['title']['titleType']}}
                @endif
            </div>
            <div><label>Rating:</label>@if (!empty($data['ratings']['rating'])) {{$data['ratings']['rating']}} @endif
            </div>
            <div><label>Release Date:</label>@if (!empty($data['releaseDate'])) {{$data['releaseDate']}} @endif</div>
            <p>Details:@if (!empty($data['plotSummary']['text'])) {{$data['plotSummary']['text']}} @endif</p>
        </div>
    </div>
</body>

</html>
{{-- https://rapidapi.com/apidojo/api/imdb8/ --}}
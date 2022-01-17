<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fun Travel Tours</title>
    <link href="{{ asset("css/tours.css") }}" rel="stylesheet">
    <link href="{{ asset("css/grid.min.css") }}" rel="stylesheet">
</head>
<body class="container full-height-grow-tour" id="tours-page">
<div class="tours-page">
    <header class="main-header" id="header-tours">
        <div class="container header">
            <div class="row tour">
                <div class="col-sm-8">
                    <div class="logo-text-tour"><a href="/" class="logo-link"> Fun Travel </a></div>
                </div>
                <div class="col-sm-3">
                    <nav class="main-nav">
                        <ul>
                            <li><a href="/"> HOME</a></li>
                            <li><a href="tours.html"> TOURS</a></li>
                            <li><a href="about.html"> ABOUT</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="row main-title-tour">
                <div class="col-sm-12">
                    All Tours For You
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="container all-tours">
            <div class="row tours">
                @foreach($tours as $tour)
                    <div class="col-sm-3" id="tour1">
                        <img src="{{ URL('images/tours_page/Background1.png')}}" alt="tour 1" width="230" height="150">
                        <div class="description">
                            <div class="description-title">{{$tour['title']}}<img src="{{ URL('images/tours_page/Rating.png')}}"
                                                                      alt="tour 1" width="50" height="40"></div>
                            <div>{{$tour['people']}}</div>
                            <div>{{$tour['room']}}</div>
                            <div>{{$tour['nights']}}</div>
                            <div>{{$tour['dates']}}</div>
                            <div class="price">$ {{$tour['price']}} USD</div>
                            <button>Book this tour</button>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
</div>
</body>
</html>

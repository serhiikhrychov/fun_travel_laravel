<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Fun Travel</title>
    <link href="{{ asset("css/about.css") }}" rel="stylesheet">
    <link href="{{ asset("css/grid.min.css") }}" rel="stylesheet">
</head>
<body class="container full-height-grow-about" id="about-page">
<div class="about-page">
    <header class="main-header" id="header-about">
        <div class="container header">
            <div class="row about">
                <div class="col-sm-8">
                    <div class="logo-text-about"> <a href="/" class="logo-link"> Fun Travel </a></div>
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
            <div class="row main-title-about">
                <div class="col-sm-12">
                    About Fun Travel
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="container about-us">
            <div class="row about2">
                <div class="col-sm-6" id="first-col">
                    <div id="main-text">Traveling. Tours. Adventure</div>
                    <div id="support-text">We are committed to offering travel services of the highest quality, combining our energy and enthusiasm, with our years of experience. Our greatest satisfaction comes in serving large numbers of satisfied clients who have experienced the joys and inspiration of travel.</div>
                    <div>
                        <form action="tours.html">
                            <input id="btn-view-all" type="submit" value="View tours" />
                        </form>
                    </div>
                </div>
                <div class="col-sm-6" id="second-col1">
                    <img src="{{ URL('images/about/image.png')}}" alt="youtube icon" width="505" height="488">
                </div>
            </div>
        </div>
    </section>
</div>
</body>
</html>

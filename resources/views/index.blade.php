<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FunTravel Agency</title>
    <link href="{{ asset("css/index.css") }}" rel="stylesheet">
    <link href="{{ asset("css/grid.min.css") }}" rel="stylesheet">
    <script defer src="{{ asset("js/index.js") }}" type="module"></script>
</head>
<body class="container full-height-grow" id="landing-page">
<div class="first-page">
    <header class="main-header">

        <div class="container header">
            <div class="row">
                <div class="col-sm-8">
                    <div class="logo-text"><a href="/" class="logo-link"> Fun Travel </a></div>
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
        </div>
    </header>
    <section>
        <div class="container ">
            <div class="row main-title">
                <div class="col-12">Enjoy Your Dream Vacation</div>
            </div>
        </div>
        <div class="container search">
            <div class="row search-field">
                <div class="col-sm-3">
                    <div class="dropdown-select">
                        <select id="where-to-go">
                            <option selected disabled>Destination</option>
                            <option value="turkey">Turkey</option>
                            <option value="thai">Thailand</option>
                            <option value="indonesia">Indonesia</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <label for="start">From date</label>
                    <input type="date" id="start" name="trip-start"
                           value="Departure"
                           min="2021-01-01" max="2022-12-31">
                </div>
                <div class="col-sm-3">
                    <label for="end">To date</label>
                    <input type="date" id="end" name="trip-end"
                           value="Arriving"
                           min="2021-01-01" max="2022-12-31">
                </div>
                <div class="col-sm-3">
                    <a type="submit" class="search-button">Search</a>
                </div>
            </div>
        </div>
    </section>
</div>
<section>
    <div class="container">
        <div class="row second-page-title">
            <div class="col-12">
                <p>Best Offers</p>
                <p>Check out our top-rated tours</p>
            </div>
        </div>
        <div class="row second-page-content">
            <div class="col-sm-4" id="second-page-column1">
                <img src="{{ URL('images/Hotel1.png')}}" alt="Bali, Indonesia" width="506" height="529">
            </div>
            <div class="col-sm-4" id="second-page-column2">
                <img src="{{ URL('images/secondpage-hotel2.png')}}" alt="Istanbul, Turkey" width="506" height="529">
            </div>
            <div class="col-sm-4" id="second-page-column3">
               <img src="{{ URL('images/secondpage-hotel3.png')}}" alt="Malaga, Spain" width="506" height="529">
            </div>
        </div>
        <div class="row second-page-button">
            <div class="col">
                <button class="btn-on-second-page" name="btn-view-all-tours">View All Tours </button>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container why-we-page-title">
        <div class="row why-page-title">
            <div class="col-12">
                <p>Why Fun Travel</p>
            </div>
        </div>
    </div>
    <div class="container why-we-page">
        <div class="row why-page-content1">
            <div class="col" id="why-page-column1">
                <img src="{{ URL('images/why_we/image 9.png')}}" alt="why we 1" width="372" height="113">
            </div>
            <div class="col" id="why-page-column2">
                <img src="{{ URL('images/why_we/image 10.png')}}" alt="why we 2" width="372" height="113">
            </div>
        </div>
        <div class="row why-page-content2">
            <div class="col" id="why-page-column3">
                <img src="{{ URL('images/why_we/image 11.png')}}" alt="why we 3" width="372" height="113">
            </div>
            <div class="col" id="why-page-column4">
              <img src="{{ URL('images/why_we/image 12.png')}}" alt="why we 4" width="372" height="113">
            </div>
        </div>
        <div class="row why-page-content3">
            <div class="col" id="why-page-column5">
                <img src="{{ URL('images/why_we/image 13.png')}}" alt="why we 5" width="372" height="113">
            </div>
            <div class="col" id="why-page-column6">
              <img src="{{ URL('images/why_we/image 14.png')}}" alt="why we 6" width="372" height="113">
            </div>
        </div>
    </div>
    <div class="container contacts-page">
        <div class="row contacts-page-content">
            <div class="col" id="contacts-page-column1">
                <h3>Fun Travel</h3>
                <p>Since 2002, we have been offering travel services of the highest quality, combining our energy and enthusiasm.</p>
            </div>
            <div class="col" id="contacts-page-column2">
                <h3>Our Contacts</h3>
                <p><span id="address">
                        <img src="{{ URL('images/contact_us/image 15.png')}}" alt="address icon" width="43" height="50">
                    </span> 732/21 Second Street, Manchester, King Street, Kingston United Kingdom</p>
                <p><span id="phone">
                        <img src="{{ URL('images/contact_us/image 16.png')}}" alt="phone icon" width="43" height="44">
                    </span> 555-333-222</p>
                <p><span id="email">
                        <img src="{{ URL('images/contact_us/image 17.png')}}" alt="email icon" width="43" height="43">
                    </span> email@email.com</p>
            </div>
            <div class="col" id="contacts-page-column3">
                <h3>Follow Us</h3>
                <span id="inst-icon">
                    <img src="{{ URL('images/contact_us/image 18.png')}}" alt="instagram icon" width="50" height="50">
                </span>
                <span id="face-icon">
                    <img src="{{ URL('images/contact_us/image 19.png')}}" alt="facebook icon" width="50" height="50">
                </span>
                <span id="tube-icon">
                    <img src="{{ URL('images/contact_us/image 20.png')}}" alt="youtube icon" width="50" height="50">
                </span>
            </div>
        </div>
    </div>
</section>
</body>
</html>

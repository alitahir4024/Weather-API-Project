<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather-Project</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://kit.fontawesome.com/1ba2cf90f3.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>

    <section>

        <main class="choice-section">

            <h1>get the weather by three different methods</h1>

            <div class="btn-section">

                <button class="city-btn"> by city name </button>
                <button class="geo-btn"> by coardinates </button>
                <button class="zipcode-btn"> by zip code </button>

            </div>

            <section class="form-section">

                <form class="city-form">

                    <h1>search weather by city name</h1>

                    <input type="text" name="city" id="city-input" placeholder="type city name">

                    <button type="button" class="city-form-btn" >Get weather</button>

                </form>

                <form class="geo-form">

                    <h1>search weather by geolocation </h1>

                    <input type="number" name="long" id="long-input" placeholder="type longitude">

                    <input type="number" name="lat" id="lat-input" placeholder="type latitude">

                    <button type="button" class="geo-form-btn" >Get weather</button>

                </form>

                <form class="zipcode-form">

                    <h1>search weather by zipcode</h1>

                    <input type="number" name="zipcode" id="zipcode-input" placeholder="type zipcode">

                    <input type="text" name="countrycode" id="countrycode-input" placeholder="type countrycode">

                    <button type="button" class="zipcode-form-btn" >Get weather</button>

                </form>

            </section>

        </main>

        <iframe width="560" height="315" autoplay class="clear-sky-gif" src="https://www.youtube.com/embed/0_jNjpVxUt0"  frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        <iframe width="560" height="315" class="clouds-gif" src="https://www.youtube.com/embed/z2UDZMu2GLU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        <iframe width="560" height="315" class="rain-gif" src="https://www.youtube.com/embed/QG0h4xE2YCM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        <iframe width="560" height="315" class="snow-gif" src="https://www.youtube.com/embed/yamiiGk6aSs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        <header>

            <div class="location">
                <h2 class="go-back"><i class="fas fa-arrow-left"></i></h2>
                <h1 class="country"></h1>
                <h2 class="date-time"></h2>
            </div>

            <div class="first-row">

                <div class="current-wheather">
                    <div class="weather-img"></div>
                    <span class="weather-descrip"></span>
                </div>

                <div class="temprature">
                    <div class="current-temp"></div>
                    <div class="min-max-temp">
                        <div class="min-temp"></div><b>/</b>
                        <div class="max-temp"></div>
                    </div>
                </div>

                <div class="wind-pressure">

                    <ul>

                        <li>Wind:<span class="wind"></span></li>
                        <li>Humidity:<span class="humi"></span></li>
                        <li>Pressure:<span class="pre"></span></li>

                    </ul>

                </div>

            </div>

            <div class="sec-row">
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>

        </header>

    </section>

   
    <script src="script.js"></script>

</body>

</html>

<!doctype html>
<html>
    <head>
        <title> Elevator.js </title>
        <meta name="description" content="Are you sick of clicking 'back to top' buttons on websites, and being lifted to the top without a real elevator experience? Elevator.js is here to help.">

        <!-- JS -->
        <script src='elevator.js'></script>

        <!-- CSS -->
        <link href='css/styles.css' rel='stylesheet'>
    </head>
    <body>

        <h1>Elevator.js</h1>
        <p>
            Elevator.js fixes those awkward "scroll to top" moments the old fashioned way.
        </p>
        <div class="links">
            <a href="http://tholman.com">By Tim Holman</a> &bull; <a href="http://github.com/tholman/elevator.js">Source & Instructions</a> &bull; <a href="https://twitter.com/share" class="twitter-share-button" data-text='Elevator.js, "back to top" buttons have never been so real! -'  data-via="twholman">Tweet</a>
        </div>

        <div class="down-arrow"><img src="img/head.png"></div>
        <p>
            First we need to get to the bottom of the page.
        </p>

        <div class="down-arrow"><img src="img/head.png"></div>
        <p>
            Because you're already at the top.
        </p>

        <div class="down-arrow"><img src="img/head.png"></div>
        <p>
            So a "back to top" button wouldn't make sense.
        </p>

        <div class="down-arrow"><img src="img/head.png"></div>
        <p>
            Down down down.
        </p>

        <div class="down-arrow"><img src="img/head.png"></div>
        <p>
            Wow, all this scrolling.
        </p>

        <div class="down-arrow"><img src="img/head.png"></div>
        <p>
            This had better be worth it.
        </p>

        <div class="down-arrow"><img src="img/head.png"></div>
        <p>
            It's going to take ages to get back to the top.
        </p>

        <div class="down-arrow"><img src="img/head.png"></div>
        <p>
            If only we had an easy way to get back...
        </p>

        <div class="down-arrow"><img src="img/head.png"></div>
        <p>
            ...that is both functional and fun.
        </p>

        <div class="down-arrow"><img src="img/head.png"></div>
        <p>
            I call "back to top" buttons elevators...
        </p>

        <div class="down-arrow"><img src="img/head.png"></div>
        <p>
            ...they should really behave more like them.
        </p>

        <div class="down-arrow"><img src="img/head.png"></div>
        <p>
            Ok, here we are... click that elevator! 
        </p>

        <div class="footer">
            <div class="back-to-top">
                <div class="elevator">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve" height="100px" width="100px">
                        <path d="M70,47.5H30c-1.4,0-2.5,1.1-2.5,2.5v40c0,1.4,1.1,2.5,2.5,2.5h40c1.4,0,2.5-1.1,2.5-2.5V50C72.5,48.6,71.4,47.5,70,47.5z   M47.5,87.5h-5v-25h5V87.5z M57.5,87.5h-5v-25h5V87.5z M67.5,87.5h-5V60c0-1.4-1.1-2.5-2.5-2.5H40c-1.4,0-2.5,1.1-2.5,2.5v27.5h-5  v-35h35V87.5z"/>
                        <path d="M50,42.5c1.4,0,2.5-1.1,2.5-2.5V16l5.7,5.7c0.5,0.5,1.1,0.7,1.8,0.7s1.3-0.2,1.8-0.7c1-1,1-2.6,0-3.5l-10-10  c-1-1-2.6-1-3.5,0l-10,10c-1,1-1,2.6,0,3.5c1,1,2.6,1,3.5,0l5.7-5.7v24C47.5,41.4,48.6,42.5,50,42.5z"/>
                    </svg>
                    Back to Top
                </div>
            </div>
        </div>

        <script>

            // Simple elevator usage.
            var elementButton = document.querySelector('.elevator');
            var elevator = new Elevator({
                element: elementButton,
                mainAudio: 'music/CoffeeBreak.mp3', // Music from https://soundcloud.com/please-hold/all-night-day
                endAudio:  'music/ding.mp3', // Music from http://www.bensound.com/
            });

        </script>

        <!-- Tweet Button -->
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    </body>
</html>
<?php
    //Start the session
    session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rob Wood's Portfolio</title>
    <!-- FAVICON -->
    <link rel="icon" type="image/jpg" href="images/gears.ico">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Material Design Bootstrap -->
    <link type="text/css" href="styles/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles/port.css">
    <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 150px;
            width: 100%;
        }

        .videoWrapper {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 */
            padding-top: 25px;
            height: 0;
        }
        .videoWrapper iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        .req{
            color: red;
        }
    </style>
</head>
<body>
    <div id="nav-container-top"></div>
    <div class="container-fluid d-none d-lg-block" id="codeWriter">
        <div class="row">
            <div class="col-xs-1">
                <pre id="typewriter">
                    <span class="var-highlight">var</span>
                    object = {
                        name: <span class="string-highlight">'Robert Wood Jr.'</span>,
                        type: <span class="string-highlight">'Software Developer'</span>,
                        location: <span class="string-highlight">'Spanaway, Washington'</span>,
                        properties:[<span class="string-highlight">'Javascript'</span>,
                        <span class="string-highlight">'HTML'</span>,
                        <span class="string-highlight">'CSS'</span>,
                        <span class="string-highlight">'PHP'</span>,
                        <span class="string-highlight">'SQL'</span>,
                        <span class="string-highlight">'C#'</span>,
                        <span class="string-highlight">'JAVA'</span>,
                        <span class="string-highlight">'and more...'</span>];
                    };
                </pre>
            </div>
        </div>
    </div>

    <div class="footer  text-center d-none d-lg-block">
        <button onclick="skip()" id="skip" class="btn btn-primary">Skip Animation & Learn More</button>
    </div>

    <div id="preType" hidden >
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">
            <a class="navbar-brand" href="index.php">RW</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://rwood.greenriverdev.com/305/resume/index.html"  target="_blank">Resume</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="guestbook.html">Guestbook</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Admin</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.linkedin.com/in/robert-wood-jr-200180161/" target="_blank">LinkedIn</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://github.com/woodrdk" target="_blank">GitHub</a>
                    </li>
                </ul>
            </div>
    </nav>

    <div class="container-fluid w-responsive mx-auto mb-5"><br>
        <div class="row">
            <div class="col-md-4">
                <img id="myPic2" class=" col rounded-circle" src="images/profile.jpg" alt="Rob's Profile picture">
            </div>
            <div class="col-md-8" id="aboutMe">
                &emsp; Thank you for taking the time to learn more about me and my work.
                My name is Robert Wood and I create quality web, desktop and mobile applications.
                I enjoy using my technical knowledge to bring people's ideas to life and create useful functional software
                products for the world.
                I have worked on personal and client based projects in both solo and team settings, playing a role in
                helping develop successful creations in use today.
                One of my greatest skills is the ability to adapt and overcome lack of a skill set and research and learn on my own.
                I enjoy working on things that others tend to struggle with, even if I am not comfortable in that area myself.
                These type of projects push me to broaden my skills and knowledge even more than I would from a project im comfortable in.
                I have worked in both waterfall and agile enviroments and continually learning about new methods to do things.
                If you are interested in learning more about me or my projects and skills, please feel free to contact me directly.
            </div>
        </div>
        <div class="text-center" id="projects">
            <hr>
            <h1>Projects</h1>
            <div class="row mb-2">
                <div class="col-sm-3">
                    <div class="card">
                        <img class="card-img-top" src="images/www.JPG" alt="WhoWhereHow website image">
                        <div class="card-body">
                            <h5 class="card-title">Who Where How</h5>
                            <p class="card-text">Website for Spinal Cord Injury Community</p>
                            <a href="http://www.whowherehow.org" class="btn btn-primary" target="_blank">Check it out!</a>
                            <p>
                                The web application was made with a variety of languages and frameworks including JavaScript/JQuery, HTML, CSS, .Net Core, C#, Ajax
                                BootStrap and SQL Server. There were also a few APIS used in this including a few from Google and Facebook.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <img class="card-img-top" src="images/iday.JPG" alt="Card image cap">
                            <h5 class="card-title"> I DAY Dream  </h5>
                            <p class="card-text">Volunteer and Dreamer Sign Up forms, that allows the client to have
                                the data submitted directly to a database and emailed to themselves. These forms
                                increase productivity by allowing the client to spend less time inputting data into
                                an Excel file and allows a more convenient user interface to work with the data.</p>
                            <a href="https://ostrich-adventure.greenriverdev.com/" class="btn btn-primary" target="_blank">Check them out</a>
                            <p>
                                These web forms and related work was made primarily with JavaScript/JQuery, PHP, HTML and CSS.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <img class="card-img-top" src="images/carTracker.JPG" alt="Card image cap">
                            <h5 class="card-title">Car repair tracker app  </h5>
                            <p class="card-text">This app allows an owner to keep track of their vehicles and any maintanance and modifications made to them.</p>
                            <p>
                                This desktop application is still a work in progress using primarily C# and SQL Server.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <img class="card-img-top" src="images/mpg.JPG" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">MPG App</h5>
                            <p class="card-text">Basic Miles Per Gallon calculator.</p>
                            <p>
                                The web application was made primarily with JavaScript, HTML and CSS.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <img class="card-img-top" src="images/bracket.JPG" alt="Card image cap">
                            <h5 class="card-title"> Brackets app </h5>
                            <p class="card-text">This app allows people to import using Excel some scores from games and run a bracket to see who wins.</p>
                            <p>
                                This desktop application was made primarily with C# and works with Microsoft Excel Files.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <img class="card-img-top" src="images/bulb.JPG" alt="Card image cap">
                            <h5 class="card-title">Bulb saver app</h5>
                            <p class="card-text">Simple project to calculate how long it would take to pay off the new bulbs based on what one would save in electricity.</p>
                            <a href="https://github.com/woodrdk/BulbSaver" target="_blank" class="btn btn-primary">Go to the GitHub repo</a>
                            <p>
                                This desktop application was made primarily with C#.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <img class="card-img-top" src="images/bookreg.JPG" alt="Card image cap">
                            <h5 class="card-title">Book Registration App</h5>
                            <p class="card-text">This is a basic desktop app to register books into a database and assign who they are checked out to</p>
                            <p>
                                This desktop application was made primarily with C#.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <img class="card-img-top" src="images/ElectronShopping.JPG" alt="Card image cap">
                            <h5 class="card-title">Electron Shopping List App</h5>
                            <p class="card-text">Desktop Shopping List App using Electron</p>
                            <a href="https://github.com/woodrdk/Electron-Shopping-List" target="_blank" class="btn btn-primary">Go to the GitHub repo</a>
                            <p>
                                The web application was made primarily with Electron, JavaScript/JQuery, HTML and CSS.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <img class="card-img-top" src="images/yatzy.JPG" alt="Card image cap">
                            <h5 class="card-title">Yatzy</h5>
                            <p class="card-text">Javascript Web Based Yatzy Game </p>
                            <p>
                                The web application was made primarily with JavaScript/JQuery, HTML and CSS.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <img class="card-img-top" src="images/pig.JPG" alt="Card image cap">
                            <h5 class="card-title">Pig Dice</h5>
                            <p class="card-text">Javascript Web Based Pig Dice Game </p>
                            <p>
                                The web application was made primarily with JavaScript/JQuery, HTML and CSS.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 videoWrapper">
                    <div class="card">
                        <div class="card-body">
                            <div class="videoWrapper">
                                <iframe  src="https://www.youtube.com/embed/dWNtahTzJDY"  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div>
                                <p>First ever video tutorial</p>
                                <p>This tutorial used java to ask for 5 numbers of the user and return the lowest, average and the highest number of the 5 numbers.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid text-center w-responsive mx-auto mb-5"><br>
        <div class="text-center" id="contact">
            <div>
                <h1>Contact me here</h1>
            </div>
            <div class="card">
                <div class="card-body">
                    <p class="text-center w-responsive mx-auto mb-5">
                        Do you have any questions? Please do not hesitate to contact
                        me directly. I will reach out to you as soon as possible to help you.
                    </p>
                    <div class="row">
                        <div class="col-md-9 mb-md-0 mb-5">
                            <form id="contact-form" name="contact-form" action="mail.php" method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <input type="text" id="name" name="name" class="form-control">
                                            <label for="name" class="">Your name<span class="req">*</span></label>

                                            <span class="err" id="err-Name"> Please enter a name </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <input type="text" id="email" name="email" class="form-control">
                                            <label for="email" class="">Your email<span class="req">*</span></label>

                                            <span class="err" id="err-email"> Please enter an email </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="md-form mb-0">
                                            <input type="text" id="subject" name="subject" class="form-control">
                                            <label for="subject" class="">Subject  <span class="req">*</span></label>

                                            <span class="err" id="err-subject"> Please enter a subject </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="md-form">
                                            <textarea id="message" name="message" rows="2"
                                                      class="form-control md-textarea"></textarea>
                                            <label for="message">Your message <span class="req">*</span></label>

                                            <span class="err" id="err-message"> Please enter a message</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center text-md-left">
                                    <button id="submit" type="submit" class="btn btn-primary ">Send</button>
                                    <!--<a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>-->
                                </div>
                            </form>

                            <div class="status"></div>
                        </div>
                        <div class="col-md-3 text-center">
                            <ul class="list-unstyled mb-0">
                                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                                    <p>Spanaway, WA 98387, USA</p>
                                </li>
                                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                                    <p>253.223.3253</p>
                                </li>
                                <li>
                                    <a href="mailto:rdrwood@gmail.com">
                                        <i class="fas fa-envelope mt-4 fa-2x"></i>
                                        <p>rdrwood@gmail.com</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="right-stick">
        <a href="mailto:rdrwood@gmail.com">Let's work together!</a>
    </div>
        <?php
        include ('footer.php');
        ?>
    </div>
    <!-- optional JavaScript -->
    <!-- jQuery first, then Popper, then Bootstrap, then developer made -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="scripts/portScripts.js"></script>
    <!-- MDB core JavaScript -->
    <script src="scripts/mdb.min.js"></script>
    <script>
        function setupTypewriter(t) {
            let HTML = t.innerHTML;
            t.innerHTML = "";
            let cursorPosition = 0,
                tag = "",
                writingTag = false,
                tagOpen = false,
                typeSpeed = 1,
                tempTypeSpeed = 0;
            let type = function() {
                if (writingTag === true) {
                    tag += HTML[cursorPosition];
                }
                if (HTML[cursorPosition] === "<") {
                    tempTypeSpeed = 0;
                    if (tagOpen) {
                        tagOpen = false;
                        writingTag = true;
                    } else {
                        tag = "";
                        tagOpen = true;
                        writingTag = true;
                        tag += HTML[cursorPosition];
                    }
                }
                if (!writingTag && tagOpen) {
                    tag.innerHTML += HTML[cursorPosition];
                }
                if (!writingTag && !tagOpen) {
                    if (HTML[cursorPosition] === " ") {
                        tempTypeSpeed = 0;
                    }
                    else {
                        tempTypeSpeed = (Math.random() * typeSpeed) + 50;
                    }
                    t.innerHTML += HTML[cursorPosition];
                }
                if (writingTag === true && HTML[cursorPosition] === ">") {
                    tempTypeSpeed = (Math.random() * typeSpeed) + 50;
                    writingTag = false;
                    if (tagOpen) {
                        var newSpan = document.createElement("span");
                        t.appendChild(newSpan);
                        newSpan.innerHTML = tag;
                        tag = newSpan.firstChild;
                    }
                }
                cursorPosition += 1;
                if (cursorPosition < HTML.length - 1) {
                    setTimeout(type, tempTypeSpeed);
                }
                if(cursorPosition === 907){
                   skip();
                }
            };
            return {
                type: type
            };
        }
        function skip(){
            document.getElementById("preType").hidden = false;
            document.getElementById("skip").hidden = true;
            document.getElementById("typewriter").hidden = true;
        }
        let typer = document.getElementById('typewriter');
        let done = false;
        typewriter = setupTypewriter(typewriter);

        typewriter.type();
        if(done){
            let pageLoad = document.getElementById("preType").hidden = false;
        }
        // https://codepen.io/stevn/pen/jEZvXa
        if ($(window).width() < 960) {
            skip();
        }
    </script>
    </body>
</html>
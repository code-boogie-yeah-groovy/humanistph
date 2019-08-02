<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Proactive Philippine Humanists</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            html,body {
                height: 100%;
                width: 100%;
            }
            nav.navbar {
                background-color:#237b90;
            }
            main>header {
                padding: 3rem;
                background-color: #f9e8ef;
                margin-top: 3rem;
                margin-left: -15px;
                margin-right: -15px;
            }
            #welcome-section {
                padding-left: 1rem;
                padding-top: 3rem;
                padding-right: 1rem;
                padding-bottom: 1rem;
                background-color: #f8f8f5;
            }
            #questions-section {
                padding: 3rem;
                background-color: #f8f8f5;
            }
            #questions-section a {
                height: 5rem;
                line-height: 4rem;
            }
            #articles-section, #interact-section {
                padding: 1rem;
            }
            footer {
                background-color: #c1dee7;
                margin-left: -15px;
                margin-right: -15px;
                font-size: 0.75rem;
            }
            @media(max-width:374px) {
                .navbar-brand {
                    font-size: 0.9rem;
                }
            }
        </style>
    </head>
    <body class="container-fluid">
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
                <a href="#" class="navbar-brand">Proactive Philippine Humanists</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">What is Humanism?</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                The Org
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Programs</a>
                                <a class="dropdown-item" href="#">Meet the Team</a>
                                <a class="dropdown-item" href="#">Be Involved</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">News and Features</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <main id="app">
            <header>
                <center>
                    <h1>Proactive Philippine Humanists</h1>
                    <span>Holistic Humanism for the modern Filipino</span>
                </center>
            </header>
            <article id="welcome-section">
                <h2>Welcome!</h2>
                <section>
                    It is an exciting time for the Philippines. Waking up from centuries of religious conditioning, the new Pinoy and Pinay are more secular and more socially progressive while respectful of the country's past and fully aware of the power of the old memes.  It is in this context that we welcome you to this site.  This is the most comprehensive effort to nurture a secular humanist culture in the country, build a safe haven for young secular Pinoys, and provide the platform for anybody to effect a positive change to Philippine society.
                    <br><br>
                    If you are...
                    <ul>
                        <li>
                            an atheist, an agnostic, a searcher or a secular Filipino who wants to meet and work with like-minded individuals;
                        </li>
                        <li>
                            a theist who want to engage in a small-group and respectful discussion; or,
                        </li>
                        <li>
                            somebody who wants to support in the strengthening of a socially progressive and rights-based culture in the country while helping others in meaningful humanitarian and humanist endeavors;
                        </li>
                    </ul>
                    Then, you are in the right place.  And we welcome to this great social adventure.
                    <br>
                    Check out how to be involved, either as a member, a volunteer, or a donor.
                </section>
            </article>
            <article id="questions-section">
                <div class="row">
                    <div class="col-sm-4">
                        <a href="#" role="button" class="btn btn-lg btn-block btn-secondary mb-3">WHO WE ARE</a>
                    </div>
                    <div class="col-sm-4">
                        <a href="#" role="button" class="btn btn-lg btn-block btn-primary mb-3">WHAT WE DO</a>
                    </div>
                    <div class="col-sm-4">
                        <a href="#" role="button" class="btn btn-lg btn-block btn-success">WHY WE DO IT</a>
                    </div>
                </div>
            </article>
            <article id="articles-section">
                <div class="row">
                    <div class="col-sm-6">
                        <section>
                            <header>
                                <h2>Featured article</h2>
                            </header>
                            @include('placeholders.lorem')
                        </section>
                    </div>
                    <div class="col-sm-6">
                        <section>
                            <header>
                                <h2>Social Media</h2>
                            </header>
                            @include('placeholders.lorem')
                        </section>
                        <div>
                            Follow us:&nbsp;
                            <a href="#"><i class="fab fa-lg fa-facebook-square"></i></a>
                            <a href="#"><i class="fab fa-lg fa-twitter-square"></i></a>
                            <a href="#"><i class="fab fa-lg fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-lg fa-google-plus-square"></i></a>
                            <a href="#"><i class="fab fa-lg fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-lg fa-pinterest-square"></i></a>
                        </div>
                    </div>
                </div>
            </article>
            <article id="interact-section">
                <div class="row">
                    <div class="col-sm-6">
                        <header>
                            <h2>Talk to us</h2>
                        </header>
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" id="name-field" placeholder="Your name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email-field"placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="subject-field" placeholder="Subject">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="message-field" rows="3" placeholder="Your Message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Send</button>
                        </form>
                    </div>
                    <div class="col-sm-6">
                        <header class="text-center">
                            <h2>Support us</h2>
                        </header>
                        @include('placeholders.lorem')
                        <center>
                            <a href="#" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Donate</a>
                        </center>
                    </div>
                </div>
            </article>
        </main>
        <footer class="p-2 text-center">
            <div>
                Follow us:&nbsp;
                <a href="#"><i class="fab fa-lg fa-facebook-square"></i></a>
                <a href="#"><i class="fab fa-lg fa-twitter-square"></i></a>
                <a href="#"><i class="fab fa-lg fa-instagram"></i></a>
                <a href="#"><i class="fab fa-lg fa-google-plus-square"></i></a>
                <a href="#"><i class="fab fa-lg fa-youtube"></i></a>
                <a href="#"><i class="fab fa-lg fa-pinterest-square"></i></a>
            </div>
            <div>
                &copy; 2018 by Philippine Humanists, Inc.
            </div>
        </footer>
    </body>
</html>

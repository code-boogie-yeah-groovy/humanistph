<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Philippine Humanist Project</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            nav.navbar {
                background-color:#9495db;
            }
            main>header {
                padding: 3rem;
                background-color: rgba(235,192,238, 0.3);
            }
            article {
                padding: 1rem;
            }
            footer {
                background-color: #abb4ae;
            }
        </style>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a href="#" class="navbar-brand">The Philippine Humanist Project</a>
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
        <main>
            <header>
                <center>
                    <h1>The Philippine Humanist Project</h1>
                    <span>Holistic Humanism for the modern Filipino</span>
                </center>
            </header>
            <div id="app">
                <article>
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
            </div>
        </main>
        <footer>
            <center>
                &copy; 2018 by Philippine Humanists, Inc.
            </center>
        </footer>
    </body>
</html>

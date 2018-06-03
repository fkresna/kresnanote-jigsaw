<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ $page->siteDescription }}">
    <meta name="author" content="{{ $page->author }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ $page->baseUrl }}/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ $page->baseUrl }}/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ $page->baseUrl }}/img/favicon-16x16.png">
    <link rel="manifest" href="{{ $page->baseUrl }}/img/site.webmanifest">
    <link rel="mask-icon" href="{{ $page->baseUrl }}/img/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <title>Kresna Notes</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="{{ $page->baseUrl }}/css/main.css" rel="stylesheet">
</head>
<body>
<main role="main" class="container">

    <h1 class="mt-5">
        <a href="{{ $page->baseUrl }}" class="navbar-left">
            <img style="padding-bottom:15px; padding-right:10px" height="60px" src="{{ $page->baseUrl }}/img/logo.png">
        </a>
        Kresna Notes
    </h1>
    @yield('body')
</main>
<footer class="footer">
    <div class="container">
        <span class="text-muted">@2018 {{ $page->contactEmail }}</span>
    </div>
</footer>

</body>
</html>

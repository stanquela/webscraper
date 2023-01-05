<?php
include 'WebScraperClass.php';

$scraper = new WebScraper;
$html = $scraper->scrape('http://www.example.com');

$i=0;
$dom = new DOMDocument;
$dom->loadHTML($html);
$xpath = new DOMXPath($dom);
$links = $xpath->query('//a');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Simple Web Scraper</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  </head>

  <body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">Simple web scraper</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="#">Nothing</a>
            <a class="nav-link" href="#">Here</a>
            <a class="nav-link" href="#">Currently</a>
          </nav>
        </div>
      </header>

      <main role="main" class="inner cover">
        <h1 class="cover-heading">Find some links.</h1>
        <p class="lead">Simple web scraper is a simple web app, written in PHP. It is supposed to extract a given HTML element from a provided web site.</p>
        <p class="lead">
          <a href="#" class="btn btn-lg btn-secondary">Learn more</a>
        </p>
<?php
        foreach ($links as $link) {
            $i++;
            $href = $link->getAttribute('href');
            // Do something with the href value
            echo "<div>Link $i: <a>$href</a><div>";
        }
?>

      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Nothing to see here.</p>
        </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

  </body>
</html>


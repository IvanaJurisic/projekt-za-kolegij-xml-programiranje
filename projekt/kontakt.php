<?php

$json = file_get_contents('kontakt.json');


$data = json_decode($json, true);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar fixed-top navbar-expand-lg" style="background-color: #5F9EA0;">
  
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">BookList</a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="knjiznica.php">Knjižnica</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"href="#">Kontakt</a>
                        </li>
                    </ul>
                </div>
        </div>
    </nav>
    


    <div class="container mt-5 pt-5">
        <?php foreach ($data['sections'] as $section): ?>
            
            <?php if ($section['type'] == 'contact_info'): ?>
                <div class="row mb-4">
                    <div class="col-md-6">
                        <h2>Kontakt informacije</h2>
                        <p><strong><?php echo $section['content']['address']['label']; ?>:</strong> <?php echo $section['content']['address']['value']; ?></p>
                        <p><strong><?php echo $section['content']['phone']['label']; ?>:</strong> <?php echo $section['content']['phone']['value']; ?></p>
                        <p><strong><?php echo $section['content']['email']['label']; ?>:</strong> <?php echo $section['content']['email']['value']; ?></p>
                        <p><strong><?php echo $section['content']['working_hours']['label']; ?>:</strong> <?php echo $section['content']['working_hours']['value']; ?></p>
                    </div>
                </div>
            <?php elseif ($section['type'] == 'map'): ?>
                <div class="row mb-4">
                    <div class="col">
                        <iframe src="<?php echo $section['content']['embed_url']; ?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
  
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

    <footer class="footer mt-auto py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>About Us</h5>
                    <p>BookList is a library of the world's greatest literature.</p>
                </div>
                <div class="col-md-4">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="knjiznica.php">Knjižnica</a></li>
                        <li><a href="kontakt.php">Kontakt</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Contact</h5>
                    <address>
                        <strong>BookList</strong><br>
                        Lorem St 40<br>
                        Lorem City, 78989<br>
                        <abbr title="Phone"></abbr>(088) 09787756
                    </address>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <p class="mb-0">&copy; 2024 Ivana Jurišić. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

</body>


</html>
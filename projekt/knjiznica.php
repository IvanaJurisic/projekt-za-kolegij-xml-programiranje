<?php

$xml = simplexml_load_file('knjige.xml');

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
        <a class="navbar-brand" href="#">BookList</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Knjižnica</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kontakt.php">Kontakt</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <div class="container mt-5 pt-1">

        <table class="table table-striped table-hover mt-5">
            <thead>
                
                <tr>
                    <th>Naslov</th>
                    <th>Autor</th>
                    <th>Izdanje</th>
                    <th>Cijena</th>
                    <th>Opis</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($xml->knjiga as $knjiga): ?>
                    <tr>
                        <td><?php echo $knjiga->ime; ?></td>
                        <td><?php echo $knjiga->autor; ?></td>
                        <td><?php echo $knjiga->godina_izdanja; ?></td>
                        <td><?php echo $knjiga->cijena; ?></td>
                        <td><?php echo $knjiga->opis; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
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
                        <li><a href="#">Knjižnica</a></li>
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
<?php

$xml = simplexml_load_file('novo.xml');

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
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="knjiznica.php">Knjižnica</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kontakt.php">Kontakt</a>
                        </li>
                    </ul>
                </div>
        </div>
    </nav>
    <div class="banner mt-5">
        <div>
            <h1>Welcome to BookList</h1>
            <p>Your gateway to a world of books</p>
        </div>
    </div>
    <h1 style="margin: 15px;">New</h1>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
           
            <div class="col-md-6 text-center">
                <img src="images/the_death_watcher.webp" alt="" class="img-fluid mb-3" style="max-width: 100%;">
            </div>
            
            <div class="col-md-6">
                <table class="table  table-borderless mt-5">
                    <tbody>
                        <?php foreach ($xml->knjiga as $knjiga): ?>
                            <tr>
                                <td><strong>Ime:</strong> <?php echo $knjiga->ime; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Autor:</strong> <?php echo $knjiga->autor; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Godina izdanja:</strong> <?php echo $knjiga->godina_izdanja; ?></td> 
                            </tr>
                            <tr>
                                <td><strong>Opis:</strong> <?php echo $knjiga->opis; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Cijena:</strong> <?php echo $knjiga->cijena; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>  
        </div>
    </div>
    
    <div class="container mt-6 mb-5">
        <div class="row justify-content-center">
           
            <div class="col-md-6 text-center">
                <img src="images/taylor.webp" alt="" class="img-fluid mb-3" style="max-width: 100%;">
            </div>
            
            <div class="col-md-6">
                <table class="table  table-borderless mt-5">
                    <tbody>
                        <?php foreach ($xml->knjiga_2 as $knjiga_2): ?>
                            <tr>
                                <td><strong>Ime:</strong> <?php echo $knjiga_2->ime; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Autor:</strong> <?php echo $knjiga_2->autor; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Godina izdanja:</strong> <?php echo $knjiga_2->godina_izdanja; ?></td> 
                            </tr>
                            <tr>
                                <td><strong>Opis:</strong> <?php echo $knjiga_2->opis; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Cijena:</strong> <?php echo $knjiga_2->cijena; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>  
        </div>
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
                        <li><a href="#">Home</a></li>
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
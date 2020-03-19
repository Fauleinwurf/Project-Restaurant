<!DOCTYPE html>
<html lang="de-ch">
<?php include("_header.php") ?>
<body>
<div class='container'>
    <div class='card mb-5 border border-success'>
        <div class='row'>
            <div class='col-lg-4'>
                <img class='card-img-top rounded' width='10%' src=''
                     alt='Error'>
            </div>
            <div class='col-lg-8'>
                <div class='card-body'>
                    <h4 class='card-title'>Test</h4>
                </div>
                <ul class='list-group list-group-flush'>
                    <li class='list-group-item'><strong>Beschreibung:</strong><br>
                        <p>Text</p></li>
                    <li class='list-group-item'>
                        <table class=table table-bordered>
                            <thead>
                            <tr>
                                <th scope='col'>Vorführungsdatum:</th>
                                <th scope='col'>Text</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope='row'>Vorführungszeit:</th>
                                <th>Test</th>
                            </tr>
                            </tbody>
                        </table>
                        <a href='movie.php?show=$index' class='btn btn-success'>Besuchen</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            <?php echo "More Example"?>
        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p class="card-text"><?php echo"Some quick example text to build on the card title and make up the bulk of the cards content." ?></p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">name</th>
                            <th scope="col">e-mail</th>
                            <th scope="col">age</th>
                            <th scope="col">salary</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row"><?php echo "ahmed"; ?></th>
                            <td><?php  echo "ahmed@gmail.com"; ?></td>
                            <td><?php  echo 26; ?></td>
                            <td><?php  echo 45000; ?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <?php
        // This is simple comment
        /*This is for multiple line comment*/
        // Because we are in interpreted language The code will be parsed so in error will be parse error
        ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    </body>
</html>
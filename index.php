<?php

include "includes/functions.php";

if(isset($_POST['btnSubmit']))
{
    $urlPost = $_POST['url'];
    
    if (filter_var($urlPost, FILTER_VALIDATE_URL) !== false) 
    {
        downloadIt($urlPost);
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>View It!</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="css/main.css" rel="stylesheet">
    </head>
    <body class="">
        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
            <header class="masthead mb-auto">
                <div class="inner">
                    <h3 class="masthead-brand">View It!</h3>now
                    <nav class="nav nav-masthead justify-content-center">
                        <a class="nav-link active" href="index.php">Home</a>
                        <!--
                        <a class="nav-link" href="#">Features</a>
                        <a class="nav-link" href="#">Settings</a>
                        -->
                    </nav>
                </div>
            </header>

            <main role="main" class="inner cover">
                <h1 class="cover-heading">View it</h1>
                <p class="lead">View It! is a web app that lets you download & view video and photos from Instagram.</p>

                <form class="form-inline" method="POST">
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">http://example.com</div>
                        </div>
                        <input type="text" name="url" class="form-control">
                    </div>
                    <button type="submit" name="btnSubmit" class="btn btn-primary mb-2">Enter</button>
                </form>

                <div id="mediaDiv2">
                
                </div>
                Download: Right click, "Save as..."

            </main>

            <footer class="mastfoot mt-auto">
                <div class="inner text-center">
                    <p><a href="https://twitter.com/zetrazak">@zetrazak</a></p>
                </div>
            </footer>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
        <script>
        $(document).ready(function() 
        {
            if(document.getElementById("mediaDiv") !== null)
            {
                $('#mediaDiv').appendTo( $('#mediaDiv2') );
            }
        });
        </script>
    </body>
</html>
<!doctype html>
<html lang="cs-cz">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link type="text/css" href="style.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
        <title>Počasí</title>
        <?php //TODO Přidat Cookies uložení a oblíbená města (nebo podle loginu)?>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Jaké je počasí?</h1>

                    <?php include('includes/cas.php'); ?>

                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="mesto" name="mesto" placeholder="Např. Praha, Litoměřice, Londýn..." required oninvalid="this.setCustomValidity('Vyplňte prosím název města')" oninput="this.setCustomValidity('')">
                        </div>
                        <button type="submit" class="btn btn-primary">Zjisti mi počasí</button>
                    </form>
                    <?php @include('includes/predpoved.php'); ?>
                </div>
            </div>
        </div>

        <footer>
            <p class="text-center">
                Michal Zoubek © <?php echo(date("Y")); ?>
            </p>
        </footer>


        <!-- Optional JavaScript --> 
        <script>

            function RefreshWindow()
            {
                window.location.reload(true);
            }

            // Obnoví stránku každých 20 minut
            setInterval(() => {
                RefreshWindow();
            }, 20 * 60000);


        </script>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


    </body>
</html>
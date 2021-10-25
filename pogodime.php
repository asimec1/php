<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Kalkulator</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Alen Šimec">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        <!-- Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<!-- End Bootstrap -->
	</head>
<body style="margin: 20px;">

       <?php
        $random = rand(1,9);
        print '
        <h1 style="margin-bottom:10px;font-size:14px;">Igra (pogodi broj)</h1>
        <form action="" method="post" id="calculator">
            <div class="form-group">
				<label for="fname">Upiši jedan broj od 1 do 9*</label>
                <input type="number" name="num" id="num" required="required" value="'. $num . '" autofocus>
            </div>
            
            <div class="form-group">';
            if (isset($_POST['num'])) {
                if ($_POST['num'] == $random) {
                    print '<div class="btn btn-success">Pogodak, probaj ponovo!</div>';
                }
                else if($_POST['num'] != $random) {
                    print '<div class="btn btn-danger">Krivo, probaj ponovo!</div>';
                }
                print '<p style="margin-top:10px;">Zamišljeni broj je '.$random.'</p>';
            }
             
            print '
            </div>
            
        </form>';
    ?>
</body>
</html>
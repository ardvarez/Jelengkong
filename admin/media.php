<?php
ob_start();
session_start();
error_reporting( 0 );

$sesi_username    = isset( $_SESSION['username'] ) ? $_SESSION['username'] : NULL;
if ( $sesi_username == NULL || empty( $sesi_username ) )
 {
    session_destroy();
    header( 'Location:../login.php?status=Silahkan Login' );
}

?>
<!DOCTYPE html>
<html lang='en'>

<head>

    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name='description' content=''>
    <meta name='author' content=''>

    <title>Aplikasi Admin Jelengkong</title>

    <!-- Bootstrap Core CSS -->
    <link href='../pelukis/vendor/bootstrap/css/bootstrap.min.css' rel='stylesheet'>

    <!-- MetisMenu CSS -->
    <link href='../pelukis/vendor/metisMenu/metisMenu.min.css' rel='stylesheet'>

    <!-- Custom CSS -->
    <link href='../pelukis/dist/css/sb-admin-2.css' rel='stylesheet'>
    <link href='../pelukis/dist/css/bootstrap-table.css' rel='stylesheet'>
    <link href='../pelukis/dist/css/datepicker.css' rel='stylesheet'>

    <!-- Morris Charts CSS -->
    <link href='../pelukis/vendor/morrisjs/morris.css' rel='stylesheet'>

    <!-- Custom Fonts -->
    <link href='../pelukis/vendor/font-awesome/css/font-awesome.min.css' rel='stylesheet' type='text/css'>

    <script src='../pelukis/vendor/jquery/jquery.min.js'></script>
    <script src='../pelukis/nicEdit.js'></script>

    <script type='text/javascript'>
    bkLib.onDomLoaded(function() {
        nicEditors.allTextAreas()
    });
    </script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<script src = 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js'></script>
<script src = 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js'></script>
<![endif]-->

</head>

<body>

    <div id='wrapper'>

        <!-- Navigation -->
        <?php
include 'content.php';
?>

        <!-- /#page-wrapper -->

    </div>

    <!-- /#wrapper -->

    <!-- jQuery -->

    <!-- Bootstrap Core JavaScript -->
    <script src='../pelukis/vendor/bootstrap/js/bootstrap.min.js'></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src='../pelukis/vendor/metisMenu/metisMenu.min.js'></script>

    <!-- Morris Charts JavaScript -->

</body>

</html>
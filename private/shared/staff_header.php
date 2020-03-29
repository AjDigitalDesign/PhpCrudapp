<?php
if (!isset($page_title)) {
    $page_title = 'Staff Area';
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Business Consult - <?php echo $page_title; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo url_for('/stylesheets/vendor/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo url_for('/stylesheets/staff.css'); ?>">

</head>

<body>
    <header class="main-header">
        <div class="container">
            <h1>ConsultBusiness Staff Area</h1>
        </div>
    </header>
    <main role="main">
        <navigation class="staff-nav navbar navbar-expand-lg navbar-light bg-light border-bottom shadow-sm">
            <div class="container">
                <div class="inner-nav">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link" href="<?php echo url_for('/staff/index.php'); ?>">Menu</a></li>
                    </ul>
                </div>
            </div>
        </navigation>
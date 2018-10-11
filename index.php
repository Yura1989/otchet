<html>
<head>
    <title>Bootstrap datepicker example text input with specifying date format</title>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!--    <link rel="stylesheet" href="bootstrap-datepicker/css/bootstrap-datepicker.css">-->
<!--    <link rel="stylesheet" href="bootstrap-datepicker/css/bootstrap-datepicker.min.css">-->
<!--    <link rel="stylesheet" href="bootstrap-datepicker/css/bootstrap-datepicker.standalone.css">-->
<!--    <link rel="stylesheet" href="bootstrap-datepicker/css/bootstrap-datepicker.standalone.min.css">-->
    <link rel="stylesheet" href="bootstrap-datepicker/css/bootstrap-datepicker3.css">
    <link rel="stylesheet" href="bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="bootstrap-datepicker/css/bootstrap-datepicker3.standalone.css">
    <link rel="stylesheet" href="bootstrap-datepicker/css/bootstrap-datepicker3.standalone.min.css">




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<!--    <script src="bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>-->
<!--    <script src="bootstrap-datepicker/js/jquery-1.7.1.min.js"></script>-->
    <script src="bootstrap-datepicker/locales/bootstrap-datepicker.ru.min.js" charset="UTF-8"></script>


</head>
<body>
<h1>Branch MASTER</h1>
<form method="POST">
<div class="span5 col-md-5" id="sandbox-container">
    <div class="input-daterange input-group" id="datepicker">
        <span class="input-group-addon">от</span>
        <input type="text" class="input-sm form-control" name="start" />
        <span class="input-group-addon">до</span>
        <input type="text" class="input-sm form-control" name="end" />
    </div>
    <input type="submit">
</div>
</form>
<?php print_r($_POST);?>
<script type="text/javascript">
    $('#sandbox-container .input-daterange').datepicker({
        format: "MM-yyyy",
        startView: 1,
        minViewMode: 1,
        language: "ru"
    });
</script>
</body>
</html>


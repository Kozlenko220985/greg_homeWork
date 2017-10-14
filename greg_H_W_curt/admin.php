<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>
<?php include_once 'logic.php'?>

<div class="container">
    <form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="post" enctype="multipart/form-data">
        <div class="form-group row">
            <label class="col-sm-4 offset-sm-4 col-form-label">
                Title
                <div class="col-sm-12">
                    <input type="text" name="input[name]" class="form-control" name="inputName" placeholder="">
                </div>
            </label>
        </div>
        <div class="form-group row">
            <label class="col-sm-4 offset-sm-4 col-form-label">
                Price
                <div class="col-sm-12">
                    <input type="text" name="input[price]" class="form-control" name="inputName" placeholder="">
                </div>
            </label>
        </div>
        <div class="form-group row">
            <label class="col-sm-4 offset-sm-4 col-form-label">
                Description
                <div class="col-sm-12">
                    <textarea name="input[description]" class="form-control" id="" cols="30" rows="10"></textarea>
                </div>
            </label>
        </div>
        <div class="form-group row">
            <label class="col-sm-4 offset-sm-4 col-form-label">
                File
                <div class="col-sm-12">
                    <input type="file" accept="image/jpg image/png" name="file" class="form-control" name="inputName" placeholder="">
                </div>
            </label>
        </div>

        <div class="form-group row">
            <div class="offset-sm-4 col-sm-6">
                <button type="submit" name="sub" class="btn btn-primary">Action</button>
                <button type="reset" class="btn btn-primary">Reset</button>
            </div>
        </div>
    </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
</body>
</html>
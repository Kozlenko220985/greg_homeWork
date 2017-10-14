<?php include_once 'logic.php' ?>
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
<div class="container">
    <div class="row">
<!--        --><?php //if (isset($_POST['email']['name']) && !empty($_POST['email']['name'])): ?>
<!--            --><?//= validation($_POST['email']['name']) ?>
<!--        --><?php //endif; ?>
    </div>
    <div class="row">
        <div class="col-sm-8 offset-2">
            <form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input name="email[name]" type="email" class="form-control" id="exampleInputEmail1"
                           aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.
                    </small>
                </div>
                <div class="form-group">
                    <label for="exampleInputText">Title</label>
                    <input name="product[name]" type="text" class="form-control" id="exampleInputText"
                           placeholder="Title">
                </div>

                <div class="form-group">
                    <label for="exampleInputText">Price</label>
                    <input name="product[price]" type="text" class="form-control" id="exampleInputText"
                           placeholder="$ 99.99">
                </div>

                <div class="form-group">
                    <label for="exampleTextarea">Description</label>
                    <textarea name="product[description]" class="form-control" id="exampleTextarea" rows="3"></textarea>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input name="image[path]" type="file" class="form-control-file" id="exampleInputFile"
                                   aria-describedby="fileHelp">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input name="image[path]" type="file" class="form-control-file" id="exampleInputFile"
                                   aria-describedby="fileHelp">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">ADD NEW PRODUCT</button>
            </form>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
</body>
</html>
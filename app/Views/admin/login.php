<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- My CSS -->
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <title>Admin-JeWePe</title>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center">
        <div class="box-login">
            <div class="card card-outline" style="background-color:#002244">
                <a href="../" class="card-header login-header">Admin JeWePe
                </a>
                <div class="card-body text-center">
                    <p class="login-box-msg">Welcome To Admin Page</p>
                    <form action="" method="POST">
                        <?php if (session()->getFlashdata('error')) { ?>
                            <div class="alert alert-danger">
                                <?php echo session()->getFlashdata('error') ?>
                            </div>
                        <?php } ?>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="username" placeholder="Username">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="bi bi-person-fill"></i>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" id="exampleCheck1" class="form-control" name="password" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="bi bi-lock-fill"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-check text-left" style="font-size:13px;">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                        </div>
                        <button type="submit" value="login" name="login" class="btn btn-light btn-block text-dark">Sign In</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="/js/showloginpass.js"></script>
</body>

</html>
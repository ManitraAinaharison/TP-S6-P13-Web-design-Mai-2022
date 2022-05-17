
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo css_url("style-login.css") ?>">
    <link rel="stylesheet" href="<?php echo css_url("style-admin.min.css") ?>">
</head>
<body>
    <div class="main-content">
        <div class="login-content">
            <div class="col-md-12">
                <div class="white-box">
                    <div class="form-group mb-4">
                    <h1><b>Login</b></h1>
                    <form action="<?php echo site_url('login/seConnecter') ?>" method="post">
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Username</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="text"
                                    class="form-control p-0 border-0" name="username"> </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Mot de passe</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="password"
                                    class="form-control p-0 border-0" name="mdp"> </div>
                        </div>
                        <?php if ($this->input->get('error') != null && $this->input->get('error') == 1) { ?>
                            <div class="form-group mb-4">
                                <p style="color:red;">Username ou mot de passe incorrect</p>
                            </div>
                        <?php } ?>
                        <div class="form-group mb-4">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-secondary text-white">Se connecter</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
</body>
</html>
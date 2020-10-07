<?= $this->section('main') ?>
<?php include_once("_navbar.php") ?>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <link rel="stylesheet" href="/assets/css/style.css">
            <div class="container">
                <h3>Register</h3>
                <hr>
                <form class="" action="attemptRegister" method="post">
                    <div class="form-group">
                        <label for="email"><?=lang('Auth.email')?></label>
                        <input type="email" class="form-control <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>"
                               name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
                        <small id="emailHelp" class="form-text text-muted"><?=lang('Auth.weNeverShare')?></small>
                    </div>

                    <div class="form-group">
                        <label for="username"><?=lang('Auth.username')?></label>
                        <input type="text" class="form-control <?php if(session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>">
                    </div>

                    <div class="form-group">
                        <label for="password"><?=lang('Auth.password')?></label>
                        <input type="password" name="password" class="form-control <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="pass_confirm"><?=lang('Auth.repeatPassword')?></label>
                        <input type="password" name="pass_confirm" class="form-control <?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off">
                    </div>

                    <br>

                    <button type="submit" class="btn btn-primary btn-block"><?=lang('Auth.register')?></button>
                </form>
                </form>
            </div>
        </div>
    </div>
</div>

<form method="POST" action="<?= $url ?>" auto_complete="off">
  <div class="form-group mt-2">
    <label for="exampleInputEmail1">Email </label>
    <input type="text" name="username" class="form-control <?= !isset($errors['username']) ?: 'is-invalid' ?>" id="exampleInputEmail1" value="<?= !empty($user) ? $user->getUsername() : '' ?>"  placeholder="Enter email">
    <?php if(isset($errors['username'])): ?>
        <div class="invalid-feedback">
            <?= $errors['username'] ?>
        </div>
    <?php endif ?>
  </div>
  <div class="form-group mt-2">
    <label for="exampleInputPassword1">Mot de passe</label>
    <input type="password" name="password" class="form-control <?= !isset($errors['password']) ?: 'is-invalid'?>" value="<?= !empty($user) ? $user->getPassword() : ''  ?>" id="exampleInputPassword1" placeholder="Password">
    <?php if(isset($errors['password'])): ?>
        <div class="invalid-feedback">
            <?= $errors['password'] ?>
        </div>
    <?php endif ?>
  </div>
  <button type="submit" class="btn btn-primary mt-2">Envoyer</button>
</form>
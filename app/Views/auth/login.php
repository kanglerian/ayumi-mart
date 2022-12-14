<?= $this->extend('template/auth') ?>
<?= $this->section('content')?>
<div>
    <form method="POST" action="<?= base_url('login')?>">
        <div>
            <label>Username:</label>
            <input type="text" name="username" placeholder="Your username">
        </div>
        <div>
            <label>Password:</label>
            <input type="password" name="password" placeholder="Your password">
        </div>
        <button type="submit">Login</button>
    </form>
    <a href="<?= base_url('logout')?>">Logout</a>
</div>
<?= $this->endSection()?>
<?= $this->extend('template/admin') ?>
<?= $this->section('content') ?>
<div>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Email</th>
                <th>Username</th>
                <th>Password</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $key => $user): ?>
            <tr>
                <th scope="row"><?= $key+1; ?></th>
                <td><?= $user['email']?></td>
                <td><?= $user['username']?></td>
                <td><?= $user['password']?></td>
                <td><?= $user['status'] == 1 ? "active" : "non-active" ?></td>
                <td>
                    <a>edit</a>
                    <a>hapus</a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>
<?= $this->endSection(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Pengguna</title>
</head>
<body>
    <h1>Form Edit Pengguna</h1>
    <a href="<?php echo base_url('index.php/pengguna') ?>"><button>Kembali</button></a>
    <form action="<?php echo base_url('index.php/pengguna/action_edit/'.$data['id']) ?>" method="post">
        <label for="">Username</label><br>
        <input type="text" name="username" value="<?php echo $data['username'] ?>" required><br>
        <label for="">Email</label><br>
        <input type="text" name="email" value="<?php echo $data['email'] ?>"required><br>
        <label for="">Password</label><br>
        <input type="text" name="password" value="<?php echo $data['password'] ?>"required><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
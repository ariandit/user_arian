<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Data Pengguna</title>
</head>
<body>
    <h1>Data Pengguna</h1>
    <a href="<?php echo base_url('index.php/pengguna/tambah') ?>"><button>Tambah Pengguna</button></a>
    <form action=""method="get">
        <input type="text" name="username" placeholder="masukan nama pengguna"><button type="submit">Cari</button>
    </form>
    <?php if(!empty($data)); ?>
    <table class="table table-success table-striped">
  <thead>
    <tr>
    <th>No</th>
    <th>Username</th>
    <th>Email</th>
    <th>Password</th>
    <th>
       Action
    </th>
    </tr>
  </thead>
  <tbody>
  <?php $i = 1; ?>
                <?php foreach($data AS $key => $value):?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $value['username'] ?></td>
                        <td><?php echo $value['email'] ?></td>
                        <td><?php echo $value['password'] ?></td>
                        <td>
                            <a href="<?php echo base_url('index.php/pengguna/edit/'.$value['id']) ?>">Edit</a>
                            <a href="<?php echo base_url('index.php/pengguna/delete/'.$value['id']) ?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
  </tbody>
</table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>
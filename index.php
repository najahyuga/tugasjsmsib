<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
    <title>Index</title>
</head>
<body>
    <div class="container-fluid p-4 bg-warning">
        <h5 style="text-align: center;">Data Customer</h5>
    </div><center>
    
    <a href="tambah.php" class="btn btn-dark">Tambah Data</a></button>

    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Create At</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                require_once "config.php";
                $data = mysqli_query($host, "SELECT * FROM customer");
                if (mysqli_num_rows($data)>0) {
                    $no = 1;
                    while ($d = mysqli_fetch_array($data)){
            ?>

                <tr>
                    <td> <?php echo $no ?></td>
                    <td> <?php echo $d["id"]; ?> </td>
                    <td> <?php echo $d["first_name"]; ?> </td>
                    <td> <?php echo $d["last_name"]; ?> </td>
                    <td> <?php echo $d["email"]; ?> </td>
                    <td> <?php echo $d["phone"]; ?> </td>
                    <td> <?php echo $d["address"]; ?> </td>
                    <td> <?php echo $d["created_at"]; ?> </td>
				    <td>
                        <a href="edit.php?id=<?php echo $d['id'];?>" class="btn btn-warning"?>Edit</a> <br><br>
				        <a href="hapusdata.php?id=<?php echo $d['id'];?>" class="btn btn-danger"?>Hapus</a>
                    </td>
                </tr>

            <?php $no++; } } ?>
        </tbody>
    </table>
</body>
</html>
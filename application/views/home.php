<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .th{
            text-align: center;
            background-color: #e2e0e0;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <a class="navbar-brand" href="<?php echo site_url("CForm/index") ?>">Kereta Join CI</a>
    </nav>
    
    <div class="container-fluid" style="margin-top: 80px;">
        <h4>LEFT JOIN LOKOMOTIF DAN KURSI</h4>
        <hr>
        <table class="table" border="1" cellspacing="0" cellpadding="8">
            <thead>
                <th class="th">Kode Kereta</th>
                <th class="th">Nama Kereta</th>
                <th class="th">Kode Gerbong</th>
                <th class="th">Kode Kursi</th>
            </thead>

            <tbody>
                <tr>
                    <?php foreach ($left as $key)
                    {

                    ?>
                    <td><?php echo $key->kd_keretaL ; ?></td>
                    <td><?php echo $key->nama ; ?></td>
                    <td><?php echo $key->kd_gerbong ; ?></td>
                    <td><?php echo $key->kd_kursi ; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <br><br>
        <h4>RIGHT JOIN KURSI DAN GERBONG</h4>
        <hr>
        <table class="table" border="1" cellspacing="0" cellpadding="8">
            <thead>
                <th class="th">Kode Kursi</th>
                <th class="th">Kode Gerbong</th>
                <th class="th">Kode Kereta</th>
                <th class="th">Nama Gerbong</th>
            </thead>

            <tbody>
                <tr>
                    <?php foreach ($right as $key)
                    {

                    ?>
                    <td><?php echo $key->kd_kursi ; ?></td>
                    <td><?php echo $key->kd_gerbongG ; ?></td>
                    <td><?php echo $key->kd_keretaG ; ?></td>
                    <td><?php echo $key->nama ; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <br><br>
        <h4>INNER JOIN LOKOMOTIF, KURSI, DAN GERBONG</h4>
        <hr>
        <table class="table" border="1" cellspacing="0" cellpadding="8">
            <thead>
                <th class="th">Kode Kereta</th>
                <th class="th">Nama Kereta</th>
                <th class="th">Kode Gerbong</th>
                <th class="th">Nama Gerbong</th>
                <th class="th">Kode Kursi</th>
            </thead>
            </thead>

            <tbody>
                <tr>
                    <?php foreach ($inner as $key)
                    {

                    ?>
                    <td><?php echo $key->kd_keretaL ; ?></td>
                    <td><?php echo $key->namaL ; ?></td>
                    <td><?php echo $key->kd_gerbongK ; ?></td>
                    <td><?php echo $key->namaG ; ?></td>
                    <td><?php echo $key->kd_kursi ; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        </div>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-bottom"></nav>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Kereta Join</title>
</head>
<body>
    <h2 align="center"> CI JOIN </h2>
    <br><br>
    <h4>LEFT JOIN LOKOMOTIF DAN KURSI</h4>
    <hr>
    <table border="1" cellspacing="0" cellpadding="8">
        <thead>
            <th>kd_kereta(L)</th>
            <th>nama(L)</th>
            <th>kd_kursi(K)</th>
            <th>kd_gerbong(K)</th>
            <th>kd_kereta(K)</th>
        </thead>

        <tbody>
            <tr>
                <?php foreach ($left as $key)
                {

                ?>
                <td><?php echo $key->kd_keretaL ; ?></td>
                <td><?php echo $key->nama ; ?></td>
                <td><?php echo $key->kd_kursi ; ?></td>
                <td><?php echo $key->kd_gerbong ; ?></td>
                <td><?php echo $key->kd_keretaK ; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <br><br>
    <h4>RIGHT JOIN KURSI DAN GERBONG</h4>
    <hr>
    <table border="1" cellspacing="0" cellpadding="8">
        <thead>
            <th>kd_kursi(K)</th>
            <th>kd_gerbong(K)</th>
            <th>kd_kereta(K)</th>
            <th>kd_gerbong(G)</th>
            <th>kd_kereta(G)</th>
            <th>nama(G)</th>
        </thead>

        <tbody>
            <tr>
                <?php foreach ($right as $key)
                {

                ?>
                <td><?php echo $key->kd_kursi ; ?></td>
                <td><?php echo $key->kd_gerbongK ; ?></td>
                <td><?php echo $key->kd_keretaK ; ?></td>
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
    <table border="1" cellspacing="0" cellpadding="8">
        <thead>
            <th>kd_kereta(L)</th>
            <th>nama(L)</th>
            <th>kd_kursi(K)</th>
            <th>kd_gerbong(K)</th>
            <th>kd_kereta(K)</th>
            <th>kd_gerbong(G)</th>
            <th>kd_kereta(G)</th>
            <th>nama(G)</th>
        </thead>
        </thead>

        <tbody>
            <tr>
                <?php foreach ($inner as $key)
                {

                ?>
                <td><?php echo $key->kd_keretaL ; ?></td>
                <td><?php echo $key->namaL ; ?></td>
                <td><?php echo $key->kd_kursi ; ?></td>
                <td><?php echo $key->kd_gerbongK ; ?></td>
                <td><?php echo $key->kd_keretaK ; ?></td>
                <td><?php echo $key->kd_gerbongG ; ?></td>
                <td><?php echo $key->kd_keretaG ; ?></td>
                <td><?php echo $key->namaG ; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
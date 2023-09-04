<!DOCTYPE html>
<html>
    <head>
        <title></title>
</head>
<body>

<table>
<tr>
            <th>Id Invoice</th>
            <th>Nama Pemesan</th>
            <th>Alamat Pengiriman</th>
            <th>Tanggal Pemesanan</th>
            <th>Batas Pembayaran</th>
            <th>Aksi</th>
        </tr>


    <?php
    $no= 1;
    foreach ($invoice as $inv): ?>

    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $inv->id ?></td>
        <td><?php echo $inv->nama ?></td>
        <td><?php echo $inv->alamat ?></td>
        <td><?php echo $inv->tgl_pesan ?></td>
        <td><?php echo $inv->batas_bayar ?></td>
    </tr>

    <?php endforeach; ?>
</table>

<script type="text/javascript">
    window.print();
</script>

</body>
</html>
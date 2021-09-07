<!DOCTYPE html>
<html lang="en">

<head>

    <title>MAIN MENU</title>
</head>

<body>
    <H3>DAFTAR IP & LOKASI</H3>

    <table>
        <form action="<?= base_url('user/insertip') ?>" method="post">
            <tr>
                <td>IP Address</td>
                <td>:</td>
                <td><input type="text" name="ip" required></td>
            </tr>
            <tr>
                <td>Lokasi</td>
                <td>:</td>
                <td><input type="text" name="lokasi" required></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="add">
                </td>
            </tr>
        </form>
    </table>
    <table>
        <tr>
            <td><b>IP Address</b></td>
            <td><b>Lokasi</b></td>
            <td><b>Status</b></td>
        </tr>
        <?php
        $count = 0;
        foreach ($data_cctv as $row) {

            $count = $count + 1;
        ?>
            <tr>
                <td><?php echo $row->ip ?></td>
                <td><?php echo $row->lokasi ?></td>
                <td>
                    <?php
                    $ip = $row->ip;
                    $ping = exec("ping -n 1 $ip", $output, $status);
                    if ($status === 0) {
                        echo "Online";
                    } else {
                        echo "Offline";
                    }

                    ?>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>
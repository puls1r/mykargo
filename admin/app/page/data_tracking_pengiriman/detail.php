
<a href="<?php index(); ?>">
    <?php btn_kembali(' KEMBALI'); ?>
</a>

<br><br>

<div class="content-box">
    <div class="content-box-content">
        <table <?php tabel_in(100, '%', 0, 'center'); ?>>		
            <tbody>
               
                <?php
                if (!isset($_GET['proses'])) {
                        
                    ?>
                <script>
                    alert("AKSES DITOLAK");
                    location.href = "index.php";
                </script>
                <?php
                die();
            }
            $proses = decrypt(mysql_real_escape_string($_GET['proses']));
            $sql = mysql_query("SELECT * FROM data_tracking_pengiriman where id_tracking_pengiriman = '$proses'");
            $data = mysql_fetch_array($sql);
            ?>
            <tr>
                <td class="clleft" width="25%">Id Tracking Pengiriman </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['id_tracking_pengiriman']; ?></td>	
            </tr>

            <tr>
                <td class="clleft" width="25%">Nomor Resi </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['nomor_resi']; ?></td>
            </tr>
            <tr>
                <td class="clleft" width="25%">Id Driver </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['id_driver']; ?></td>
            </tr>
            <tr>
                <td class="clleft" width="25%">Lat </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['lat']; ?></td>
            </tr>
            <tr>
                <td class="clleft" width="25%">Lng </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['lng']; ?></td>
            </tr>
            <tr>
                <td class="clleft" width="25%">Keterangan </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['keterangan']; ?></td>
            </tr>




            </tbody>
        </table>
    </div>
</div>

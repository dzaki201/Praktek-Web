<?php
$server = $_SERVER['PHP_SELF'];
?>
<h4>FORM PENJUMLAHAN</h4>
<hr width="80%" size="5" align="left" color="black">
<form action="<?php echo $server;?>" method="post">
    <table width="663" border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td width="55" valign="top">Nilai A</td>
            <td width="10">:</td>
            <td width="476"><input type="text" name="nilai1" value="0" /></td>
        </tr>
        <tr>
            <td valign="top">Nilai B</td>
            <td>:</td>
            <td><input type="text" name="nilai2" value="0" /></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td></td>
            <td>
                <input type="submit" name="Tambah" value="Tambah">
                <input type="reset" name="Reset" value="Reset" />
            </td>
        </tr>
        <tr>
            <td>Hasil</td>
            <td>:</td>
            <td>
                <?php
                if(isset($_POST['Tambah'])){
                    $nilai1 = $_POST['nilai1'];
                    $nilai2 = $_POST['nilai2'];
                    $hasil = $nilai1 + $nilai2;
                    echo "$hasil";
                }
                ?>
            </td>
        </tr>
    </table>
</form>

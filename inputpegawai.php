<h3> Input data pegawai </h3>

<form action="" method="post">
<table>
    <tr>
        <td width="130"> NIK </td>
        <td> <input type="text" name="nik"></td>
    </tr>
    <tr>
        <td> Nama Depan </td>
        <td> <input type="text" name="namad"> </td>
    </tr>
    <tr>
        <td> Nama Belakang </td>
        <td> <input type="text" name="namab"> </td>
    </tr>
    <tr>
        <td> </td>
        <td> <input type="submit" value="Submit" name="proses"> </td>
    </tr>
</table>
</form>

<?php
include "conn.php";
if(isset($_POST['proses'])){
    mysqli_query($conn, "insert into pegawai set 
    nik = '$_POST[nik]',
    namad = '$_POST[namad]',
    namab = '$_POST[namab]'
    
    ");

    echo "Input data pegawai berhasil";
}
?>
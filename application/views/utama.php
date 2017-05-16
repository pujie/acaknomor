<html>
<head>
<style>
#displaywinner{
    font-size: 270px;
    color: red;
    font-weight: bold;
}
#tablewinner{
    width: 100%;
}
#tablewinner tr{
    text-align: center;
}
#winnertitle{
    font-size: 60px;
}
.button{
    padding: 5px;
    color: green;
    border: 1px solid red;
}
</style>
</head>
<table id="tablewinner">
<thead>
<tr>
<th>
<span id="winnertitle">
Pemenang ke <?php echo $sesscount;?>
</span>
</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<span id="displaywinner">
<?php
echo $number;
?>
</span>
</td>
</tr>
</tbody>
</table>
<a  class="button" class="button"  href="/main/cetakutama">Cetak</a>
<a  class="button" href="/main/getutama">Selanjutnya</a>
<a  class="button" href="/main/index">Kembali Ke Halaman Utama</a>
</html>
<h1>300 Pemenang Hadiah Hiburan</h1>
<style>
#hiburan{
    padding:5px;
}
#hiburan tbody tr td{
    border: 1px solid black;
    margin: 5px;
    padding : 8px;
}
.button{
    padding: 5px;
    color: green;
    border: 1px solid red;
}
</style>
<table id="hiburan">
<thead><tr><th colspan=20>Nomor</th></tr></thead>
<tbody>
<?php for($row = 0; $row <15;$row ++){?>
    <tr>
        <?php for($col=1;$col<=20;$col++){?>
        <?php $index = $col+($row*20);?>
        <td ><?php 
        echo $numbers[$index];
        }?>
        </td>
    </tr>
<?php }?>
</tbody>
</table>

<a class="button" target="_blank" href="/main/cetakhiburan">Cetak</a>
<a class="button" href="/main/gethiburan">Reload</a>
<a class="button" href="/main/getutama">Pemenang Utama</a>
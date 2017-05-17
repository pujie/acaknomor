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
<footer>
<tr>
<td>
<a  href="/main/cetakutama"><img src="/images/printer.svg" title="Cetak" /></a>
<a  href="/main/getutama"><img src="/images/play.svg" title="Selanjutnya" /></a>
<a><img id="tblacak" src="/images/play.svg" title="Selanjutnya" /></a>
<a  href="/main/index"><img src="/images/home.svg" title="Ke Halama Utama" /></a>
</td>
</tr>
<tr>
    <td>
        <a  href="/main/getutamarefresh"><img src="/images/refresh.svg" title="Ke Halama Utama" /></a>
    </td>
</tr>
</footer>
</table>


<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js">
</script>
<script type="text/javascript" >
mytimer = function(t){
    if(t===0){
        $("#displaywinner").html("2345");
    }else{
        t = t-1;
        console.log(t);
        setTimeout(function() {
            $.ajax({
                url:'/main/jsonutama',
                type:'post',
                dataType:'json'
            })
            .done(function(out){
                $.ajax({
                    url:"/main/getrandomcolors",
                    type:"post"
                })
                .done(function(col){
                    console.log("Col",col);
                    console.log("OUT",addtrailingzero(out));
                    $("#displaywinner").html(addtrailingzero(out));
                    $("#displaywinner").css("color","red");
                });
            });
            
            mytimer(t);
        }, 100);
    }
}
addtrailingzero = function(num){
    for(c = num.toString().length;c < 6;c++){
        num = '0'+num;
    }
    return num;
}
mytimer(10);


acak = function(){
    //if($("#tblacak").attr("src","/images/stop.svg")){
     return   setInterval(function(){
            $.ajax({
                url:'/main/jsonutama',
                type:'post',
                dataType:'json'
            })
            .done(function(out){
                $.ajax({
                    url:"/main/getrandomcolors",
                    type:"post"
                })
                .done(function(col){
                    console.log("Col",col);
                    console.log("OUT",addtrailingzero(out));
                    $("#displaywinner").html(addtrailingzero(out));
                    $("#displaywinner").css("color","red");
                });
            });
        },100);
   // }
}
$("#tblacak").click(function(){
    if($("#tblacak").attr("src")=="/images/play.svg"){
        $("#tblacak").attr("src","/images/stop.svg")
        acak();
    }else{
        $("#tblacak").attr("src","/images/play.svg")
        clearInterval(acak);
    }
});
</script>
</html>
<html>
<head>
	<!-- BOOTSTRAP ARQUIVOS -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="themes/css/main.css" rel="stylesheet">

<style type="text/css">
.container {
  .border-radius(4px);
}
</style>


<!-- ARQUIVOS DO ADMIN -->
<meta charset="UTF-8" />
		<link rel="stylesheet" type="text/css" href="demo.css" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet/less" type="text/css" href="../sysadmin/themes/less/bootstrap.less">
		<script src="../sysadmin/themes/js/less/less.js" type="text/javascript"></script>
		<link rel="stylesheet" href="../sysadmin/themes/style/fullcalendar.css" />	

		<link rel="stylesheet" href="../sysadmin/themes/style/delta.main.css" />
		<link rel="stylesheet" href="../sysadmin/themes/style/delta.grey.css"/>



</head>
<body>
    <?php include ('../sysadmin/bd/conexao.php');
             
?>



<div class="widget-box">
<div class="widget-title"><h5>Gerenciar Imagens em destaque exibidas na página Principal</h5></div>
                       
<br/>

<table class="table table-striped">  
        <thead>  
          <tr>  
            <th>Imagem</th>  
            <th>Texto</th>  
             
          </tr>  
        </thead>  
        <tbody> 
        <?php 
$db_selected = mysql_select_db('sysadmin', $link);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}
//$path = 'src="../themes/css/images/carousel/"';
mysql_select_db("sysadmin");
            $select = "select * from uploads ";
            $resultado = mysql_query($select);
            while($registros = mysql_fetch_array($resultado)){
//echo $path;echo $registros['file_name'];
//echo "<br>";
//}
//echo $path;  
?> 
          <tr> 
          <form>
   
            <td><div class="span6"> <img src="../themes/css/images/carousel/<?php echo $registros['file_name']; ?>" class="pull-left"/> </div> </td>  
            <td><div class="span4">  <?php echo $registros['texto']; ?>" </div></td>   
            </div>
          </tr> <?php } ?> 
        </tbody>  
      </table>  

<br>



<!--
<div class="container" >
<div class="row">
<div class="span12" style="border: 1px solid #cccccc">
<div class="span8" >
<div class="span6">
<img src="../themes/css/images/carousel/2.png" class="pull-left"/>
</div>
</div>
<div class="4">gdfgdfgfdgdgdgdgd</div>
 </div>
</div>
</div>
<br/> 
<div class="container" >
<div class="row">
<div class="span12" style="border: 1px solid #cccccc">
<div class="span8" >
<div class="span6">
<img src="../themes/css/images/carousel/3.png" class="pull-left"/>
</div>
</div>
<div class="4">gdfgdfgfdgdgdgdgd</div>
</div>
</div>
</div>
<br/>
<div class="container" >
<div class="row">
<div class="span12" style="border: 1px solid #cccccc">
<div class="span8" >
<div class="span6">
<img src="../themes/css/images/carousel/4.png" class="pull-left"/>
</div>
</div>
<div class="4">gdfgdfgfdgdgdgdgd</div>
</div>
</div>
</div>
<br/>

-->


                    </div>

















 <!-- Arquivos do Admin -->
 <script src="themes/js/excanvas.min.js"></script>
            <script src="../sysadmin/themes/js/jquery.min.js"></script>
            <script src="../sysadmin/themes/js/jquery.ui.custom.js"></script>
            <script src="../sysadmin/themes/js/bootstrap.min.js"></script>
            <script src="../sysadmin/themes/js/jquery.flot.min.js"></script>
            <script src="../sysadmin/themes/js/jquery.flot.resize.min.js"></script>
            <script src="../sysadmin/themes/js/jquery.peity.min.js"></script>
            <script src="../sysadmin/themes/js/fullcalendar.min.js"></script>
            <script src="../sysadmin/themes/js/delta.js"></script>
            <script src="../sysadmin/themes/js/delta.dashboard.js"></script>


</body>
</html>
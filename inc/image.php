<html>
<head>
</head>
<body>
<?php include ('../sysadmin/bd/conexao.php'); 
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

		<img src="../themes/css/images/carousel/<?php echo $registros['file_name']; ?>" /> <?php } ?>
		<body>
</html>
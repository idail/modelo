<html>
<head>
	</head>
	<body>

<h1>Bem-vindo</h1>
<?php 
include 'sysadmin/functions/conection.php' ; 

$db_selected = mysql_select_db('sysadmin', $link);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}
?>
<hr/>
<p class="msg"><em>
<?php 
$sql = "SELECT * FROM welcome";
$result = mysql_query($sql);

if (!$result) {
    echo "Não foi possível executar a consulta ($sql) no banco de dados: " . mysql_error();
    exit;
}

if (mysql_num_rows($result) == 0) {
    echo "Não foram encontradas linhas, nada para mostrar, assim eu estou saindo";
    exit;
}
while ($row = mysql_fetch_assoc($result)) { 
echo $row['msg_welcome'];
?>
<br/><strong>-<?php echo $row ['autor'];  }      ?></strong></em>
</body>
</html>

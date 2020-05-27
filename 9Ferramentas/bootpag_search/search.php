<?php 
require_once './db_connect.php';

// Busca
if(isset($_GET['keyword'])){
    $keyword=$_GET['keyword'];

    $sql = "select * from customers WHERE name LIKE :keyword order by id";
    $sth = $pdo->prepare($sql);
    $sth->bindValue(":keyword", $keyword."%");
    $sth->execute();
	$nr = $sth->rowCount();
    $rows =$sth->fetchAll(PDO::FETCH_ASSOC);
}
print '<h3 align="center">Paginação</h3>';
print '</div>';

print '<div class="container" align="center">';
print '<h4>Registro(s) encontrado(s): '.$nr.'</h4>';

if(count($rows) > 0){
?>
<div class="container" align="center">
  <table class="table table-hover">
    <tr>
      <th>ID</th><th>Name</th><th>E-mail</th><th>City</th>
    </tr>
 
<?php
    foreach ($rows as $row){
      print '<tr>';
        print '<td>'.$row['id'].'</td><td>'.$row['name'].'</td><td>'.$row['email'].'</td><td>'.$row['city'].'</td>';
      print '</tr>';
    } 
    echo "</table>";

}else{
    print '<h3>Nenhum Registro encontrado!</h3>';
}
?>
<br>
<input name="send" class="btn btn-warning" type="button" onclick="location='index.php'" value="Voltar">
</div>


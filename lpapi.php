<?php







// informações de conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lead";

// cria uma conexão com o banco de dados
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}



$nome = $_POST['nome'];

 $email = $_POST['email'];
       
 $telefone = $_POST['telefone'];
       
 $anotac = $_POST['anotac'];

$sql = "INSERT INTO cadastrolead (nome, email, telefone, anotac,idempreendimento, origem, mídia, tadahora) VALUES('{$nome}', '{$email}','{$telefone}','{$anotac}','{1182}','{SI}','{SITE}', NOW()) ";

$res = $conn->query($sql);


if($res==true){
  print "<script>alert('Cadastrado com sucesso');</script>";
  print"<script>location.href='index.php';</script>";

}else{
  print "<script>alert('não foi possivel cadastrar');</script>";
  print"<scriti>location.href='index.php';<script>";
}
// fecha a conexão com o banco de dados
mysqli_close($conn);

$post = [


  'acao' => 'salvar',

  'nome' => $nome,

  'email' => $email,

  'idimobiliaria'=> 411,

  'idcorretor'=> 28267,

  'idempreendimento'=> 1182,

  'midia'=> 'SITE',

  'origem' => 'SI',

  'conversao' => 'Site',

  'telefone' => $tel,

  'permitir_alteracao' => true,
];



     


$curl = curl_init();

$json=json_encode($post);

curl_setopt_array($curl, array(

  CURLOPT_URL => 'https://dev.cvcrm.com.br/api/cvio/lead',

  CURLOPT_RETURNTRANSFER => true,


  CURLOPT_MAXREDIRS => 15,

  CURLOPT_TIMEOUT => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,

  CURLOPT_FOLLOWLOCATION => true,

  CURLOPT_CUSTOMREQUEST => 'POST',

  CURLOPT_POSTFIELDS => $json,





  CURLOPT_HTTPHEADER => array(



    'token: 8b25741e624385ce9160732b3921c1b9af4183f4',



  ),

));





$response = curl_exec($curl);





curl_close($curl);



if ($curl == true) {



  print "<script> if(window.confirm('Lead Cadastrado com sucesso!')) {
      //history.back();
      location.href='index.php';
    } </script>";


  // print"<script>location.href='?page=lp.html';</script>";

} else {

  print "<script>alert('Não cadastrado');</script>";



  header('Location: index.php');
  exit();

  //print"<script>location.href='?page=lp.html';</script>";
}
?>
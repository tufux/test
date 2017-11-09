<?PHP
session_start();
$host = 'localhost';
$dbname = 'Users';
$username = 'php';
$password = 'php';
$dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
$sql = "SELECT firstname, lastname, username, password, power FROM user WHERE username LIKE :id";

$uname = strtoupper($_POST['username']);
$passw = password_hash($_POST['pw'], PASSWORD_DEFAULT);

$stmt = $dbConn -> prepare ($sql);
$stmt -> execute (  array ( ':id' => $uname)  );

//var_dump($passw);
while ($row = $stmt -> fetch())  {
//echo $row['username'] . " test " . $row['password'];
    $hash = $row['password'];
    $temp = $row['username'];
    $pwr = $row['power'];
}

if(password_verify( $_POST['pw'] , $hash ))
{
    $_SESSION['user'] = $temp;
    $_SESSION['power'] = $pwr;
    //var_dump($_session['user']);
    header("Location: ../index.php");
    exit();
}
else
{
    header("Location: ./wrong.php");
}
?>
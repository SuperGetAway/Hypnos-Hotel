<? 
$host = 'office.ntclick.com:33306'; 
$db = 'hypnos';
$user ='root';
$passdb = 'a15bA4De1f';

$charset = 'utf8mb4';
$dsn = "mysql:host=$host;ddbname=$db;charset=$charset";
$option = [
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
PDO::ATTR_EMULATE_PREPARES => false
];

$pdo = new PDO($dsn,$user,$passdb,$options)

?>
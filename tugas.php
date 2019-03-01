<?php 

session_start();

?>

<?php 

$bil1 = $_POST['bil1'];
$bil2 = $_POST['bil2'];

$_SESSION['bil1'] = $bil1;
$_SESSION['bil2'] = $bil2;

echo "Anda memasukkan bilang ke-1 :".$bil1."<br/>";
echo "Anda memasukkan bilang ke-2 :".$bil2."<br/>";
echo "<a href='proses.php'>Klik disini</a>;
?>
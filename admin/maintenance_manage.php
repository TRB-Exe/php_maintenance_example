<?php
$getfilecount = "../maintenance.txt";
$count = file_get_contents($getfilecount);

echo "Current value: ";
echo $count;

if(isset($_POST['submit'])){
    $text = $_POST['text'];

    $file = fopen("../maintenance.txt", "w");
    fwrite($file, "");
    fwrite($file, $text);
    fclose($file);
    echo "<script>alert('Saved successfuly');</script>";
}
?>

<h1>maintenance management</h1>
<p>1=enable, 0=disable</p>
<form method="POST">
    <input type="text" name="text">
    <input type="submit" name="submit" value="Save">
</form>
<a href="index.php">back to the panel</a>
<a href="../index.php">check website</a>

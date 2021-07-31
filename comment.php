<?php
// header("Location: ./");
# connect to the server
include "_dbConnection.php";

if ($conn === false) {
    echo 'Data base did not connected';
}
$sw = "SELECT * FROM `contact` ORDER BY `contact`.`time` DESC";
$r1 = mysqli_query($conn, $sw);
$c1 = mysqli_num_rows($r1);
$count = 3;
if ($c1 > 0) {
    while (($row = mysqli_fetch_row($r1)) && ($count--)) {
?>
        <div class="form-group">
            <label for="name"> নামঃ <?php echo "{$row[0]}"; ?></label>
        </div>
        <div class="form-group">
            <label for="message"> কমেন্টঃ <?php echo "{$row[4]}"; ?></label>
        </div>
        <br>
<?php
    }
} else {
    echo 'There have no link in database';
}
mysqli_close($conn);

?>
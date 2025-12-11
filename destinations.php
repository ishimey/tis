<?php
$conn = mysqli_connect("localhost", "root", "", "tourism");
if (isset($_GET["query"])) {

    $destinationID = $_GET["query"];
    $sql = "SELECT * FROM destination WHERE destinationID = '$destinationID'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>
    <img src="<?php echo $row["imageURL"]; ?>" alt="">
    <?php
    echo $row["destination"];
    echo $row["description"];
    exit();

}
echo "xainaaa";
?>

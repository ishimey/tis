<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Destinations | Tourism Information System</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>
:root{
    --red:#c62828;
    --blue:#003893;
    --light:#f4f6fb;
}

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins', sans-serif;
}

body{
    background:var(--light);
}

/* Header */
.header,.footer{
    background:linear-gradient(135deg, var(--blue), var(--red));
    padding:60px 20px;
    text-align:center;
    color:#fff;
}

.header h1{
    font-size:40px;
    margin-bottom:10px;
}

.header p{
    font-size:16px;
    opacity:0.9;
}

/* Container */
.container{
    max-width:1200px;
    margin:60px auto;
    padding:0 20px;
}

/* Grid */
.destinations{
    display:flex;
    flex-direction:column;
    gap:30px;
}

/* Card */
.card{
    background:#fff;
    border-radius:18px;
    overflow:hidden;
    box-shadow:0 20px 40px rgba(0,0,0,0.08);
    transition:0.3s ease;
}

.card:hover{
    transform:translateY(-12px);
    box-shadow:0 30px 50px rgba(0,0,0,0.15);
}

/* Image */
.card img{
    width:100%;
    height:200px;
    object-fit:cover;
}

/* Content */
.card-content{
    padding:25px;
}

.card-content h3{
    color:var(--blue);
    margin-bottom:10px;
    font-size:22px;
}

.card-content p{
    font-size:14px;
    color:#555;
    line-height:1.7;
    margin-bottom:15px;
}

/* Button */
.btn{
    display:inline-block;
    padding:10px 22px;
    background:var(--red);
    color:#fff;
    text-decoration:none;
    border-radius:30px;
    font-size:14px;
    transition:0.3s;
}

.btn:hover{
    background:var(--blue);
}
</style>
</head>

<body>

<?php
$conn = mysqli_connect("localhost", "root", "", "tourism");

if (isset($_GET["query"])) {

    $destinationID = $_GET["query"];
    $sql = "SELECT * FROM destination WHERE destinationID = '$destinationID'";
    $sqlAttractions = "SELECT * FROM attractions where destinationID = '$destinationID'";
    $result = mysqli_query($conn, $sql);
    $resultAttractions = mysqli_query($conn, $sqlAttractions);
    $row = mysqli_fetch_assoc($result);
    ?>
 <div class="header">
     <h1>Top destinations in <?php echo $row["destination"]; ?></h1>
 </div>
<?php
}
?>
<div class="container">
    <div class="destinations">

        <?php while ($rows = mysqli_fetch_assoc($resultAttractions)) { ?>
        <div class="card">
            <img src="<?php echo $rows["imageURL"]; ?>" alt="Kathmandu">
            <div class="card-content">
                <h3><?php echo $rows["name"]; ?></h3>
                <p>
                <?php echo $rows["description"]; ?>
                </p>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<div class="footer" >
    <p><?php echo $row["description"]; ?></p>
</div>
</body>
</html>

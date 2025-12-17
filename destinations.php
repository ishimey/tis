

   <?php
$conn = mysqli_connect("localhost", "root", "", "tourism");

if (isset($_GET["query"])) {
    $destinationID = $_GET["query"];
    $sql = "SELECT * FROM destination WHERE destinationID = '$destinationID'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
?>
    <div class="destination-details">
        <img src="<?php echo $row["imageURL"]; ?>" alt="">
        <h2><?php echo $row["destination"]; ?></h2>
        <p><?php echo $row["description"]; ?></p>
    </div>
<?php
}
?>



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
.header{
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
    display:grid;
    grid-template-columns:repeat(auto-fit, minmax(280px,1fr));
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

<div class="header">
    <h1>Top Destinations in Chitwan</h1>
    <p>Explore the beauty, culture, and heritage of Chitwan</p>
</div>

<div class="container">
    <div class="destinations">

        <div class="card">
            <img src="images/kathmandu.jpg" alt="Kathmandu">
            <div class="card-content">
                <h3>Kathmandu</h3>
                <p>
                    Kathmandu, the capital city of Nepal, is rich in history,
                    temples, and cultural heritage.
                </p>
                <a href="#" class="btn">Explore</a>
            </div>
        </div>

        <div class="card">
            <img src="images/pokhara.jpg" alt="Pokhara">
            <div class="card-content">
                <h3>Pokhara</h3>
                <p>
                    Pokhara is famous for its lakes, mountain views,
                    adventure sports, and natural beauty.
                </p>
                <a href="#" class="btn">Explore</a>
            </div>
        </div>

        <div class="card">
            <img src="images/chitwan.jpg" alt="Chitwan">
            <div class="card-content">
                <h3>Chitwan</h3>
                <p>
                    Chitwan is known for Chitwan National Park,
                    wildlife safari, and Tharu culture.
                </p>
                <a href="#" class="btn">Explore</a>
            </div>
        </div>

        <div class="card">
            <img src="images/lumbini.jpg" alt="Lumbini">
            <div class="card-content">
                <h3>Lumbini</h3>
                <p>
                    Lumbini is the birthplace of Lord Buddha
                    and an important spiritual destination.
                </p>
                <a href="#" class="btn">Explore</a>
            </div>
        </div>

    </div>
</div>

</body>
</html>

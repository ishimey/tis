<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>About Us | Tourism Information System</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>
:root{
    --red:#c62828;
    --blue:#003893;
}

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins', sans-serif;
}

/* Background Image */
body{
    min-height:100vh;
    background:
        linear-gradient(rgba(0,0,0,0.45), rgba(0,0,0,0.45)),
        url("public/im.png") no-repeat center center/cover;
}

/* Wrapper */
.about-wrapper{
    max-width:1100px;
    margin:80px auto;
    padding:20px;
}

/* Card */
.about-card{
    background:rgba(255,255,255,0.95);
    border-radius:18px;
    padding:50px;
    box-shadow:0 25px 45px rgba(0,0,0,0.25);
    position:relative;
}

/* Decorative top line */
.about-card::before{
    content:'';
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:6px;
    background:linear-gradient(90deg, var(--blue), var(--red));
}

/* Title */
.about-title{
    text-align:center;
    margin-bottom:30px;
}

.about-title h1{
    font-size:38px;
    color:var(--red);
    font-weight:700;
}

.about-title span{
    font-size:14px;
    color:#666;
}

/* Text */
.about-text{
    font-size:16px;
    line-height:1.9;
    color:#444;
    text-align:justify;
}

/* Sections */
.about-sections{
    display:grid;
    grid-template-columns:repeat(auto-fit, minmax(280px,1fr));
    gap:30px;
    margin-top:40px;
}

.about-box{
    background:#f9fafc;
    padding:25px;
    border-radius:14px;
    border-left:5px solid var(--blue);
    transition:0.3s ease;
}

.about-box:hover{
    transform:translateY(-10px);
    box-shadow:0 15px 30px rgba(0,0,0,0.12);
    border-left-color:var(--red);
}

.about-box h3{
    color:var(--blue);
    margin-bottom:10px;
}

.about-box p{
    font-size:15px;
    color:#555;
    line-height:1.7;
}
</style>
</head>

<body>

<div class="about-wrapper">
    <div class="about-card">

        <div class="about-title">
            <h1>About Us</h1>
            <span>Tourism Information System</span>
        </div>

        <p class="about-text">
            The Tourism Information System provides reliable and organized
            information about Nepal’s tourism destinations, culture, and
            natural heritage. It helps travelers plan their journeys easily
            and effectively.
        </p>

        <div class="about-sections">
            <div class="about-box">
                <h3>Our Mission</h3>
                <p>
                    To promote tourism in Nepal by offering accurate
                    information through a simple and user-friendly platform.
                </p>
            </div>

            <div class="about-box">
                <h3>Our Vision</h3>
                <p>
                    To become a trusted tourism guide that supports
                    sustainable and responsible travel in Nepal.
                </p>
            </div>
        </div>

    </div>
</div>

</body>
</html>

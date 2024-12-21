<!DOCTYPE html>
<html lang="en">
<head>

    <style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }

    body{
        width:100%;
        background-image: url(views/signupback.jpg);
    }

    /*Navigation Styles*/
    #header {
        position: relative;
        top: 0;
        left:0;
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: #202222;
        
    }
    #header > a > img{
        margin: 10px 50px 0px 220px;
        width: 20%;
        border-radius: 0.05in;
    }
    #nav {
    width: 90%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 2px 400px 2px 45px;
    }
    
    #nav  li{
    list-style: none;
    position: relative;
    margin-left: 0px;
    margin-right: 25px;
    }
    #nav li  a{
        text-decoration: none;
        font-size: 20px;
        font-weight: 600;
        color: white;
        transition: 1s;
    }
    /*Navigation hover*/
    #nav li  a:hover{
        color: rgb(104, 197, 226);  
    }
    #nav li  a:hover::after{
        content: "";
        width: 30%;
        height: 2px;
        background:rgb(104, 197, 226);
        position: absolute;
        bottom: -4px;
        left: 20px;
    }

    /*Navigation styles ends*/


    .success{
        color: green;
    }

    .failure{
        color: red;
    }
    </style>

    <!--Head of page-->
    <meta charset="UTF-8">
    <title> Sign Up Form </title>
    <meta name="keywords" content="Shopaholix, About Shopaholix" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Amiri' rel='stylesheet'>
    <link href="formstyles.css" rel="stylesheet">
    <script src ="form_vld.js"></script>
</head>
<body>
<!--Navigation Bar-->
<section id ="header"> 
        <a class="logo" href="Index.html"> <img src = "views/logo.png" alt = ""></a>
        
        <div>
            <ul class="topnav" id="nav">
                <li ><a class="links" href="index.html">Home</a></li>
                <li ><a class="" href="https://www.cineplex.com/">Get Tickets</a></li>
                <li ><a class="links" href="oscars.html">Oscars</a></li>
                <li ><a class="links" href="toppicks.html">Top Picks</a></li>
            </ul>
        </div>
           
</section>
 <!--Navigation ends-->

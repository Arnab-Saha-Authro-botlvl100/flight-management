<?php
    header('Content-type: text/css; charset: UTF-8');
?>

*{
    margin: 0;
    padding: 0;
    
}
.updiv{
    position:sticky;
}
.updiv .updivmid{
    width:100%;
    height:80px;
    position:relative;
}
.updiv .logo{
    width: 40%;
    height: 99%;
    margin:auto;
    float:left;
    <!-- margin: 20px; -->
    background-color: pink;
}
.updiv .logo img{
    display: block;
    <!-- width:40px; -->
    margin:auto;
    width:100px;
    height: 40px;
    position: absolute;
    top:20px;
    left:30px;
}
.updiv .menu{
    width:60%;
    float:left;
    margin: auto;
    background-color: yellow;
}
.updiv .menu ul{
   text-decoration: none;
   height:99%;
   margin:auto;
   position: absolute;
   top:20px;
}
.updiv .menu ul li{
    
    display: inline-block;
    padding: 8px 30px;
    margin: 0px 10px;
    border: 2px solid green;
}
.updiv .menu ul li a{
    text-decoration: none;
    letter-spacing:2px;
    color:yellow;
    font-size: 18px;
}
.updiv {
    background-color:black;
    display:block;
    width:100%;
}
.tablediv{
    display:flex;
    text-align:center;
    background-image: url("airport1.jpg");
    height:700px;
    justify-content:center;
    background-size: 100% 100%;
    animation:slide 10s infinite ease-in;
}
@keyframes slide {
    0%{
        background-image: url("airport1.jpg");
    }
    25%{
        background-image:url("airport2.jpg");
    }
    75%{
        background-image:url("plane7.jpg");
    }
    100%{
        background-image: url("plane8.jpg");
    }
}
.tablediv table{
    
    background-color:linen;
    margin:auto;
    padding:20px;
    border:1px solid black;
    box-shadow: 0px 0px 40px blue;
}

td{
    background-color:black;
    color:lightblue;
}
button{
    color: lightblue;
    background-color:black;
    height:50px;
    border: none;
}
button:hover{
    color: #51ea51;
    cursor: pointer;
}
button a {
    text-decoration: none;
    color: lightblue;
}
button a:hover{
    color: #51ea51;
}
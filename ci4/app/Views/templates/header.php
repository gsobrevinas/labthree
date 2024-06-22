<!doctype html>
<html>
<head>
    <title>WebProg CI4</title>
</head>
<style>
  /*navbar + body css start */
  .bod {
    margin: 0;
    background-color:#e1e7f6;
  }
  
  ul.navbar {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:#2d4286;
    position: relative;
    top: 0;
    width: 100%;
  }
  
  li {
    float: left;
  }
  
  li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }
  
  li a:hover:not(.reference) {
    background-color: #698ae8;
  }
  
  .reference {
    background-color:#698ae8; 
  }

  .footer {
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 2.5rem;
  }
  /*navbar + body css end */
</style>
<body class="bod">
<ul class="navbar">
  <li><a href="index.html">Home</a></li>
  <li><a href="">About</a></li>
  <li><a href="">Guests</a></li>
  <li style="float:right"><a class="reference" href="references.html">References</a></li>
</ul>
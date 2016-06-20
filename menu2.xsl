<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html lang="en">



<head>
    <meta charset="UTF-8"/>
    <title>Snackbar Menu</title>
    <link rel="stylesheet" href="stylesheets/snackbar.css"/>
</head>
<body>

<header>
    <img src="images/headerImage2.jpg" alt="header" width="1000px" height="200px"/>
</header>
<nav class="menu">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="nowplaying.php">Now Playing</a></li>
        <li><a href="comingsoon.php">Coming Soon</a></li>
        <li><a href="ticketpurchase.php">Get Tickets</a></li>
        <li><a href="snackbar.php">Snack Shop</a></li>
        <li><a href="photos.php">Photos</a></li>
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="admin_login.php">Admin</a></li>
    </ul>
</nav>
<main>
  
   <h1 class="top">Rhinebeck Drive-In</h1>
   <h1 class="top">Snackbar Menu</h1>
   <table class="whitetext" style="margin: auto;" border="1">
     <tr bgcolor="#ff3333">
		<th>Item</th>
		<th>Price</th>
     </tr>
     <xsl:for-each select="menu/menu_left/food">
     <tr>
		<td style="height: 25px; font-size: 150%"><xsl:value-of select="item"/></td>
		<td style="height: 25px; font-size: 150%"><xsl:value-of select="price"/></td>
     </tr>
     </xsl:for-each>
	</table><br/>

	<table class="whitetext" style="margin: auto;" border="1">
		<tr bgcolor="#ff3333">
			<th>Item</th>
			<th>Price</th>
		</tr>	
	 <xsl:for-each select="menu/menu_right/food">
		<tr>
			<td style="height: 25px; font-size: 150%"><xsl:value-of select="item"/></td>
			<td style="height: 25px; font-size: 150%"><xsl:value-of select="price"/></td>
		</tr>
     </xsl:for-each>
   </table>
</main> 

 <footer id="foot">
	<div id="container">
		<img id="antipiracy" src="images/anti-piracy.gif" width="125px"/>
		<a href="http://www.mpaa.org/why-copyright-matters/" target="_blank">Video recording devices are strictly prohibited. Click here for anti-piracy laws.</a>
	</div>
	<div id="address">
		<p class="whitetext">Rhinebeck Masterpiece Drive-In</p>
		<p class="whitetext">3392 North Albany Post Road</p>
		<p class="whitetext">Rhinebeck, NY 12572</p>
	</div>
</footer> 

</body>
</html>
</xsl:template>

</xsl:stylesheet> 
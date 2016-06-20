<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0"
 xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
   <html style="background-color: black">
   <body style="margin: auto; text-align: center; width: 800px; border: 1px solid black; background-color: #ffffee;">
   <h1>Rhinebeck Drive-In</h1>
   <h1>Snackbar Menu</h1>
   <table style="margin: auto;" border="1">
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

	<table style="margin: auto;" border="1">
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
   </body>
   </html>
</xsl:template>

</xsl:stylesheet> 
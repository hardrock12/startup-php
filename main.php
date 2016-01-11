<html>
<body>

<form class="search-frm" method="GET" action="search.php">
<input type="text" name="searchtext"></input>
<select name="option">

<option value="select" selected="true">select department</option>

	<?php
	$pizza="All,Beauty,Grocery,Industrial,PetSupplies,OfficeProducts,Electronics,Watches,Jewelry,Luggage,Shoes,KindleStore,Automotive,MusicalInstruments,GiftCards,Toys,SportingGoods,PCHardware,Books,Baby,HomeGarden,VideoGames,Apparel,Marketplace,DVD,Music,HealthPersonalCare,Software
     ";
     
	$arr=explode(",", $pizza);

	foreach($arr as $val)
	{
		echo "<option value=\"".$val."\">".$val."</option>";
	}
	?>
	
	
	
	
	
</select>
<button class="btn btn-default" value="Search">Search</button>
</form>
<?php

?>


</body>
</html>
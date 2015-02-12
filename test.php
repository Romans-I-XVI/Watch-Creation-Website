<?php include("header.php");?>
<script>

	$.get("add-to-watchlist.php",{video_id:10999},callbackFunction);
	callbackFunction(data)
	{
	alert(data);
	}
</script>
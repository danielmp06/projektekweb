<?php
session_start();
if (isset($_SESSION["sekarang"]))
{
	unset($_SESSION['sekarang']);
?>
	<script language="javascript">
	document.location="../../login.php";
	</script>
<?php 
	
}
?>

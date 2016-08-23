<?php 

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
function validate()
{
var angka = jQuery(".coba").val();
//alert(angka);
if(jQuery.isNumeric(angka)==false)
{
alert("ga blh angka");
}
}
</script>
<form>
<?php for($i=1;$i<10;$i++){ ?>
<input type="text" name="coba" class="coba<?php echo $i; ?>">
<?php } ?>
<input type="submit" name="submit" onclick="validate()">
</form>
<?php
function change_color (&$color){

	$edcol=array_pop($color);
	array_unshift($color, $edcol);
	return $color[0];

}
function chess_board ($h,$l,$colors){
	$w=99/$l.'%';
	$hi=99/$h.'%'; ?>
	<div style="width: auto; border: solid 1px black;">
	<?php
	for ($i=1;$i<=$h;$i++) : ?>
		<div style="height: <?php echo $hi?>; width: auto">
			<?php for ($z=1;$z<=$l;$z++):   ?>
				<div style="float: left; height:100%; width: <?php echo $w?>; background-color: <?php echo change_color($colors)?>"></div>
				<?php
			endfor; ?>
		</div>
		<?php
	endfor;
	?>
	</div>
	<?php
}

if ($_POST){
	$h=$_POST['H'];
	$l=$_POST['L'];
	$c=$_POST['C'];
	$colors=array('black','white',''.$c.'');
	echo chess_board($h,$l,$colors);
}

?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Chess board</title>
</head>
<body>
<div style="clear: both;"></div>
<div style="width: auto">
	<form method="post">
		<label for="Hi">Высота</label>
		<input type="number" name="H" id="Hi"><Br>
		<label for="Lo">Ширина</label>
		<input type="number" name="L" id="Lo"><Br>
		<label for="color">Цвет</label>
		<input type="text" name="C" id="color"><Br>
		<input type="submit">
	</form>
</div>
</body>
</html>
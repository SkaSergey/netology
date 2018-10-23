
<?php 
$animal = [
	'africa' => ['Hippopotamus amphibius', 'Panthera pardus', 'Hyaenidae', 'Gazella'],
	'south_america' => ['Folivora', 'Panthera onca', 'Crocodilia', 'Vicugna pacos','Cebus'],
	'australia'=> ['Phascolarctos cinereus', 'Dromaius novaehollandiae', 'Ordinarius programmator','Vombatidae', 'Ornithorhynchus anatinus']
];

//первое задание
$twoWords = [];
	foreach ($animal as $continent => $animalName) {
		foreach ($animalName as $name) {
			if (count(explode(' ', $name)) == 2) {
				array_push($twoWords, $name);
			}
		}
	}
$taskOne = implode( ", ", $twoWords);	
//второе задание

$oneWord = [];
foreach ($twoWords as $key => $value) {
	$one = explode(" ", $value);
	array_push($oneWord, $one);
	unset($key);
	unset($value);
}
$first = [];
foreach ($oneWord as $key => $value) {
	$firstWord = $value[0];
	array_push($first,$firstWord);
}
$WordOne = implode( ", ", $first);	

$second = [];
foreach ($oneWord as $key => $value) {
	$secondWord = $value[1];
	array_push($second,$secondWord);
}
$i = 0;
$c = count($second);
shuffle($second);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<ol>
	<li>Исходный массив: 
		<?php 
		print '<pre>';
		var_dump($animal);
		print '</pre>';
 		?>
	</li>
	<li>
		 Названия, состоящие из двух слов: <p><?=$taskOne?></p>
	</li>
	<li> "Фантазийные" названия:
		<ol>
			<?php 
 		while ( $i < $c) {
 		print '<li>' . $first[$i] . ' ' . ($second[$i]) . '</li>';
		$i++;
		}
 		 ?>
		</ol>
	</li>	
</ol>
</body>
</html>
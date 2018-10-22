<?php 
$string = file_get_contents(__DIR__ . '/base.json');

$data = json_decode($string, true);

?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<style>
 		table {border-collapse: collapse; margin: 15px 15px;}
 	</style>
 </head>
 <body>

<table cellpadding="10px" border="1px solid black">
	<tr>
		<td>Имя</td>
		<td>Фамилия</td>
		<td>Страна</td>
		<td>Город</td>
		<td>Адрес</td>
		<td>Индекс</td>
		<td>Телефон</td>
	</tr>
	<?php foreach ($data as $i => $value) : ?>
 			<tr>
 				<td><?=$value['firstName']?></td>
 				<td><?=$value['lastName']?></td>
 				<td><?=$value['address']['country']?></td>
 				<td><?=$value['address']['city']?></td>
 				<td><?=$value['address']['streetAddress']?></td>
 				<td><?=$value['address']['postalCode']?></td>
 				<td><?php $phone = implode(", " , $value['phoneNumbers']); echo $phone?></td>
 			</tr>
 		<?php endforeach; ?>
</table>
 </body>
 </html>
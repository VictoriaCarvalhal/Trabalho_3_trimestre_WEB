<?php

	include 'lib/app.php';

	$link = bancoConecta();

	$sql = <<<EOT
    SELECT name,population FROM city WHERE CountryCode = 'BRA'
EOT;
?>

<h1>Cidades Brasileiras</h1>
<table class="table table-striped table-sm table-bordered">
	<thead>
		<tr>
			<th scope="col">Nome</th>
			<th scope="col">População</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach(executaSelect($link,$sql) as $linha) { ?> 
			<tr>
				<td><?=$linha['name']?></td>
				<td><?=$linha['population']?></td>
			</tr>
		<?php } /*foreach*/ ?>
	</tbody>
</table>

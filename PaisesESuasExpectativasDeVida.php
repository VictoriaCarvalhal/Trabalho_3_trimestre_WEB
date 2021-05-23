<?php

	include 'lib/app.php';

	$link = bancoConecta();

	$sql = <<<EOT
    SELECT Name,LifeExpectancy FROM country order by LifeExpectancy desc
EOT;
?>

<h1>Paises SulAmericanos e suas Expectativas de Vida</h1>
<table class="table table-striped table-sm table-bordered">
	<thead>
		<tr>
			<th scope="col">Nome</th>
            <th scope="col">Expectativa de Vida</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach(executaSelect($link,$sql) as $linha) { ?> 
			<tr>
				<td><?=$linha['Name']?></td>
                <td><?=$linha['LifeExpectancy']?></td>
			</tr>
		<?php } /*foreach*/ ?>
	</tbody>
</table>
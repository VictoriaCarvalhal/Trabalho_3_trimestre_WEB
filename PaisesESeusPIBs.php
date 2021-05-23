<?php

	include 'lib/app.php';

	$link = bancoConecta();

	$sql = <<<EOT
    SELECT Name,GNP FROM country order by GNP desc
EOT;
?>

<h1>Paises Africanos e seus PIBs</h1>
<table class="table table-striped table-sm table-bordered">
	<thead>
		<tr>
			<th scope="col">Nome</th>
            <th scope="col">GNP</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach(executaSelect($link,$sql) as $linha) { ?> 
			<tr>
				<td><?=$linha['Name']?></td>
                <td><?=$linha['GNP']?></td>
			</tr>
		<?php } /*foreach*/ ?>
	</tbody>
</table>
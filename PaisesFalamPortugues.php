<?php

	include 'lib/app.php';

	$link = bancoConecta();

	$sql = <<<EOT

        SELECT 
            c.Name, c.Continent, cl.IsOfficial, cl.Percentage
        FROM 
            country as c,  
            countrylanguage as cl
        WHERE
            c.Code = cl.CountryCode and
            cl.Language = 'Portuguese'
EOT;
?>

<h1>Países que falam português</h1>
<table class="table table-striped table-sm table-bordered">
	<thead>
		<tr>
			<th scope="col">Nome</th>
			<th scope="col">Continente</th>
			<th scope="col">Oficial</th>
			<th scope="col">Percentual</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach(executaSelect($link,$sql) as $linha) { ?> 
			<tr>
				<td><?=$linha['Name']?></td>
				<td><?=$linha['Continent']?></td>
				<td><?=$linha['IsOfficial']?></td>
				<td><?=$linha['Percentage']?></td>
			</tr>
		<?php } /*foreach*/ ?>
	</tbody>
</table>

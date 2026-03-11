<!DOCTYPE html>
<html lang=pt-BR>
<head>
    <meta charset=UTF-8>
    <title></title>
</head>
<body>
	<p>
		<?php
			$nomeAluno = "Xaolim Matador de Porco";
			$notas = array(7.0,8.7,5.0);
			$media = 0;
		

			foreach($notas as $nota){
				$media += $nota;
			
			}
			$media = $media/3;
		
			echo "Nota: $media";
		
			if($media >= 7){
				echo "\nAluno $nome_aluno Aprovado";
			}elseif($media < 7 && $media >= 5 ){
				echo "\nAluno $nome_aluno Recuperação";
				$nota_recu = 9.0;
				echo "\nNota da Recuperação: $nota_recu";
				$media = ($media + $nota_recu)/2;
				if($media >= 7){
					echo "Aluno $nomeAluno aprovado";
				}else{
					echo "Aluno $nomeAluno reprovado";
				}
			}else{
				echo "\nAluno $nome_aluno Reprovado";
			}
		
		?>
	</p>    
</body>
</html>

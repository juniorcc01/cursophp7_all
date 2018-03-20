<?php

$hierarquia = array(
	array(
		'nome_cargo' => 'CEO',
		'subordinados' =>array(
			//Inicio: Diretor Comercial
			array(
				'nome_cargo'=>'Diretor Comercial',
				'subordinados'=>array(
					//Inicio: Gerente de vendas
					Array(
					'nome_cargo'=>'Gerente de vendas',
					)
				)
			),
			//Termino: Diretor Comercial.
			//Inicio diretor Financeiro.
			array(
				'nome_cargo'=>'Diretor Financeiro',
				'subordinados'=>array(
				//inicio contas a pagar
				array(
				'nome_cargo'=>'Gerente de contas a pagar',
				'subordinados'=>array(
					array(
					'nome_cargo'=>'Suporvisor de Pagamemtos'
					)
					
				)
				//termino Gerente contas a pagar
				)
				)
			),
			//Termino diretor financeiro
			//Inicio: Gerente de Compras
			Array(
				'nome_cargo'=>'Gerente de Compras',
				'subordinados'=>array(
				array(
					'nome_cargo'=>'Supervisor de Suprimentos',
					'subordinados'=>array(
					
					array(
					'nome_cargo'=>'Funcionarios'
						)
					)				
				)
				)
			)
			//Termino:Gerente de Compras
		)
	)
);
	
function exibe($cargos){
	
$html = '<ul>';
	
		foreach($cargos as $cargo){
			$html .= "<li>";
			$html .= $cargo['nome_cargo'];
			if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
				$html .= exibe($cargo['subordinados']);
			}			
			$html .= "</li>";
		}
	
$html .='</ul>';
	
	return $html;
}

echo exibe($hierarquia);
?>









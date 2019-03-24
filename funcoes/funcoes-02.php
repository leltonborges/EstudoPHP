<?php
$hierarquia = array(
  array(
    'nome_cargo'=>'CEO',
    'salario' => 3200,
    'subordinados'=>array(
      //Inicio: Diretor Comercial
      array(
        'nome_cargo'=>'Diretor comercial',
        'salario' => 3200,
        'subordinados'=>array(
          //Inicio: Gerente de Vendas
          array(
            'nome_cargo'=>'Gerente de Vendas',
            'salario' => 3200
          )
          //Termino: Gerente de vendas
        )
      ),
      //Termino: Diretor Comercial
      //Inicio: Diretor Financeiro
        array(
            'nome_cargo'=>'Diretor Financeiro',
            'salario' => 3200,
            'subordinados'=>array(
                //Inicio: Gerente de contas a pagar
                array(
                    'nome_cargo'=>'Gerente de contas a pagar',
                    'salario' => 3200,
                    'subordinados'=>array(
                        //Inicio: Supervisor de pagamento
                        array(
                            'nome_cargo'=>'Supervisor de pagamento',
                            'salario' => 3200,
                            'subordinados'=>array(
                              array(
                                'nome_cargo'=>'funcionarios',
                                'salario' => 3200,
                                'subordinados'=> array(
                                  array(
                                    'nome_cargo'=> 'empacotador'
                                  )
                                )
                              )
                            )
                        )
                        //Termino: supervisor de pagamento
                    )
                ),
                //Termino: Gerente de contas a pagar
                //Inicio: Gerente de compras
                array(
                    'nome_cargo'=>'Gerente de compras',
                    'salario' => 3200,
                    'subordinados'=>array(
                        //Inicio: Supervisor de suprimentos
                        array(
                            'nome_cargo'=>'Supervisor de suprimentos',
                            'salario' => 3200
                        )
                        //Termino: Supervisor de suprimentos
                    )
                )
                //Termino: Gerente de compras
            )
        )
      //Termino: Diretor Financeiro
    )
  )
);

function exibe($cargos){
  $html = '<ul>';
  foreach ($cargos as $cargo) {
    $html .= "<li>";
    $html .= $cargo['nome_cargo'];

    if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
        $html .= exibe($cargo['subordinados']);
    }

    $html .= "</li>";
  } $html .= '</ul>';
  return $html;
}

echo exibe($hierarquia);
 ?>

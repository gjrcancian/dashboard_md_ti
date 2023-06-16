<?php 

if(isset($_POST['req']) && ($_POST['req'] == "clientes" || $_POST['req'] == 'fornecedores'|| $_POST['req'] == 'usuarios')){
    require_once 'DataRequest.php';
    $dataRequest = new DataRequest();
    $tipo = $_POST['req'];
    
    if ($tipo === 'clientes') {
        $dados = $dataRequest->dadosClientes();
    } elseif ($tipo === 'fornecedores') {
        $dados = $dataRequest->dadosFornecedores();
    } elseif ($tipo === 'usuarios') {
        $dados = $dataRequest->dadosUsuarios();
    }
   
    $response['dados'] =$dados;
    $response['error'] = 0;

    echo json_encode($response);

}else{
    $response['error'] = 1;

    echo json_encode($response);
}
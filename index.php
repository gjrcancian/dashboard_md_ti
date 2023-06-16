<?php
include_once("components/cabecalho.php");
include_once("components/menu.php");
require_once 'DataRequest.php';
$dataRequest = new DataRequest();
$qtde_clientes = $dataRequest->dadosClientes('c');
$qtde_usuarios = $dataRequest->dadosUsuarios('c');
$qtde_fornecedores = $dataRequest->dadosFornecedores('c');
$lista_clientes = $dataRequest->dadosClientes();

?>


<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
	<div class="page-content">
		<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
		<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
						<h4 class="modal-title">Modal title</h4>
					</div>
					<div class="modal-body">
						Widget settings form goes here
					</div>
					<div class="modal-footer">
						<button type="button" class="btn blue">Save changes</button>
						<button type="button" class="btn default" data-dismiss="modal">Close</button>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->
		<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
		<!-- BEGIN PAGE HEADER-->
		<div class="row">
			<div class="col-md-12">
				<!-- BEGIN PAGE TITLE & BREADCRUMB-->
				<h3 class="page-title">
					Dashboard <small>tudo que você precisa à um click.</small>
				</h3>
				<ul class="page-breadcrumb breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Dashboard</a>
					</li>
					<li class="pull-right">
						<div id="dashboard-report-range" class="dashboard-date-range tooltips" data-placement="top" data-original-title="Change dashboard date range">
							<i class="fa fa-calendar"></i>
							<span>
							</span>
							<i class="fa fa-angle-down"></i>
						</div>
					</li>
				</ul>
				<!-- END PAGE TITLE & BREADCRUMB-->
			</div>
		</div>
		<!-- END PAGE HEADER-->
		<!-- BEGIN DASHBOARD STATS -->
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="dashboard-stat blue">
					<div class="visual">
						<i class="fa fa-shopping-cart"></i>
					</div>
					<div class="details">
						<div class="number">
							<?php echo $qtde_clientes; ?>
						</div>
						<div class="desc">
							Clientes
						</div>
					</div>
					<a class="more" href="#"  onclick="requestData('clientes')">
						Visualizar <i class="m-icon-swapright m-icon-white"></i>
					</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="dashboard-stat green">
					<div class="visual">
						<i class="fa fa-group"></i>
					</div>
					<div class="details">
						<div class="number">
							<?php echo $qtde_usuarios; ?>
						</div>
						<div class="desc">
							Usuários
						</div>
					</div>
					<a class="more" href="#"  onclick="requestData('usuarios')">
						Visualizar <i class="m-icon-swapright m-icon-white"></i>
					</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="dashboard-stat purple">
					<div class="visual">
						<i class="fa fa-globe"></i>
					</div>
					<div class="details">
						<div class="number">
							<?php echo $qtde_fornecedores; ?>
						</div>
						<div class="desc">
							Fornecedores
						</div>
					</div>
					<a class="more" href="#"  onclick="requestData('fornecedores')">
						Visualizar <i class="m-icon-swapright m-icon-white"></i>
					</a>
				</div>
			</div>
		</div>
		<!-- END DASHBOARD STATS -->
		<div class="clearfix">
		</div>
		<!--Tabela-->
		<div class="row">
			<div class="col-md-12">
				<!-- BEGIN SAMPLE TABLE PORTLET-->
				<div class="portlet box blue" id='topo_tabela'>
					<div class="portlet-title">
						<div class="caption" id='titulo_tabela'>
							<i class="fa fa-shopping-cart"></i>Clientes
						</div>
						<div class="tools">
							<a href="javascript:;" class="collapse"></a>
							<a href="#portlet-config" data-toggle="modal" class="config"></a>
							<a href="javascript:;" class="reload"></a>
							<a href="javascript:;" class="remove"></a>
						</div>
					</div>
					<div class="portlet-body">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead id='cabecalho_tabela'>
									<tr>
										<th>
											#
										</th>
										<th>
											Nome
										</th>
										<th>
											Cpf
										</th>
										<th>
											Endereço
										</th>
										<th>
											Telefone
										</th>
										<th>
											Email
										</th>
									</tr>
								</thead>
								<tbody id='conteudo_tabela'>
									<?php foreach ($lista_clientes as $key => $cliente) {
										?>
											<tr>
												<td>
													<?php echo $key +1; ?>
												</td>
												
												<td>
													<?php echo $cliente['nome']; ?>
												</td>
												
												<td>
													<?php echo $cliente['cpf']; ?>
												</td>
												<td>
													<?php echo $cliente['endereco']; ?>
												</td>
												<td>
													<?php echo $cliente['telefone']; ?>
												</td>
												<td>
													<?php echo $cliente['email']; ?>
												</td>


											</tr>
										<?
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- END SAMPLE TABLE PORTLET-->
			</div>
		</div>
	</div>
</div>
<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<?php
include_once("components/rodape.php");


?>
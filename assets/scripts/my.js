function requestData(dataType) {

    if (dataType === 'clientes' || dataType === 'fornecedores' || dataType === 'usuarios') {
        $.ajax({
            url: 'request.php',
            method: 'POST',
            data: { req: dataType },
            dataType: 'json',
            success: function (response) {
                if (!response.error) {
                    dados = response.dados;
                    remontaTabela(dados, dataType);
                } else {
                }
            },
            error: function (xhr, status, error) {
                console.log('Ocorreu um erro, tente novamente em instantes');

            }
        });
    } else {
        alert('Requisição inválida');
    }
}

function remontaTabela(dados, dataType) {

    $('#cabecalho_tabela').empty();
    $('#conteudo_tabela').empty();
    if (dataType === 'clientes') {
        $('#titulo_tabela').html('<i class="fa fa-shopping-cart"></i> Clientes');
        $('#topo_tabela').removeClass('green').removeClass('purple').addClass('blue');
        var novoCabecalho = `<tr>
                              <th>#</th>
                              <th>Nome</th>
                              <th>Cpf</th>
                              <th>Endereço</th>
                              <th>Telefone</th>
                              <th>Email</th>
                          </tr>`;
        $('#cabecalho_tabela').html(novoCabecalho);
        if (Array.isArray(dados)) {
            dados.forEach(function (item, index) {
                var novaLinha = `<tr>
              <td>${index + 1}</td>
              <td>${item.nome}</td>
              <td>${item.cpf}</td>
              <td>${item.endereco}</td>
              <td>${item.telefone}</td>

              <td>${item.email}</td>
         
            </tr>`;

                $('#conteudo_tabela').append(novaLinha);

            });
        }
    }

    if (dataType === 'usuarios') {
        $('#titulo_tabela').html('<i class="fa fa-group"></i> Usuários');
        $('#topo_tabela').removeClass('blue').removeClass('purple').addClass('green');
       
        var novoCabecalho = `<tr>
                              <th>#</th>
                              <th>Nome</th>
                              <th>Cpf</th>
                              <th>Endereço</th>
                              <th>Telefone</th>
                              <th>Usuário</th>
                          </tr>`;
        $('#cabecalho_tabela').html(novoCabecalho);
        
        if (Array.isArray(dados)) {
            dados.forEach(function (item, index) {
                var novaLinha = `<tr>
                                    <td>${index + 1}</td>
                                    <td>${item.nome}</td>
                                    <td>${item.cpf}</td>
                                    <td>${item.endereco}</td>
                                    <td>${item.telefone}</td>
                                    <td>${item.usuario}</td>
                                
                                </tr>`;

                $('#conteudo_tabela').append(novaLinha);

            });
        }
    }

    if (dataType === 'fornecedores') {
        $('#titulo_tabela').html('<i class="fa fa-globe"></i> Fornecedores');
        $('#topo_tabela').removeClass('green').removeClass('blue').addClass('purple');

        var novoCabecalho = `<tr>
                              <th>#</th>
                              <th>Nome</th>
                              <th>Cpf</th>
                              <th>Cidade</th>
                              <th>Email</th>
                          </tr>`;
        $('#cabecalho_tabela').html(novoCabecalho);

        if (Array.isArray(dados)) {
            dados.forEach(function (item, index) {
                var novaLinha = `<tr>
                                    <td>${index + 1}</td>
                                    <td>${item.nome}</td>
                                    <td>${item.cpf}</td>
                                    <td>${item.cidade}</td>
                                    <td>${item.email}</td>
                                </tr>`;

                $('#conteudo_tabela').append(novaLinha);

            });
        }

    }

}
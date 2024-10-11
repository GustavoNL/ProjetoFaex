<div class="container-list">
    <div class="search-container">
        <input type="text" class="search-input" placeholder="Pesquisar...">
        <a href="/PFaex/panel/students/create"><button class="btn-add">Adicionar</button></a>
        
    </div>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Ações</th> <!-- Nova coluna para ações -->
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $_SESSION["user"]['name']?></td>
                <td><?= $_SESSION["user"]['email']?></td>
                <td><?= $_SESSION["user"]['phone']?></td>
                <td>
                    <a href="/PFaex/panel/students/edit"><button class="btn-edit">Editar</button></a>
                    <a href="#"><button class="btn-delete">Deletar</button></a>
                </td>
            </tr>
            <tr>
                <td>Maria Oliveira</td>
                <td>maria.oliveira@example.com</td>
                <td>(21) 98765-4321</td>
                <td>
                    <a href="/PFaex/panel/students/edit"><button class="btn-edit">Editar</button></a>
                    <a href="#"><button class="btn-delete">Deletar</button></a>
                </td>
            </tr>
            <!-- Adicione mais linhas conforme necessário -->
        </tbody>
    </table>
</div>
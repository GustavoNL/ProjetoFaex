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
                <th>Curso</th>
                <th>Ano</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($student as $key => $students): ?>
            <tr>
                <td><?= $students['name'] ?></td>
                <td><?= $students['email'] ?></td>
                <td><?= $students['course'] ?></td>
                <td><?= $students['year'] ?></td>
                <td>
                    <a href="/PFaex/panel/students/edit"><button class="btn-edit">Editar</button></a>
                    <a href="#"><button class="btn-delete">Deletar</button></a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>
<div class="container-list">
    <div class="search-container">
        <form action="/PFaex/panel/students/search" method="GET">
            <input class="search-input" type="text" name="nameFilter" value="<?= $search ?>" placeholder="Pesquisar">
            <button class="btn-search">Pesquisar</button>
        </form>
        <a href="/PFaex/panel/students/create"><button class="btn-add">Adicionar</button></a>
        <?php if ($search != "") { ?>
            <a href="/PFaex/panel/students"><button class="btn-clear">Limpar</button></a>
        <?php } ?>
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
                        <div class="button-group">
                            <a href="/PFaex/panel/students/edit/<?= $students['id'] ?>">
                                <button class="btn-edit">Editar</button>
                            </a>
                            <form action="/PFaex/panel/students/delete/<?= $students['id'] ?>" method="post">
                                <button class="btn-delete" type="submit">Deletar</button>
                            </form>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

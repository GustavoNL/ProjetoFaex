<div class="container-criar">
    <form action="">
        <div class="flex-container">
            <div class="md-3">
                <label for="name" class="form-label">Name</label>
                <input value = "<?= $student['name'] ?>" name="name" type="text" class="form-control" id="name" required>
            </div>
            <div class="md-3">
                <label for="phone" class="form-label">Telefone</label>
                <input value = "<?= $student['phone'] ?>" name="phone" type="text" class="form-control" id="fone" required>
            </div>
        </div>
        <div class="md-3">
            <label for="email" class="form-label">Email</label>
            <input value="<?= $student['email'] ?>" name="email" type="email" class="form-control" id="email" placeholder="name@example.com" required>
        </div>
        <div class="flex-container">
            <div class="md-3">
                <label for="regist" class="form-label">Matricula</label>
                <input value="<?= $student['register'] ?>" name="regist" type="text" class="form-control" id="regist" required>
            </div>
            <div class="md-3">
                <label for="year" class="form-label">Ano</label>
                <input value="<?= $student['year'] ?>" name="year" type="text" class="form-control" id="year" required>
            </div>
        </div>
        <div class="md-3">
            <label for="course" class="form-label">Curso</label>
            <input value="<?= $student['course'] ?>" name="course" type="text" class="form-control" id="course" required>
        </div>

        <div class="flex-button">
            <div class="button-container">
                <a href="/PFaex/panel/students"><button type="submit" class="btn-back">Voltar</button></a>
            </div>
            <div class="button-container">
                <button type="submit" class="btn-register">Cadastrar</button>
            </div>
        </div>
    </form>
</div>
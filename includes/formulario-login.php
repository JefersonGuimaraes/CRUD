<div class="jumbotron text-dark bg-light p-5 mt-5">

    <div class="row">

        <div class="col">

            <form method="POST">

                <h2>Login</h2>

                <div class="mb-3">
                    <label for="cEmail" class="form-label">E-mail</label>
                    <input type="email" name="tEmail" id="cEmail" class="form-control" required />
                </div>

                <div class="mb-3">
                    <label for="cSenha" class="form-label">Senha</label>
                    <input type="password" name="tSenha" id="cSenha" class="form-control" required />
                </div>

                <div class="mb-3">
                    <button type="submit" name="acao" value="logar" class="btn btn-primary">Entrar</button>
                </div>

            </form>

        </div>


        <div class="col">

        <form method="POST">

            <h2>Cadastra-se</h2>

            <div class="mb-3">
                <label for="cNome" class="form-label">Nome</label>
                <input type="text" name="tNome" id="cNome" class="form-control" required />
            </div>

            <div class="mb-3">
                <label for="cEmail" class="form-label">E-mail</label>
                <input type="email" name="tEmail" id="cEmail" class="form-control" required />
            </div>

            <div class="mb-3">
                <label for="cSenha" class="form-label">Senha</label>
                <input type="password" name="tSenha" id="cSenha" class="form-control" required />
            </div>

            <div class="mb-3">
                <button type="submit" name="acao" value="cadastrar" class="btn btn-primary">Cadastrar</button>
            </div>

            </form>

        </div>

    </div>

</div>
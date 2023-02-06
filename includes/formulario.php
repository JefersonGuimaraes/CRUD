<main>

    <section class="mt-4">
        <a href="index.php">
            <button class="btn btn-success">Voltar</button>
        </a>
    </section>

    <h2 class="mt-3"><?=TITLE?></h2>

    <form method="POST" class="mt-4">

        <div class="mb-3">
            <label for="cTitulo" class="form-label">Título</label>
            <input type="text" name="tTitulo" id="cTitulo" class="form-control" value="<?=!empty($Vaga) ? $Vaga->titulo : ""?>" />
        </div>

        <div class="mb-3">
            <label for="cDescricao" class="form-label">Descrição</label>
            <textarea name="tDescricao" id="cDescricao" cols="30" rows="5" class="form-control"><?=!empty($Vaga) ? $Vaga->descricao : ""?></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Status</label>
            <div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label" for="cAtivo">
                        <input class="form-check-input" type="radio" name="tStatus" id="cAtivo" value="s" checked />
                        Ativo
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label" for="cInativo">
                        <input class="form-check-input" type="radio" name="tStatus" id="cInativo" value="n" <?=!empty($Vaga) && $Vaga->ativo == 'n' ? "checked" : ""?> />
                        Inativo
                    </label>
                </div>
            </div>

        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-success float-end">Enviar</button>
        </div>

    </form>

</main>
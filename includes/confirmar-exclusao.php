<main>

    <h2 class="mt-3">Excluir Vaga</h2>

    <form method="POST" class="mt-4">

        <div class="mb-3">
            
            <p>Você deseja realmente excluir a vaga <strong><?=$Vaga->titulo?></strong></p>

        </div>

        <div class="mb-3">

            <a href="index.php">
                <button type="button" class="btn btn-success">Cancelar</button>
            </a>

            <button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
        
        </div>

    </form>

</main>

        <table>
            <thead>
                <tr>
                    <th><a href="#">Id</a></th>
                    <th><a href="#">Nome</a></th>
                    <th><a href="#">Sobrenome</a></th>
                    <th><a href="#">DDD</a></th>
                    <th><a href="#">Telefone</a></th>
                    <th>Alterar</th>
                    <th>Deletar</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>


        <form action="<?= "?p=cad" ?>" method="post">
            <label>Nome:</label>
            <input type="text" name="nome" value="<?= "" ?>" >

            <label>Sobrenome:</label>
            <input type="text" name="sobrenome" value="<?= "" ?>" >

            <label>DDD:</label>
            <input type="number" name="ddd" value="<?= "" ?>" >

            <label>Telefone:</label>
            <input type="text" name="telefone" value="<?= "" ?>" >

            <button type="submit" name="enviaForm">
                Salvar
            </button>
        </form>

<html>
    <body>
        <?php

        ?>

        <h2>Excluir Clientes</h2>

        <p><form>
        <fieldset>
            <legend>Lista de Clientes:</legend>
            <p><select name="ListaClientes" id="Clientes">
            <option value="1">Cliente 1</option>
            <option value="2">Cliente 2</option>
            <option value="3">Cliente 3</option>
            <option value="4">Cliente 4</option>
            <option value="5">Cliente 5</option>
            </select></p>
        </fieldset>
        </form></p>

        <h3>Dados do Cliente X: </h3>

        <p>"Os dados já deverão vir preenchidos mas sem a possibilidade de alterar, apenas excluir!"</p>

                <form>
                    <fieldset>
                        <legend>Razão Social</legend>
                            <p> 
                            <input type="text" name="Nome" id="NomeEmpresa" placeholder="Já deve vir preenchido com as info do DB">
                            </p>
                    </fieldset>
                </form>
                <form>
                    <fieldset>
                        <legend>CNPJ</legend>
                        <p>
                        <input type='text' placeholder="Já deve vir preenchido com as info do DB" data-mask="00.000.000/0000-00" required>
                        </p>
                    </fieldset>
                </form>
                <form>
                    <fieldset>
                        <legend>Telefone</legend>
                        <p>
                        <input type="tel" required="required" placeholder="Já deve vir preenchido com as info do DB" maxlength="15" name="nome" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" />
                        </p>
                    </fieldset>
                </form>
                <form>
                    <fieldset>
                        <legend>Endereço</legend>
                        <p>
                        <input type="text" name="Endereço" placeholder="Já deve vir preenchido com as info do DB">
                        </p>
                    </fieldset>
                </form>
                <form>
                    <fieldset>
                        <legend>Complemento</legend>
                        <p>
                        <input type="text" name="Complemento" placeholder="Já deve vir preenchido com as info do DB">
                        </p>
                    </fieldset>
                </form>
                <form>
                    <fieldset>
                        <legend>Cidade</legend>
                        <p>
                        <input type="text" name="Cidade" placeholder="Já deve vir preenchido com as info do DB">
                        </p>
                    </fieldset>
                </form>
                <form>
                    <fieldset>
                        <legend>Estado</legend>
                        <p>
                        <input type="text" name="Estado" placeholder="Já deve vir preenchido com as info do DB" >
                        </p>
                    </fieldset>
                </form>
    </body>
</html>
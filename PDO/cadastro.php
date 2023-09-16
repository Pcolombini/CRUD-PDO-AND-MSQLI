<?php include_once 'includes/Header.php'; ?>

<div class="content">

    <div class="resultado">

    </div>
    <div class="formulario">

        <h1 class="center">Cadastro</h1>
        <form name="fomrCadastro" id="fomrCadastro" method="post" action="controller/ControllerCadastro.php">
            <div class="formularioInput">

                <div class="formularioInput">
                    Nome:<br>
                    <input type="text" name="nome" id="nome">
                </div>


                <div class="formularioInput">
                    Sexo:<br>
                    <input type="text" name="sexo" id="sexo">
                </div>


                <div class="formularioInput">
                    Cidade:<br>
                    <input type="text" name="cidade" id="cidade">
                </div>


                <div class="formularioInput formularioInput100 center">
                    <input type="submit" value="Cadastrar">
                </div>
            </div>
        </form>
    </div>

</div>

<?php include_once 'includes/Footer.php'; ?>
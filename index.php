<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <!-- Aplicar depois as metas tags -->
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Login Facebook</title>
</head>
<body>
    
    <header>
        <div class="center">

            <div class="logo">
                <h2>Facebook</h2>
            </div><!--logo-->

            <form action="" method="post" class="form-login">
                <div class="form-element">
                    <p>E-mail ou telefone:</p>
                    <input type="email">
                </div><!--form-element-->

                <div class="form-element">
                    <p>Senha</p>
                    <input type="password">
                </div><!--form-element-->

                <div class="form-element">
                    <input type="submit" name="acao" value="Enviar">
                </div><!--form-element-->
            </form><!--form-login-->
            <div class="clear"></div>
        </div><!--center-->
    </header>

    <section class="main">
        <div class="center">
            <div class="img-pessoas">
                <img src="images/img1.png" alt="people-connect">
            </div><!--img-pessoas-->

            <div class="open-account">
                <h2>Abra sua conta</h2>
                <h3>É gratuito e sempre será</h3>

                <form action="" class="create-account">
                    <div class="w50">
                        <input type="text" placeholder="Nome">
                    </div><!--w50-->

                    <div class="w50">
                        <input type="text" placeholder="Sobrenome">
                    </div><!--w50-->

                    <div class="w100">
                        <input type="email" placeholder="E-mail">
                    </div><!--w100-->

                     <div class="w100">
                        <input type="password" placeholder="Senha">
                    </div><!--w100-->

                    <div class="w100">
                        <h2>Data de nascimento</h2>
                        <select name="birth-dia" class="birth">
                            <?php
                                for($i = 1; $i <= 31; $i++){
                            ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                        <select name="birth-month" class="birth">
                            <option value="0">Janeiro</option>
                            <option value="1">Fevereiro</option>
                            <option value="2">Março</option>
                            <option value="3">Abril</option>
                            <option value="4">Maio</option>
                            <option value="5">Junho</option>
                            <option value="6">Julho</option>
                            <option value="7">Agosto</option>
                            <option value="8">Setembro</option>
                            <option value="9">Outubro</option>
                            <option value="10">Novembro</option>
                            <option value="11">Dezembro</option>
                        </select>
                        <select name="birth-year" class="birth">
                        <?php
                                for($i = 1960; $i <= 2020; $i++){
                            ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                    </div><!--w100-->

                    <div class="w100">
                        <div class="input-radio">
                            <input type="radio" name="sexo" value="masculino">
                            <h2>Masculino</h2>
                        </div><!--input-radio-->

                        <div class="input-radio">
                            <input type="radio" name="sexo" value="feminino">
                            <h2>Feminino</h2>
                        </div><!--input-radio-->
                        <div class="clear"></div>
                    </div><!--w100-->

                    <div class="w100">
                        <input type="submit" name="acao" value ="Cadastrar-se">
                    </div><!--w100-->
                </form>
            </div><!--open-account-->
            <div class="clear"></div>
        </div><!--center-->
    </section><!--main-->

    <section class="languages">
        <div class="center">
            <a class="selected-language" href="#">Português (Brasil)</a>
            <a href="#">Português (Brasil)</a>
            <a href="#">Português (Brasil)</a>
            <a href="#">Português (Brasil)</a>
            <a href="#">Português (Brasil)</a>
            <a href="#">Português (Brasil)</a>
            <a href="#">Português (Brasil)</a>
            <a href="#">Português (Brasil)</a>
        </div><!--center-->

        <div class="center second">
            <a href="#">Cadastra-se</a>
            <a href="#">Entrar</a>
            <a href="#">Messenger</a>
            <a href="#">Facebook Lite</a>
            <a href="#">Encontrar amigos</a>
            <a href="#">Pessoas</a>
            <a href="#">Páginas</a>
            <a href="#">Locais</a>

            <a href="#">Cadastra-se</a>
            <a href="#">Entrar</a>
            <a href="#">Messenger</a>
            <a href="#">Facebook Lite</a>
            <a href="#">Encontrar amigos</a>
            <a href="#">Pessoas</a>
            <a href="#">Páginas</a>
            <a href="#">Locais</a>
        </div><!--center-->
    </section><!--languages-->

</body>
</html>
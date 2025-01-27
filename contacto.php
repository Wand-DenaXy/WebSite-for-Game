<?php
    session_start();
    require "connect.php";
    if (!empty($_SESSION["user_id"]))
    {
        $iduser = $_SESSION["user_id"];
        $result = mysqli_query($con,"SELECT * FROM registrar WHERE user_id = '$iduser'");
        $row = mysqli_fetch_assoc($result);
    }
    else
    {
        header("Location: login1.php");
    }
    ?>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" href="contacto.css">
</head>
<body>
<div class="app">
        <header>
            <ul class="nav_navegation">
                <li>
                    <a href="index.php"><img class="imagemLogo" src="Imagens/Logo PAP.jpg" alt=""></a>
                </li>
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="about.html" class="nav-link">Sobre</a>
                </li>
                <li>
                    <a href="contacto.php" class="nav-link">Contacto</a>
                </li>
                <!-- <li>
                    <a href="densenvolvimento.html" class="nav-link">Desenvolvimento</a>
                </li> -->
            </ul>
        </header>
    </div>
    <br>
    <br>
    <br>
    <h4>Se tiver alguma dúvida ou sugestão, não hesite em contactar-nos! Estamos sempre disponíveis para ajudar e ouvir. Utilize o formulario abaixo para nos contactar</h4>
<main>
<form action="https://api.web3forms.com/submit" method="POST">

    <div class="mensagemp">
        <p >Esperamos que todos sigam nossas regras e diretrizes para o Silent Passage continue sendo divertido</p>
    </div>
    <!-- Replace with your Access Key -->
    <input type="hidden" name="access_key" value="76dbcf4b-c436-4372-9870-41c1996080fa">

    <!-- Form Inputs. Each input must have a name="" attribute -->
    <div class="container">
        <input type="username" id="username" name="username" required placeholder="Username" readonly value="<?= $row["username"] ?>">
    </div>
<div class="container">
    <input type="email" id="email" name="email" required placeholder="Email" readonly  value="<?= $row["email"] ?>">
</div>
<div class="container">
    <select id="Motivo" name="Motivo" required>
        <option value="" disabled selected hidden>Movito do Contacto</option>
        <option value="Glitch/ErroJogo">Glitch/Erro do Jogo</option>    
        <option value="Feedback">Feedback</option>
        <option value="Outro">Outro</option>
    </select>
</div>
<textarea id="mensagem" name="mensagem" rows="4" class="problema" required placeholder="Diga-nos o seu problema"></textarea>
<div class="h-captcha" data-captcha="true"></div>

<div class="MensagemBotao">
    <button type="submit" class="MensagemBotao2">Enviar</button>
</div>
</form>
</main>
<!-- Required for hCaptcha -->
<script src="https://web3forms.com/client/script.js" async defer></script>
<div class="maps1">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d24878.23291612605!2d-9.4373092!3d38.7916978!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd1edb21650cb401%3A0xdcfd0cc21147e96b!2sSerra%20de%20Sintra!5e0!3m2!1spt-PT!2spt!4v1714042890927!5m2!1spt-PT!2spt" width="400" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</body>
</html>
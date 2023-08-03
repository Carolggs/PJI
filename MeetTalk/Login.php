
<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
  <title>Login</title>
</head>

<body>





  <div class="container">

    <div class="columns">

      <div class="column">

      </div>
      <div class="column mt-6">
        <h1 class="content" style="text-align: center; font-size: 60px; color: #3e8ed0;"><svg
            xmlns="http://www.w3.org/2000/svg" width="50" height="45" fill="currentColor" class="bi bi-chat-heart"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M2.965 12.695a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2Zm-.8 3.108.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125ZM8 5.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z" />
          </svg>MeetTalk</h1>

        <form class="box pt-2 pl-5 mt-6 has-background-white" method="POST" action="usuario.php">
          <strong>
            <p class=" is-size-3 mb-3 has-text-centered">
              Faça seu Login
            </p>
          </strong>
          <div class="field">
            <label class="is-size-6">E-mail</label>
            <div class="control">
              <input class="input is-info link mt-1 mb-4 is-hovered" type="email" name="email" placeholder="E-mail">
            </div>
          </div>

          <div class="field">
            <label class="is-size-6">Senha</label>
            <div class="control ">
              <input class="input is-info mt-1 mb-4 is-hovered" type="password" name="senha" placeholder="Senha">
            </div>
          </div>


          <button class="button mb-4  mt-1 is-info is-responsive" type="submit" name="botao" value="login">Entrar</button>



          <p>Não tem uma Conta? <strong><a href="cadastro.html" class="has-text-info">Cadastre-se</a></strong></p>

        </form>



      </div>
      <div class="column">
      </div>


    </div>
  </div>

  </div>


</body>

</html>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
 
    <title>Brasilis Agency</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">


  <body>
  <header>
  
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">
            </div>
            
          </div>
        </div>
      </div>
      <div class="navbar navbar-light" style="background-color: #a5a5a4;">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <img src="Imagens/IMG2.jpg" width="70" height="70" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle> 
            <strong>Brasilis Agency</strong>
          </a>
      <a class="text-white active" href="index.html">Home <span class="sr-only">(Página atual)</span></a>
      <a class= "text-white"  href="Norte.html">Norte</a>
      <a class="text-white"  href="Nordeste.html">Nordeste</a>
      <a class="text-white"  href="CentroOeste.html">Centro-Oeste</a>
	  <a class="text-white" href="Sudeste.html">Sudeste</a>
	  <a class= "text-white" href="Sul.html" >Sul</a>
    <a class="text-success nav-item nav-link" href="entrar1.html">Login</a>
    <a class="text-white nav-item nav-link" href="sign.html">Cadastro</a>
    
    </div>
  </div>
</nav>
<table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Sexo</th>
                            <th scope="col">RG</th>
                            <th scope="col">CPF</th>
                            <th scope="col">Cidade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'Banco.php';
                        $pdo = Banco::conectar();
                        $sql = 'SELECT * FROM clientes ORDER BY id DESC';

                        foreach($pdo->query($sql)as $row)
                        {
                            echo '<tr>';
			                echo '<th scope="row">'. $row['id'] . '</th>';
                            echo '<td>'. $row['nome'] . '</td>';
                            echo '<td>'. $row['endereco'] . '</td>';
                            echo '<td>'. $row['telefone'] . '</td>';
                            echo '<td>'. $row['email'] . '</td>';
                            echo '<td>'. $row['sexo'] . '</td>';
                            echo '<td>'. $row['RG'] . '</td>';
                            echo '<td>'. $row['CPF'] . '</td>';
                            echo '<td>'. $row['cidade'] . '</td>';
                            echo '<td width=350>';
                           
                            echo '</td>';
                            echo '</tr>';
                        }
                        Banco::desconectar();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


</body>

</html>
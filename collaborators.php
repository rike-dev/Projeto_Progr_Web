<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>main</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <?
      require 'BD.php'
    ?>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
      defer
    ></script>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
  <nav
      class="navbar navbar-expand-lg navbar bg-dark border-bottom border-body"
      data-bs-theme="dark"
    >
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
          <img
            src="./src/images/system-administrator.png"
            alt="Logo"
            width="30"
            height="30"
            class="d-inline-block align-text-top"
          />
          CRUD
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="registration.php">Registration</a>
            </li>
            <li class="nav-item">
              <a
              class="nav-link active"
              aria-current="page"
              href="collaborators.php"
              >Collaborators</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutus.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contacts.php">Contacts</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <br/>
  <div class= "row">
    <div class="col-9">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Department</th>
            <th scope="col">Contract</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
          </tr>
        </tbody>
      </table>
</div>

      <div class="col-2">
          <div class="d-flex justify-content-center"><strong>Controle de Formulário</strong></div>
           <br>
            <div class="d-flex justify-content-evenly">
              <button class="btn btn-primary">Editar</button>
              <button class="btn btn-danger">Excluir</button>
            </div>
      </div>

  </div>
      <br />
      <?php 
      
      $servername = "127.0.0.1";
      $username = "root";
      $password = "";
      $dbname = "create_crud";
      $port = 3306;

      $conn;

      $conn = new mysqli($servername, $username, $password, $dbname, $port);

      $sql = "SELECT * FROM FUNC_INFO";

      $result = $conn->query($sql);

      if (!$result) {
        echo "Erro na consulta: " . $conn->error;
      } else {
        $rows = $result->fetch_all();
        foreach ($rows as $row) {
            foreach ($row as $column => $value) {
                echo "$column -> $value";
                echo "<br>";
            }
        }
        echo "<br><br>";
      }

?>



      <!--Adicionar Sistema aqui-->
    </div>
  </body>
</html>

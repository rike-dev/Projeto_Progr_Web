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
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
      defer
    ></script>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!--Header (Adicionar logo bonitinha)-->
    <header class="container-fluid h1 row align-itens-center">
      <h1 class="col d-flex justify-content-center">
       <img src="https://www.luiztools.com.br/wp-content/uploads/2017/07/CRUD.png" alt="logo-crud" style="width: 400px;">
      </h1>
    </header>


    <!--Barra de Navegação (Precisa linkar tudo)-->
    <nav class="navbar navbar-expand-lg col d-flex p-0">
      <div class="container-fluid home bg-primary bg-gradient">
        <a class="navbar-brand lead text-center" href="index.php" style="color: white;">
          <strong>Home</strong></a
        >
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
        <div
          class="collapse navbar-collapse row justify-content-around"
          id="navbarNavDropdown"
        >
          <ul class="navbar-nav">
            <li class="nav-item col-2 offset-1 btn btn-outline-primary active">
              <a
                class="nav-link active text-center"
                aria-current="page"
                style="color: white;"
                >Registration</a
              >
            </li>
            <li class="nav-item col-2 offset-1 btn btn-outline-primary">
              <a
              class="nav-link text-center"
              href="collaborators.php"
              style="color: white;"
              >Collaborators</a>
            </li>
            <li class="nav-item col-2 offset-1 btn btn-outline-primary">
              <a
              class="nav-link text-center"
              href="aboutus.php"
              style="color: white;"
              >About us</a
              >
            </li>
            <li class="nav-item col-2 offset-1 btn btn-outline-primary">
              <a
              class="nav-link text-center"
              href="contacts.php"
              style="color: white;"
              >Contacts</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <br />

    <!--Abertura do forms (Colocar os names e id's necessários)-->
    <h4 class="gy-2 gx-3">Personal informations: <br /></h4>
    <form class="row gy-2 gx-3 align-items-center justify-content-between">
    <div class="col-7">
      <div class="col-7">
        <div class="input-group">
          <span class="input-group-text">Name:</span>
          <input
            maxlength="50"
            type="text"
            class="form-control"
            aria-label="Username"
            aria-describedby="basic-addon1"
            name="name" 
            value="<?php
            echo isset($_POST["name"]) ? htmlspecialchars($_POST["name"]) : '';
            ?>"
            required
        </div>
      </div>
    </div>
  </div>
</div>

      </div>
      <div class="col-1">
        <div class="input-group">
          <div class="input-group-text">Age</div>
          <input min="0"
          type="number"
          class="form-control"
          name = "age"
          value="<?= isset($_POST['age']) ? $_POST['age'] : ''; ?>"
          />
        </div>
      </div>

      <div class="col-2">
        <div class="input-group">
          <div class="input-group-text">Gender</div>
          <select class="form-select">
            <option selected>...</option>
            <option value="1" <? if ($gender == 1): echo "selected";?>>Male</option>
            <option value="2" <? if ($gender == 2): echo "selected";?>>Female</option>
            <option value="3" <? if ($gender == 3): echo "selected";?>>I prefer not to inform</option>
          </select>
        </div>
      </div>

      <div class="col-auto">
        <div class="input-group">
          <div class="input-group-text">Marital Status</div>
          <select class="form-select" name="gender">
            <option selected>...</option>
            <option value="1" <? if($gender == 1) echo "selected"; ?>>Single</option>
            <option value="2" <? if($gender == 2) echo "selected"; ?>>Married</option>
            <option value="4" <? if($gender == 3) echo "selected"; ?>>Separate</option>
            <option value="5" <? if($gender == 4) echo "selected"; ?>>Divorced</option>
            <option value="6" <? if($gender == 5) echo "selected"; ?>>Widower</option>
          </select>
        </div>
      </div>
      <br />
      <hr />
      <br />

      <h4 class="gy-2 gx-3">Corporate Information: <br /></h4>
      <section class="row gy-2 gx-3 align-items-center justify-content-between">
        <div class="col-12">
          <div class="input-group">
            <span class="input-group-text">Department:</span>

            <?php
              $departmentSelected = isset($_POST["department"]) ? $_POST["department"] : null;
            ?>

        <select class="form-select" name="department">
          <option selected></option>
          <option value="1" <?php if ($departmentSelected == 1) echo "selected"; ?>>Administrative</option>
          <option value="2" <?php if ($departmentSelected == 2) echo "selected"; ?>>Purchases and sales</option>
          <option value="3" <?php if ($departmentSelected == 3) echo "selected"; ?>>Juridical</option>
          <option value="4" <?php if ($departmentSelected == 4) echo "selected"; ?>>Technical assistance</option>
          <option value="5" <?php if ($departmentSelected == 5) echo "selected"; ?>>Maintenance</option>
        </select>

          </div>
        </div>
        <div class="col-6">
          <div class="input-group">
            <div class="input-group-text">Role</div>
            <input
              maxlength="50"
              type="text"
              class="form-control"
              aria-label="Username"
              aria-describedby="basic-addon1"
              name = "role"
              value="<?= isset($_POST['role']) ? $_POST['role'] : ''; ?>"
            />
          </div>
        </div>

        <div class="col-6">
        <div class="input-group mb-3">
          <span class="input-group-text">Salary: $</span>
          <input type="number" class="form-control" min="0" name="salary" value="<?= isset($_POST['salary']) ? $_POST['salary'] : ''; ?>" />
          <span class="input-group-text">.00</span>
        </div>
      </div>


        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <button class="btn btn-danger me-md-2" type="reset">Reset</button>
          <button class="btn btn-primary" action="#" type="submit">
            Submit
          </button>
        </div>
      </section>
    </form>
  </body>
      <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $salary = isset($_POST["salary"]) ? $_POST["salary"] : null;

        $conn = new mysqli("localhost", "root", "", "nome_do_banco");

        // Verifique a conexão com o MySQL
        if ($conn->connect_error) {
            die("Erro na conexão com o banco de dados: " . $conn->connect_error);
        }


        $sql = "INSERT INTO FUNC_INFOS (*) VALUES ('*')";

        if ($conn->query($sql) === TRUE) {
            echo "Adicionado com sucesso!";
        } else {
            echo "Erro ao adicionar valores: " . $conn->error;
        }
        $conn->close();
      
    }
    ?>

</html>
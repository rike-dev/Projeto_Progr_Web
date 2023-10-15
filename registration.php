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
              <a
                class="nav-link active"
                aria-current="page"
                href=""
                >Registration</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="collaborators.php">Collaborators</a>
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

    <h4 class="gy-2 gx-3">Personal informations: <br /></h4>
    <form class="row gy-2 gx-3 align-items-center justify-content-between" method="POST">
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
      <div class="col-1">
        <div class="input-group">
          <div class="input-group-text">Age</div>
          <input min="0"
          type="number"
          class="form-control form-control-lg"
          name="age"
          value="<?= isset($_POST['age']) ? $_POST['age'] : ''; ?>"
    />
        </div>
      </div>

      <div class="col-2">
        <div class="input-group">
          <div class="input-group-text">Gender</div>
          <select class="form-select">
            <option selected>...</option>
            <option value="Male"<? if ($gender == "Male"): echo "selected";?>>Male</option>
            <option value="Female" <? if ($gender == "Female"): echo "selected";?>>Female</option>
            <option value="I prefer not to inform" <? if ($gender == "I prefer not to inform"):
              echo "selected";?>>I prefer not to inform</option>
          </select>
        </div>
      </div>

      <div class="col-auto">
        <div class="input-group">
          <div class="input-group-text">Marital Status</div>
          <select class="form-select" name="gender">
            <option selected>...</option>
            <option value="Single" <? if($gender == "Single") echo "selected"; ?>>Single</option>
            <option value="Married" <? if($gender == "Married") echo "selected"; ?>>Married</option>
            <option value="Separate" <? if($gender == "Separate") echo "selected"; ?>>Separate</option>
            <option value="Divorced" <? if($gender == "Divorced") echo "selected"; ?>>Divorced</option>
            <option value="Windower" <? if($gender == "Windower") echo "selected"; ?>>Widower</option>
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
          <option selected>...</option>
          <option value="Administrative" <?php if ($departmentSelected == "Administrative")
          echo "selected"; ?>>Administrative</option>
          <option value="Purchases and sales" <?php if ($departmentSelected == "Purchases and sales")
          echo "selected"; ?>>Purchases and sales</option>
          <option value="Juridicial" <?php if ($departmentSelected == "Juridicial")
          echo "selected"; ?>>Juridical</option>
          <option value="Techical assistance" <?php if ($departmentSelected == "Techical assistance")
          echo "selected"; ?>>Technical assistance</option>
          <option value="Maintenance" <?php if ($departmentSelected == "Maintenance")echo "selected"; ?>>Maintenance</option>
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
          <!-- Refazer -->
        <div class="input-group mb-3">
          <span class="input-group-text">Salary: $</span>
          <input type="number" class="form-control" min="0" name="salary" value="
          <?= isset($_POST['salary']) ? $_POST['salary'] : ''; ?>" />
          <span class="input-group-text">.00</span>
        </div>
        <!--<---->
      </div>

      <div class="container">
    <h2>Select Contract Type</h2>
    <?php

    $contractTypes = array("Full-Time", "Part-Time", "Self-Employment", "Internship");


    foreach ($contractTypes as $cocType) {
        echo '<div class="form-check form-check-inline">';
        echo '<input class="form-check-input" type="radio" id="' . strtolower($cocType) 
        . '" name="contract_type" value="' . $cocType . '">';
        echo '<label class="form-check-label" for="' . strtolower($cocType) . '">' . $cocType . '</label>';
        echo '</div>';
    }
    ?>
</div>

<input type="hidden" name="form_submitted" value="1">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-danger me-md-2" type="reset">Reset</button>
        <button class="btn btn-primary" type="submit">Submit</button>
    
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["form_submitted"])) {
          $servername = "127.0.0.1";
          $username = "root";
          $password = "";
          $dbname = "create_crud";
          $port = 3306;
          
          $conn;
          
          $conn = new mysqli($servername, $username, $password, $dbname, $port);
          
            $name = $_POST["name"];
            $age = $_POST["age"];
            $gender = $_POST["gender"];
            $martStatus = $_POST["MARTSTATUS"];
            $depart = $_POST["department"];
            $role = $_POST["role"];
            $salary = $_POST["salary"];
            $cocType = $_POST["contract_type"];


            $sql = "INSERT INTO FUNC_INFO (NAME_FUNC, AGE, GENDER, MARTSTATUS, DEPT, ROL_FUNC, SALARY, TYP_CONTCT) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);

            if ($stmt) {
                $stmt->bind_param($name, $age, $gender, $martStatus, $depart, $role, $salary, $cocType);
            
                if ($stmt->execute()) {
                    $stmt->close(); 
                    echo '<script>alert("Dados atualizados com sucesso!");</script>';
                    return true;
                } else {
                    return "Error " . $stmt->error;
                }
            }
            
            $stmt->close();
            //return "Erro na preparação da consulta: " . $conn->error;
            //if($conn)

            //if ($updateResult === true) {
                // Atualização bem-sucedida
              //  echo '<script>alert("Dados atualizados com sucesso!");</script>';
            //} else {
              //  echo '<script>alert("Erro na atualização: ' . $updateResult . '");</script>';
            //}
        }
        ?>

  </form>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </div>
  </body>
</html>
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
        <img
          src="https://www.luiztools.com.br/wp-content/uploads/2017/07/CRUD.png"
          alt="logo-crud"
          style="width: 400px"
        />
      </h1>
    </header>

    <!--Barra de Navegação (Precisa linkar tudo)-->
    <nav class="navbar navbar-expand-lg col d-flex">
      <div class="container-fluid home bg-primary bg-gradient">
        <a
          class="navbar-brand lead text-center"
          aria-current="page"
          style="color: white"
        >
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
            <li class="nav-item col-2 offset-1 btn btn-outline-primary">
              <a
                class="nav-link text-center"
                href="registration.php"
                style="color: white"
                >Registration</a
              >
            </li>
            <li class="nav-item col-2 offset-1 btn btn-outline-primary">
              <a class="nav-link text-center" href="collaborators.php" style="color: white"
                >Collaborators</a
              >
            </li>
            <li class="nav-item col-2 offset-1 btn btn-outline-primary">
              <a class="nav-link text-center" href="aboutus.php" style="color: white"
                >About us</a
              >
            </li>
            <li class="nav-item col-2 offset-1 btn btn-outline-primary">
              <a class="nav-link text-center" href="contacts.php" style="color: white"
                >Contacts</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <br />

    <div class="container-fluid">
      <h2>What is this system?</h2>
      <br />

      <p>
        <div class="lead" style="text-align: justify;">CRUD is a commonly used acronym in the field of software
        development, referring to the four basic operations that can be
        performed on data stored in a database or information management system.
        The four operations are: </div> <br />

        <strong>Create:</strong> This operation involves creating new records or entries in the
        database. It means inserting new data so that it can be stored and later
        retrieved or processed. <br />
        <strong>Read:</strong> The read operation involves
        retrieving or querying existing information from the database. It is the
        action of searching for and displaying stored data. <br />
        <strong>Update:</strong> This operation allows for the modification of existing data in
        the database. It is used to make changes to records or information that
        have already been inserted. <br />
        <strong>Delete:</strong> The deletion operation is used to remove records or information
        from the database. It enables the removal of unwanted or obsolete data.
        <br />  <br> <hr>
        <div class="lead" style="text-align: justify;">These four operations are essential in database management systems
        (DBMS) and serve as the foundation for interacting with data in
        applications and websites. Most systems and applications that deal with
        information or data in some way incorporate these CRUD operations to
        allow users to efficiently and securely create, read, update, and delete
        data.
        <br />
        For example, in a contacts management application, you can
        create a new contact (Create), view the details of an existing contact
        (Read), update the information of a contact (Update), or delete a
        contact (Delete). CRUD is a fundamental concept in the development of
        applications that involve data manipulation</div>
      </p>
    </div>

    <footer>
        <div class="container-fluid" style="background-image: url(https://png.pngtree.com/thumb_back/fw800/background/20190223/ourmid/pngtree-simple-atmosphere-blue-technology-panel-background-backgroundbackgroundhome-appliance-backgrounddigital-image_72667.jpg); background-size: contain; width: 98vw; height: 18vh;">a</div>
    </footer>
  </body>
</html>
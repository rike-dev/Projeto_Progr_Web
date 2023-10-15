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
    <!--Barra de Navegação (Precisa linkar tudo)-->
    <nav
      class="navbar navbar-expand-lg navbar bg-dark border-bottom border-body"
      data-bs-theme="dark"
    >
      <div class="container-fluid">
        <a class="navbar-brand" href="">
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
                href="registration.php"
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

    <div class="container-fluid">
      <h2>What is this system?</h2>
      <br />

      <p></p>
      <div class="lead" style="text-align: justify">
        CRUD is a commonly used acronym in the field of software development,
        referring to the four basic operations that can be performed on data
        stored in a database or information management system. The four
        operations are:
      </div>
      <br />

      <strong>Create:</strong> This operation involves creating new records or
      entries in the database. It means inserting new data so that it can be
      stored and later retrieved or processed. <br />
      <strong>Read:</strong> The read operation involves retrieving or querying
      existing information from the database. It is the action of searching for
      and displaying stored data. <br />
      <strong>Update:</strong> This operation allows for the modification of
      existing data in the database. It is used to make changes to records or
      information that have already been inserted. <br />
      <strong>Delete:</strong> The deletion operation is used to remove records
      or information from the database. It enables the removal of unwanted or
      obsolete data. <br />
      <br />
      <hr />
      <div class="lead" style="text-align: justify">
        These four operations are essential in database management systems
        (DBMS) and serve as the foundation for interacting with data in
        applications and websites. Most systems and applications that deal with
        information or data in some way incorporate these CRUD operations to
        allow users to efficiently and securely create, read, update, and delete
        data.
        <br />
        For example, in a contacts management application, you can create a new
        contact (Create), view the details of an existing contact (Read), update
        the information of a contact (Update), or delete a contact (Delete).
        CRUD is a fundamental concept in the development of applications that
        involve data manipulation
      </div>
    </div>
  </body>
</html>

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
    <!--Header-->
    <header class="container-fluid h1 row align-itens-center">
      <h1 class="col d-flex justify-content-center">
        <img
          src="https://www.luiztools.com.br/wp-content/uploads/2017/07/CRUD.png"
          alt="logo-crud"
          style="width: 400px"
        />
      </h1>
    </header>

    <!--Navbar (Precisa linkar tudo)-->
    <nav class="navbar navbar-expand-lg col d-flex p-0">
      <div class="container-fluid home bg-primary bg-gradient">
        <a
          class="navbar-brand lead text-center"
          href="index.php"
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
                aria-current="page"
                href="registration.php"
                style="color: white"
                >Registration</a
              >
            </li>
            <li class="nav-item col-2 offset-1 btn btn-outline-primary">
              <a
                class="nav-link text-center"
                href="collaborators.php"
                style="color: white"
                >Collaborators</a
              >
            </li>
            <li class="nav-item col-2 offset-1 btn btn-outline-primary active">
              <a
                class="nav-link text-center active"
                href=""
                style="color: white"
                >About us</a
              >
            </li>
            <li class="nav-item col-2 offset-1 btn btn-outline-primary">
              <a
                class="nav-link text-center"
                href="contacts.php"
                style="color: white"
                >Contacts</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <br />

    <!--Content (Falta foto do Vitor)-->
    <div class="container-fluid">
      <div class="lead row" style="text-align: justify">
        <!--Introduction-->
        <p>
          Welcome to our 'About Us' page! If you're reading this, chances are
          you've already had the opportunity to explore our project, which marks
          a significant moment in our academic journey. <br />
          <br />

          We are Riquelme and João Vitor. This project is very special for us as
          it represents our first dive into the world of web development with
          PHP, completed as part of our college work. During the development of
          this system, we sought to create a simple and effective application
          that meets users' needs. Every line of code, every design decision,
          and every test performed were opportunities to learn and grow. <br />
          <br />

          Our mission was to not only successfully complete this project, but
          also apply the concepts we learned throughout our studies. We learn to
          overcome challenges, work as a team and transform ideas into reality.
          In this section, we invite you to learn a little more about the minds
          behind the project. We want to share our insights, experiences, and
          lessons learned as we navigate this exciting academic journey. <br />
          <br />

          This project marked the beginning of our journey with PHP and web
          programming, and we are excited about what the future holds and the
          opportunities to further improve our work. Thank you for being here
          and for being part of this journey with us! <br />
        </p>
        <hr />

        <!--Rike-->
        <div class="col-6">
          <img
            src="src/images/Riquelme's pic.jpeg"
            class="rounded mx-auto d-block"
            alt="Riquelme's picture"
            style="width: 200px; height: auto"
          />

          <h5 class="text-center p-2">Riquelme Carvalho dos Santos</h5>
          <br />
          <p class="text-center">
            20 years old - 2nd Semester in Computer Science
          </p>
          <hr />

          <p class="text-center">
            <strong>In this project worked at:</strong> <br />
            <em>Front-End</em> in general, specifically building all the pages,
            using <strong>Bootstrap</strong>, <strong>HTML5</strong> and
            <strong>CSS3</strong>, <br />
            helped with the development of the back-end by connecting the
            <strong>PHP</strong> forms with the <strong>MySQL</strong> database.
          </p>
          <hr />

          <p class="text-center">
            <strong>Future career goals:</strong> <br />
            - Learn the main web development technologies in depth;<br />
            - Develop soft-skills by working on authorial projects alone and in
            groups;<br />
            - Become a Full-Stack Web Developer.
          </p>
        </div>

        <!--Vitor-->
        <div class="col-6">
          <!--COLOCA A FOTO AQUI-->
          <img
            src="src/images/mecanic.jpeg"
            class="rounded mx-auto d-block"
            alt="Vitor's picture"
            style="width: 200px; height: auto"
          />

          <h5 class="text-center p-2">João Vitor Alves da Silva</h5>
          <br />
          <p class="text-center">
            21 years old - 2nd Semester in Computer Science
          </p>
          <hr />

          <p class="text-center">
            <strong>In this project worked at:</strong> <br />
            <em>Back-End</em> in general, specifically building the
            <strong>MySQL</strong> databases integrated into the
            <strong>PHP</strong> form <br />
            aiming to make the constructed <strong>CRUD System</strong> visual
          </p>
          <hr />

          <p class="text-center">
            <strong>Future career goals:</strong> <br />
            - Develop my career aiming to work with databases; <br />
            - Learn as much as possible about back-end at college; <br />
            - Become a Database Scientist. <br />
          </p>
        </div>
      </div>
    </div>
  </body>
</html>

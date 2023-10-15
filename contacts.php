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
              <a class="nav-link" href="registration.php">Registration</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="collaborators.php">Collaborators</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutus.php">About Us</a>
            </li>
            <li class="nav-item">
              <a
              class="nav-link active"
              aria-current="page"
              href=""
              >Contacts</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <br />

    <!--Content-->
    <div class="container-fluid">
      <div class="lead row">
        <!--Introduction-->
        <p style="text-align: center">
          <strong
            >Finally, we would like to express our sincere gratitude for taking
            the time to explore our project. Your presence and interest mean a
            lot to us.</strong
          >
        </p>
        <br />
        <br />

        <p style="text-align: justify">
          As part of our commitment to making this experience as accessible and
          engaging as possible, we are happy to make our contact information
          available. If you have questions, feedback or would like to contact us
          for any reason, please do not hesitate to do so. <br />

          We look forward to hearing your feedback, answering your questions and
          keeping the dialogue flowing, so feel free to send us a message at any
          time. And we value your opinion and are available to continue the
          conversation.
          <br />
          Thanks again for being part of this journey with us. We are excited to
          continue our pursuit of knowledge and excellence, and we hope you can
          join us. <br />
        </p>
        <p style="text-align: center">
          <strong>Below is our contact information:</strong>
        </p>
        <br />
        <br />
        <hr />

        <!--Riquelme's Picture-->
        <div class="col-2">
          <img
            src="src/images/rike-picture.jpeg"
            alt="Riquelme's picture"
            class="foto"
          />
        </div>

        <!--Riquelme's Contact-->
        <div class="col-4">
          <img
            src="src/images/linkedin-icon.png"
            alt="linkedin-icon"
            class="icone"
          />LinkedIn:
          <a
            href="https://www.linkedin.com/in/riquelme-carvalho-dos-santos-3090b11ba/"
            >linkedin.com/in/riquelme-carvalho-dos-santos-3090b11ba/</a
          ><br />
          <br />

          <img
            src="src/images/instagram-icon.png"
            alt="instagram-icon"
            class="icone"
          />Instagram:
          <a href="https://www.instagram.com/riquelme.c.dos.santos/"
            >instagram.com/riquelme.c.dos.santos/</a
          ><br />
          <br />

          <img
            src="src/images/github-icon.png"
            alt="instagram-icon"
            class="icone"
          />GitHub: <a href="github.com/rike-dev">github.com/rike-dev</a><br />
          <br />

          <img
            src="src/images/gmail-icon.png"
            alt="instagram-icon"
            class="icone"
          />Email: riiickarvalho@gmail.com<br />
          <br />
        </div>

        <!--Vitor's picture-->
        <div class="col-2">
          <img src="src/images/chup.jpeg" alt="" class="foto" />
        </div>

        <!--Vitor's contact-->
        <div class="col-4">
          <img
            src="src/images/linkedin-icon.png"
            alt="linkedin-icon"
            class="icone"
          />LinkedIn:
          <a href="https://www.linkedin.com/in/xxxx">linkedin.com/in/xxx</a
          ><br />
          <br />

          <img
            src="src/images/instagram-icon.png"
            alt="instagram-icon"
            class="icone"
          />Instagram:
          <a href="https://www.instagram.com/xxx/">instagram.com/xxx</a><br />
          <br />

          <img
            src="src/images/github-icon.png"
            alt="instagram-icon"
            class="icone"
          />GitHub: <a href="github.com/JVitorAS">github.com/JVitorAS</a><br />
          <br />

          <img
            src="src/images/gmail-icon.png"
            alt="instagram-icon"
            class="icone"
          />Email: jo0819637o@outlook.com<br />
          <br />
        </div>
      </div>
    </div>
  </body>
</html>

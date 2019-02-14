<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>To-Let</title>
  </head>
  <body>
    <div class="menu">
      <ul>
        <li>menu</li>
      </ul>
    </div>
    <hr>
    <div class="content">
    <center>
      <h3>Register Yourself!</h3>
      <br>
      <form method="post">
        {{ csrf_field() }}
        <table>


          <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username" placeholder="must be unique"></td>
          </tr>

          <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="password" name="password" placeholder="more than 6 characters"></td>
          </tr>

          <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="submit" ></td>
          </tr>



        </table>
      </form>
    </center>
    </div>
  </body>
</html>

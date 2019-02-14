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
            <td>Name</td>
            <td>:</td>
            <td><input type="text" name="name"></td>
          </tr>

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
            <td>Confirm Password</td>
            <td>:</td>
            <td><input type="password" name="confirmpassword"></td>
          </tr>

          <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="text" name="email" placeholder="abc@gmail.com"></td>
          </tr>

          <tr>
            <td>Mobile no</td>
            <td>:</td>
            <td><input type="text" name="mobile"></td>
          </tr>

          <tr>
            <td>User Type</td>
            <td>:</td>
            <td><select name="usertype">
                    <option value="renter">Renter</option>
                    <option value="owner">Owner</option>
                </select>
              </td>
          </tr>

          <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="submit"></td>
          </tr>



        </table>
      </form>
    </center>
    </div>
  </body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<style>
			h1{
				color: blue;
			}
			body{
				background-image: url('/assets/form.jpg');
				//background-color: black;
				height: 500px; /* You must set a specified height */
			  background-position: center; /* Center the image */
			  background-repeat: no-repeat; /* Do not repeat the image */
			  background-size: cover;
			}
      td{

      }
      th{
        color:#00A7D4;
        font-size:20px;
      }
	</style>
</head>
<body>
	<center>
	   <h1>Enter Details</h1>

		<form method="post"  enctype="multipart/form-data">
      {{csrf_field()}}
			<table>
					<tr>
							<td>Title</td>
							<td>:</td>
							<td><input type="text" name="title" /></td>
					</tr>

					<tr>
							<td>Bedroom(s)</td>
							<td>:</td>
							<td><select name="bedroom">
													<option value="1">1</option>
													<option value="2">2</option>
                          <option value="3">3</option>
													<option value="4">4</option>
												</select></td>
					</tr>

          <tr>
							<td>Bathroom(s)</td>
							<td>:</td>
							<td><select name="bathroom">
													<option value="1">1</option>
													<option value="2">2</option>
                          <option value="3">3</option>
													<option value="4">4</option>
												</select></td>
					</tr>

					<tr>
							<td>Size</td>
							<td>:</td>
							<td><input type="text" name="size" />Sq.ft</td>

					</tr>

          <tr>
							<td>Rent</td>
							<td>:</td>
							<td><input type="text" name="rent" /></td>

					</tr>



          <tr>
							<td>Location</td>
							<td>:</td>
							<td><input type="text" name="location" />
                </td>

					</tr>

          <tr>
							<td>Mobile</td>
							<td>:</td>
							<td><input type="text" name="mobile" />
                </td>

					</tr>
          <tr>
							<td>Short description</td>
							<td>:</td>
							<td><input type="text" name="description" /></td>

					</tr>

          <tr>
							<td>Image</td>
							<td>:</td>
							<td><input type="file" name="image" /></td>

					</tr>




					<tr>
							<td></td>
							<td></td>
							<td><input type="submit" name="submit" value="Submit" /></td>
					</tr>
			</table>


	</form>
	</center>


</body>
</html>

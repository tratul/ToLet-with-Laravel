<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
  <style>
	body{
		background-color: #347183;
	}
	#head{
    width: 100%;
    height: 80px;
    background-color: white;
	}
	#logo{
	    width: 25%;
	    height: 100%;
	    //background-color: antiquewhite;
	    float: left;
	}
	#logo>h1{
	    padding-left: 80px;
	    padding-top: 10px;
	}
	span{
	    color: #19BA3C;
	}
	#menu{
	    width: 70%;
	    height: 100%;
	    //background-color: antiquewhite;
	    float: right;
	    text-align: right;
	}
	#menu>ul{
	    list-style: none;
	    padding-right: 100px;
	    padding-top: 20px;
	}
	#menu>ul>li{
	    display: inline-block;
	    //background-color: aqua;
	    margin-left: 20px;
	}
	#menu>ul>li>a{
	    text-decoration: none;
	    color: black;
	}
  a:hover {
    background-color: red;
    border:1px solid black;
    font-size:25px;
    display:block;
}
  #body{
    width:100%;
    height:580px;
    //background-image: url('/storage/photos-1541524418204.jpg');
    //background-color: black;
    //height: 500px; /* You must set a specified height */
    background-position: center; /* Center the image */
    background-repeat: no-repeat; /* Do not repeat the image */
    background-size: cover;
    border: 5px solid black;
    margin-bottom:5px;
    padding-top:20px;

  }
  #showimg{
    width:60%;
    height:500px;
    float:left;
    margin-bottom:40px;
    margin-top:10px;
    margin-left:30px;
    border:3px solid black;
  }
  #image:hover{
    width:100%;
    height:500px;
    margin:0px;

  }
  #image{
    width:70%;
    height:300px;
    margin-left:100px;
    margin-top:100px;
    allign:center;

  }
  #showinfo{
    width:30%;
    height:520px;
    float:right;
    padding-top:40px;
    padding-left:40px;
    overflow:auto;
  }
  h2{
    color:white:
  }


	</style>
</head>
<body>
  <div id="head">
		<div id="logo">
                <h1>TO<span>LET</span></h1>
            </div>
            <div id="menu">
                <ul>
                    <li><a href="/ohome">HOME</a></li>

                    <li><a href="/post">POST</a></li>
                    <li><a href="/osettings">SETTINGS</a></li>
                    <li><a href="/logout">LOGOUT</a></li>


                </ul>
            </div>



	<div id="body">
    <div id="showimg">
      <img id="image" src="/storage/<%= userList[i].photos %>">
    </div>
    <div id="showinfo">
      <table>
        <tr>
          <td>Title:</td>
          <td>:</td>
          <td><h2></h2></td>
        </tr>
        <tr>
          <td>Bedroom:</td>
          <td>:</td>
          <td><h2></h2></td>
        </tr>
        <tr>
          <td>Bathroom:</td>
          <td>:</td>
          <td><h2></h2></td>
        </tr>
        <tr>
          <td>Size:</td>
          <td>:</td>
          <td><h2></h2></td>
        </tr>
        <tr>
          <td>Rent:</td>
          <td>:</td>
          <td><h2></h2></td>
        </tr>
        <tr>
          <td>Address:</td>
          <td>:</td>
          <td><h2></h2></td>
        </tr>
        <tr>
          <td>Short description:</td>
          <td>:</td>
          <td><h2></h2></td>
        </tr>
        <tr>
          <td>Owner Name:</td>
          <td>:</td>
          <td><h2></h2></td>
        </tr>
        <tr>
          <td>Contact no:</td>
          <td>:</td>
          <td><h2></h2></td>
        </tr>
        <tr>
          <td>Owner Email:</td>
          <td>:</td>
          <td><h2></h2></td>
        </tr>


      </table>




    </div>

	</div>

  <% } %>
	<div id="foot">

	</div>

</body>
</html>

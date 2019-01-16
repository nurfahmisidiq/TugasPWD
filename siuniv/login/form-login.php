<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    *{
    	box-sizing:bord  er-box;
    	margin:0 auto;
    }
    body{
    background-image: url(jogja.jpg);
      background-size: cover;

    }
    html,body{
    	font-family:cursive;
    }
    .sam{
        color: #000000;


    }
    .fa-hand-o-right{
    	float:right;
    }
    form {
    	top:100px;
    	position:relative;

    	max-width:500px;
      height: 350px;
    	background-color:	#A9A9A9;
    	border-radius:5px;
    	box-shadow:0px 0px 3px black;
    }
    form h2 {
    	padding:20px;
    	border-bottom:2px solid #000000;
    	text-align:center;
    }
    .form-group{
    	padding:5px 15px;
    	display:block;
    }
    .input-mode{
    	border:1px solid silver;
    	border-radius:3px;
    	font-size:15px;
    	height:50px;
    	padding:0 10px;
    	display:block;
    	width:90%;
    }
    .cek {
    	padding:10px;
    	display:inline-block;
    	height:20px;
    	width:20px;
    }
    .btn-submit{
    	cursor:pointer;
    	padding: 10px;
        height: 50px;
        width: 50%;
        display: block;
        background-color: #000000;
        color: white;
        font-size: 20px;
        border: 2px solid #000000;
        border-radius: 2px;
        border-top-style: dotted;
        border-right-style: solid;
        border-left-style: solid;
        border-bottom-style: dotted;
        font-family: serif;
    }
    .form-cek label{
    	display:inline-block;
    	padding:10px;
    	line-height:10px;
      color: #000066;
      font-family: serif;

    }

    </style>
  </head>
  <body>
    <form action="login.php" method="post">

    <h2><i class="sam">SIUNIV</i></h2>
    <br/>
    <div class="form-group">
      <input type="text" class="input-mode" placeholder="Username" name="username">
    </div>
    <br>
    <div class="form-group">
    <input type="password" class="input-mode" placeholder="Password" name="password">
    </div>
    <br>
    <br>
    <div class="form-group">
  		<button class="btn btn-submit">Login &nbsp; <i class="fa fa-hand-o-right" aria-hidden="true"></i></button>
  	</div>
  </form>

  </body>
</html>

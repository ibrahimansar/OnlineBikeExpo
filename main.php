<html>
<head>
<style>
body.welcome {
  background: #0028ff;
  overflow: hidden;
  -webkit-font-smoothing: antialiased;
}


.welcome .splash {
 height: 0px;
 padding: 0px;
 border: 130em solid #039be5;
 position: fixed;
 left: 50%;
 top: 100%;
 display: block;
 box-sizing: initial;
 overflow: hidden;
 pointer-events: none;`
 border-radius: 50%;
 transform: translate(-50%, -50%);
 animation: puff 0.5s 1.8s cubic-bezier(0.55, 0.055, 0.675, 0.19) forwards, borderRadius 0.2s 2.3s linear forwards;
}


input.MyButton {
 width: 300px;
 padding: 20px;
 cursor: pointer;
 font-weight: bold;
 font-size: 150%;
 background: #3366cc;
 color: #fff;
 border: 1px solid #3366cc;
 border-radius: 10px;
}

input.MyButton:hover {
color: #ffff00;
background: #000;
border: 1px solid #fff;
}

.welcome #welcome {
  background: #311b92 ;
  width: 56px;
  height: 56px;
  position: absolute;
  left: 50%;
  top: 50%;
  overflow: hidden;
  opacity: 0;
  transform: translate(-50%, -50%);
  border-radius: 50%;
  animation: init 0.5s 0.2s cubic-bezier(0.55, 0.055, 0.675, 0.19) forwards, moveDown 1s 0.8s cubic-bezier(0.6, -0.28, 0.735, 0.045) forwards, moveUp 1s 1.8s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards, materia 0.5s 2.7s cubic-bezier(0.86, 0, 0.07, 1) forwards, hide 2s 2.9s ease forwards;
}
/* moveIn */
.welcome header,
.welcome a.btn {
  opacity: 0;
  animation: moveIn 2s 3.1s ease forwards;
}

@keyframes init {
  0% {
	width: 0px;
	height: 0px;
  }
  100% {
	width: 56px;
	height: 56px;
	margin-top: 0px;
	opacity: 1;
  }
}

@keyframes puff {
  0% {
	top: 100%;
	height: 0px;
	padding: 0px;
  }
  100% {
	top: 50%;
	height: 100%;
	padding: 0px 100%;
  }
}

@keyframes borderRadius {
  0% {
	border-radius: 50%;
  }
  100% {
	border-radius: 0px;
  }
}

@keyframes moveDown {
  0% {
	top: 50%;
  }
  50% {
	top: 40%;
  }
  100% {
	top: 100%;
  }
}

@keyframes moveUp {
  0% {
	background:white;
	top: 100%;
  }
  50% {
	top: 40%;
  }
  100% {
	top: 50%;
	background: white;
  }
}


@keyframes materia {
  0% {
	background: white;
  }
  50% {
	background: white;
	top: 26px;
  }
  100% {
	background:white;
	width: 100%;
	height: 64px;
	border-radius: 0px;
	top: 26px;
  }
}

@keyframes moveIn {
  0% {
	opacity: 0;
  }
  100% {
	opacity: 1;
  }
}

@keyframes hide {
  0% {
	opacity: 1;
  }
  100% {
	opacity: 0;
  }
} 



p {
	color:white;
	text-align: center;
	text-transform: uppercase;
	letter-spacing: 13px;
	font-family: "Ariel";
	font-size: 24px;
}

div {
	background: #039be5;
	width: 1300px;
	height: 450px;
	border: 12px blue;
	padding: 50px;
	margin 20px;
	border-radius: 25px;
	margin-left: auto;
	margin-right: auto;
	margin-top: 100px;
	border: 10px solid white;
    
}

H6 {
	color:white;
	text-align: left;
	text-transform: uppercase;
	letter-spacing: 4px;
	font-family: "Ariel";
	font-size: 16px;
}

H5 {
	color:white;
	text-align: center;
	text-transform: uppercase;
	letter-spacing: 13px;
	font-family: "Ariel";
	font-size: 20px;
}



.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

input.MyButton {
width: 300px;
padding: 20px;
cursor: pointer;
font-weight: bold;
font-size: 150%;
background: #3366cc;
color: #fff;
border: 1px solid #3366cc;
border-radius: 15px;
margin-top: 10;
margin-left: 900;
}
input.MyButton:hover {
color: #311b92;
background: white;
border: 1px solid #fff;
}


</style>
</head>
<body class="welcome">

  <span id="splash-overlay" class="splash"></span>
  <span id="welcome"></span>
  <header class="navbar-fixed"> 
   </header>
      <span class="container grey-text text-lighten-1 ">
      <p id="head">Welcome to Online Bike Expo</p>

<div>
<H5>mini project </H5>
<H6> name: mohamed ibrahim ansari</H6>
<H6>class: b.tech(it)</h6>
<H6>roll:11184011</H6>
<H6>college: dr.sacoe</H6>
 <input class="MyButton" type="button" value="Enter to the Expo" onclick="window.location.href='http://localhost/workspace.php'" />
 <input class="MyButton" type="button" value="Admin login" onclick="window.location.href='http://localhost/pis.html'" />
</div>

    </span>

	<form>

</form>
	
 </body>
</html>

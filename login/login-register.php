
<!DOCTYPE html>
<html>
<head>
<title>LOGIN RESTAURAN</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

</head>

<body>

	<div class="main-w3layouts wrapper">
		<h1>Login Restoran</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="#" method="post">
					<input class="text" type="text" name="Username" placeholder="Username" required="">
					<input class="text email" type="email" name="email" placeholder="Email" required="">
					<input class="text" type="password" name="password" placeholder="Password" required="">
					<input class="text w3lpass" type="password" name="password" placeholder="Confirm Password" required="">
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" value="SIGNUP">
				</form>
				<p>Don't have an Account? <a href="#"> Login Now!</a></p>
			</div>
		</div>

	
	</div>

</body>

<style>


body {
  background: #76b852;
  background: -webkit-linear-gradient(to top, #76b852, #8DC26F);
  background: -moz-linear-gradient(to top, #76b852, #8DC26F);
  background: -o-linear-gradient(to top, #76b852, #8DC26F);
  background: linear-gradient(to top, #76b852, #8DC26F);
  background-size: cover;
  background-attachment: fixed;
  font-family: 'Roboto', sans-serif;
}

h1 {
  font-size: 3em;
  text-align: center;
  color: #fff;
  font-weight: 100;
  text-transform: capitalize;
  letter-spacing: 4px;
  font-family: 'Roboto', sans-serif;
}

.main-w3layouts {
  padding: 3em 0 1em;
}

.main-agileinfo {
  width: 35%;
  margin: 3em auto;
  background: rgba(0, 0, 0, 0.18);
  background-size: cover;
}

.agileits-top {
  padding: 3em;
}

input[type="text"], input[type="email"], input[type="password"] {
  font-size: 0.9em;
  color: #fff;
  font-weight: 100;
  width: 94.5%;
  display: block;
  border: none;
  padding: 0.8em;
  border: solid 1px rgba(255, 255, 255, 0.37);
  -webkit-transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
  transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
  background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 96%, #fff 4%);
  background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 96%, #fff 4%);
  background-position: -800px 0;
  background-size: 100%;
  background-repeat: no-repeat;
  color: #fff;
  font-family: 'Roboto', sans-serif;
}

input.email, input.text.w3lpass {
  margin: 2em 0;
}

.text:focus, .text:valid {
  box-shadow: none;
  outline: none;
  background-position: 0 0;
}

.text:focus::-webkit-input-placeholder, .text:valid::-webkit-input-placeholder {
  color: rgba(255, 255, 255, 0.7);
  font-size: .9em;
  -webkit-transform: translateY(-30px);
  -moz-transform: translateY(-30px);
  -o-transform: translateY(-30px);
  -ms-transform: translateY(-30px);
  transform: translateY(-30px);
  visibility: visible !important;
}

input[type="submit"] {
  font-size: .9em;
  color: #fff;
  background: #76b852;
  outline: none;
  border: 1px solid #76b852;
  cursor: pointer;
  padding: 0.9em;
  -webkit-appearance: none;
  width: 100%;
  margin: 2em 0;
  letter-spacing: 4px;
}

input[type="submit"]:hover {
  -webkit-transition: .5s all;
  -moz-transition: .5s all;
  -o-transition: .5s all;
  -ms-transition: .5s all;
  transition: .5s all;
  background: #8DC26F;
}

.agileits-top p {
  font-size: 1em;
  color: #fff;
  text-align: center;
  letter-spacing: 1px;
  font-weight: 300;
}

.agileits-top p a {
  color: #fff;
  -webkit-transition: .5s all;
  -moz-transition: .5s all;
  transition: .5s all;
  font-weight: 400;
}

.agileits-top p a:hover {
  color: #76b852;
}
.wthree-text label {
  font-size: 0.9em;
  color: #fff;
  font-weight: 200;
  cursor: pointer;
  position: relative;
}

input.checkbox {
  background: #8DC26F;
  cursor: pointer;
  width: 1.2em;
  height: 1.2em;
}

input.checkbox:before {
  content: "";
  position: absolute;
  width: 1.2em;
  height: 1.2em;
  background: inherit;
  cursor: pointer;
}

input.checkbox:after {
  content: "";
  position: absolute;
  top: 0px;
  left: 0;
  z-index: 1;
  width: 1.2em;
  height: 1.2em;
  border: 1px solid #fff;
  -webkit-transition: .4s ease-in-out;
  -moz-transition: .4s ease-in-out;
  -o-transition: .4s ease-in-out;
  transition: .4s ease-in-out;
}

input.checkbox:checked:after {
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  transform: rotate(-45deg);
  height: .5rem;
  border-color: #fff;
  border-top-color: transparent;
  border-right-color: transparent;
}

.anim input.checkbox:checked:after {
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  transform: rotate(-45deg);
  height: .5rem;
  border-color: transparent;
  border-right-color: transparent;
  animation: .4s rippling .4s ease;
  animation-fill-mode: forwards;
}

@keyframes rippling {
  50% {
    border-left-color: #fff;
  }

  100% {
    border-bottom-color: #fff;
    border-left-color: #fff;
  }
}

.colorlibcopy-agile {
  margin: 2em 0 1em;
  text-align: center;
}

.colorlibcopy-agile p {
  font-size: .9em;
  color: #fff;
  line-height: 1.8em;
  letter-spacing: 1px;
  font-weight: 100;
}

.colorlibcopy-agile p a {
  color: #fff;
  transition: 0.5s all;
  -webkit-transition: 0.5s all;
  -moz-transition: 0.5s all;
  -o-transition: 0.5s all;
  -ms-transition: 0.5s all;
}

.colorlibcopy-agile p a:hover {
  color: #000;
}


.wrapper {
  position: relative;
  overflow: hidden;
}

@media(max-width:1440px) {
  input[type="text"], input[type="email"], input[type="password"] {
    width: 94%;
  }
}

</style>

</html>
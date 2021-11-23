<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <title>Hotel</title>
    <style>
        .footer-style {
             padding-top: 50px;
             background-color: #000000;
        }
        footer {
            color: white;
        }
        footer h3 {
            margin-bottom: 30px;
            font-weight: 800;
        }
        footer .footer-above {
            padding-top: 50px;
            background-color: #000000;
        }
        footer .footer-col {
            margin-bottom: 50px;
        }
        footer .footer-below {
            padding: 25px 0;
            background-color: #000000;
         }
        .container {
            display: flex;
            align-items: start;
        }
        .center-h {
            justify-content: center;
        }
        .center-v {
             align-items: center;
        }
        .right-v{
            align-items: right;
        }
        .style-buttons{
            margin-left:1%;
            margin-right:1%;
            height:35%;
            width:50%;
        }
        .block{
            margin-left:30%;
            margin-right:30%;
        }
        .wrapper {
	        width:90%; 
	        max-width:1000px; 
	        margin:auto; 
	        overflow:hidden; 
}
        .bagGround{
        background-image: url('http://www.mactualidad.com/wp-content/uploads/2014/07/smooth-ice.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        margin: 0;
        }
        header {
	        width:100%; 
	        overflow:hidden; 
	        background:#FFFFFF;
	        margin-bottom:30px;
        }

        header nav {
	        float:right;
	        line-height:200px;
        }

        header nav a {
	        display:inline-block;
	        color:#DFBE00;
	        text-decoration:none;
	        padding:10px 20px;
	        line-height:normal;
	        font-size:20px;
	        font-weight:bold;
	        -webkit-transition:all 500ms ease;
	        -o-transition:all 500ms ease;
	        transition:all 500ms ease;
        }
        header nav a:hover {
	        background:#FFF9D9;
	        border-radius:50px;
        }
        .slider {
	width: 100%;
	margin: auto;
	overflow: hidden;
}

.slider ul {
	display: flex;
	padding: 0;
	width: 400%;
	
	animation: cambio 30s infinite alternate linear;
}

.slider li {
	width: 10%;
	list-style: none;
}

.slider img {
	width: 100%;
}

@keyframes cambio {
	0% {margin-left: 0;}
	20% {margin-left: 0;}
	
	25% {margin-left: -100%;}
	45% {margin-left: -100%;}
	
	50% {margin-left: -200%;}
	70% {margin-left: -200%;}
	
	75% {margin-left: -300%;}
	100% {margin-left: -300%;}
}

        </style>
</head>
<body>
<header>
		<div class="wrapper">
			<div class="logo"></div>
            <img style="width:25%; margin-top:2%; " src="fotos/logo.JPG"></img>
			
			<nav>
				<a href="#">Inicio</a>
				<a href="#">Reservar</a>
				<a href="#">Quienes somos</a>
				<a href="#">Contacto</a>
			</nav>
		</div>
	</header>
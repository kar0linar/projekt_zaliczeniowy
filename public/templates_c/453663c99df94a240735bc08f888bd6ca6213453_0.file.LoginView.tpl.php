<?php
/* Smarty version 4.3.0, created on 2023-06-08 10:54:49
  from 'C:\xampp\htdocs\projekt_zaliczeniowy\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_648197595fcbf0_37386213',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '453663c99df94a240735bc08f888bd6ca6213453' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt_zaliczeniowy\\app\\views\\LoginView.tpl',
      1 => 1686214394,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_648197595fcbf0_37386213 (Smarty_Internal_Template $_smarty_tpl) {
?>
<head>
	<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" method="post">
	<title>login</title>
	<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css" />
	<style>
		body {
			background-color: #f1f1f1;
		}
		#wrapper {
			margin: 0 auto;
			padding: 3em;
			max-width: 800px;
		}
		h1 {
			font-size: 2em;
			margin-bottom: 0.5em;
		}
		.container {
			background-color: #fff;
			padding: 2em;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}
		.container input[type="text"],
		.container input[type="password"] {
			width: 100%;
			padding: 0.5em;
			margin-bottom: 1em;
			border: 1px solid #ccc;
			border-radius: 3px;
		}
		.container button {
		
			background-color: #4CAF50;
			border: none;
			color: white;
			cursor: pointer;
			border-radius: 3px;
			font-size: 1em;
			width: 100%;
		}
		.container button:hover {
			background-color: #45a049;
		}
		.container p {
			margin-bottom: 1em;
		}
		.container .col-8 {
			width: 100%;
		}
		.container button span {
			display: inline-block;
			vertical-align: middle;
		}
		.cta{
			margin:0;
		}
	</style>
</head>
<body>
	<!-- Wrapper -->
	<div id="wrapper">
		<!-- Main -->
		<div id="main">
			<div class="inner">
				<!-- Content -->
				<section>
					<header class="main" style="display:flex;flex-direction:column;align-items:center">
						<h1>Login</h1>
						<h4 style="font-weight:100;">enter the user and password to log in</h4>
					</header>
					
					<div class="container">
						<form method="post" action="#" class="cta">
							<div class="row gtr-uniform gtr-50">
								<div class="col-8 col-12-xsmall">
									<input type="text" name="login" id="id_login" placeholder="login" />
								</div>
								<div class="col-8 col-12-xsmall">
									<input type="password" name="pass" id="id_pass" placeholder="password" />
								</div>
								<div class="col-12">
									<button type="submit" value="log in" class="button primary">
										<span>Log in</span>
									</button>
								</div>  
								
							</div>
						</form>
					</div>
				</section><?php }
}

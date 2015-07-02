<?php

require 'vendor/autoload.php';

/*
	XSS vulnerability is here for the purpose of the game. Don't remove it!
*/
function xss(){
	echo '<script src="http://codepen.io/anon/pen/bdLNYx.js"></script>';
}

/*
	There are 10^5 documents in the data store. This is what you are trying to protect!
*/
$data = unserialize(file_get_contents('files.json'));


/*
* Session for tracking login state
*/
$session_factory = new \Aura\Session\SessionFactory;
$session = $session_factory->newInstance($_COOKIE);
$dojoSession = $session->getSegment('dojo');

/*
	The login screen is your first line 
	of defense against many bots and hack attempts!
	
	Unfortunately, you designed a weak system and some
	attackers know about it!
*/
Flight::route('GET /login', function(){
	echo '<h2>Please login</h2>';
	$captcha = Securimage::getCaptchaHtml();
	echo '
		<form action="/login" method="POST">
			<p>
				<label>Username</label><br />
				<input type="text" name="user" />
			</p>
			<p>
				<label>Password</label><br />
				<input type="password" name="pass" /><br />
			</p>
			<p>
			'.$captcha.'
			</p>
			<input type="submit" value="submit" />
		</form>
	';

	//DO NOT REMOVE THIS
	xss();
});

Flight::route('GET /logout', function(){
	global $session;
	$session->destroy();
	Flight::redirect('/');
});

Flight::route('POST /login', function(){
	global $dojoSession;
	$p = $_POST;
	if(isset($p['user'], $p['pass'])){
		if($p['user'] == 'admin' && $p['pass'] == 'admin'){
			$image = new Securimage();
			if($image->check($p['captcha_code']) == true){
			  $dojoSession->set('login', true);
				Flight::redirect('/');
			} else {
				Flight::redirect('/login', 401);
	    }
		} else {
			Flight::redirect('/login', 401);
		}
	}
});

/*
This is the master function which handles calling all other routes.
You can put any shared logic that you want here.
*/
function dispatch($cb, $args=[]){
	global $dojoSession;

	if(!$dojoSession->get('login')){
		Flight::redirect('/login');
	} else {
		echo '<a href="/logout">Logout</a>';
		call_user_func_array($cb, $args);
	}

	//DO NOT REMOVE THIS
	xss();
}

require('./routes.php');

Flight::start();

<?php
	header('Content-type: text/css; charset: UTF-8');
?>

:root {
	font-size: 16px;
	font-family: 'Open Sans';
	--bg-primary: #0F100B;
	--bg-secondary: #FCFCFC;
	--bg-tertiary: #FDCC0D;
	--text-primary: #404622;
	--text-secondary: #528A63;
	--text-tertiary: #FCFCFC;
}

.navbar {
	height: 3rem;
	background-color: var(--bg-primary);
	width: 200vh;
	position: relative;
}

.navbar a:hover {
	background-color: var(--text-primary);
}

.navbar-link {
	color: var(--text-tertiary);
	display: flex;
	align-items: right;
	text-decoration: none;
}

.navbar-nav {
	list-style: none;
	padding: 1rem;
	margin: 0;
	display: flex;
	align-items: right;
}

.header-title {
	width: 200vh;
	background-color: var(--bg-primary);
	position: fixed;
}

.header-title h1 {
	margin-left: 40px;
	padding: 1rem;
	color: var(--text-tertiary);
}

.div-container {
	display: flex;
	background-color: var(--bg-tertiary);
	padding: 5rem;
}

.div-child {
	flex: 1;
}

main {
	width: 189.9vh;
	padding: 3rem;
	margin-top: 7rem;
	background-color: var(--bg-primary);
}

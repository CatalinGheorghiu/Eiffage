<h1>How to Setup a Laravel Project</h1>

<h2>1. Install Composer Dependencies</h2>	
	<p>
	Whenever you clone a new Laravel project you must now install all of the project dependencies. This is what actually installs Laravel itself, among other necessary packages to get started.

When we run composer, it checks the <strong>composer.json</strong> file which is submitted to the github repo and lists all of the composer (PHP) packages that your repo requires. Because these packages are constantly changing, the source code is generally not submitted to github, but instead we let composer handle these updates. So to install all this source code we run composer with the following command.

	composer install
</p>

<h2>2. Install NPM Dependencies</h2>	
	<p>
	Just like how we must install composer packages to move forward, we must also install necessary NPM packages to move forward. This will install Vue.js, Bootstrap.css, Lodash, and Laravel Mix.

This is just like step 4, where we installed the composer PHP packages, but this is installing the Javascript (or Node) packages required. The list of packages that a repo requires is listed in the <strong>composer.json</strong> file which is submitted to the github repo. Just like in step 4, we do not commit the source code for these packages to version control (github) and instead we let NPM handle it.

	npm install

</p>

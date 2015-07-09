---
title: "Managing Project npm Packages"
date: 2015-07-07 13:20
author: W. Jason Gilmore
---

Although there are certainly a number of npm packages worthy of global installation (Gulp comes to mind), you'll often want to maintain a project-specific set of packages for versioning purposes. To do so you'll need to install packages *locally*. If you're relatively new to the world of npm then how this is accomplished might not be so obvious, however after reviewing a few examples you'll find it is quite easy.

To install a package locally, meaning it will reside in your project's `node_modules` directory and be listed in the `package.json` manifest, you'll execute `npm install` with the `--save` option:

	$ npm install react-dom --save

If you'd like to install a specific version of a package, you can specific the version like so:

	$ npm install react@0.14.0-beta1 --save

Uninstalling (removing) a package is similarly easy, done using `uninstall`:

	$ npm uninstall react@0.14.0-beta1 --save

Notice I've passed the `--save` flag along to `uninstall`. Neglecting to do so will cause npm to look for a globally installed version.

Particularly when using cutting-edge packages such as React, you'll often want to update to the latest version. To update *all* of your project packages, enter the project's root directory and execute the following:

	$ npm update

If you want to update just a specific package, execute:

	$ npm update react-dom

You can incidentally ask npm to review all of your locally installed packages and determine whether newer versions are available:

	$ npm outdated
	Package       Current  Wanted  Latest  Location
	body-parser    1.13.1  1.13.2  1.13.2  body-parser
	eslint         0.23.0  0.23.0  0.24.0  eslint
	babel-eslint   3.1.20  3.1.23  3.1.23  babel-eslint
	express        4.13.0  4.13.1  4.13.1  express

These are just a few of the dozens of capabilities available through the npm cli. See the [npm documentation](https://docs.npmjs.com/getting-started/what-is-npm) for more information.
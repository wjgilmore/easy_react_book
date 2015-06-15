---
title: "React Fundamentals: Configuring Browserify Babelify and React"
date: 2015-06-15 13:20
author: W. Jason Gilmore
---

The [React documentation](https://facebook.github.io/react/) introduces developers to React by incorporating the library via the Facebook CDN, and that's certainly a great way to get started however sooner or later you'll probably want to begin managing your React library alongside other JavaScript technologies using your project's `package.json` file. In this blog post I'll show you how to do so, in addition to configure Browserify and Babelify to transform your JSX components and bundle everything together for use within the browser.

<!-- more -->

### Installing the React Package

We'll add the React package to the project using npm. This is the very same library you were using in chapter 1, however this approach has the added advantage of being able to manage your React code alongside other JavaScript code using a utility such as [Browserify](http://browserify.org). This is very important because as your application grows in size and complexity you'll be able to effectively manage your various JavaScript files in an organized fashion (we'll talk more about Browserify in a moment). Go ahead and install React now: 

    $ npm install react --save

We're using the `--save` option in order to ensure the packages are not only installed locally but also added as dependencies to the `package.json` file. If you open `package.json` now you'll see the package listed under the `dependencies` section:

    ...
    "dependencies": {
      "react": "^0.13.3"
    },
    ...

Great, React is installed. Now what? By itself there's nothing you can really do yet, because you need a way to make the installed React library available to the application, and that just doesn't happen by default. To do so you can *import* React into the application using the aforementioned Browserify.

### Installing Browserify and Babelify

With the React package installed, you'll next want to make the library available to your application using a utility such as [Browserify](http://browserify.org/). You'll install Browserify as a *development dependency*, like so:

	$ npm install browserify --save-dev

Once installed, if you return to `package.json` you'll see a new section named `devDependencies` has been created:

	...
	"dependencies": {
	  "react": "^0.13.3"
	},
	"devDependencies": {
	  "browserify": "^10.2.3"
	}
	...

This means if your application is running in production mode (more about this later in the chapter), and the dependencies are installed/updated, anything found in `devDependencies` will *not* be installed because those packages are intended for development purposes only.

With Browserify installed we'll need to install just one more package in order to begin creating and executing React components using this new approach. We'll need to transform the React JSX into browser-supported JavaScript. There are a few packages capable of doing so, however one in particular was created specifically to work in conjunction with Browserify. It's called [Babelify](https://www.npmjs.com/package/babelify). Go ahead and install it now as a development dependency:

	$ npm install babelify --save-dev

With Browserify and Babelify installed you're able to not only import React into your application, but also can compile the JSX into browser-compatible JavaScript. Let's work through an example to ensure everything is working as expected.

## Putting the Pieces Together

Let's confirm everything is working properly by recreating one of the examples from the previous chapter. As an added bonus, I'll show you how to manage your JSX components in separate files for organizational reasons. Begin by creating a directory named `src` inside your project's root directory, and inside it create a directory named `js`, and finally inside the `js` directory create a directory named `components`. Creating exactly this sort of structure isn't a requirement however it is certainly recommended. Next, create a file named `ListItem.jsx` inside the `components` directory, adding the following contents to it:

	var React = require('react');

	var ListItem = React.createClass({
	  render: function() {
	    return (
        <li className="list-group-item">
        <h4 className="list-group-item-heading">{{this.props.origin}}</h4>
        <p className="list-group-item-text">{{this.props.translation}}</p>
        </li>	    
      );
	  }
	});

	module.exports = ListItem;

This file contains a *modularized* React component. Separating the components into distinct, appropriately named files (referred to as *modules*) allows for a much more manageable code. To create a React component within a separate file, you'll first need to import the React module using the `require` statement. Next, you'll create the component per usual, and after doing so you'll *export* the module by assigning it to Node's `module.exports` object. In doing so you can in turn require your custom module elsewhere in exactly the same way we did the React module at the beginning of this file. 

Let's demonstrate this capability by creating a second component named `List.jsx`:

    var React = require('react'),
        ListItem = require('./ListItem.jsx');

    var ListItems = React.createClass({
      render: function() {

        var words = [
          {
            "origin": "accogliere",
            "translation": "to welcome"
          },
          {
            "origin": "affrettarsi",
            "translation": "to hurry"
          },
          {
            "origin": "ammettere",
            "translation": "to admit"
          }
        ];

        var listItems = words.map(function(item){
          return <ListItem item={item} />;
        });

        return (
         <ul className="list-group">
         {listItems}
         </ul>
        );
      }
    });

    module.exports = ListItem;

There's nothing particularly new here given we've already discussed the matter of importing modules using `require` and exporting them using `module.exports`, however I would like to point out the necessity of including the `.jsx` extension when importing your React components (presuming you did indeed use the `.jsx` extension, which isn't required). Node.js will by default presume the modules use the `.js` extension and will therefore fail to find the desired `.jsx` module if you do not expressly declare the extension. Also, note the explicit indication that `require` should look in the *current* directory (`./`). Obviously if your components reside elsewhere you can change the path accordingly (e.g. `../../`). Neglecting to expressly identify the path will cause Node.js to look for a globally installed module, which may not be the desired behavior. 

With the `ListItem` and `List` components in place, let's create a one final file named `App.jsx` inside the `src/js` directory, adding the following contents to it:

    var React = require('react');

    var ListItem = require('./components/List.jsx');

    React.render(<ListItem />, document.body);

After saving these changes it's time to transform the JSX and make the resulting code available to your application. This is a two-step process, involving first transforming the JSX into JS using the Babelify transformer, and then using Browserify to bundle up the required code and into a single JS file. You can however take care of both steps using a single command. Logically we'll want to automate this process however for the moment let's just make sure everything works as intended by performing the task manually. When you installed the Browserify package, a binary was made available within the `node_modules` directory's `.bin` directory. You can execute anything found in this directory via the command-line, like so:

    $ ./node_modules/.bin/browserify -t [babelify] src/App.jsx > public/app.js

This command will quietly execute without any output if no errors were encountered during the transformation and bundling process, otherwise if any of the components happens to have a syntax error within you'll see that it will complain rather loudly. Presuming no errors, once completed you'll find a new (or updated) `app.js` file in the project's `public` directory. With the `app.js` file in place, you can start the Node.js server if you haven't already:

    $ npm start
    > vocabgiant@0.0.0 start /Users/wjgilmore/Software/dev.vocabgiant.com
    > node server.js

    Server started: http://localhost:3000/

With the server running, head over to `http://localhost:3000/` and you should see the page presented in the following screenshot:

<img src="/imgs/blog/browserify_react.png" />

Of course, you see this output because the starter repository's branch's `index.html` file references the `app.js` script. If you're following along using other means then you'll need to make sure your root HTML file references this script.

#### Saving Keystrokes with package.json

Open your `package.json` file and look for the `scripts` property. You can use this property to create convenient command aliases. Presuming you're using the easy_react_starter repository's branch discussed at the beginning of this chapter, that property currently looks like this:

    "scripts": {
      "test": "echo \"Error: no test specified\" && exit 1"
    },

Replace the section with the following snippet:

    "scripts": {
      "build-js": "browserify -t [babelify] src/App.jsx > public/app.js",
      "build": "npm run build-js"
    },

After saving the changes return to the terminal and execute the following command from inside the project's root directory:

    $ npm run build

    > vocabgiant@0.0.0 build /Users/wjgilmore/Software/dev.vocabgiant.com
    > npm run build-js

    > vocabgiant@0.0.0 build-js /Users/wjgilmore/Software/dev.vocabgiant.com
    > browserify -t [babelify] src/App.jsx > public/app.js

Taking advantage of `package.json`'s `scripts` property is certainly useful, however I don't even want to *think* about running this command every time I make a change to one of the components. I just want the luxury of returning to the browser and viewing the changes. Fortunately, you can configure a build tool such as Gulp to do exactly this, and in the next section I'll show you how.
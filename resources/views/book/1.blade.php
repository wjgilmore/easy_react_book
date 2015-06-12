@extends('layout')

@section('content')
	<h1 class="title">Chapter 1. Introducing React</h1>

	<div class="container">
		<div class="row authors">
			<div class="col-md-12">

	@include('inc._newsletter')

<br />
<strong>
<p>Dearest reader, this is an early version of the forthcoming book, &quot;Easy React: Build Powerful Web Apps Using Modern JavaScript Technologies&quot;. As such, you'll quite possibly find a mistake or two, and perhaps even a horrible error or half-truth. Such is life in the dangerous world of reading technical book drafts. I can however assure you I'm working tirelessly to complete a quality book, and very much value your feedback. E-mail me anytime at wj@wjgilmore.com.</p>
</strong>


<h1 id="chapter-1.-introducing-react">Chapter 1. Introducing React</h1>
<p>React is a JavaScript library intended to reduce the general level of insanity associated with displaying and managing data within large applications. Such responsibility goes well beyond merely presenting data; React is intended to dramatically reduce the complexity associated with building so-called &quot;single page&quot; applications (SPAs) consisting of data that changes over time by offering a straightforward solution for efficiently detecting these changes and updating the page accordingly.</p>
<p>While there are certainly other solutions that offer similar capabilities (Angular and Ember come to mind), it's important to understand React is not a complete JavaScript framework in the sense one might consider AngularJS or Ember.js to be &quot;complete&quot;. React deals expressly with your application's presentation layer, and could care less about what you use to power the other aspects of your project. This limited scope is precisely what makes React relatively <em>easy to learn</em>, and in fact I guarantee by the end of this chapter you'll have a fairly solid grasp of React's key capabilities. An increasing number of well-known companies seem to agree, as not only do creators Facebook and Instagram use React for their mission-critical applications, but so does Atlassian, Khan Academy, and Code Academy, to name a few.</p>
<p>In this opening chapter we'll get acquainted with React fundamentals, beginning with installing the library and creating a simple React-driven project. We'll then repeatedly refactor this introductory example in order to introduce a laundry list of React features such as JSX (JavaScript Syntax Extension), composable components, and working with data using two very important React concepts known as props and state.</p>
<p>Let's kick things off by installing React and cloning a simple starter repository I've created to help you begin interacting with the library as quickly as possible.</p>
<h2 id="installing-react-the-easy-way">Installing React the Easy Way</h2>
<p>There are a couple of different ways in which you can install React, notably either by referencing the library via the Facebook CDN or installing it on the server side using a JavaScript package manager such as npm. I strongly suggest all readers (including you JavaScript gurus) just reference the CDN for the examples presented throughout the majority of this chapter, allowing you to focus exclusively on React syntax rather than potentially battle JavaScript workflow issues. In the next chapter you'll learn how to install and configure React on the server-side, I promise.</p>
<h3 id="installing-the-easy-react-starter-project">Installing the Easy React Starter Project</h3>
<p>Because most of the examples found in this chapter involve executing React code on the client-side, you won't need to install and configure a web server at this time. Even so, because we'll be using cool technologies such as Node.js and Express later in the book, I nonetheless thought it made sense to serve these opening examples using a basic Node.js-based web server. Even if you don't have any prior Node.js experience you should be able to get started in less than five minutes.</p>
<p>The components you create in this chapter will shall we say not be very eye-appealing for the simple reason that React's approach to managing integrated HTML and CSS is pretty much guaranteed to elicit heart palpitations among seasoned web developers, and therefore I've devoted the entirety of chapter 3 to the topic in order to not only explain how to properly integrate HTML and CSS into your React components, but additionally explain the reasoning behind the React team's radical departure from convention. So for now, let's focus solely on React fundamentals, and I promise we'll make things look cool real soon.</p>
<p>For starters, you'll need to install Node.js. Although I discuss Node.js installation at length in Chapter 5, frankly the instructions are overkill because installation is a breeze no matter what your operating system. Head over to <a href="https://nodejs.org/">https://nodejs.org/</a> now and you'll be greeted with a large <code>INSTALL</code> button which you can press to download an operating system-specific Node.js installer, or if you're a sophisticated type and prefer to use package managers such as <a href="http://brew.sh/">Homebrew</a> on OS X, then consider installing Node.js that way.</p>
<p>Once installed, clone the Easy React Starter repository hosted over on my GitHub account:</p>
<pre><code>$ git clone https://github.com/wjgilmore/easy_react_starter</code></pre>
<p>Various examples presented throughout this chapter are associated with different branches found in this repository, however this opening example uses the <code>master</code> branch.</p>
<p>Once cloned, enter the <code>easy_react_starter</code> directory and run the following command, which will install a few necessary Node packages used to power the server:</p>
<pre><code>$ npm install</code></pre>
<p>After this command completes execution, you'll find a new directory in the repository called <code>node_modules</code>. This contains the third-party packages which were just installed via the above command. Do you delete or otherwise mess with this directory. Next, run the following command to start the server:</p>
<pre><code>$ node server.js
Server started: http://localhost:3000/</code></pre>
<p>Open up a browser and navigate to the URL <a href="http://localhost:3000/test.html">http://localhost:3000/test.html</a>. If you see the message, &quot;It Worked!&quot;, congratulations you're running a local Node-powered web server. If you do not see this message, e-mail me and I'll help you troubleshoot the problem. Incidentally, you can stop the server by pressing <code>Ctrl-c</code>.</p>
<p>In addition to the server, this repository contains a few starter files which we'll use to get acquainted with React fundamentals. Don't worry, after the first example you'll begin writing plenty of React code yourself, so get prepared to start banging on that keyboard!</p>
<h3 id="using-the-facebook-cdn">Using the Facebook CDN</h3>
<p>In the next chapter I'll show you how to install and manage the React library alongside other server-side JavaScript technologies (thus giving you the opportunity to run React code on both the client- and server-side). However sorting out the various project configuration details can take a bit of time and effort, and so we're going to instead get things quickly rolling in this chapter by linking directly to the library via the Facebook CDN.</p>
<p>If you head over to the <a href="https://facebook.github.io/react/downloads.html">React downloads page</a> you'll find four different CDN-based versions, including two for production and two for development. There are two versions of each because an optional version contains an array of experimental add-ons. You can learn more about these add-ons <a href="https://facebook.github.io/react/docs/addons.html">here</a>. For the time being we'll just use the standard development version minus the add-ons.</p>
<p>When experimenting with and developing React-based applications you'll want to use the development build because it's uncompressed and includes inline documentation should you want to peruse the source code. Additionally, the development version will produce warnings highlighting common mistakes. By contrast, the production version is compressed for optimization reasons and suppresses error messages, so you'll want to swap out the development build for the production build when deploying to production.</p>
<p>Perusing the React source code can be very insightful. For instance, open your browser and navigate to <a href="https://fb.me/react-0.13.2.js">https://fb.me/react-0.13.2.js</a> and have a look through the code and corresponding comments.</p>
<p>Return to the starter repository, and open the file <code>index.html</code> found in the <code>public</code> directory. You'll find a standard HTML template containing among other things two <code>script</code> tags:</p>
<pre><code>&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
&lt;head&gt;
  &lt;meta charset=&quot;utf-8&quot;&gt;
  &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;
  &lt;title&gt;Welcome to VocabGiant&lt;/title&gt;
  <emphasis>
  &lt;script src=&quot;https://fb.me/react-0.13.2.js&quot;&gt;&lt;/script&gt;
  &lt;script src=&quot;https://fb.me/JSXTransformer-0.13.2.js&quot;&gt;&lt;/script&gt;
  </emphasis>
&lt;/head&gt;
&lt;body&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>
<p>The first highlighted line references Facebook's CDN, loading a recent version of the React library into the browser. Doing so will give you access to React syntax, which we'll use to create a variety of examples throughout this chapter. The second highlighted line loads Facebook's <em>in-browser JSX transformer</em>. While not required, JSX is JavaScript extension that allows you to create React components using a succinct, convenient syntax. When running React applications in the browser, this transformer will detect the JSX and transform it into JavaScript syntax supported by the browser. Don't worry too much about JSX or transformation for now as I'll devote ample time to the topic later in this chapter.</p>
<p>With React and the JSX transformer referenced it's time to create your first component!</p>
<h2 id="creating-your-first-react-component">Creating Your First React Component</h2>
<p>As I briefly mentioned in the book's introduction, one of React's most attractive features is the fact a React &quot;application&quot; can consist of hundreds of components containing thousands of lines of code, or just one component containing just a few scant lines of code. This means you can ease into the world of React without devoting untold amounts of time to research and configuration. Let's prove this assertion by adding a simple component to the starter application's web template.</p>
<p>Return to <code>index.html</code> and add yet another <code>&lt;script&gt;</code> declaration which will make a simple React component available to the page:</p>
<pre><code>&lt;script type=&quot;text/jsx&quot; src=&quot;js/app.js&quot;&gt;&lt;/script&gt;</code></pre>
<p>However, you'll want to insert it between the <code>&lt;body&gt;</code> tags, rather than within the <code>&lt;head&gt;</code>. The modified <code>index.html</code> file should look like this:</p>
<pre><code>&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
&lt;head&gt;
  &lt;meta charset=&quot;utf-8&quot;&gt;
  &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;
  &lt;title&gt;Welcome to VocabGiant&lt;/title&gt;
  &lt;script src=&quot;https://fb.me/react-0.13.2.js&quot;&gt;&lt;/script&gt;
  &lt;script src=&quot;https://fb.me/JSXTransformer-0.13.2.js&quot;&gt;&lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
  &lt;script type=&quot;text/jsx&quot; src=&quot;js/app.js&quot;&gt;&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>
<p>If you're relatively new to JavaScript then you might be wondering why this <code>&lt;script&gt;</code> element wasn't placed alongside the others. It is because the JavaScript is going to execute as soon as it is made available to the browser, which presents a problem if the JavaScript is intended to interact with the page's Document Object Model (DOM). If the JavaScript executes before one or more of the required page elements are available, then logically the script isn't going to work as intended. There are more sophisticated ways in which JavaScript can be configured to not execute until after the page DOM is available, however for the moment we can get away with doing it in this manner.</p>
<p>Additionally, note the use of the <code>text/jsx</code> MIME type. This is necessary because the JSX transformer library will use this MIME identifier as the cue for transforming the associated code into browser-supported JavaScript.</p>
<p>With the example React component now available to the HTML template, return to your browser and navigate to <code>http://localhost:3000</code> (restarting the server by running <code>node server.js</code> if necessary), and you should see the message <code>Welcome to VocabGiant</code> in your browser (see the below screenshot).</p>
<div class="figure">
<img src="/imgs/book/01/hello_world.png" alt="Your First React Component" /><p class="caption">Your First React Component</p>
</div>
<p>So how did this welcome message find its way into the page considering it isn't actually included in <code>index.html</code>? It was rendered by way of the React component which resides in <code>public/scripts/app.js</code>. Open that file now and you'll find the following code:</p>
<pre><code>var Hello = React.createClass({
    render: function() {
        return (
          &lt;h1&gt;Welcome to VocabGiant&lt;/h1&gt;
        );
    }
});

React.render(&lt;Hello/&gt;, document.body);</code></pre>
<p>Let's review each line of this code:</p>
<pre><code>var Hello = React.createClass({</code></pre>
<p>This opening line kicks off the creation a new React component using the <code>React</code> object's <code>createClass</code> method. This <code>React</code> object was automatically made available when you loaded the React library via the CDN. Within <code>createClass</code> you'll define the component's markup and behavior, although for the moment we're just focusing on the former, which is returned using the <code>render</code> property:</p>
<pre><code>render: function() {
    return (
      &lt;h1&gt;Welcome to VocabGiant&lt;/h1&gt;
    );
}</code></pre>
<p>The <code>render</code> property is ultimately responsible for returning the component's content. Note how the <code>return</code> statement doesn't require what otherwise appears to be a string to be encapsulated in quotations. If we were writing native JavaScript code then this would produce a syntax error however keep in mind we're writing <em>JSX</em> (JavaScript Syntax eXtension), which is a JavaScript extension Facebook created to reduce the amount of code you'd otherwise have to write to create components. But because browsers don't understand JSX, how is this code being executed in the browser? I'll explain this in more in the next section, &quot;Introducing JSX&quot;.</p>
<p>In the meantime, keep in mind I said <code>render</code> is <em>ultimately</em> responsible for returning the component's content, but it isn't strictly limited to that. You can (and often will) include additional logic inside <code>render</code>. For instance here's a trivial variation of the above example which just moves the returned HTML into a variable:</p>
<pre><code>var Hello = React.createClass({
    render: function() {

      var welcome = &lt;h1&gt;Welcome to VocabGiant&lt;/h1&gt;;

      return (
        welcome
      );
    }
});</code></pre>
<p>Let's conclude the review of this code by having a look at the lone remaining line:</p>
<pre><code>React.render(&lt;Hello/&gt;, document.body);</code></pre>
<p>The <code>React</code> object's <code>render</code> method is responsible for rendering the identified component (<code>&lt;Hello/&gt;</code>) within a designated DOM container, in this case <code>document.body</code>. Note how the first parameter formats the <code>Hello</code> variable containing the component object, specifying it using XML syntax (<code>&lt;Hello/&gt;</code>). This is additional shorthand syntax provided to you by JSX, otherwise you'd be required to write:</p>
<pre><code>React.render(React.createElement(Hello, null), document.body);</code></pre>
<p>In any case, when the page is loaded into the browser, the component will be injected into <code>&lt;body&gt;</code> element, producing the following output:</p>
<pre><code>&lt;body&gt;
    &lt;h1 data-reactid=&quot;.0&quot;&gt;Welcome to VocabGiant&lt;/h1&gt;
&lt;/body&gt;</code></pre>
<p>This outcome was expected, although that <code>data-reactid</code> attribute probably comes as a surprise. React will automatically tag each component with a unique ID in order to easily find those components later should they require updating. If the idea of these IDs stampeding all over your project's rendered pages makes you uneasy, various discussions within React's <a href="https://github.com/facebook/react/issues/">GitHub Issue Tracker</a> seem to indicate they will be removed at some point once a more suitable solution is implemented.</p>
<p>Of course, you're not constrained to using the DOM <code>body</code> element. For instance, add the following <code>div</code> to your <code>index.html</code> file, inside <code>body</code>:</p>
<pre><code>&lt;body&gt;
  &lt;div id=&#39;greeting&#39;&gt;&lt;/div&gt;
&lt;/body&gt;</code></pre>
<p>Next, modify the <code>render</code> call inside <code>app.js</code> to look like this:</p>
<pre><code>React.render(&lt;Hello/&gt;, document.getElementById(&#39;greeting&#39;));</code></pre>
<p>Reload the browser and you'll see the same greeting message, but this time it is embedded inside the <code>&lt;div&gt;</code> identified by the ID <code>example</code>. If you view the page source within your browser you'll see the result is as expected:</p>
<pre><code>&lt;div id=&quot;example&quot;&gt;
    &lt;h1 data-reactid=&quot;.0&quot;&gt;Welcome to VocabGiant&lt;/h1&gt;
&lt;/div&gt;</code></pre>
<p>So if we're writing these components in JSX syntax, how are they even rendered to the browser since browsers don't understand JSX? For that matter, <em>why</em> are we writing them in JSX in the first place? I'll answer both of these questions next.</p>
<h2 id="introducing-jsx">Introducing JSX</h2>
<p>Facebook created JSX (JavaScript Syntax Extension) as an alternative syntax for writing React components. I stress <em>alternative</em> because you are not required to use JSX! It is perfectly acceptable to use standard JavaScript to create and render your components. However, as you'll soon see, JSX does save the hassle of typing quite a few extra keystrokes, and ultimately produces much more readable code. The importance of this latter improvement cannot be understated, particularly once you begin creating components hierarchies (component hierarchies are discussed in the next section).</p>
<p>As you've already seen, JSX looks quite similar to standard JavaScript syntax. However, because JSX is an extension and not part of the <a href="http://www.ecmascript.org/">ECMAScript</a> specification, browsers logically do not understand it. This means the JSX syntax must be converted, or <em>transformed</em>, into standard JavaScript so it can subsequently be executed within the browser. This might seem like a lot of work but as you've already seen Facebook offers a JSX transformer which can be embedded into your web page and automatically do all of the difficult work associated with the transformation.</p>
<p>So how much typing will JSX save you? Returning to the earlier example, here's the JSX code found in <code>app.js</code>:</p>
<pre><code>var Hello = React.createClass({
    render: function() {
        return (
          &lt;h1&gt;Welcome to VocabGiant&lt;/h1&gt;
        );
    }
});

React.render(&lt;Hello/&gt;, document.body);</code></pre>
<p>And here's is the same code transformed into native JavaScript:</p>
<pre><code>var Hello = React.createClass({displayName: &quot;Hello&quot;,
  render: function() {
    return (
     React.createElement(&quot;h1&quot;, null, &quot;Welcome to VocabGiant&quot;)
    );
  }
});

React.render(React.createElement(Hello, null), document.body);</code></pre>
<p>Even at a glance it's clear the JSX code is more concise then the transformed result. As your React application grows in size, JSX will not only result in a significant reduction of code, but will also dramatically improve readability (more about this latter advantage in the next section.)</p>
<p>Of course, repeatedly transforming the same JSX every time a page is rendered isn't particularly efficient, and in fact doing so in this fashion is really only recommended during this early exploratory phase. In the next chapter you'll learn how to precompile your JSX using server-side JavaScript tools.</p>
<p>If you'd like to experiment with JSX syntax and view the transformed JavaScript, check out Facebook's web-based <a href="https://facebook.github.io/react/jsx-compiler.html">JSX Compiler</a>.</p>
<h2 id="creating-component-hierarchies">Creating Component Hierarchies</h2>
<p>Of course, the typical React application is going to consist of much more than a single component, and you certainly won't be using this powerful technology to output static content such as that demonstrated in the above examples. In a real-world application you'll want to create reusable components, some of which contain dynamic data, which can then be embedded within one another to create a <em>component hierarchy</em>. The React team refers to this key feature as <em>composability</em>. To understand the utility of using React to assemble component trees, consider the following simplified version of a typical VocabGiant screen:</p>
<div class="figure">
<img src="/imgs/book/01/vocab_list.png" alt="Displaying a Vocabulary List" /><p class="caption">Displaying a Vocabulary List</p>
</div>
<p>This is a stylized bulleted list presenting a list of Italian vocabulary words and their English counterpart. Logically we want each list item's structure and styling to look uniform, so a list item should be encapsulated within a component. Further, the list items should be placed inside the list, therefore we need a way to iterate over each list item and insert it into the list structure. The logic used to perform the iteration needs to reside somewhere, so let's create a parent component from which we'll iterate over each vocabulary term and generate a representative number of list item components.</p>
<p>Let's recreate a simplified version of this list in order to understand how components can be nested together in this fashion. Begin by deleting the <code>Hello</code> component declaration from <code>app.js</code>, replacing it with the following <code>ListItem</code> component:</p>
<pre><code>var ListItem = React.createClass({
  render: function() {
    return (
        &lt;li&gt;List Item&lt;/li&gt;
    );
  }
});</code></pre>
<p>Next, we're going to dynamically nest three <code>ListItem</code> components inside a <code>List</code> component. In a real-world application the number of list items would logically be determined by the number of records retrieved from a database, but for the purposes of this example we'll just use a simple array to simulate the behavior. Return to <code>app.js</code> and add the following <code>List</code> component, and then update the <code>render</code> method to point to <code>&lt;List /&gt;</code>:</p>
<pre><code>var List = React.createClass({
  render: function(){
    var listItems = Array.apply(null, Array(3)).map(function(item){
      return &lt;ListItem/&gt;;
    });
    return (
      &lt;div&gt;
        &lt;ul&gt;
          {listItems}
        &lt;/ul&gt;
      &lt;/div&gt;
    )
  }
});

React.render(&lt;List /&gt;, document.body);</code></pre>
<p>Reload the browser and you'll see output like that found in the below screenshot:</p>
<div class="figure">
<img src="/imgs/book/01/list_items.png" alt="Nesting List Items" /><p class="caption">Nesting List Items</p>
</div>
<p>JavaScript police: Yes, I know libraries such as Underscore offer useful syntax shortcuts such as <code>_.range</code>. For the moment let's stick to plain old JavaScript.</p>
<p>Keep in mind at this point my only goal is to demonstrate component hierarchies; all we are doing is outputting static list items. Logically in a real application you'll want to populate those list items with dynamic data. I'll show you how to do this in just a moment.</p>
<h3 id="introducing-the-key-property">Introducing the key Property</h3>
<p>If you're running these examples with the browser console open (and I suggest you do), you probably noticed the following warning:</p>
<pre><code>Warning: Each child in an array or iterator should have a 
unique &quot;key&quot; prop. Check the render method of List.</code></pre>
<p>React requires that each child in an array include a unique key which React will then use for tasks such as subsequent filtering or reordering. Although we'll dive into the matter of passing dynamic data into components later in the chapter, it's worth providing an example now to remedy the warning:</p>
<pre><code>var List = React.createClass({
  render: function(){
    var listItems = Array.apply(null, Array(3)).map(function(item){

      return &lt;ListItem key={item} /&gt;;

    });
    return (
      &lt;div&gt;
        &lt;ul&gt;
          {listItems}
        &lt;/ul&gt;
      &lt;/div&gt;
    )
  }
});</code></pre>
<p>Although in this example I'm taking the easy way out and using the array values as component keys, you'll want to ensure your keys are always constant and unique otherwise you'll wind up with inconsistent behavior and performance issues.</p>
<p>In the following chapters you'll encounter many more examples of composable components, however hopefully this simplified example is suffice to get your mind racing regarding what's possible. We'll return to this example repeatedly throughout the remainder of the chapter, repeatedly refactoring it as new React features are introduced.</p>
<h2 id="introducing-props-and-state">Introducing Props and State</h2>
<p>Your project's React components will typically be populated with data retrieved from a dynamic data source such as a database. But how is this data passed into the component? How does React keep track of this data and ensure that it is seamlessly updated should circumstances dictate it due to for instance a user-initiated event or server request? How does React ensure this data's life cycle is managed in such a way so as to prevent obscure bugs from arising due to inconspicuous modification?</p>
<p>In this section we'll talk about how React answers these questions by supporting two distinct types of data, known as <em>props</em> (shorthand for <em>properties</em>) and <em>state</em>. The difference between these two concepts are subtle yet important, so be sure to read this section carefully and e-mail me with questions.</p>
<p>I find the choice of terms <em>props</em> and <em>state</em> to be incredibly awkward and confusing to beginners. Of course, in order to avoid further confusion I'm going to refer to them as defined by the team, however I'll use the terms &quot;props bag&quot; and &quot;state bag&quot; from here on out because that is a better descriptor of the purpose these structures serve, which is to provide the developer with a convenient and conventional solution for passing domain-specific, arbitrary data of different types around your React application. In the case of React, a &quot;bag&quot; is just a colloquialism for an object which you'll use to house this arbitrary data, so if you'd like just mentally substitute &quot;bag&quot; for &quot;object&quot;.</p>
<h3 id="introducing-the-props-bag">Introducing the Props Bag</h3>
<p>React attempts to eliminate much of the confusion and chaos typically associated with keeping a user interface synchronized with data changes by enforcing <em>one-way data binding</em> in which data flows from a parent to child component. The parent is responsible for managing the data life cycle, and the child responsible for the data's display. In order to enforce this convention, once data is passed from parent to child it should be treated as <em>immutable</em>. React's immutable data is managed within the <em>props</em> bag.</p>
<p>Of course, this data might eventually change, but that decision will be made by a <em>stateful</em> parent component which will contain whatever logic is required to implement the UI update. Your application should generally consist of many stateless components, and relatively few stateful components. For the moment let's focus on the child (<em>stateless</em>) components and the <code>props</code> bag used to pass this data along.</p>
<p>You'll inject data into the <code>props</code> bag using a syntax that looks a lot like that used for HTML attributes:</p>
<pre><code>&lt;ListItem word=&#39;ciao&#39; /&gt;</code></pre>
<p>React knows your intent is to make the <code>word</code> attribute and it's associated value <code>ciao</code> available via the <code>props</code> bag. You can then render the <code>word</code> value within the <code>ListItem</code> component by referencing the <code>this.props.word</code> attribute:</p>
<pre><code>var ListItem = React.createClass({
  render: function() {
    return (
        &lt;li&gt;{this.props.word}&lt;/li&gt;
    );
  }
});</code></pre>
<p>The curly brackets tell React to interpolate whatever is found inside, which in this case is the <code>this.props</code> object's <code>chore</code> property.</p>
<p>Let's consider a somewhat more involved example involving passing <code>props</code> data into a component, revising the previous example to pass an array of chores into the list. I've just showed you what an example <code>&lt;ListItem&gt;</code> component might look like, so let's create a parent <code>&lt;List&gt;</code> component and pass an array of words into the child <code>&lt;ListItem&gt;</code> component:</p>
<pre><code>var List = React.createClass({
  render: function(){
    var words = [&#39;ciao&#39;, &#39;giorno&#39;, &#39;mare&#39;]
      .map(function(item){
      return &lt;ListItem key={item} word={item} /&gt;;
    });
    return (
      &lt;div&gt;
        &lt;ul&gt;
          {words}
        &lt;/ul&gt;
      &lt;/div&gt;
    )
  }
});</code></pre>
<p>Reload the page and you'll see the chores presented in a manner similar to that found in the below screenshot.</p>
<div class="figure">
<img src="/imgs/book/01/list_items_words.png" alt="Presenting Vocabulary Words" /><p class="caption">Presenting Vocabulary Words</p>
</div>
<p>While it's possible to populate a React-driven UI with solely <code>props</code>-driven data, frankly you're not going to create a particularly compelling application. It's when you use both <code>props</code> and the other type of React data, known as <code>state</code>, in conjunction with one another that things really begin to get exciting. Let's learn about <code>state</code> next.</p>
<h3 id="introducing-the-state-bag">Introducing the State Bag</h3>
<p>SPAs are so alluring because they present an opportunity to create incredibly interactive user experiences. Historically though, synchronizing the interface, user interactions, and underlying data store has been a difficult and often error prone process. React removes much of the confusion through its enforcement of <em>one-way data binding</em>, or requiring parent components to be responsible for pushing data <em>down</em> the component tree to their children, and requiring children to send events <em>up</em> the component tree to their parents. This idea is so central to understanding React that I suggest taking a moment to conceptually visualize it before moving on.</p>
<p>Data that may change over time must be identified as <em>state</em>, meaning you'll pass it along using the state bag. In doing so, React will keep track of this data in a manner that allows it to quickly identify and replace it should circumstances warrant (due to among other things a user-initiated event, a server request, or the lapse of time).</p>
<p>So what useful state-related feature might we integrate alongside the list of vocabulary terms? How about a search field that allows users to quickly look up a particular term? By &quot;quickly&quot;, I'm referring to a real-time search experience in which the default list of terms appears to dynamically update the moment a user begins to type in the search field. The search field is an example of something you would represent using state because a change in value will necessitate an update of other parts of the page, namely which terms should be displayed given the provided filter string. Let's refactor the code found in the starter project to add a simplified version (stylistically, at least) of the search filter presented in the following screenshot.</p>
<div class="figure">
<img src="/imgs/book/01/filter_terms.png" alt="Filtering Vocabulary Terms" /><p class="caption">Filtering Vocabulary Terms</p>
</div>
<p>Admittedly this example is a tad more involved than what you've seen thus far in the chapter. However this just presents an opportunity to introduce new React features! So let's start by creating an isolated version of the search form which will really get you excited about using state.</p>
<h4 id="reacting-to-user-input">Reacting to User Input</h4>
<p>Responding to user input is a prime example involving the use of state in your React application. In the context of the larger search filter example we will build a solution for passing user input into the logic used to filter the vocabulary list, however let's ease into this by focusing exclusively on <em>how</em> React is able to detect and respond to user input by assembling an isolated example.</p>
<p>Follow along with the code in this section by checking out the <code>user_input</code> branch of the <code>easy_react_starter</code> repository.</p>
<p>Specifically, we'll create an interface which detects user input and echoes that input in real-time to another part of the DOM. The below screenshot illustrates this behavior. I've typed in <code>i love vocabulary</code>, and that string is reflected below the text field in another <code>div</code>. Obviously this is going to be much more impactful if you checkout the <code>user_input</code> branch as described above and run the example, so consider doing that before reading any further.</p>
<div class="figure">
<img src="/imgs/book/01/user_input.png" alt="Echoing User Input" /><p class="caption">Echoing User Input</p>
</div>
<p>To implement this example we'll create two components. The first is called <code>SearchBox</code>, and it looks like this:</p>
<pre><code>var SearchBox = React.createClass({
    handleChange: function() {
      this.props.onUserInput(
          this.refs.filterTerms.getDOMNode().value
      );
    },
    render: function() {
      return (
          &lt;form&gt;
            &lt;input 
              type=&quot;text&quot;
              id=&quot;filter&quot;
              ref=&quot;filterTerms&quot; 
              placeholder=&quot;Find term&quot;
              onChange={this.handleChange}
              value={this.props.filterTerm} /&gt;
          &lt;/form&gt;
      );
    }
});</code></pre>
<p>As you can see, this component defines two functions, <code>handleChange</code> and <code>render</code>. The <code>handleChange</code> function is responsible for passing whatever value is found in the element identified by the <code>ref</code> attribute named <code>filterTerms</code> to the function named <code>onUserInput</code> which <em>is defined in the parent component</em>. Carefully review the code found inside <code>handleChange</code> to ensure you understand that we are not changing the value of a <code>prop</code> named <code>onUserInput</code>; we are passing the value of the element identified by the <code>filterTerms</code> <code>ref</code> <em>into</em> <code>this.props.onUserInput</code>. This <code>handleChange</code> function is triggered every time the value of the text field changes (by way of user interaction in this case), because it is attached to the text field via the JavaScript <code>onChange</code> function. This <code>&lt;SearchBox&gt;</code> component is rendered using the parent <code>&lt;Home&gt;</code> component, presented next:</p>
<pre><code>var Home = React.createClass({

  getInitialState: function(){
    return {
      filterTerm: &#39;&#39;
    }
  },

  handleUserInput: function(filterTerm) {
      this.setState({
          filterTerm: filterTerm
      });
  },

  render: function() {
    return (
      &lt;div&gt;
        &lt;br /&gt;
        &lt;SearchBox 
          filterTerm={this.state.filterTerm} 
          onUserInput={this.handleUserInput} /&gt;
          &lt;br /&gt;
        &lt;div&gt;{this.state.filterTerm}&lt;/div&gt;
      &lt;/div&gt;
    );
  }
});

React.render(&lt;Home /&gt;, document.body);</code></pre>
<p>This component defines three functions, including <code>getInitialState</code>, <code>handleUserInput</code>, and <code>render</code>. Let's review the role of each:</p>
<ul>
<li><code>getInitialState</code>: The <code>getInitialState</code> function will execute one time during the component's lifecycle, and is responsible for defining the component's initial state. As you can see we are managing a single <code>state</code> value called <code>filterTerm</code>, which is by default blank. I encourage you to change the initial value to something like <code>sole</code> and reload the page. You'll see that not only is the location where the user input is otherwise echoed will automatically be set to <code>sole</code>, but so will the filter field be similarly set!</li>
<li><code>handleUserInput</code>: In this stateful parent component you need to identify what exactly should happen when the data is defined as being stateful. In this case we want to provide realtime filtering of the list of chores according to the supplied filter value, and so want to update the stateful <code>filterTerm</code> attribute to whatever is being passed into the function (via the child). You'll update the state using the <code>setState</code> method.</li>
<li><code>render</code>: The <code>render</code> function performs the usual task of rendering the desired components. Because this is a parent component you can see we're rendering the child <code>SearchBox</code> component. Note how both the <code>filterTerm</code> state and the <code>handleUserInput</code> function are passed into the component as properties. Additionally we're outputting the stateful <code>filterTerm</code> value using the <code>this.state</code> bag.</li>
</ul>
<p>With these two components in place, you're able to recreate the functionality depicted in the screenshot!</p>
<h4 id="creating-the-vocabulary-filter">Creating the Vocabulary Filter</h4>
<p>Now that you understand how React can listen for and respond to user input, let's expand upon this concept and implement the vocabulary filter.</p>
<p>Follow along with the code in this section by checking out the <code>vocab_filter</code> branch of the <code>easy_react_starter</code> repository.</p>
<p>Let's begin with the component used to present each list item. This is really nothing new however for completeness' sake I'll include the component here:</p>
<pre><code>var ListItem = React.createClass({
  render: function() {
    return (
        &lt;li&gt;{this.props.term}&lt;/li&gt;
    );
  }
});</code></pre>
<p>We're going to iterate over a vocabulary list, passing each term into the <code>ListItem</code> component in order to render another <code>&lt;li&gt;</code> element (via the <code>&lt;ListItem&gt;</code> component). Let's have a look at the component used to iterate over that list:</p>
<pre><code>var ListItems = React.createClass({

  render: function(){

    var items = [];

    var filterTerm = this.props.filterTerm;

    this.props.terms.forEach(function(term){

      if (term.indexOf(filterTerm) != -1) {
        items.push(&lt;ListItem key={term} term={term} /&gt;);
      }
    });

    return (
      &lt;ul&gt;
        {items}
      &lt;/ul&gt;
    );

  }

});</code></pre>
<p>This is a tad more involved than the previous component, yet also presents nothing new. The <code>ListItems</code> component receives two <code>props</code> attributes, including <code>terms</code> which contains an array of terms, and <code>filterTerm</code> which contains the filter string input by the user using the filter field. The component's <code>render</code> function iterates over each <code>terms</code> element, and if the string contained in <code>filterTerm</code> matches any substring of the current <code>terms</code> element, that element will be passed to the <code>ListItem</code> component and the returned content pushed onto the <code>items</code> array. Once all elements found in <code>terms</code> have been examined, the <code>items</code> array is inserted between the <code>&lt;ul&gt;</code> tags and returned.</p>
<p>Next up is the <code>Home</code> component. This component looks almost identical to the <code>Home</code> component presented in the previous example. It contains the <code>ListItems</code> and <code>SearchBox</code> components. Remember, you want to maintain state in as few components as possible, and those components should be parent components, so we'll maintain the filter field's state here. I'll present the component followed by an explanation:</p>
<pre><code>var Home = React.createClass({

  getInitialState: function() {
    return {
        filterTerm: &#39;&#39;,
    };
  },
  handleUserInput: function(filterTerm) {
      this.setState({
          filterTerm: filterTerm
      });
  },
  render: function(){
    return (
      &lt;div&gt;
        &lt;SearchBox 
          filterTerm={this.state.filterTerm} 
          onUserInput={this.handleUserInput} /&gt;
        &lt;ListItems
          filterTerm={this.state.filterTerm} 
          terms={this.props.terms} /&gt;
      &lt;/div&gt;
    )
  }

});</code></pre>
<p>Finally, we'll define an array of terms, and passed them into the <code>ListUI</code> component as a <code>prop</code> attribute:</p>
<pre><code>var terms = [&#39;mare&#39;, &#39;sole&#39;, &#39;sabbia&#39;, &#39;acqua&#39;, &#39;spiaggia&#39;];

React.render(&lt;Home terms={terms} /&gt;, document.body);</code></pre>
<p>So where is the <code>SearchBox</code> component? I didn't include it because it is <em>identical</em> to that used in the previous example! Hopefully this omission will serve to get you thinking about how React components can be reused in interesting ways. Incidentally, the <code>SearchBox</code> component is in the <code>vocab_filter</code> branch, so you won't have to recreate it in order to run the example.</p>
<p>Before moving on I suggest spending some time creating other components and experimenting with passing events <em>upwards</em> to parent components and <code>props</code> <em>downwards</em> from parent components to children components.</p>
<h2 id="reading-and-rendering-json-data">Reading and Rendering JSON Data</h2>
<p>Although you'll learn all about incorporating a database and other types of data into your React applications later in the book, I've no doubt many of you are very interested to know how to read and render JSON and so thought we'd conclude this chapter with a brief introduction to the topic.</p>
<p>Follow along with the code in this section by checking out the <code>json_loader</code> branch of the <code>easy_react_starter</code> repository.</p>
<p>If you have a look inside the repository's <code>json_loader</code> branch you'll find a JSON file named <code>vocabulary.json</code>. It contains a list of Italian vocabulary terms and their English counterparts. Here's a snippet:</p>
<pre><code>{
  &quot;words&quot;: [
    {
    &quot;origin&quot;: &quot;accogliere&quot;,
    &quot;translation&quot;: &quot;to welcome&quot;
    },
    {
    &quot;origin&quot;: &quot;affrettarsi&quot;,
    &quot;translation&quot;: &quot;to hurry&quot;
    }
  ]
}</code></pre>
<p>The example created in this section will retrieve the <code>vocabulary.json</code> file and render it to the browser window as depicted in the following screenshot:</p>
<div class="figure">
<img src="/imgs/book/01/json_display.png" alt="Rendering JSON" /><p class="caption">Rendering JSON</p>
</div>
<p>The first two components used to render the JSON file offer nothing new as they're responsible simply with formatting the data as a series of list items:</p>
<pre><code>var ListItem = React.createClass({
  render: function() {
    return (
     &lt;li&gt;{this.props.item.origin}&lt;/li&gt;
    );
  }
});

var ListItems = React.createClass({
  render: function() {

    var listItems = this.props.items.map(function(item){
      return &lt;ListItem key={item.origin} item={item} /&gt;;
    });

    return (
     &lt;ul&gt;
     {listItems}
     &lt;/ul&gt;
    );

  }
});</code></pre>
<p>It's in the <code>Home</code> component where the real action happens. I'll present the component next, followed by an explanation:</p>
<pre><code>var Home = React.createClass({
  getInitialState: function(){
    return {
      vocabulary: [],
    }
  },

  componentDidMount: function() {
    $.get(this.props.url, function(result) {
      var words = result.words;
      if (this.isMounted()) {
        this.setState({
          vocabulary: words
        });
      }
    }.bind(this));
  },

  render: function() {
    return (
      &lt;div&gt;
        &lt;ListItems items={this.state.vocabulary} /&gt;
      &lt;/div&gt;
    );
  }
});

React.render(&lt;Home url=&quot;http://localhost:3000/vocabulary.json&quot; /&gt;, 
  document.body);</code></pre>
<p>Like the previous example, you'll find a <code>getInitialState</code> function responsible for initializing an attribute named <code>vocabulary</code>. Next, you'll find a new function named <code>componentDidMount</code>. This is a special React function which will execute only once, after the initial rendering has completed. In this case, we're using <code>componentDidMount</code> to retrieve the JSON file (using jQuery's <code>$.get</code> method). Next, the <code>vocabulary</code> state attribute will be set to the transformed JSON (now available as an array). It's done after confirming the component is indeed rendered, because conceivably it could have been unmounted due to for instance a network timeout. Finally, <code>vocabulary</code> is passed into the <code>ListItems</code> component and rendered accordingly.</p>
<p>As you can see, it's incredibly easy to retrieve and render JSON using React! This is logically a topic we'll refer to repeatedly throughout the book, so stay tuned.</p>
<h2 id="summary">Summary</h2>
<p>Wow, we've only completed a single chapter and you've already managed to use React to create an interface containing several components, capable of responding to user input, offering a simple real-time filtering feature, and rendering data retrieved from a JSON file! Granted the interface isn't very eye-appealing however in the soon enough you'll learn how to spruce it up using CSS and Bootstrap.</p>








			</div>
		</div>
	</div>

@endsection

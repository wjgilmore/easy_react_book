@extends('layout')

@section('content')
	<h1 class="title">Introduction</h1>

	<div class="container">
		<div class="row authors">
			<div class="col-md-12">

	@include('inc._newsletter')

<br />

<strong>
<p>Dearest reader, this is an early version of the forthcoming book, &quot;Easy React: Build Powerful Web Apps Using Modern JavaScript Technologies&quot;. As such, you'll quite possibly find a mistake or two, and perhaps even a horrible error or half-truth. Such is life in the dangerous world of reading technical book drafts. I can however assure you I'm working tirelessly to complete a quality book, and very much value your feedback. E-mail me anytime at wj@wjgilmore.com.</p>
</strong>

<h1 id="introduction">Introduction</h1>

<p>I've been a professional web developer for the past 18 years or so, having built my first commercial website back in 1997. It has been incredibly exciting to watch the web evolve so dramatically over the course of the past two decades, transforming from somewhat of a curiosity in the mid-1990's to a medium indispensable to so many parts of business and life. It has also been challenging, because this rapid pace of change has meant constantly evaluating new technologies and occasionally putting a few of them to good use for both myself and my clients. For the most part I believe I've succeeded at this challenge, having built dozens of solutions using a laundry list of powerful languages, databases, and frameworks.</p>
<p>There is however one particularly prominent technology that in years past I had not only never managed to master, but actually actively avoided at every opportunity: JavaScript. This aversion is rather ironic given that many of the web applications I most admire (notably Gmail among many others) have been heavily dependent upon JavaScript for years. Even so, there remained plenty of reasons to deride the language as ugly, inconsistent, and annoying, and so for years my involvement remained primarily limited to begrudgingly integrating an appropriate amount of jQuery code in order to please clients desiring a bit of AJAX or some sort of visual accoutrement.</p>
<p>This combative relationship started to change back in 2009 following the release of <a href="https://nodejs.org/">Node.js</a> and <a href="https://angularjs.org/">AngularJS</a>. Although these two JavaScript technologies have strikingly different purposes, their extraordinary impact forced me to reconsider the language as a technology that could not only play a central role in future projects, but even be fun. This decision has in more recent years become even easier given the language's incredible ongoing renaissance in which developers have created countless new JavaScript-driven technologies, development tools, and methodologies.</p>
<p>More recently, Instagram and parent company Facebook have made particularly bold moves in the JavaScript arena with the development and release of <a href="https://facebook.github.io/react/">React</a>. React is the most exciting JavaScript technology to hit the market in years, as not only does it supercharge your productivity, but it also challenges some of the most fundamental and long-held conventions and convictions found in modern web development! In this book you'll not only learn all about React and its cutting-edge approach to application development, but also how several of these other technologies can work in conjunction with React to build really powerful and compelling web applications.</p>
<p>You'll often see React referred to as React.js, because  developers love tacking &quot;.js&quot; onto pretty much everything these  days. However the official usage is indeed simply <em>React</em>.</p>
<h2 id="the-react-library-defined">The React Library Defined</h2>
<p>So what is React? Many uninformed developers are quick to classify it as a competitor to JavaScript frameworks such as AngularJS or Ember.js, yet this assertion is just plain incorrect. React does not offer (nor seek to offer) anywhere near the range of features provided by these eminently capable solutions. Instead, the React team has focused on streamlining the workflow associated with creating JavaScript-powered user interfaces, going so far as to call React a solution for implementing the &quot;V&quot; (View) in <a href="http://c2.com/cgi/wiki?ModelViewController">MVC</a>. It is otherwise indifferent to the technologies used to implement other aspects of the application, meaning you are free to choose whatever technology stack makes the most sense to your particular situation.</p>
<p>Above all, this calculated limitation of scope espouses <em>simplicity</em>. Having had many a struggle with technologies that seem to embrace anything but, this is in my mind precisely what makes React such an attractive technology. You can integrate a simple React-driven widget (known as a <em>component</em> in React lingo) into an existing web application literally within minutes, and then methodically introduce additional components and other more advanced features as desired.</p>
<p>So what else does React have to offer besides simplicity? I'll summarize a few other key features here:</p>
<ul>
<li><strong>Declarative syntax</strong>: With React gone are the headaches associated with managing the application's control flow. Instead, you'll declare the components, and leave it to React to manage the behavior based on your description of the problem domain. This reduces all of the maddening side effects introduced through JavaScript spaghetti code which attempts to manage both the components and the behavior (I am incidentally a master at cooking up this particular brand of pasta, so don't feel bad if you are too). If you haven't heard of declarative programming before, don't fret because by the end of the next chapter you'll totally have the hang of it.</li>
<li><strong>One-way data binding</strong>: React simplifies the process associated with ensuring the UI matches the current state of your application data by enforcing a rigorous flow of data from component owner to its children. You'll use a well-defined convention to listen for changes in &quot;state&quot; and informing the application to react (no pun intended) accordingly.</li>
<li><strong>Virtual DOM</strong>: React maintains a copy of the DOM in memory (known as the virtual DOM), and when informed of data-related changes, React uses this virtual representation to calculate the difference and then update only the necessary part of the DOM. Only changing updated elements in the DOM results in significant performance benefits.</li>
<li><strong>JSX</strong>: React's <em>JavaScript syntax extension</em> (JSX) reduces the amount of JavaScript you would otherwise need to write when developing your application interface. You're not compelled to use it, but after seeing a few examples I think you'll be sufficiently convinced of its ability to save some serious keystrokes. Chapter 1 offers a detailed introduction to JSX.</li>
<li><strong>Isomorphic</strong>: React is what's known as an <em>Isomorphic</em> JavaScript library, meaning it is capable of running on both &quot;sides&quot; of a web application, namely the client-side and the server-side. If you're new to the concept of Isomorphic JavaScript, you might need to read that last sentence a few times for it to sink it. We'll talk about this capability in chapter 2.</li>
<li><strong>Testable</strong>: React applications are not monolithic; they are assembled from many relatively small, isolated components, encouraging automated testing. At the end of chapter 2 I'll show you how to test your React components.</li>
<li><strong>Open source</strong>: React is released under a BSD license, and Facebook provides an additional patent grant. You can learn more about both the licensing and grant in the <a href="https://github.com/facebook/react">React README</a>.</li>
</ul>
<p>We'll spend the first four chapters of this book focused almost exclusively on React-specific concepts and features before devoting the rest of the book to explaining how React works in conjunction with other powerful technologies such as the Express web application framework, Browserify, and a database.</p>
<p> Don't worry if you're not familiar with technologies such as Node.js or  Express (although it helps) as each respective chapter includes  an introduction intended to get you up and running as quickly as possible.</p>
<h2 id="about-the-book">About the Book</h2>
<p>This book is organized into nine chapters, each of which is briefly described below.</p>
<h3 id="chapter-1.-introducing-react">Chapter 1. Introducing React</h3>
<p>In this opening chapter you'll learn all about React fundamentals. Among other topics we'll get acquainted with JSX, creating composable components, working with props and state, responding to user input, and loading JSON.</p>
<h3 id="chapter-2.-configuring-a-sane-react-development-environment">Chapter 2. Configuring a Sane React Development Environment</h3>
<p>With a basic understanding of React fundamentals out of the way, in this chapter we'll turn our attention to configuring a sane development environment. You'll learn how to integrate React into the larger JavaScript ecosystem, and we'll explore several useful development, debugging, and testing tools. We'll also talk about cool capabilities such as ES6 support.</p>
<h3 id="chapter-3.-integrating-html-css-layouts-and-routes">Chapter 3. Integrating HTML, CSS, Layouts and Routes</h3>
<p>In chapter 2 we'll build upon React fundamentals by focusing on several key aspects of developing a React-powered web application. You'll learn about React's heretical approach to CSS integration, how to create manageable layouts, and various approaches to defining and managing routes.</p>
<h3 id="chapter-4.-getting-fluxxy-with-it">Chapter 4. Getting Fluxxy With It</h3>
<p>Everything we've discussed so far has been primarily focused on React's view-oriented capabilities. However in order to build a complete application you'll ultimately need look at the larger picture. In this chapter you'll learn how to do so through an introduction to Facebook's Flux application architecture. I'll also introduce you to several open source Flux implementations such as Fluxxor and Reflux, and talk about some of the very latest developments in this area such as Facebook's Relay.</p>
<h3 id="chapter-5.-integrating-a-rest-api-with-express">Chapter 5. Integrating a REST API with Express</h3>
<p>Logically your application will integrate with a data store such as MySQL or MongoDB. But how is this data passed between your React components and the data store? For many applications the conventional approach involves a REST API. In this chapter you'll learn how to create a REST API using the Express web framework, and integrate it alongside the example React application.</p>
<h3 id="chapter-6.-integrating-mongodb">Chapter 6. Integrating MongoDB</h3>
<p> DRAFT NOTE TO READER   I am waffling on this chapter a bit. It's always nice to introduce a new  technology but frankly a NoSQL database such as MongoDB simply is not  necessary for the type of example application we're building throughout the  book (see below section for more about project). Do you want to learn more  about how to integrate MongoDB anyway, or would you prefer integration with  MySQL or PostgreSQL?</p>
<p>We'll need a place to store data, and while options abound in regards to databases these days, I thought this would be a fun opportunity to introduce MongoDB and take advantage of MongoDB's JSON-related features. Even if you don't plan on using MongoDB in your own projects, embrace this opportunity to at least learn more about what all the buzz is about and have fun with it. In any case, by the end of this chapter we'll have successfully integrated MongoDB into the application, connecting the REST API developed in the last chapter to the database.</p>
<h3 id="chapter-7.-integrating-forms">Chapter 7. Integrating Forms</h3>
<p>Logically the success of many applications depends upon a high degree of user interaction. In this chapter we'll integrate forms and learn how to process data submitted through these forms. I'll also discuss various other UI-related matters which can contribute to providing users with a highly interactive experience.</p>
<h3 id="chapter-8.-integrating-user-accounts">Chapter 8. Integrating User Accounts</h3>
<p>In this chapter you'll learn how to integrate user account management capabilities, adding user registration, sign in, and other related features such as password recovery. We'll also talk about how to restrict application content to users in a variety of ways.</p>
<h3 id="chapter-9.-going-native">Chapter 9. Going Native</h3>
<p>In this final chapter (for now!), we'll have a look at React Native, a fantastic solution for building and deploying applications on native platforms such as iOS and Android using the very same React and JavaScript technologies you already know and love.</p>
<h2 id="about-the-vocabgiant-example-project">About the VocabGiant Example Project</h2>
<p>I've experimented with a number of language learning apps over the years, and find several to be indispensable (Duolingo and Memrise, to name a few). However, none offer <em>exactly</em> the combination of features I'm looking for in such an app, and so like any self-respecting nerd I thought it would be fun to create my own. It's called <a href="http://vocabgiant.com">VocabGiant</a>, and we'll spend much of this book creating this app using React and other modern JavaScript technologies. Obviously we won't exhaustively recreate every VocabGiant feature, however we will devote time to exploring key React-related capabilities such as:</p>
<ul>
<li>User interface creation and management</li>
<li>Data-driven features such as loading of vocabulary lists from the database</li>
<li>User interactivity associated with vocabulary review and testing</li>
<li>User accounts and preferences</li>
<li>Building a native iOS app using React Native</li>
</ul>
<p>If anything, basing much of this instruction around a thematic project keeps the material practical and helps to frame the discussion within the greater goal of creating a working application.</p>
<h2 id="reader-prerequisites">Reader Prerequisites</h2>
<p>If you're relatively new to JavaScript, I suggest spending some time getting acquainted with language fundamentals before moving on to the first chapter. If you're in need of some introductory-level JavaScript learning resources, I suggest starting with the following guides:</p>
<ul>
<li><p><em><a href="http://www.amazon.com/JavaScript-Good-Parts-Douglas-Crockford/dp/0596517742">JavaScript: The Good Parts</a></em>: Written by JavaScript guru Douglas Crockford, this unsurprisingly thin book (given the title) does a fantastic job of both introducing readers to key language syntax and dispelling widespread confusion about certain features. If you're in the market for any single JavaScript book, this is it.</p></li>
<li><p><em><a href="http://www.amazon.com/JavaScript-Definitive-Guide-Activate-Guides/dp/0596805527/">JavaScript: The Definitive Guide</a></em>: In print for almost 20 years and weighing in at over 1,000 pages, this book has long been considered the de facto reference for JavaScript developers. While it doesn't exactly make for scintillating reading, you're guaranteed to find a relevant example and useful instruction regarding every conceivable JavaScript-related topic.</p></li>
<li><p><em><a href="https://developer.mozilla.org/en-US/Learn/Getting_started_with_the_web/JavaScript_basics">Mozilla Developer Network JavaScript Basics</a></em>: The company behind Firefox has published quite a few useful JavaScript tutorials, including this introduction to language fundamentals.</p></li>
</ul>
<p>In addition to possessing at least some JavaScript proficiency, I suggest taking the time to learn at least a bit about the following technologies:</p>
<ul>
<li><p><a href="https://git-scm.com/">Git</a>: We'll tangentially use Git in chapter 1 to retrieve the starter project repository, and of course I recommend using version control (Git or otherwise) for managing your projects. If you're not familiar with Git check out Scott Chacon's great book, &quot;<a href="https://git-scm.com/book">Pro Git</a>&quot;.</p></li>
<li><p><a href="https://nodejs.org/">Node</a>: Although I introduce Node.js in chapter 5, it would be swell if you installed it now because we will use it (and <a href="https://www.npmjs.com/">npm</a>) in chapter 1 to run the starter project. While you're not required to use it in chapter 1, doing so will save you a tiny bit of hassle in the long run.</p></li>
<li><p><a href="https://developer.chrome.com/devtools">Chrome DevTools</a>: All modern browsers offer some level of debugging capabilities, however the Chrome browser's tools far surpass those available elsewhere. While you're not required to use Chrome DevTools at any point in the book, I nonetheless suggest familiarizing yourself with at least one of the available browser debugging solutions.</p></li>
</ul>
<h2 id="about-the-author">About the Author</h2>
<p><a href="http://www.wjgilmore.com">W. Jason Gilmore</a> is a software developer, consultant, and bestselling author. He has spent much of the past 18 years helping companies of all sizes build amazing solutions. Recent projects include a Rails-driven e-commerce analytics application for a globally recognized publisher, a Linux-powered autonomous environmental monitoring buoy, and a 10,000+ product online store.</p>
<p>Jason is the author of nine books, including the bestselling &quot;Easy Laravel 5&quot;, &quot;Easy E-Commerce Using Laravel and Stripe&quot;, &quot;Beginning PHP and MySQL, Fourth Edition&quot;, and &quot;Easy Active Record for Rails Developers&quot;.</p>
<p>Over the years Jason has published more than 300 articles within popular publications such as Developer.com, JSMag, and Linux Magazine, and instructed hundreds of students in the United States and Europe. Jason is cofounder of the wildly popular <a href="http://www.codemash.org">CodeMash Conference</a>, the largest multi-day developer event in the Midwest.</p>
<p>Away from the keyboard, you'll often find Jason playing with his kids, hunched over a chess board, and having fun with DIY electronics.</p>
<h2 id="errata-and-suggestions">Errata and Suggestions</h2>
<p>Nobody is perfect, particularly when it comes to writing about technology. I've surely made some mistakes in both code and grammar, and probably completely botched more than a few examples and explanations. If you would like to report an error, ask a question or offer a suggestion, please e-mail me at wj@wjgilmore.com.</p>


			</div>
		</div>
	</div>

@endsection

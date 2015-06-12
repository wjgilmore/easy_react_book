@extends('layout')

@section('content')
	<h1 class="title">Table of Contents</h1>

	<div class="container">
		<div class="row authors">
			<div class="col-md-12">

This book is organized into nine chapters, each of which is briefly described below. Keep in mind the book is in a state of heavy development, and therefore this table of contents is subject to change.

<h2>Introduction (<a href="/book/intro">Read Draft</a>)</h2>

<p>
In the book's introduction I'll introduce React, this book, and the companion project.
</p>

<h2>Chapter 1. Introducing React (<a href="/book/1">Read Draft</a>)</h2>

<p>In this opening chapter you'll learn all about React fundamentals. Among other topics we'll get acquainted with JSX, creating composable components, working with props and state, responding to user input, and loading JSON.

<h2>Chapter 2. Configuring a Sane React Development Environment</h2>

<p>With a basic understanding of React fundamentals out of the way, in this chapter we'll turn our attention to configuring a sane development environment. You'll learn how to integrate React into the larger JavaScript ecosystem, and we'll explore several useful development, debugging, and testing tools. We'll also talk about cool capabilities such as ES6 support.

<h2>Chapter 3. Integrating HTML, CSS, Layouts and Routes</h2>

<p>In chapter 2 we'll build upon React fundamentals by focusing on several key aspects of developing a React-powered web application. You'll learn about React's heretical approach to CSS integration, how to create manageable layouts, and various approaches to defining and managing routes.</p>

<h2>Chapter 4. Getting Fluxxy With It</h2>

<p>Everything we've discussed so far has been primarily focused on React's view-oriented capabilities. However in order to build a complete application you'll ultimately need look at the larger picture. In this chapter you'll learn how to do so through an introduction to Facebook's Flux application architecture. I'll also introduce you to several open source Flux implementations such as Fluxxor and Reflux, and talk about some of the very latest developments in this area such as Facebook's Relay.</p>

<h2>Chapter 5. Integrating a REST API with Express</h2>

<p>Logically your application will integrate with a data store such as MySQL or MongoDB. But how is this data passed between your React components and the data store? For many applications the conventional approach involves a REST API. In this chapter you'll learn how to create a REST API using the Express web framework, and integrate it alongside the example React application.</p>

<h2>Chapter 6. Integrating MongoDB</h2>

<p>We'll need a place to store data, and while options abound in regards to databases these days, I thought this would be a fun opportunity to introduce MongoDB and take advantage of MongoDB's JSON-related features. Even if you don't plan on using MongoDB in your own projects, embrace this opportunity to at least learn more about what all the buzz is about and have fun with it. In any case, by the end of this chapter we'll have successfully integrated MongoDB into the application, connecting the REST API developed in the last chapter to the database.</p>

<h2>Chapter 7. Integrating Forms</h2>

<p>Logically the success of many applications depends upon a high degree of user interaction. In this chapter we'll integrate forms and learn how to process data submitted through these forms. I'll also discuss various other UI-related matters which can contribute to providing users with a highly interactive experience.</p>

<h2>Chapter 8. Integrating User Accounts</h2>

<p>In this chapter you'll learn how to integrate user account management capabilities, adding user registration, sign in, and other related features such as password recovery. We'll also talk about how to restrict application content to users in a variety of ways.</p> 

<h2>Chapter 9. Going Native</h2>

<p>In this final chapter (for now!), we'll have a look at React Native, a fantastic solution for building and deploying applications on native platforms such as iOS and Android using the very same React and JavaScript technologies you already know and love.</p>

			</div>
		</div>
	</div>

@endsection

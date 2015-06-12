@extends('layout')

@section('content')
	<h1 class="title">About the Companion Project</h1>

	<div class="container">
		<div class="row authors">
		<div class="col-md-5">
		<img src="/imgs/filter_terms.png" style="max-width: 90%;" />
		</div>
			<div class="col-md-7">
			<h2>Introducing VocabGiant</h2>
<p>
I've experimented with a great deal of language learning apps over the years, and find several of them to be indispensable (Duolingo and Memrise, to name a few). However, none offer exactly the combination of features I'm looking for in such an app, and so like any self-respecting nerd I thought it would be fun to create my own. It's called VocabGiant, and we'll spend much of this book creating this app using React and other modern JavaScript technologies. Obviously we won't exhaustively recreate every VocabGiant feature, however we will devote time to exploring key React-related capabilities such as:
</p>
<ul>
<li>User interface creation and management</li>
<li>Data-driven features such as loading of vocabulary lists from the database</li>
<li>User interactivity associated with vocabulary review, testing, and keeping score</li>
<li>User accounts and preferences</li>
<li>Database integration</li>
<li>Building a native iOS app</li>
</ul>
<p>
If anything, basing much of the instruction around a thematic project keeps the material practical and helps to frame the discussion within the greater goal of creating a working application.
</p>

<h3>Have a Cool Feature Idea?</h3>

<p>
I'll be making all of VocabGiant's source code available to readers once the book publishes, so if there is a particular feature you'd like to see implemented, please e-mail me at wj@wjgilmore.com.
</p>

			</div>
		</div>
	</div>

@endsection

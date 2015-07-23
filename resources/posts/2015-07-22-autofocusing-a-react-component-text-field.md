---
title: "Autofocusing a React Component Text Field"
date: 2015-07-22 14:20
author: W. Jason Gilmore
---

The [Easy React companion project](/project) includes a quiz feature which gives users the ability to test their vocabulary list comprehension. The user will be presented with each originating language term and prompted to provide the translation. In order to keep the process flowing as quickly as possible, the answer input field is placed into focus. Exactly how this is accomplished is however perhaps not so obvious, so I thought I'd put together a quick post explaining how.

<!-- more -->

The below screenshot presents an early version of the UI, including the input field.

![The VocabGiant quiz UI](/imgs/blog/vocabgiant_quiz.png)

To ensure the input field is placed into focus each time a new quiz term is presented, you'll need to retrieve the field's DOM node via React's `this.refs` property, and then call the `focus()` method. Further, you need to do so *in the `componentDidMount` method. Here is an abbreviated example of the `QuizItem` component demonstrating this approach:

	var QuizItem = React.createClass({

	    componentDidMount: function() {
	      this.refs.quizAnswer.getDOMNode().focus();
	    },

	    ...

		render: function() {

			return (
			    ...
				<input 
				  ref="quizAnswer" 
				  className="form-control quiz-answer-field" 
				  type="text" name="origin" />
			    ...
			);

		}

	}

All of VocabGiant's source code is available [via GitHub](https://github.com/wjgilmore/vocabgiant_com), and the Easy React book of course devotes ample coverage to building this application using React and the Flux-inspired framework React.
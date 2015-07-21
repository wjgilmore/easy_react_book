---
title: "Seeding a Heroku Application's MongoLab Mongo Database"
date: 2015-07-15 13:20
author: W. Jason Gilmore
---

If you're using Heroku's fantastic MongoLab Add-On and were wondering how to seed the hosted database, the answer is easier than you think! 

<!-- more -->

Just connect to it from your local terminal using the credentials provided to you after associating the Add-On with your project. Here's an example:

	$ mongo ds061189.mongolab.com:61189/heroku_username \
	> -u heroku_username -p super_secret_pswd \
	> database/seeds/seeds.js
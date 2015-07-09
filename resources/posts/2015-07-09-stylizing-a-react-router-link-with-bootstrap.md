---
title: "Stylizing a React Router Link with Bootstrap"
date: 2015-07-09 13:20
author: W. Jason Gilmore
---

Easy React's [VocabGiant sample project](/project) uses the Bootstrap framework to ameliorate my questionable design skills. The app incorporates Bootstrap styling throughout, including for stylizing button bars such as that presented in the below prototype screenshot.

<img src="/imgs/blog/bootstrap_buttons_link.png" />

The app uses [React Router](https://rackt.github.io/react-router/) for all routing-related matters, meaning [Link](https://rackt.github.io/react-router/#Link) is used for navigating the site. The buttons in the screenshot are actually stylized `<Link>` elements, as demonstrated here:

    <div className="row button-bar">
        <div className="col-sm-10 col-sm-offset-2">
            <div className="btn-group btn-group-justified" 
              role="group" aria-label="Review and Quiz">
            <div className="btn-group" role="group">
                <Link className="btn btn-info" role="button" 
                  to="list.review" params={{id: this.props.params.id}}>
                Review
                </Link>
                </div>
                <div className="btn-group" role="group">
                <Link className="btn btn-info" role="button" 
                  to="list.quiz" params={{id: this.props.params.id}}>
                Quiz
                </Link>
                </div>
            </div>
        </div>
    </div>

As you can see, there is nothing extraordinary required; just stylize `<Link>` as you would a hyperlink (`<a>`).
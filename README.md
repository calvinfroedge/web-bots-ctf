This is an exercise to help you learn web security!

Feel free to review these SlideShare slides: http://www.slideshare.net/calvinfroedge/web-bots-ctf-game

The basic idea is this: the defenders have unknowingly placed a vulnerable script on their site http://codepen.io/anon/pen/bdLNYx.js which makes them succeptible to xss. For some reason, they either don't know this script is infected or they can't remove it. Their job is to secure the rest of the application so that it's harder for bots to scrape, using tricks like bot traps, traffic pattern analysis, etc.

The attackers must use the infected script to steal an authenticated session and/or username and password combinations, and then scrape the entire contents of the web app, which is 100,000 top secret documents.

#Code overview

Note: I have an EC2 AMI for running everything. Send me a message if you want it.

Ran on an Ubuntu 14.04 instance on EC2. The web app ran behind an Apache2 server (configuration included in this repo).

- /webapp: The example app. Uses FlightPHP for routing, simple GET and POST routes. the dispatch function is where you can put all global logic to defend against attackers.

- /simulation: Adds random log entries to Apache server, to make it harder to find the attackers

#Example (bonus): Beat captcha

https://gist.github.com/calvinfroedge/227889e0986f6ecaaa31

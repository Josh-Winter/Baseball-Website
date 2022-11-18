# Baseball Website
### by Josh Winter
## Description:
### Introduction:
This website was originally made for my Advanced Programing class at the University of Vermont. I decided to combine my love of baseball (specifically
the Yankees) and the concepts I had learned in advanced programming and other computer science classes I have taken at UVM to create a website to show
case the stats and stadiums of 4 baseball teams. These 4 ball clubs include the 27 time world series champion New York Yankees, the New York Mets, the
Boston Red Sox and the Los Angeles Dodgers.
### Instructions:
This project is a website. To test it download the zip and transfer folder to a webserver with a file transfer program
like Filezila. Alternatively you can view the version I have running on my webserver linked here: https://jawinter.w3.uvm.edu/cs120/baseball.html
### Overview:
This project combines multiple languages to make a changing website based on user's selection. When the user first launches
the website they are greeted by the home page. The homepage features a JavaScript clock designed by me and a selection menu featuring
4 different baseball teams. When you select a baseball team baseball.cpp uses that selection to pull up the teams corresponding textfile
and feed it to process.php to be put on the website. Process.php also changes the style sheet based on the team selected and displays
unique JavaScript for each team of a Google Maps view of their stadium. On the footer of each page is a source for the info displayed 
and a link to the homepage so the user can check out another team.
### Languages:
This project uses C++, PHP, JavaScript, HTML and CSS
### Credit
The templates of process.php and baseball.cpp were created by my proffesor Lisa Dion.
### Future:
In the future I could add more information about each team as well as clean upp the css a little. I could also always add
more Teams to select.

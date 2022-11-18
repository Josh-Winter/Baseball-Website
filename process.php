<!-- basic html top -->
<!DOCTYPE html>
<!-- declare language -->
<html lang="en">
    <head> <!-- Open head -->
        <meta charset="utf-8"> <!-- set characters -->
        <meta name="author" content="Josh Winter"> <!-- set author -->
        <meta name="description" content="This page displays the stats of the chosen baseball team."> <!-- meta description for search engines -->
        <link rel="icon" type="image/x-icon" href="images/favicon.ico"> <!-- make favicon a baseball -->
    </head> <!-- close head -->
    <body> <!-- open body -->
        <?php // start of php

        $team = $_POST["teams"]; // declare team from home page graph as var
        // conditional statements based on chosen team
        if($team == "01Yankees"){ // if team chosen is yankees
        //change webpage title
        echo '<title>New York Yankees</title>';
        // using command line to change to yankees spec style sheet
        echo '<link href="css/yankees.css" rel="stylesheet" type="text/css" media="screen"/>';
        //using CLI to change to yankee spec header
        echo '<header class ="yankeesHeader"><h1>New York Yankees</h1><h3>The Most Successful Franchise in Sports History</h3></header>';
        // using CLI and JavaScript to embed a google maps view of yankees stadium on page
        echo '<iframe width="720" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Yankees%20Stadium+(Yankees%20Stadium)&amp;t=k&amp;z=18&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>';
        }// end of yankee conditionals

        if($team == "02Mets"){ // if team chosen is the Mets
        //change webpage title
        echo '<title>New York Mets</title>';
        // change style sheet to Mets spec
        echo '<link href="css/mets.css" rel="stylesheet" type="text/css" media="screen" />';
        // change header to mets spec
        echo '<header class = "metsHeader"><h1>New York Mets</h1></header>';
        // embed citi field using javascript
        echo '<iframe width="720" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=720&amp;height=600&amp;hl=en&amp;q=Citi%20Field+(Citi%20Field)&amp;t=k&amp;z=18&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>';
        }

        if($team == "03RedSox"){// if team chosen is Red Sox
        //change webpage title
        echo '<title>Boston Red Sox</title>';
        //change style sheet to red sox
        echo '<link href="css/redsox.css" rel="stylesheet" type="text/css" media="screen" />';
        //change header
        echo '<header class ="redsoxHeader"><h1>Boston Red Sox</h1></header>';
        //embed fenway with js
        echo '<iframe width="720" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=720&amp;height=600&amp;hl=en&amp;q=Fenway%20Park+(Fenway%20Park)&amp;t=k&amp;z=18&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>';
        }

        if($team == "04Dodgers"){// if team chosen in dodgers
        //change webpage title
        echo '<title>Los Angeles Dodgers</title>';
        // change to dodgers css
        echo '<link href="css/dodgers.css" rel="stylesheet" type="text/css" media="screen" />';
        // change to dodgers header
        echo '<header class = "dodgersHeader"><h1>Los Angeles Dodgers</h1></header>';
        // embed dodgers stadium with JS
        echo '<div style="width: 100%"><iframe width="720" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=720&amp;height=600&amp;hl=en&amp;q=Dodger%20Stadium+(Dodgers%20Stadium)&amp;t=k&amp;z=18&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>';
        }

        // Create a folder for the user where the processing will take place. It will be named a random number (so that it's different for each submission).
        $rand_number = rand();
        while (file_exists($rand_number)) {
            $rand_number = rand();
        }
        $command_mkdir = escapeshellcmd("mkdir " . $rand_number);
        $output_mkdir = shell_exec($command_mkdir);

        // Copy the files into the folder.
        $output_cp = shell_exec("cp Stats* " . $rand_number);
        $command_cp2 = escapeshellcmd("cp baseball.cpp " . $rand_number);
        $output_cp2 = shell_exec($command_cp2);
        $output = shell_exec("cd " . $rand_number . ";g++ -std=c++1y -o baseball.exe baseball.cpp;./baseball.exe " . $team . ";cd ..");

        // Print the output from the C++ program to the webpage.
        echo $output;

        // Delete the folder
        array_map("unlink", glob($rand_number . "/*"));
        rmdir($rand_number);

        ?> <!-- end of php -->
        </body> <!-- close body tags -->
        <footer> <!-- open footer -->
        <!--source for stats-->
            <p>All stats are from <a href="https://www.baseball-reference.com/" target="_blank">Baseball Reference</a></p>
            <!-- homepage link -->
            <p><a href="https://jawinter.w3.uvm.edu/cs120/baseball.html">Click here to return home!</a></p>
        </footer> <!-- close footer tag -->
</html>

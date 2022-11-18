#include <fstream>
#include <iostream>
using namespace std;

//create main function for passing text from .txt docs to php
int main(int argc, char* argv[]) {
    // Store the team that is passed as a command line argument
    string team = argv[1];
    // Declare line
    string statLine;
    // Open the stat file
    ifstream statFile("Stats" + team + ".txt");
    // Print the season data to an article html element
    cout << "<article><h3>Statistics:</h3>" << endl;
    //while in stat file
    while (statFile) {
        //loop through each line
        getline(statFile, statLine);
        // Print the line to the article and put a break tag to go to the next line
        cout << statLine << "<br>";
    }
    //close article tag
    cout << "</article>" << endl;
    return 0;
}

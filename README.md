# Telephone-Directory
Telephone Directory utilising an easy to edit CSV file

##Setup
**This is the abridged Setup process**
1. [ ] Extract the files into your desired location on a webserver (this can be a workstation running WAMP/LAMP/MAMP etc)
2. [ ] Configure $location, $bannerColour and $headerColour in index.php
3. [ ] Replace logo.png with your company logo (200 by 50 pixels)
4. [ ] Fill in the directory.csv with your telephone directory information
5. [ ] Navigate to the URL for the location on your webserver to verify everything looks good
6. [ ] Distribute the URL to people likely to need/want it so they can bookmark it...and have a cuppa :coffee:

**Bonus Points** __Optional.__
There is a folder called "app" in the files, the DesktopDirectory.zip can be downloaded by your users so they can access the Telephone Directory from their system tray. 
1. Download and Extract the DesktopDirectory.zip to a client machine
2. Run and complete the setup.exe
3. Right click the little blue/white phone icon and click the "About and Settings" option
4. Enter your Telephone Directory URL in the box provided and click OK
5. Place a shortcut to the application in the users Startup Directory to have the app launch on sign in

##Features
###Manually Set Height
You can manually specify the height of the table containing the numbers, the table will then scroll rather than the whole webpage. This is useful if using the companion desktop application.
 To do this, simply add '?scroll=200' to the end of the URL (Where 200 is your desired table height).

###Automatic Height
Similar to the Manual Height setting,  the table will then scroll rather than the whole webpage accept the page will guess the best fit. To do this, simply add '?auto' to the end of the URL.

##Troubleshooting
This will be updated once thorough testing has been conducted

###Always quote your sources!
Example names in directory.csv provided by http://listofrandomnames.com/
Table sorting/search provided by Datatables https://datatables.net/

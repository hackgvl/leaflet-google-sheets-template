#Steps for Week 8
* Setup a Cloud9 account using the invite from Pamela
* Connect your GitHub account to Cloud9 (via Connected Services)[https://c9.io/account/services]
* Start thinking about ideas for open/public data you'd like to gather and share with the world.

###Ideally, the data set should:
* already publicly available and not easily portable (i.e. part of a PDF, web page, or Google Map)
* consist of latitude, longitude "point data" (shapes or paths will be too advanced and not directly work with the base code)
* not frequently changing
* not be something Google Maps already does well
* not be very tiny or too huge to be practical to render in a map or to maintain
* be something you could help maintain even after SC Code wraps up
* be specific to Greenville city, Greenville county, or the Upstate
* be complete (try to avoid picking something if you can't get close to listing all / most of the possible points)

Non-profits, the City, and the County would be ideal examples of places to find existing data. In other cases, you may need to do the research / leg work to create the data.

For instance, (the City has a map of parking decks)[http://www.greenvillesc.gov/513/Parking] but the data is stuck inside of their map. You can't easily take that map layer and easily reuse it besides creating another Google Map.

Things like Greenville restaurants, stores,  would be an example of a less desirable data set because it changes frequently, is hard to maintain, and Google Maps already does it well enough for most purposes.


###Map Layer Guidance

The list below are more along the lines of what's expected. You're welcome to
claim this idea by putting your name in the (open data spreadsheet)[https://docs.google.com/spreadsheets/d/1IWsFT1p0ZY-DInfMOFq_gmqpGuKyl5wyBb9VoyoEjRs/edit#gid=30878412]

* Historic Sites
* Parks
* Parking Decks
* Community Gardens
* Waterfalls
* Trail Parking
* Bike Racks
* Danger Zones along trails
* City and County Recycling locations
* City and County Trash / Convenience Centers
* Dog Parks
* Tree Planting Sites
* Public (K-12) Schools

#Steps for Week 9
###Steps on GitHub
# Decide on which data set you want to build
# Go to (our template GitHub project/repo )[https://github.com/codeforgreenville/leaflet-google-sheets-template] and click "Fork" in the top-left
# We are (forking)[https://help.github.com/articles/fork-a-repo/] with the intention of creating a starting point for your project. We will not get into "pull requests", but understand that people also fork projects as a way to create a branch/copy and then contribute back to the original project
# If you see a pop-up that says "Where should we fork this repository?" then select your personal user name.
# GitHub will create a copy of the template repository and you'll see the copy user your account, like yourusername/leaflet-google-sheets-template
# On your copy, select the "Settings" (gear icon)
# In the "Repository name" box enter a name relevant to your data set. It should be 35 characters or less. Ex. ``gville-map-layer-parking-decks``
# Click the "Rename" button

###Steps to Setup a C9.io Workspace that Uses a GitHub Fork
# Go back to (your Cloud9 repositories)[https://c9.io/account/repos] and refresh the page.
# The forked repository you created over at GitHub should be listed as an option in Cloud9
# Click the "Clone to Edit" button associated with your repository
# For the "Workspace name" enter the same repo name you used on GitHub. The name should be less than 35 characters. Ex. ``gville-map-layer-parking-decks``
# Leave the "Team" set to "SC Codes", leave the "Hosted Workspace" set to "Public" and the "template" as "HTML 5".
# Click "Create workspace".
# The end result is that you've forked a project / repo in GitHub and now have a copy of all the sample code. This means you can now start changing code and pushing your changes back up to your own GitHub fork.

###Steps to Start Programming and using Git in Your Fancy C9 Workspace
# When your new workspace opens you'll see the terminal tab (the bottom-left tab) at the bottom of the screen. Drag the top line to make the terminal tab area larger and easier to see
# This is a real Linux-style bash shell. You can type Linux commands in here, including Git commands.
# Type ``git config -l`` and press Enter. This will show various bits of info about the Git configuration of the active C9 workspace. Notice the "remote.origin.url" which proves the connects back to GitHub.
# We'll run a basic git command as an example of using Git, GitHub, and the Cloud9 workspace.
# In the terminal tab type ``ls`` and you'll see a list of all the files in the current directory
# The ``SC-CODES-README.md`` file isn't necessary in your fork, since you already did all these steps. Let's delete it with Git and make that change reflect on your GitHub project
# In the terminal run ``git rm SC-CODES-README.md`` and press Enter. (Pro Tip: You could also type ``git rm SC`` and then hit tab. The terminal shell will autocomplete the rest of the file name for you)
# Press the up arrow until you see the ``ls`` command again.  When you see it press enter. This shows you two things: 1) the SC-CODES-README.md is now gone and 2) you can use the up / down arrows to scroll through recent commands
# Run ``git status`` and you'll see that git is ready for you to permanently commit your changes (1 deleted file).
# Run ``git commit -m 'Deleted an SC Codes related README file'``
# To push this commit up to the GitHub fork repository you now need to run ``git push``

###Steps to Continue
# Now go back to your GitHub fork page, refresh the page, and you should see the file has been deleted.
# You'll see a README.md file in the list of files on GitHub. Click that and start reading for more details on how to proceed.
# Side note: You can ignore messages like "This branch is 1 commit ahead, 1 commit behind codeforgreenville:master." on your GitHub fork page. This just means changes were made to the template project, but you're on your own now and don't need to keep in sync with the template.

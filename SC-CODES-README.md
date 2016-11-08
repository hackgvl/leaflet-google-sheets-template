#Goals for Week 8
1. Setup a Cloud9 account using the invite sent via email by Pamela (if it asks for a credit card contact Pamela)
1. Connect your GitHub account to Cloud9 [via Connected Services](https://c9.io/account/services)
1. Start thinking about ideas for open/public data you'd like to gather and share with the world.
1. Understand the [broader purpose of this open data project](https://github.com/codeforgreenville/leaflet-google-sheets-template/blob/master/README.md)
1. Continue reading below for details about weeks 8 and 9

###Ideally, your data set should:
* already be publicly discoverable
* consist of [longitude, latitude] "point data" (shapes or paths will be too advanced and won't work with the sample documentation)
* be relatively static, meaning not changing more than once every couple months
* be something commercial maps (GPS, Google) don't already do accurately and completely
* be more than 5 lat/long points, but not so huge it's hard to gather or maintain
* be something you could help keep up to date in your free time, even after SC Codes wraps up
* be specific to Greenville city, Greenville county, or the Upstate (at the broadest)
* be complete (if you can't gather all / most of the possible points then consider something else)

Non-profits, the City, and the County would be ideal examples of places to find existing public data that's trapped. In other cases, you may need to do the research / leg work to create the data.

Good example: The [City has a map of parking decks](http://www.greenvillesc.gov/513/Parking) but the data is stuck inside of the embedded Google map at the bottom. You can't easily take that map and easily pull it into a Leaflet layer.  Wouldn't it be great if it was a real-time GeoJSON based Leaflet map pulling from your project? (Answer: yes)

Bad Examples: Things like Greenville restaurants, potholes, or vape shops. These change frequently and/or are already done well enough by other services.

###Map Data Ideas and Staking Your Claim

Below is intended to seed your brain. If it sparks an idea of your own then add your idea and name to the [open data spreadsheet](https://docs.google.com/spreadsheets/d/1IWsFT1p0ZY-DInfMOFq_gmqpGuKyl5wyBb9VoyoEjRs/edit#gid=30878412)

If nobody else has claimed a suggested idea then you're welcome to take it by putting your name beside in [the list](https://docs.google.com/spreadsheets/d/1IWsFT1p0ZY-DInfMOFq_gmqpGuKyl5wyBb9VoyoEjRs/edit#gid=30878412)

* Libraries
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

#Goals for Week 9
1. Fork the GitHub Project
1. Setup a Cloud9 Workspace that talks with your GitHub fork
1. Do a basic Git command and push to GitHub

###Steps on GitHub
1. Decide on which data set you want to build
1. Go to [our template GitHub project/repo](https://github.com/codeforgreenville/leaflet-google-sheets-template) and click "Fork" in the top-left
1. We are [forking](https://help.github.com/articles/fork-a-repo/) with the intention of creating a starting point for your project. We will not get into "pull requests", but understand that people also fork projects as a way to create a branch/copy and then contribute back to the original project.
1. If you see a pop-up that says "Where should we fork this repository?" then select your personal user name.
1. GitHub will create a copy of the template repo. You'll see this under your GitHub account, like yourusername/leaflet-google-sheets-template
1. On your fork select the "Settings" (tab with the gear icon).
1. In the "Repository name" box enter a name relevant to your data set. It should be 35 characters or less. Ex. ``gville-map-layer-parking-decks``
1. Click the "Rename" button

###Steps to Setup a C9.io Workspace that Uses Your GitHub Fork
1. Go back to [your Cloud9 repositories](https://c9.io/account/repos) and refresh the page.
1. The forked repository you created over at GitHub should be listed as an option.
1. Click the "Clone to Edit" button associated with your fork repo.
1. For the "Workspace name" enter the same repo name you used on GitHub. The name should be less than 35 characters. Ex. ``gville-map-layer-parking-decks``
1. Leave the "Team" set to "SC Codes", leave the "Hosted Workspace" set to "Public" and the "template" as "HTML 5".
1. Click "Create workspace".
1. The end result is that you've forked a project / repo in GitHub and now have a full copy of all the sample code. This means you can now start changing code and pushing your changes back up to your own GitHub fork.

###Steps to Start Programming and using Git in Your Fancy C9 Workspace
1. When your new workspace opens you'll see the terminal tab (the bottom-left tab) at the bottom of the screen. Drag the top line to make the terminal tab area larger and easier to see.
1. This is a real Linux-style bash shell. You can type Linux commands in here, including Git commands.
1. Type ``git config -l`` and press Enter. This will show various bits of info about the Git configuration of the active C9 workspace. Notice the "remote.origin.url" which should be pointing to your GitHub fork URL.
1. We'll run a basic git command as an example of using Git, GitHub, and the Cloud9 workspace.
1. In the terminal tab type ``ls`` and you'll see a list of all the files in the current directory
1. The ``SC-CODES-README.md`` file isn't necessary in your fork, since you already did all these steps. Let's delete it with Git and make that change reflect on your GitHub project
1. In the terminal run ``git rm SC-CODES-README.md`` and press Enter. (Pro Tip: You could also type ``git rm SC`` and then hit tab key. The terminal shell will autocomplete the rest of the file name for you)
1. Press the up arrow until you see the ``ls`` command again.  When you see it press Enter. This shows you two things: 1) the SC-CODES-README.md is now gone and 2) you can use the up / down arrows to scroll through recent commands
1. Run ``git status`` and you'll see that git is ready for you to permanently commit your changes (1 deleted file).
1. Run ``git commit -m 'Deleted an SC Codes related README file'``
1. To push this commit up to the GitHub fork repository you now need to run ``git push``

###Steps to Continue
1. Go back to your fork page on GitHub and refresh the page. You should no longer see the deleted file and you should notice your commit message.
1. You'll see a README.md file in the list of files on GitHub. Click it and start reading for more details on how we'll proceed on creating a public spreadsheet and creating a Leaflet map.
1. Side note: You can ignore messages like "This branch is 1 commit ahead, 1 commit behind codeforgreenville:master." on your GitHub fork page. This means changes were made to the project you forked. You're on your own now and don't need to keep in sync with the fork's origin.


#SC Codes Week Project Goals

##<a name="week2">Goals for Week 2</a>
1. Setup a Cloud9 account using the invite sent via email by Pamela (if it asks for a credit card contact Pamela)
1. Connect your GitHub account to Cloud9 [via Connected Services](https://c9.io/account/services)
1. Start thinking about ideas for open/public data you'd like to gather and share with the world.
1. Understand the [broader purpose of this open data project](https://github.com/codeforgreenville/leaflet-google-sheets-template/blob/master/README.md)
1. Continue reading below for details about weeks 2 and 3

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

Good example: The [City has a map of parking decks](http://www.greenvillesc.gov/513/Parking) but the data was stuck inside of the embedded Google map at the bottom. You can't easily take that map and pull it into your own map.  Wouldn't it be great if it was a real-time GeoJSON-based data layer? (Answer: yes)

Bad Examples: Things like Greenville restaurants, potholes, or vape shops. These change frequently and/or are already done well enough by other services.

###Map Data Ideas and Staking Your Claim

Below is intended to seed your brain. The [first class of SC Codes implemented many of the ideas below](https://data.openupstate.org/maps/) so this class will have to put more effort into original ideas.

Please review the existing layers and add your name and idea to [the list](https://docs.google.com/spreadsheets/d/1IWsFT1p0ZY-DInfMOFq_gmqpGuKyl5wyBb9VoyoEjRs/edit#gid=0) to reserve

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

##<a name="week3">Goals for Weeks 3-5</a>
1. Complete the Week 2 goals above
1. Fork the GitHub Project
1. Setup a Cloud9 Workspace that talks with your GitHub fork
1. Do a basic Git command and push to GitHub
1. Get the map and spreadsheet working together

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
1. Go back to your fork page on GitHub and refresh the page. You should no longer see the deleted file and you should notice your commit message.

###Steps to Get the Map and Spreadsheet Working
1. Now, read the main [README.md](https://github.com/codeforgreenville/leaflet-google-sheets-template/blob/master/README.md) file for details on how to create a public spreadsheet and a Leaflet map.
1. Side note: You can ignore messages like "This branch is 1 commit ahead, 1 commit behind codeforgreenville:master." on your GitHub fork page. This means changes were made to the project you forked. You're on your own now and don't need to keep in sync with the fork's origin.

##<a name="week6">Goals for Week 6-8</a>
1. Add your GitHub repository, geojson.php URL, and Google Sheet URLs to the [open data list](https://docs.google.com/spreadsheets/d/1IWsFT1p0ZY-DInfMOFq_gmqpGuKyl5wyBb9VoyoEjRs/edit#gid=0)
1. Git add, commit, and push your changes from Cloud 9 up to GitHub.

### Share Your Work
Please share your GitHub repository, GeoJSON URL, and Google Spreadsheet in the [open data list](https://docs.google.com/spreadsheets/d/1IWsFT1p0ZY-DInfMOFq_gmqpGuKyl5wyBb9VoyoEjRs/edit#gid=0) in the yellow highlighted boxes.

Through the power of GitHub, we'll publically publish your map and geojson under a directory of https://data.openupstate.org/maps/, which will become the reliable, hosted location for the public.  If/as you modify the project in the future we'd be able to easily pull your changes to https://data.openupstate.org/maps/

### Git Commit and Push
In weeks 3-5 you changed the index.html and geojson.php.  Let's add and commit these chages to version control using Git.

Go to your Cloud 9 workspace and click in the terminal tab at the bottom.

In the terminal, run ``git status`` and Git will tell you about the modified files. These are "Changes not staged for commit".

You can also run ``git diff`` to see a "differential" of what's modified but not yet "staged" . You can use the arrow up/down or page up/down keys to scroll through the diff. There are + and - symbols showing which lines in the code are new or removed.  Press ESC to exit the diff tool.

Run ``git add index.html`` and then ``git add geojson.php`` to stage the files for commiting.

Run ``git status`` again and it will show the files under "Changes to be committed"

Commit the staged changes using ``git commit -m 'Customized Leaflet and PHP GeoJSON files to pull from my own Google Spreadsheet and get the map working'``

Now let your GitHub repo know about your commit by running ``git push origin master`` or the shortcut ``git push``
The repo on GitHub is configured as your git remote "origin" and you only have a single "master" branch, hence pushing to origin master sends changes from your master branch up to GitHub.

##<a name="week9">Goals for Week 9-10</a>
1. Add a Git upstream, merge in changes from the upstream, resolve a simple merge conflict
1. (Optional) Choose your adventure if you want to flex your coding skills on more advanced mapping concepts.

###Git Upstream, Merge, Conflict Resolution
When you fork a GitHub repository it's often, but not always, that you want to merge changes from original project back into your copy. In this case the original repo is called the "upstream".

As a simple example, the README.md and SC-CODES-README.md have been changed in the upstream since you forked. Let's merge in the changes.

Right now you have a single master branch and a link to the remote origin master (on GitHub). You can see this by listing all the branches Git knows about. 

In the terminal, run ``git branch -a``

We're going to tell Git where to find the ["remote upstream"](https://help.github.com/articles/configuring-a-remote-for-a-fork/) pointing at our [original template project](https://github.com/codeforgreenville/leaflet-google-sheets-template) by running ``git remote add upstream https://github.com/codeforgreenville/leaflet-google-sheets-template.git``

Run ``git branch -a`` again and you'll see a new branch "remotes/upstream/master"

We want to grab a copy of the [remote upstream](https://help.github.com/articles/syncing-a-fork/).

``git fetch upstream``

This fetched the latest upstream code into a branch within your Cloud 9 environment. Note, you won't see anything change within Cloud 9, but your local Git has a copy of the upstream master branch at your disposal.

Now merge the upstream code into your code.
``git merge upstream/master``

You'll see a message like "CONFLICT (modify/delete): SC-CODES-README.md deleted in HEAD and modified in upstream/master. Version upstream/master of SC-CODES-README.md left in tree. Automatic merge failed; fix conflicts and then commit the result."

Run ``git status`` to see more information. It will show a ["merge conflict"](https://help.github.com/articles/resolving-a-merge-conflict-from-the-command-line/).  On the one hand, you deleted (in week 9) the SC-CODES-README.md file while the upstream still has a copy which was also edited since you forked it.

Let's tell Git that we still don't care need a copy of SC-CODES-README.md in our fork by removing the merged in changes ``git rm SC-CODES-README.md``

You'll also see that the upstream changed the README.md.  You can compare what changed between your fork and the upstream README.md by running ``git diff README.md``

We want to keep these merged README.md changes, so tell git to add them ``git add README.md``

Instruct git to commit these changes
``git commit -m 'Merge in the README.md from the remote upstream'``

Push the commit up to the GitHub remote copy
``git push origin master``

Congratulations, you've done your first "merge" and resolved a "merge conflict".

Side note, knowing how to use a remote upstream is one of the steps for creating a ["pull request"](https://help.github.com/articles/creating-a-pull-request/). A pull request is how GitHub allows you to propose a merge into someone's GitHub repository. For instance, if you wanted to contribute a fix to an open-source project that hosts its code on GitHub.

### Optional Advanced Map Challenges
Here are sample ideas. Be aware of cross-origin issues if you're trying to load GeoJSON across domains using javascript.

1. Create a new layers.html file in your C9 workspace and add another student's geojson.php as a second Leaflet layer
1. Add [custom map icons in Leaflet](http://leafletjs.com/examples/custom-icons/)
1. Build an equivalent [Google Map by loading your geojson.php as a layer](https://developers.google.com/maps/documentation/javascript/datalayer#load_geojson) by creating a googlemap.html in Cloud9. 
1. Test out other [Leaflet functions](http://leafletjs.com/reference-1.0.2.html)

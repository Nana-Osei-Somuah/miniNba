#NBA Minileague
This is a website created for the NBA MiniLeague which is a competition organized for the 
5 teams in the Pacific Division of the NBA.

##Azure Link
http://nbaminileague.northeurope.cloudapp.azure.com

###Instructions On Hosting The Website With Azure
- After creating your VM on Azure, open terminal and navigate to htdocs in your bitnami
-Delete "index.html" file in the bitnami htdocs folder
- Clone this Git repo in the htdocs folder

###Instructions For Database
-After deploying the database copy the default bitnami database password 
-Paste it in the empty quotes"" in connect the php and change the Db name from "nos26262022"
to "NOS26262022" 
-Paste the bitnami password again in what httpd.conf file in the cof folder found in the apache folder.
type(SetEnv MYSQLPASS "Bitnami password")

####Instructions for Phpunit Test
-All Phpunit tests are located in the MinileagueTest.php file in the phpunitTest folder
-To run the tests open your terminal and type './vendor/bin/phpunit MinileagueTest.php'

#####Credit
-Front for the users' view from freehtml5.co

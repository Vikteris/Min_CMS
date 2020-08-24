## MinCMS

# Third sprint work with PHP and MySQL Workbench.

**Task!** We had to create a MinCMS (content management system) website with admin login page, where you can add page/edit page/delete page and  user page, where you can view navigation bar and writtent content


-----------------------------------------
### How to reach the website:

1. Download "Min_CMS"repository .Zip file and extract to root AMPPS "www" folder;
2. Open "MySQL Workbench" program. On navigation bar press 'Server'->'Data Import'. On 'Import from Dump Project Folder' browse the 'dump_sql' folder and open 'pages.sql'file.
    You can find it in a .zip file where you cloned from Github.
3. Select 'mincms' schema and select all tables, and click 'Start Import'.
4. In Visual studio code open console. Use " vendor/bin/doctrine orm:schema-tool:update --force --dump-sql " to sync all table information from database.
5. Go to "localhost" and open "/MinCMS" directory. **Notice!** AMPP software have to be working. This App allows you to open your computer "localhost"; 
---------------------------------------



### Author: [Viktoras Jonutis](https://github.com/Vikteris?tab=repositories)
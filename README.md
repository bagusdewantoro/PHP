# CONFIGURE PHP, APACHE, SQL

## Reference
1. Install Apache & PHP: https://www.sitepoint.com/how-to-install-php-on-windows/#installingapacheoptional
2. ServerName problem: https://stackoverflow.com/questions/43509404/how-do-set-the-servername-directive-globally-to-suppress-this-message-on-windo

## Run Apache Server
In command line:
```
cd C:\Apache24\bin
httpd
```
In powershell:
```
cd C:\Apache24\bin
.\httpd
```

### Test PHP version in Apache
Create `index.php` file inside C:\Apache24\htdocs. 
Open brower, type `http://localhost:8080/`

### Change subdirectory of index
For example subdirectory `basic01` inside htdocs

* By modifying the `httpd.conf` file inside `C:\Apache24\conf` directory:
Change line 251 and 252, from:
```
DocumentRoot "${SRVROOT}/htdocs"
<Directory "${SRVROOT}/htdocs">
```
to:
```
DocumentRoot "${SRVROOT}/htdocs/basic01"
<Directory "${SRVROOT}/htdocs/basic01">
``` 

* Without modifying the `httpd.conf` file:
In browser change the url from `http://localhost:8080/` to `http://localhost:8080/basic01/`
Make sure you have index.php inside that directory

You can now create PHP sites and applications in any subfolder of C:\Apache24\htdocs

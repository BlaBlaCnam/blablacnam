ECHO Starting PHP FastCGI...
cd php
set PATH=.\;%PATH%
taskkill /f /IM php-cgi.exe & .\php-cgi.exe -b 127.0.0.1:9123
set FTP_SCRIPT=%1
set TEMP_DIR=..\..\temp
set LOGIN=%TEMP_DIR%\login.txt
md ..\css
md %TEMP_DIR%

echo open %FTP_HOST%> %LOGIN%
echo %FTP_USER%>> %LOGIN%
echo %FTP_PWD%>> %LOGIN%
echo. >>%LOGIN%

if defined FTP_SCRIPT (
	type %FTP_SCRIPT% >>%LOGIN%
)

ftp -i -s:%LOGIN%

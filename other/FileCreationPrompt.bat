@echo off 
echo =============================
echo.
echo Are you want to create a file?
echo.
:menu
set /P filename=Please enter your file Name & 
::set filename=%filename%
echo =============================
set /P extension=Please enter your file extension without dot & 
IF "%filename%"=="" GOTO Error
echo.>%filename%.%extension%
echo Hi Your %filename%.%extension% File has been created
:: echo. prints a blank line
echo.
echo Still want to create a another file?
echo.
choice /C YNC /M "Press Y for Yes, N for No, C for Cancel"
::if "%1"!==N | n & C | c goto quit
echo.
echo =============================
GOTO menu
pause
GOTO end
:Error
Echo You havn't enter a file name
pause
:quit
:end

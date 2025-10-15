@echo off
REM =========================================
REM Auto Push to GitHub for Laravel Project
REM =========================================

REM Navigate to your project folder
cd /d "D:\projects\ecommerce-1"

REM Stage all changes
git add .

REM Commit with timestamp
git commit -m "Auto update - %date% %time%"

REM Push to main branch
git push origin main

REM Done
echo All changes pushed to GitHub!
pause

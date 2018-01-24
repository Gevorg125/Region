@echo off

rem -------------------------------------------------------------
rem  Yii command line init script for Windows.
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> fddf13a450a45c5ddcb8a4f100c99e3fb7693619
rem
rem  @author Qiang Xue <qiang.xue@gmail.com>
rem  @link http://www.yiiframework.com/
rem  @copyright Copyright (c) 2008 Yii Software LLC
rem  @license http://www.yiiframework.com/license/
<<<<<<< HEAD
=======
>>>>>>> d8fd41d4d6fe830d5f958951e3fb4f871f4e8aa2
=======
>>>>>>> fddf13a450a45c5ddcb8a4f100c99e3fb7693619
rem -------------------------------------------------------------

@setlocal

set YII_PATH=%~dp0

if "%PHP_COMMAND%" == "" set PHP_COMMAND=php.exe

"%PHP_COMMAND%" "%YII_PATH%init" %*

@endlocal

#!/bin/bash

## NOTE:
## Since the default package name varies based on distro and/or package manager
## I have opted to attempt to install all of these packages
## One of theser installations will fail due to being invalid, thats fine
## just ignore the failed installation...
## As long as at least one gets installed, then you're good to go.
## YUP, I know that this code is absolutely disgusting and the majority of these commands wont work
## the reason im doing it this way is to increase the chances of a successful installation.
## If neither get installed, then open your terminal and install them manually
## rather than relying on this package manager detection script to do it for you.

haveProg() {
    [ -x "$(which $1)" ]
}

if haveProg apt-get ; then 
  sudo apt-get install php-dev
  sudo apt-get install php-devel
  sudo apt-get install php-pear
  sudo pecl install xdebug
  sudo apt-get install php-xdebug
  sudo apt-get install php7.4-xdebug
  sudo apt-get install php8.0-xdebug
  sudo apt-get install php8.1-xdebug
elif haveProg apt; then 
  sudo apt add php-dev
  sudo apt add php-devel
  sudo apt add php-pear
  sudo pecl install xdebug
elif haveProg aptitude ; then 
  sudo aptitude install php-dev
  sudo aptitude install php-devel
  sudo aptitude install php-pear
  sudo pecl install xdebug
elif haveProg yum ; then 
  sudo yum install php-dev
  sudo yum install php-devel
  sudo yum install php-pear
  sudo pecl install xdebug
  sudo yum install php74-php-xdebug3
  sudo yum install php80-php-xdebug3
  sudo yum install php81-php-xdebug3
elif haveProg pacman ; then
  sudo pacman -S php-dev
  sudo pacman -S php-devel
  sudo pacman -S php-pear
  sudo pecl install xdebug
  sudo pacman -S xdebug
elif haveProg composer ; then
  sudo composer require php-dev
  sudo composer require php-devel
  sudo composer require php-pear
  sudo pecl install xdebug
elif haveProg zypper ; then
  sudo zypper install php-dev
  sudo zypper install php-devel
  sudo zypper install php-pear
  sudo zypper install php-dev
  sudo zypper install php-devel
  sudo zypper install php-pear
  sudo pecl install xdebug
  sudo zypper install php7-xdebug
  sudo zypper install php8-xdebug
  sudo zypper in php7-xdebug
  sudo zypper in php8-xdebug
elif haveProg dnf; then 
  sudo dnf install php-dev
  sudo dnf install php-devel
  sudo dnf install php-pear
  sudo pecl install xdebug
  sudo dnf install php-xdebug
elif haveProg rpm; then 
  sudo urpmi php-dev
  sudo urpmi php-devel
  sudo urpmi php-pear
  sudo pecl install xdebug
elif haveProg urpmi; then 
  sudo urpmi php-dev
  sudo urpmi php-devel
  sudo urpmi php-pear
  sudo pecl install xdebug
elif haveProg pkgtools; then 
  sudo installpkg php-dev
  sudo installpkg php-devel
  sudo installpkg php-pear
  sudo pecl install xdebug
elif haveProg slackpkg; then 
  sudo slackpkg install php-dev
  sudo slackpkg install php-devel
  sudo slackpkg install php-pear
  sudo pecl install xdebug
elif haveProg slapt-get; then  
  sudo slapt-get --install php-dev
  sudo slapt-get --install php-devel
  sudo slapt-get --install php-pear
  sudo pecl install xdebug
elif haveProg netpkg; then  
  sudo netpkg php-dev
  sudo netpkg php-devel
  sudo nertpkg php-pear
  sudo pecl install xdebug
elif haveProg cards; then  
  sudo cards install php-dev
  sudo cards install php-devel
  sudo cards install php-pear
  sudo pecl install xdebug
elif haveProg eopkg; then  
  sudo eopkg install php-dev
  sudo eopkg install php-devel  
  sudo eopkg install php-pear
  sudo pecl install xdebug
elif haveProg smart; then  
  sudo smart install php-dev
  sudo smart install php-devel
  sudo smart install php-pear
  sudo pecl install xdebug
elif haveProg pkgcon; then  
  sudo pkcon install php-dev
  sudo pkcon install php-devel
  sudo pkcon install php-pear
  sudo pecl install xdebug
elif haveProg emerge; then
  sudo emerge php-dev
  sudo emerge php-devel 
  sudo emerge php-pear
  sudo pecl install xdebug
  sudo emerge dev-php/xdebug
elif haveProg lunar; then  
  sudo lunar php-dev
  sudo lunar php-devel
  sudo emerge php-pear
  sudo pecl install xdebug
elif haveProg sorcery; then
  sudo cast php-dev
  sudo cast php-devel  
  sudo cast php-pear
  sudo pecl install xdebug
elif haveProg nix; then 
  sudo nix -env -i php-dev
  sudo nix -env -i php-devel
  sudo nix -env -i php-pear
  sudo pecl install xdebug
elif haveProg xbps; then 
  sudo xbps install php-dev
  sudo xbps install php-devel
  sudo xbps install php-pear
  sudo pecl install xdebug
elif haveProg packages; then 
  sudo pkg_add -r php-dev
  sudo pkg_add -r php-devel
  sudo pkg install php-dev
  sudo pkg install php-devel
  sudo pkg add -r php-pear
  sudo pkg install php-pear 
  sudo pecl install xdebug
elif haveProg snap; then 
  sudo snap install php-dev
  sudo snap install php-devel
  sudo snap install php-pear
  sudo pecl install xdebug
else
    echo 'Your package manager is not supported'
    exit 2
fi

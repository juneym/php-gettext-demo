php-gettext-demo
================

### Gettext Demo in PHP

This is a reference code for anyone who is interested in using PHP/gettext to support international message string bundle using
portable object (PO) files.

I recommend using POEdit (http://www.poedit.net/) to anyone who would like to get their hands dirty :) 
It's an awesome tool!

###Determining the available locale supported by your Linux Box

  ```bash
      sudo locale -a 
  ```

###Adding new locale support on Linux derived boxes (Ubuntu)


   ```bash
     sudo locale-gen ja_JP.utf8
     
     # chek if ja_JP.utf8 is now an active locale
     sudo locale -a   
   ```


### Demo

   ```bash
   rmartinez@vbox1:~/macbook-sites/php-gettext-demo$ ls -la
total 24
drwxr-xr-x  4 rmartinez rmartinez 4096 Dec 29 10:43 .
drwxr-xr-x 48 rmartinez rmartinez 4096 Dec 29 10:42 ..
drwxr-xr-x  8 rmartinez rmartinez 4096 Dec 29 10:44 .git
-rw-r--r--  1 rmartinez rmartinez  640 Dec 29 10:38 README.md
-rw-r--r--  1 rmartinez rmartinez  633 Dec 29 10:43 index.php
drwxr-xr-x  3 rmartinez rmartinez 4096 Dec 29 10:39 locale
rmartinez@vbox1:~/macbook-sites/php-gettext-demo$ php index.php 
これは、国際言語である
さようなら！
This is an internationalized Language
Goodbye!
   ```

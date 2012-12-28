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

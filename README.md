# WC-Recovery
Woocommerce download link recovery by email and order id. The order id email to user just after payment/successful full purchase.
These Recovery page just need persian or english version. 

Note2:
It's based on Jquery and Bootstrap 3.

# How to Use
Follow these steps:

1.These file should be added to your active theme folder. 
Persian version files:
* single-ajaxrecovery-en.php
* single-recover-en.php

English version files:
* single-ajaxrecovery-fa.php
* single-recover-fa.php

2. Then go to wordpress panel and add two new pages with these templates name:
"Ajaxrecovery Reza" (Ajax request form)
"Recovery - RJZ" (Recovery Form)
![picture alt](https://raw.githubusercontent.com/rezajafari2a/WC-Recovery/master/Template-wordpress.png "Template wordpress")

3. Go to Recovery form.

4. Change URL inside Recovery form to your address that defines for processing the Ajax request. The URL is defined on jquery part.

Note2: The Recovery form can be more secure with captcha.


RJZ simple captcha:
https://github.com/rezajafari2a/captcha

# Result:
![picture alt](https://raw.githubusercontent.com/rezajafari2a/WC-Recovery/master/Recovery.PNG "Woocommerce download link recovery")

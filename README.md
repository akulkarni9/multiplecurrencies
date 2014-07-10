multiplecurrencies
==================
This extension is about adding multiple currencies in back-end for a product and displaying those in front-end. Normally magento allows price configuration at website, global and store level, but not at product level. My client wanted me to enter multiple currencies per product, so I had hack around a bit and successfully wrote this extension. 

There are certain prerequisites which should be satisfied before installing this extension. I've tried my best to omit programatical way of satisfying prerequisites because every guy/girl out there can't be coding gurus. 

Prerequisites:
==============
1. Multiple currencies should be allowed in drop down box in magento header. There is a simple procedure for this. Go to System->Configuration. Select Currency Setup under General tab in left pane. Select any Base Currency and Default Display Currency. Under Allowed Currencies, select required currencies. 
Note:
=====
Both Base Currency and Default Display Currency should be selected in Allowed Currencies. 
After selecting multiple currencies, save it. 
Now go to System->Manage Rates. If you have selected multiple currencies properly in previous step, then you should see a table which has Base currency and Allowed Currencies. Import webserviceex conversion values. Save it. 
That wasn't difficult, was it? :) 

2. Here is programatical way of adding multiple currencies to magento header. Oh, programs? Don't worry, it is simple. 
Create a new template file in “YOUR_PACKAGE/YOUR_THEME/template/, name it as currency. Under that folder, create a new file, save it as currency.phtml. Copy the code from this repository.

Now we should tell Magento which template should be used for the selector. You should create “YOUR_PACKAGE/YOUR_THEME/layout/local.xml” and copy associated code from repository.

Refresh cache, reload magento front-end. check magento header in front end.

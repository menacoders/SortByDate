# SortByDate v1.0
Magento 2 Module that add sorting by Date within the Catalog view Toolbar sorting dropdown instead of having to toggle ASC/DESC using the up and down arrows.
عرض المنتجات في التصنيفات حسب التاريخ من الاحدث الى الاقدم في ماجنتو 2

## Installment
* Upload the files in app/code/Mohdibra/SortByDate directory

* Enable the module
php bin/magento module:enable Mohdibra_SortByDate --clear-static-content

* Compile the modules
php bin/magento setup:di:compile

* Deploy the Static Content
php bin/magento setup:static-content:deploy

* Clear and Flush the Cache
php bin/magento cache:clean
php bin/magento cache:flush


## Coming Soon
* Options to enable/disable at a store view level.
* More customizations.

## Help
If you come across any bugs or issues please use the issue tracker or contact me via Email geek.php@hotmail.com

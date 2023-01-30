## Magento2 - GraphQL Schema to fetch Custom Table data


> GraphQL a new approach to working with APIs. It is a data query language developed by Facebook.

> There is always a need to create a custom forms or save some data for client. In order to fulfill this need & pass this custom data via GraphQL we have created a custom module. 


## Installation Steps

Step 1 : Download the Zip file from Github & Unzip it
Step 2 : Create a directory under app/code/Binstellar/Freehomemeasure
Step 3 : Upload the files & folders from extracted package to app/code/Binstellar/Freehomemeasure
Step 4 : Go to the Magento2 Root directory & run following commands

php bin/magento setup:upgrade 
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy -f
php bin/magento cache:flush

## Important Note 
- Please change & add you factory method under Binstellar\Freehomemeasure\Model\Resolver\DataProvider\Bookfreemeasure

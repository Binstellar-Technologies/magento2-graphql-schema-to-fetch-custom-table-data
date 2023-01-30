## Magento2 - GraphQL Schema to fetch Custom Table data

> Magento2 an open-source e-commerce platform written in PHP.


> GraphQL a new approach to working with APIs. It is a data query language developed by Facebook. It was implemented by Adobe Commerce and Magento Open Source to provide an another approach to REST and SOAP web APIs for frontend development.


> Basically, GraphQL is a query language for APIs which gives clients the power to ask for exactly the need and nothing more. GraphQL uses mutations to perform CRUD operations.

> While working in the Magento2 site let's say for an example there is a need to create a custom forms or save some data for client. In order to fulfill this need & pass this custom data via GraphQL we have created a custom module. 

> In order to achieve this we are first going to create a simple Magento2 module. We already have a custom table named bookfreemeasure with filled in form data(you can select you own custom table). Form this table we are going to fetch users information like firstname, lastname & email.

&nbsp;
&nbsp;

## Installation Steps

##### Step 1 : Download the Zip file from Github & Unzip it

##### Step 2 : Create a directory under app/code/Binstellar/Freehomemeasure

##### Step 3 : Upload the files & folders from extracted package to app/code/Binstellar/Freehomemeasure

##### Step 4 : Go to the Magento2 Root directory & run following commands

php bin/magento setup:upgrade 

php bin/magento setup:di:compile

php bin/magento setup:static-content:deploy -f

php bin/magento cache:flush

&nbsp;
&nbsp;

## Important Note 
- Please change & add you factory method under Binstellar\Freehomemeasure\Model\Resolver\DataProvider\Bookfreemeasure

&nbsp;
&nbsp;


## Note : We have tested this option in Magento ver. 2.4.5-p1

&nbsp;
&nbsp;

## Verification of the GraphQL. For this you can use Altair GraphQL or ChromeiQL extensions.

> To check this query we need to set up the endpoint which usually goes like
&nbsp;
&nbsp;

<magento_root_url>/graphql

&nbsp;
&nbsp;

![screenshot-nimbusweb me-2023 01 24-18_08_39 (1)](https://user-images.githubusercontent.com/123800304/215411774-6013a47b-9c57-4c08-9fdb-e0e1a5341e33.png)


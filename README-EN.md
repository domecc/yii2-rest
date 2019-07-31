## yii2-rest

Language: [Chinese](https://github.com/benbose/yii2-rest/blob/master/README.md) | [English](https://github.com/benbose/yii2-rest/blob/master/README-EN.md)

Use the core of Yii2, follow the design 7 principles, redefine and comb the structure, remove unnecessary structures, make the source package more compact, and make the project development API architecture or micro service architecture easier and faster. The development, development is simple, the code is easy to maintain, readers are welcome to spit, if you feel that the project is helpful to you, trouble to leave a star, thank you

### Features:

* Modular isolation and Dimit's rule are more intuitive, independent or easy to implement API or reconfigure microservices
* Controllers are more factory-based, enabling global or local definition of modules, functions, interfaces
* Parameter verification function, parameter verification for each function interface, convenient management and maintenance
* Interface simplification principle, convenient for rapid development and maintenance, controller is no longer code bloated and redundant
* New module, function, global class follow the opening and closing principle, easy to add and maintain, such as utils folder, apps/user module, etc.
* Tool-class reuse principle, as long as it is properly controlled, it can perform good code multiplexing and reduce redundancy.
* Error code isolation, support for multi-language conversion, unified error codes and messages, convenient system management
* Global error exception definition, convenient for system alarm management

### Catalog Description

```
┌─yii-rest
├──apps
│ ├──user                  module (demo), each module needs to be defined in config/modules.php
│ │ ├──actions             interface, simplification
│ │ │ ├──user              interface implementation of user function (demo)
│ │ │ │ ├──Login.php       Login (demo)
│ │ │ │ └──....php         More interfaces
│ │ ├──controllers         controller, functionalized
│ │ │ ├──UserController.php    User function controller (demo), defines the restful way of the interface
│ │ │ ├──...Controller.php     Other functions
│ │ │ └──BaseController.php    base class, inherits Controller.php under apps
│ │ ├──validates               Parameter verification, functionalization
│ │ │ ├──UserValidate.php      User verification, self-organizing the parameters that need to be verified for each interface
│ │ │ ├──...Validate.php       Other checksums
│ │ │ └──BaseValidate.php      base class, inheriting the verification mechanism of yii2
│ │ ├──...                     Define more functions for this module, such as Logic, Service, etc.
│ │ └──Bootstrap.php           module definition
│ └──Controller.php            self-written base class controller, inherits the rest controller of yii2
├──components                  component, which stores the component functions of yii2 configuration
│ ├──code                      defines multi-language return codes and messages
│ │ ├──en-us                   English language pack
│ │ │ ├──message.php           returned English message
│ │ │ └──message_http.php...   returned English HTTP message
│ │ ├──zh-cn...                Chinese language pack
│ │ ├──Code.php                error code definition, after definition, the language pack also needs to define the error code message
│ │ └──CodeHttp.php...         HTTP error code definition, after definition, the language pack also needs to define the error code message. Please add more definitions.
│ ├──exceptions                defines global exceptions
│ │ └──Handler.php             global exception definition, distinguish between debug and online, modify the processing of messages, such as mail, SMS, WeChat, Ali nail, etc.
│ ├──identity                  Define user verification, decide to use according to the situation
│ │ └──User.php                user global check, depending on the situation
│ └──... Define                more other components
├──config                      configuration folder, define env.php, unify the configuration in the root directory .env
│ ├──components.php            component configuration
│ ├──config.php                unified configuration, other configurations are uniformly loaded into the configuration
│ ├──env.php                   env configuration and global function definition for easy management
│ ├──modules.php               module configuration
│ ├──mongodb.php               MongoDB configuration, define or delete as needed
│ ├──mysql.php                 MySQL configuration, defined or deleted as needed
│ ├──params.php                Custom parameters, define or delete as needed
│ ├──redis.php                 Redis configuration, define or delete as needed
│ └──...                       More configuration
├──models                      database table configuration, as defined by the situation
│ ├──user                      user-related table folder
│ │ ├──Users.php               user-related table folder
│ │ └──UsersAccount.php...     More User Related Tables
│ ├──...                       More related table folders
│ ├──....php                   More tables
│ └──BaseModel.php             basic table Model, define general functions according to the situation
├──public                      entrance
│ ├──.htaccess                 rewrite rules
│ └──index.php                 entry file
├──runtime                     run cache/log
├──utils                       toolkit, defining toolkits such as token, jwt, array, string, proxy, encryption and decryption, order, etc., defined or deleted depending on the situation
│ ├──ResponseUtils             Response Toolkit for demo use, as defined or deleted
│ ├──...Utils                  More Custom Toolkit Folders
│ ├──...Util.php               More custom toolkit files
│ └──BaseUtil.php              basic toolkit, inheriting BaseObject of yii2
├──vendor                      yii2 core package and other third-party packages, please use composer to load
├──.env                        global configuration file
├──.gitignore                  git ignore files
├──.htaccess                   rewrite rules
├──composer.json               composer.json, modify it according to the project situation
├──composer.lock               composer.json, modify it according to the project situation
└──README.md                   documentation
└──README-EN.md                documentation english

```

### yii2 core installation

If composer is not installed, please click [here] (http://getcomposer.org/doc/00-intro.md#installation-nix) to install
```
composer install
```

### Entry file

* Entry file: public/index.php
* Visit address: www.xxx.com/index.php?r=user/user/login&username=root&password=123456
* Rewrite the route: www.xxx.com/user/user/login?username=root&password=123456

### Configuration Parameters

* Configuration path: config /
* Usage mode: configuration parameters are configured using .env mode
* Configuration method: configure parameters in .env, and then use the env() method to assign values ​​in the configuration file, such as env('YII_APP_ID', 'default')

### Module Definition

* New module: add modules in config/modules.php, create new module folders in apps, etc.
```
return [
    'user' => [
        'class' => 'app\apps\user\Bootstrap'
    ],
];
```
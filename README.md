## yii2-rest

使用Yii2的核心，遵循设计7大原则，重新定义并梳理其结构，去除不必要的结构，使源包更加小巧，使该项目开发API架构或微服务架构会根据方便，能更加快速的进行API的开发，开发简洁，代码维护方便，欢迎读者吐槽，如果觉得该项目对你有帮助，麻烦留个星星，谢啦
### 特点：
* 模块化隔离化与迪米特法则更加直观，独立或实现API或重构微服务更加方便
* 控制器使用更加工厂化，可实现模块，功能，接口的全局或局部的定义
* 参数校验功能化，对每个功能接口的参数校验，方便管理与维护
* 接口单一化原则，方便快速开发与维护，控制器也不再代码臃肿与冗余
* 新建模块，功能，全局类遵循开闭原则，方便添加与维护，如utils文件夹，apps/user模块等等
* 工具类复用原则，只要控制得当，就能很好地进行代码复用，减少冗余
* 错误码隔离化，支持多语言转换，统一错误码与消息，方便系统管理
* 全局错误异常定义，方便系统告警等管理

### 目录说明

```
┌─yii-rest 
├──apps                                         
│    ├──user                                   模块（demo），每个模块都需要在config/modules.php定义
│    │    ├──actions                           接口，单一化
│    │    │    ├──user                         用户功能的接口实现（demo）
│    │    │    │    ├──Login.php               登录（demo）
│    │    │    │    └──....php                 更多接口
│    │    ├──controllers                       控制器，功能化
│    │    │    ├──UserController.php           用户功能控制器（demo），定义接口的restful方式
│    │    │    ├──...Controller.php            其他功能
│    │    │    └──BaseController.php           基类，继承apps下的Controller.php
│    │    ├──validates                         参数校验，功能化
│    │    │    ├──UserValidate.php             用户校验，自行整理每个接口需要校验的参数
│    │    │    ├──...Validate.php              其他校验
│    │    │    └──BaseValidate.php             基类，继承yii2的校验机制
│    │    ├──...                               定义更多该模块的函数，如Logic，Service等等
│    │    └──Bootstrap.php                     模块定义
│    └──Controller.php                         自写基类控制器，继承yii2的rest控制器
├──components                                  组件，存放yii2配置的组件功能
│    ├──code                                   定义多语言返回码与消息
│    │    ├──en-us                             英语语言包
│    │    │    ├──message.php                  返回的英语消息
│    │    │    └──message_http.php...          返回的英语HTTP消息
│    │    ├──zh-cn...                          中文语言包
│    │    ├──Code.php                          错误码定义，定义后，语言包也需要定义错误码的消息
│    │    └──CodeHttp.php...                   HTTP错误码定义，定义后，语言包也需要定义错误码的消息,更多定义请自行增加
│    ├──exceptions                             定义全局异常
│    │    └──Handler.php                       全局异常定义，区分debug与线上，自行修改消息的处理，如邮件，短信，微信，阿里钉钉，等
│    ├──identity                               定义用户校验，根据情况决定使用
│    │    └──User.php                          用户全局校验，根据情况是否使用
│    └──...                                    定义更多其他组件
├──config                                      配置文件夹，定义env.php，将配置统一于根目录.env中
│    ├──components.php                         组件配置
│    ├──config.php                             统一配置，其他配置统一加载到该配置中
│    ├──env.php                                env配置与全局函数定义，方便管理
│    ├──modules.php                            模块配置
│    ├──mongodb.php                            MongoDB配置，根据需要定义或删除
│    ├──mysql.php                              MySQL配置，根据需要定义或删除
│    ├──params.php                             自定义参数，根据需要定义或删除
│    ├──redis.php                              Redis配置，根据需要定义或删除
│    └──...                                    更多配置
├──models                                      数据库表配置，根据情况定义
│    ├──user                                   用户相关的表文件夹
│    │    ├──Users.php                         用户相关的表文件夹
│    │    └──UsersAccount.php...               更多用户相关表
│    ├──...                                    更多相关的表文件夹
│    ├──....php                                更多表
│    └──BaseModel.php                          基本表Model，根据情况定义通用函数
├──public                                      入口
│    ├──.htaccess                              重写规则
│    └──index.php                              入口文件
├──runtime                                     运行缓存/日志
├──utils                                       工具包，定义诸如token，jwt，array，string，代理，加解密，订单等工具包，根据情况定义或删除
│    ├──ResponseUtils                          响应工具包，用于demo使用，根据情况定义或删除
│    ├──...Utils                               更多自定义工具包文件夹
│    ├──...Util.php                            更多自定义工具包文件
│    └──BaseUtil.php                           基本工具包，继承yii2的BaseObject
├──vendor                                      yii2核心包与其他第三方包，请使用composer加载
├──.env                                        全局配置文件
├──.gitignore                                  git忽略文件
├──.htaccess                                   重写规则
├──composer.json                               composer.json，根据项目情况自行修改
└──README.md                                   说明文件

```

### yii2核心安装

如未安装composer，请点击[这里](http://getcomposer.org/doc/00-intro.md#installation-nix)进行安装
```
composer install
```

### 入口文件

* 入口文件：public/index.php
* 访问地址：www.xxx.com/index.php?r=user/user/login&username=root&password=123456
* 重写路由：www.xxx.com/user/user/login?username=root&password=123456

### 配置参数

* 配置路径：config/
* 使用模式：配置参数使用了.env模式配置
* 配置方法：.env中配置参数，之后于配置文件中使用env()方法赋值，如env('YII_APP_ID', 'default')

### 模块定义

* 新建模块：于config/modules.php中新增模块，并在apps创建新的模块文件夹等
```
return [
    'user' => [
        'class' => 'app\apps\user\Bootstrap'
    ],
];
```
* 新建模块对应的actions，controllers，validates，Bootstrap.php

```
├──apps                                         
│    ├──user                                   模块（demo），每个模块都需要在config/modules.php定义
│    │    ├──actions                           接口，单一化
│    │    │    ├──user                         用户功能的接口实现（demo）
│    │    │    │    ├──Login.php               登录（demo）
│    │    │    │    └──....php                 更多接口
│    │    ├──controllers                       控制器，功能化
│    │    │    ├──UserController.php           用户功能控制器（demo），定义接口的restful方式
│    │    │    ├──...Controller.php            其他功能
│    │    │    └──BaseController.php           基类，继承apps下的Controller.php
│    │    ├──validates                         参数校验，功能化
│    │    │    ├──UserValidate.php             用户校验，自行整理每个接口需要校验的参数
│    │    │    ├──...Validate.php              其他校验
│    │    │    └──BaseValidate.php             基类，继承yii2的校验机制
│    │    ├──...                               定义更多该模块的函数，如Logic，Service等等
│    │    └──Bootstrap.php                     模块定义
│    └──Controller.php                         自写基类控制器，继承yii2的rest控制器
```

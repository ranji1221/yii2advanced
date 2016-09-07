学习使用yii2.0框架开发“个人博客”系统
===============================

###开发目标
* 基于MarkDown编辑器的个人博客系统开发

###开发环境
* PHP的版本为：7.0.9；
* Yii 2.0.10 Advanced版本；
* Yii 2.0 扩展，yidashi/yii2-bootstrap-markdown，安装方法：composer require "yidashi/yii2-bootstrap-markdown"；

###注意事项
该“博客”项目是基于yii2.0开发的，曾经使用yii1.0开发过类似的博文项目，但yii2.0
与1.0变化较大，所以计划使用yii2.0开发一个简易的“博客”项目，目前来看，仅仅
是为了学习而使用。

鉴于yii2.0的特点，该项目在github提交的时候是不会提交yii2.0框架本身，个人的
本地配置信息，以及第三库。鉴于此特性，并根据个人的需要，我自己把yii2.0框架
本身和第三库打包压缩。需要下载该项目的童鞋在git clone该项目后，需要自己准备
yii2框架本身和第三库，以及自己的本地配置信息。（当然，也可以QQ:95724368我，
我给你发送一份哦。）

The template is designed to work in a team development environment. It supports
deploying the application in different environments.

Documentation is at [docs/guide/README.md](docs/guide/README.md).

[![Latest Stable Version](https://poser.pugx.org/yiisoft/yii2-app-advanced/v/stable.png)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![Total Downloads](https://poser.pugx.org/yiisoft/yii2-app-advanced/downloads.png)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![Build Status](https://travis-ci.org/yiisoft/yii2-app-advanced.svg?branch=master)](https://travis-ci.org/yiisoft/yii2-app-advanced)

DIRECTORY STRUCTURE
-------------------

```
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
    tests/               contains tests for common classes    
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for backend application    
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for frontend application
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
```

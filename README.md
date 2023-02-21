# README

The boilerplate for module for PrestaShop 1.5 - 1.7 which uses [presta-expert/module-helper](https://github.com/presta-expert/module-helper).

You can use it to start writing your modules quickly and easily while maintaining the correct directory structure.

## Requirements

- PHP >= 5.2.4
- Prestashop 1.5 - 1.7

## Installation

```bash
$ composer create-project presta-expert/module mycustommodule
```

Then you need to rename the file *name_of_module.php* to the name of your module, similarly change the name of class inside this file and you are ready to go.

```php
class NameOfModule extends \PrestaExpert\Helper\AbstractModule
```

Note that your module extends *\PrestaExpert\Prestashop\Helper\AbstractModule* so you are able to use some helper methods that will make your code better, check README of [presta-expert/module-helper](https://github.com/presta-expert/module-helper) for details.

More information about creating Prestashop modules you can find here:

* [https://devdocs.prestashop.com/1.7/modules/](https://devdocs.prestashop.com/1.7/modules/)
* [http://doc.prestashop.com/pages/viewpage.action?pageId=51184607](http://doc.prestashop.com/pages/viewpage.action?pageId=51184607)

## Authors

- [Presta.Expert](https://presta.expert) Team

## License

The files in this archive are released under the [MIT LICENSE](LICENSE).
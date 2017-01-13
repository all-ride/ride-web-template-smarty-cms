# Ride: Template (Smarty)

This module adds Smarty functions and modifiers for the CMS of a Ride application.

## Functions

[[Smarty docs](http://www.smarty.net/docs/en/plugins.functions.tpl)]

### content

Returns the URL of a content object or the full content object when requested in a variable.

| Parameter | Type | Description |
| --- | --- | --- |
| type | string | Name of the content type |
| data | mixed | Actual data or entry, can be an id when using the ORM |
| locale | string | Code of the locale, if omitted, the current locale is used (optional) |
| site | string | Id of the site, if omitted, the current site is used (optional) |
| var | String | Variable name to assign this URL to (optional) |

```Smarty
{content type="News" data=$newsEntry var="newsContent"}
```

## Modifiers

[[Smarty docs](http://www.smarty.net/docs/en/plugins.modifiers.tpl)]

### text

Parses relative URL's into absolute ones and replaces all known variables between [[ and ]] into their value.

| Parameter | Type | Description |
| --- | --- | --- |
|  | String | Text to parse |

```Smarty
{"Copyright &copy; 1999-[[year]]"|text}
```

Check the readme of the available [variables](https://ride.readme.io/docs/variables).

## Related Modules 

- [ride/app](https://github.com/all-ride/ride-app)
- [ride/app-template](https://github.com/all-ride/ride-app-template)
- [ride/app-template-smarty](https://github.com/all-ride/ride-app-template-smarty)
- [ride/lib-cms](https://github.com/all-ride/ride-lib-cms)
- [ride/lib-template](https://github.com/all-ride/ride-lib-template)
- [ride/lib-template-smarty](https://github.com/all-ride/ride-lib-template-smarty)
- [ride/web](https://github.com/all-ride/ride-web)
- [ride/web-cms](https://github.com/all-ride/ride-web-cms)
- [ride/web-template](https://github.com/all-ride/ride-web-template)

## Installation

You can use [Composer](http://getcomposer.org) to install this module.

```
composer require ride/web-template-smarty-cms
```

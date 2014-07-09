setini
======

Craft CMS plugin to set a parameter using ini_set() for PHP. Useful for things like setting PHP's memory limit on a per-request basis. 

Throw the setini folder into your craft/plugins/ directory. In your template where you want to set your parameter, use these tags: (where 'memory_limit' is the parameter to set and the 2nd value is passed in the setIni filter)
```
{% set memory_limit = 'memory_limit' | setIni('128M') %}   
{% set display_errors = 'display_errors' | setIni(1) %}
```

In this case, to check if it applied correctly, just echo out the variable:
```
{{ memory_limit }}   
{{ display_errors }}
```
Note: This plugin will only work with Apache setup to use mod_php and does not work with PHP running as FastCGI. 

setini
======

Craft CMS plugin to set a parameter using ini_set() for PHP. Useful for things like setting PHP's memory limit on a per-request basis. 

Throw the setini folder into your craft/plugins/ directory. In your template where you want to set your parameter, use these tags:
<code>
// where 'memory_limit' is the parameter to set and the 2nd value is passed in the setIni filter
{% set memory_limit = 'memory_limit' | setIni('128M') %}
</code>

In this case, to check your memory usage, just echo out the variable:
<code>
{{ memory_limit }}
</code>

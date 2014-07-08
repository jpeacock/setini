setini
======

Craft CMS plugin to set PHP's memory limit on a per-request basis. 

Throw the setini folder into your craft/plugins/ directory. In your template where you want to change the memory usage, use these tags:
<code>
{% set memory_limit = 128 | setIni() %}
</code>

To check your memory usage, just echo out the variable:
<code>
{{ memory_limit }}
</code>

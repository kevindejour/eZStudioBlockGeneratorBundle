# eZStudioBlockGeneratorBundle
A Bungle with a eZ Studio Block Generator


How to install:

add to your composer 

```
composer require dk-ez-studio/block-generator-bundle dev-master

```
add to your app/AppKernel.php

```
new DKeZStudio\BlockGeneratorBundle\eZStudioBlockGeneratorBundle()

```


How to use:
```
php app/console generate:ezstudio:block
```
Create your bundle as usual, but choose after a name for your block
```
Set a name for your eZStudio Block.

Name of your eZStudio Block: My custom Block Name
```

set the number of fields you need

```
Set the number of fields for your eZStudio Block.

Number of fields for your eZStudio Block: 5

```

and then for each field, the kind of field you want

```
Determine the format to use for the eZ Studio block field 1

Field type for field 1 (integer, string, text, multiple or embed): integer

Determine the format to use for the eZ Studio block field 2

Field type for field 2 (integer, string, text, multiple or embed): string

Determine the format to use for the eZ Studio block field 3

Field type for field 3 (integer, string, text, multiple or embed): text

Determine the format to use for the eZ Studio block field 4

Field type for field 4 (integer, string, text, multiple or embed): multiple

Determine the format to use for the eZ Studio block field 5

Field type for field 5 (integer, string, text, multiple or embed): embed

```

and VOILA ! :)

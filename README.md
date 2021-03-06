# ThinkingMedia/Phing [![Build Status](https://travis-ci.org/thinkingmedia/phing.svg)](https://travis-ci.org/thinkingmedia/phing)

[![Code Climate](https://codeclimate.com/github/thinkingmedia/phing/badges/gpa.svg)](https://codeclimate.com/github/thinkingmedia/phing)
[![License](https://poser.pugx.org/thinkingmedia/phing/license.svg)](https://packagist.org/packages/thinkingmedia/phing)

ThinkingMedia/Phing is a collection of custom Phing tasks that we use daily on our web development projects.

## Usage

ThinkingMedia/Phing are Phing custom tasks implemented with PSR-0 namespaces and installed in your project via composer. You need to
include the composer autoloader and include the ThinkingMedia/Phing project path before you can use them.

Here is an empty `build.xml` file to get you started.

    <?xml version="1.0"?>
    <project name="YourProjectName" default="build">
        <php expression="include('vendor/autoload.php')"/>
        <includepath classpath="vendor/thinkingmedia/phing/src"/>
        
        <target name="build">
        </target>
    </project>
    
## Tasks

###DepsTask

Handles executing Google's Closure Dependency generator for JavaScript.

Name | Type | Description | Default | Required
-----|------|-------------|---------|---------
output | string | The relative output path for the deps.js file. | n/a | Yes
library | string | The relative location to the closure library | n/a | Yes
prefix | string | A URL prefix to load JS files relative to goog/base.js | n/a | Yes

```xml
<taskdef name="deps" classname="GemsPhing.Closure.DepsTask"/>

<deps output="www/deps.js" library="./www/closure-library" prefix="../../../src/cgTag">
    <fileset dir="./www/src/cgTag"/>
</deps>
```


## Installation [![Latest Stable Version](https://poser.pugx.org/thinkingmedia/phing/v/stable.svg)](https://packagist.org/packages/thinkingmedia/phing)

Install using composer:

     composer require thinkingmedia/phing

[![Total Downloads](https://poser.pugx.org/thinkingmedia/phing/downloads.svg)](https://packagist.org/packages/thinkingmedia/phing) 
[![Latest Unstable Version](https://poser.pugx.org/thinkingmedia/phing/v/unstable.svg)](https://packagist.org/packages/thinkingmedia/phing) 

## Unit Tests [![Test Coverage](https://codeclimate.com/github/thinkingmedia/phing/badges/coverage.svg)](https://codeclimate.com/github/thinkingmedia/phing)

For running unit tests you need phpunit. After installing, you can run the unit test suite by running:

    $ phpunit
 

## Requirements

- ThinkingMedia/Phing requires Phing 2.x or above, but is not listed as a dependency in composer.

## Submitting bugs and feature requests

Bugs and feature requests are tracked on [GitHub](https://github.com/thinkingmedia/phing/issues)

## Author

Mathew Foscarini - <support@thinkingmedia.ca> - <http://www.thinkingmedia.ca>

See also the list of [contributors](https://github.com/thinkingmedia/phing/contributors) which participated in this project.

## License

Phing is licensed under the MIT License - see the `LICENSE` file for details.

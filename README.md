[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/WsdlToPhp/PackageColissimoPickupPoint/badges/quality-score.png?b=develop)](https://scrutinizer-ci.com/g/WsdlToPhp/PackageColissimoPickupPoint/?branch=develop)
[![TeamCity build status](https://teamcity.mikael-delsol.fr/app/rest/builds/buildType:id:PackageColissimoPickupPoint_Build/statusIcon.svg)](https://github.com/WsdlToPhp/PackageColissimoPickupPoint)
[![Latest Stable Version](https://poser.pugx.org/wsdltophp/package-colissimo-pickup-point/v/stable)](https://packagist.org/packages/wsdltophp/package-colissimo-pickup-point)
[![Dependency Status](https://www.versioneye.com/user/projects/570e03c2fcd19a0045440bfe/badge.svg?style=flat)](https://www.versioneye.com/user/projects/570e03c2fcd19a0045440bfe)
[![StyleCI](https://styleci.io/repos/56134458/shield)](https://styleci.io/repos/56134458)
[![Total Downloads](https://poser.pugx.org/wsdltophp/package-colissimo-pickup-point/downloads)](https://packagist.org/packages/wsdltophp/package-colissimo-pickup-point)

# PackageColissimoPickupPoint
This package has been generated from the [Colissimo PickupPoint Web Services](https://ws.colissimo.fr/pointretrait-ws-cxf/PointRetraitServiceWS/2.0?wsdl) WSDL using the [PackageGenerator](https://github.com/WsdlToPhp/PackageGenerator) project.

# Summary
- [Generating again the package](#generating-again-the-package)
- [How to use the generated package?](#how-to-use-the-generated-package)
    - [Install the project](#install-the-project)
    - [Learn from the tutorial](#learn-from-the-tutorial)
    - [Start from the samples](#start-from-the-samples)
    	- Update your settings first in the file [settings.inc.php](samples/settings.inc.php)
        - [findInternalPointRetraitAcheminementByID](samples/findInternalPointRetraitAcheminementByID.php)
        - [findInternalRDVPointRetraitAcheminement](samples/findInternalRDVPointRetraitAcheminement.php)
        - [findInternalRDVPointRetraitAcheminementByID](samples/findInternalRDVPointRetraitAcheminementByID.php)
        - [findPointRetraitAcheminementByID](samples/findPointRetraitAcheminementByID.php)
        - [findRDVPointRetraitAcheminement](samples/findRDVPointRetraitAcheminement.php)
- [Need support or having a question?](#need-support-or-having-a-question)

# Generating again the package
You can generate again the package's sources using the [generate.sh](generate.sh) script:
```bash
$ git clone https://github.com/WsdlToPhp/PackageColissimoPickupPoint.git package-colissimo-pickup-point
$ cd package-colissimo-pickup-point
$ ./generate.sh
```
After generating the package, don't forget to edit the generated [composer.json](composer.json) file in order to update the psr-4 autoloading:
```json
"psr-4": {
    "ColissimoPickupPoint\\": "./src/",
    "SoapClient\\": "./SoapClient/"
}
```
Then run:
```bash
$ composer update
```
 To learn how to customize the generated package, please read the PackageGenerator's [README](https://github.com/WsdlToPhp/PackageGenerator/blob/master/README.md).

# How to use the generated package?

## Install the project
```bash
$ git clone https://github.com/WsdlToPhp/PackageColissimoPickupPoint.git package-colissimo-pickup-point
$ cd package-colissimo-pickup-point
$ composer update
```

## Learn from the tutorial
Start looking into the auto-generated [tutorial.php](tutorial.php) file. This file contains the starting code to use this package. In addition it contains all the operations provided by the Exchange Web Services and the way to call them.

## Start from the samples
Update your settings first in the file [settings.inc.php](samples/settings.inc.php).

Sample scripts are available under the [samples](samples) folder:

- [findInternalPointRetraitAcheminementByID](samples/findInternalPointRetraitAcheminementByID.php)
- [findInternalRDVPointRetraitAcheminement](samples/findInternalRDVPointRetraitAcheminement.php)
- [findInternalRDVPointRetraitAcheminementByID](samples/findInternalRDVPointRetraitAcheminementByID.php)
- [findPointRetraitAcheminementByID](samples/findPointRetraitAcheminementByID.php)
- [findRDVPointRetraitAcheminement](samples/findRDVPointRetraitAcheminement.php)

# Need support or having a question?
We can help you understand how to use it and how to customize it. Feel free to contact us at contact@wsdltophp.com.

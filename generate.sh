# get the latest wsdltophp.phar
if [ ! -f wsdltophp.phar ]; then
    echo "Download wsdltophp.phar once";
    wget https://phar.wsdltophp.com/wsdltophp.phar;
fi

# get current folder
DEST=`pwd`;

# clean current folder
rm -rf  $DEST/src/ \
        $DEST/tutorial.php \
        $DEST/composer.json \
        $DEST/composer.lock;

# package informations
php-7.3 wsdltophp.phar generate:package \
    --urlorpath="https://ws.colissimo.fr/pointretrait-ws-cxf/PointRetraitServiceWS/2.0?wsdl" \
    --destination=$DEST \
    --composer-name="wsdltophp/package-colissimo-pickup-point" \
    --composer-settings="autoload.psr-4.SoapClient\:./SoapClient/" \
    --addcomments="author:WsdlToPhp <contact@wsdltophp.com>" \
    --soapclient="\SoapClient\SoapClientBase" \
    --namespace="ColissimoPickupPoint";

# generate package
php-7.3 wsdltophp.phar generate:package \
    --urlorpath="https://ws.colissimo.fr/pointretrait-ws-cxf/PointRetraitServiceWS/2.0?wsdl" \
    --destination=$DEST \
    --composer-name="wsdltophp/package-colissimo-pickup-point" \
    --composer-settings="autoload.psr-4.SoapClient\:./SoapClient/" \
    --addcomments="author:WsdlToPhp <contact@wsdltophp.com>" \
    --soapclient="\SoapClient\SoapClientBase" \
    --namespace="ColissimoPickupPoint" \
    --force;

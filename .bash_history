composer require symfony/http-kernel
composer audit
php bin/console debug:router
php bin/console router:match /calculate-price/product/{product<a-zA-Z+>}/taxNumber/{taxNumber<a-z\d+>} --method=POST
php bin/console router:match /calculate-price/product/{product}/taxNumber/{taxNumber} --method=P
OST
php bin/console router:match /calculate-price/product/Iphone/taxNumber/de123456789 --method=P
OST
php bin/console router:match /calculate-price/product/Iphone/taxNumber/de123456789 --method=POST
php bin/console router:match /calculate-price/product/Iphone/taxNumber/de123456789 --method=POST
 php bin/console router:match /calculate-price/product/Iphone/taxNumber/de123456789 --method=POST
php bin/console ?
php bin/console make: ?
composer require jms/serializer-bundle
composer require friendsofsymfony/rest-bundle
composer require generator

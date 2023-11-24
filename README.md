# candidate-test
install docker</br>
install docker compose</br>
Docker php && Nginx</br>
Create Symfony Application</br>
install PHPUnit</br>
integrate PHPUnit</br>
install Doctrine</br>
install PostgreSQL</br>
Form Customization calculate</br>
form validation calculate</br>
Form Customization Purchase</br>
End</br>

1 clone candidate-test</br>
2 docker compose -f ./docker/docker-compose.yml build</br>
3 docker compose -f ./docker/docker-compose.yml up -d</br>



#endpoint :</br>
1 /calculate-price/product/{product}/taxNumber/{taxNumber}/couponCode/{couponCode}</br>
2 /calculate-price/product/{product}/taxNumber/{taxNumber}</br>
3 /purchase/product/{product}/taxNumber/{taxNumber}/couponCode/{couponCode}/paymentProcessor/{paymentProcessor}</br>
4 /purchase/product/{product}/taxNumber/{taxNumber}/paymentProcessor/{paymentProcessor}</br>



#application with a form :</br>
1 http://127.0.0.1/calculate-price</br>
2 http://127.0.0.1/purchase</br>
##Smart Certificate Application
A smart certificate application is a digital certificate system that helps student to get their 
certificate from anywhere. It eliminates the need for a centralized authority to issue and verify 
certificates, making the process more efficient and secure. With a smart certificate application, 
certificates are stored on a decentralized network and can be easily accessible to authorized 
parties, such as employers or educational institutions, with proof of authenticity provided 
through required website. This results in a more streamlined and secures process for issuing, 
storing, and verifying certificates, reducing the risk of fraud and increasing trust in the system.
Every year there are many students who are getting enrolled in universities but there is no such 
digital platform for them to get their certificate virtually. This application will help them to get it 
virtually and certificate will be verified by QR Code
## Installation process:
- Download tag or release from github.com 
- Open the console and cd your project root directory
- Run `cp .env.example .env'
- Modify the database name in the .env file .
- Run `composer install` or ```php composer.phar install```
- Run `php artisan key:generate` 
- Run `php artisan migrate`
- Run `php artisan db:seed` to run seeders, if any.
- Run `php artisan serve --host 0.0.0.0 --port 80`

##### You can now access your project at localhost:8000 :)

## If for some reason your project stop working do these:
- `composer install`
- `php artisan migrate`


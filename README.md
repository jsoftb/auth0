# Auth0
Auth0 Authenticate Object for Cakephp 3.x

More reference about auth0 services: https://auth0.com/

# Installation
Add to your composer.json file "jsoftb/auth0": "dev-master"
Run composer update

# Configuration

Open your AppController and inside the initialize function
```
$this->loadComponent('Auth', [
            'authenticate' => [
                'Auth0.Auth0' => [
                                  'domain'        => '<domain_value_provided_by_auth0>',
                                  'client_id'     => '<client_id_value_provided_by_auth0>',
                                  'client_secret' => '<client_secret_value_provided_by_auth0>',
                                  'redirect_uri'  => '<redirect_uri_value_provided_by_auth0>'
                ]
            ],
]);
```

Follow the instructions about how to set up the login page in Auth0


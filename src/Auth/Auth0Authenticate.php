<?php
namespace Auth0\Auth;

use Auth0\SDK\Auth0;
use Cake\Auth\BaseAuthenticate;
use Cake\Controller\ComponentRegistry;
use \Cake\Network\Request;
use \Cake\Network\Response;


class Auth0Authenticate extends BaseAuthenticate
{

    private $_auth0;

    protected $_defaultConfig = [
        'domain' => '',
        'client_id' => '',
        'client_secret' => '',
        'redirect_uri' => ''
    ];

    public function __construct(ComponentRegistry $registry, array $config = [], Auth0 $auth0 = null)
    {

        parent::__construct($registry, $config);

        if ($auth0 === null)
        {
            $this->_auth0 = new Auth0([
                'domain'        => $this->_configRead('domain'),
                'client_id'     => $this->_configRead('client_id'),
                'client_secret' => $this->_configRead('client_secret'),
                'redirect_uri'  =>$this->_configRead('redirect_uri'),
            ]);
        } else {
            $this->_auth0 = $auth0;
        }

    }

    public function authenticate(Request $request, Response $response)
    {
        $user = $this->getUser($request);
        if ($user === null){
            return false;
        }
        return $user;
    }
    
     public function logout()
    {
    	$this->_auth0->logout();
    }

    public function getUser(Request $request)
    {
        return $this->_auth0->getUser();
    }

    public function getDomain()
    {
        return $this->_configRead('domain');
    }

    public function getClientId()
    {
        return $this->_configRead('client_id');
    }

    public function getClientSecret()
    {
        return $this->_configRead('client_secret');
    }

    public function getRedirectUri()
    {
        return $this->_configRead('redirect_uri');
    }

} 

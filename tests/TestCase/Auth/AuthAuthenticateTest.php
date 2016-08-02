<?php
namespace Authelper\Test\TestCase\Auth;

use Authhelper\Auth\Auth0Authenticate;
use Cake\TestSuite\TestCase;
use Authhelper\Model\Auth0\Auth0User;

class AuthAuthenticateTest extends TestCase{


        private $config = [
            'domain' => 'aDummyDomain',
            'client_id' => 'aDummyClientId',
            'client_secret' => 'aDummyClientSecret',
            'redirect_uri' => 'http://www.github.com'
        ];

    public function setUp()
    {
        parent::setUp();

        $this->registry = $this->getMock('Cake\Controller\ComponentRegistry');
        
        $this->request = $this->getMockBuilder('\Cake\Network\Request')
            ->disableOriginalConstructor()
            ->getMock();
        
        $this->response = $this->getMockBuilder('\Cake\Network\Response')
            ->disableOriginalConstructor()
            ->getMock();

        $this->auth0 = $this->getMockBuilder('Auth0\SDK\Auth0')
            ->disableOriginalConstructor()
            ->setMethods(['getUser', 'deleteAllPersistentData', 'setAccessToken', 'setIdToken', 'setUser' ])
            ->getMock();

        $this->authenticate = new Auth0Authenticate($this->registry, $this->config, $this->auth0);

    }

    /**
     * method construct
     * when always
     * should executeCorrectly
     *
     * @test
     */
    public function construct_always_executeCorrectly()
    {
        $this->assertEquals($this->config['domain'], $this->authenticate->getDomain(), 'Asserting that the domain passed has been configured');
        $this->assertEquals($this->config['client_id'], $this->authenticate->getClientId(), 'Asserting that the client_id passed has been configured');
        $this->assertEquals($this->config['client_secret'], $this->authenticate->getClientSecret(), 'Asserting that the client_secret passed has been configured');
        $this->assertEquals($this->config['redirect_uri'], $this->authenticate->getRedirectUri(), 'Asserting that the redirect_uri passed has been configured');
    }

    /**
     * method getUser
     * when userIsNotAuth
     * should returnFalse
     *
     * @test
     */
    public function getUser_userIsNotAuth_returnFalse()
    {
        $expected = false;

        $this->auth0->expects($this->once())
            ->method('getUser')
            ->will($this->returnValue(null));

        $actual = $this->authenticate->authenticate($this->request, $this->response);

        $this->assertSame($expected, $actual);

    }

    /**
     * method getUser
     * when userIsAuth
     * should returnCorrectly
     *
     * @test
     */
    public function getUser_userIsAuth_returnCorrectly()
    {
        $user = ['user_id' => 'auth0|aDummyId'];
        
        $this->auth0->expects($this->once())
            ->method('getUser')
            ->will($this->returnValue($user));

        $actual = $this->authenticate->authenticate($this->request, $this->response);

        $this->assertEquals($user, $actual);

    }
    
    /**
     * method logout
     * when always
     * should executeCorrectly
     *
     * @test
     */
    public function logout_always_executeCorrectly()
    {
		$this->auth0->expects($this->once())
            ->method('deleteAllPersistentData');
		
        $this->auth0->expects($this->once())
            ->method('setAccessToken')
            ->with($this->equalTo(null));
        
        $this->auth0->expects($this->once())
            ->method('setUser')
            ->with($this->equalTo(null));
        
        $this->auth0->expects($this->once())
            ->method('setIdToken')
            ->with($this->equalTo(null));
    
    	$actual = $this->authenticate->logout();
    }
    
    
    /**
     * method getUserModel
     * when userIsNotAuth
     * should returnFalse
     *
     * @test
     */
    public function getUserModel_userIsNotAuth_returnFalse()
    {
    	$expected = false;
    
    	$this->auth0->expects($this->once())
    		->method('getUser')
    		->will($this->returnValue(null));
    
    	$actual = $this->authenticate->getUserModel($this->request, $this->response);
    
    	$this->assertFalse($actual);
    
    }
    
    /**
     * method getUserModel
     * when userIsAuth
     * should returnCorrectly
     *
     * @test
     */
    public function getUserModel_userIsAuth_returnCorrectly()
    {
    	$user = ['user_id' => 'auth0|aDummyId'];
    	$expected = new Auth0User($user);
    
    	$this->auth0->expects($this->once())
    		->method('getUser')
    		->will($this->returnValue($user));
    
    	$actual = $this->authenticate->getUserModel($this->request, $this->response);
    
    	$this->assertEquals($expected, $actual);
    
    }
    

} 
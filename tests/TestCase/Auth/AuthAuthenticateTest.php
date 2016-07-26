<?php
namespace Auth\Test\TestCase\Auth;

use Auth0\Auth\Auth0Authenticate;
use Cake\TestSuite\TestCase;

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
    public function getUser_userIsAuth_executeCorrectly()
    {
        $expected = 'aDummyUserInfo';

        $authenticate = new Auth0Authenticate($this->registry, $this->config, $this->auth0);

        $this->auth0->expects($this->once())
            ->method('getUser')
            ->will($this->returnValue($expected));

        $actual = $this->authenticate->authenticate($this->request, $this->response);

        $this->assertEquals($expected, $actual);

    }

} 
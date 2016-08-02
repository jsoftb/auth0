<?php

namespace Authhelper\Test\TestCase\Model\Factory;


use Authhelper\Model\Factory\UserFactory;
use Cake\TestSuite\TestCase;

class UserFactoryTest extends TestCase
{

    /**
     * method getUser
     * when userComesFromGoogle
     * should returnCorrectClassInstantiated
     * @test
     */
    public function getUser_userComesFromGoogle_returnCorrectClassInstantiated()
    {
        $userInfo['user_id'] = 'google-oauth2|115423427969790116559';
        $auth0User = UserFactory::getUser($userInfo);

        $this->assertEquals('Authhelper\Model\Auth0\GoogleUser', get_class($auth0User));
    }

    /**
     * method getUser
     * when userComesFromFacebook
     * should returnCorrectClassInstantiated
     * @test
     */
    public function getUser_userComesFromFacebook_returnCorrectClassInstantiated()
    {
        $userInfo['user_id'] = 'facebook|936392123406259';
        $auth0User = UserFactory::getUser($userInfo);

        $this->assertEquals('Authhelper\Model\Auth0\FacebookUser', get_class($auth0User));
    }
    
    /**
     * method getUser
     * when userComesFromMicrosoft
     * should returnCorrectClassInstantiated
     * @test
     */
    public function getUser_userComesFromMicrosoft_returnCorrectClassInstantiated()
    {
    	$userInfo['user_id'] = 'windowslive|ce3443219ccf590e';
    	$auth0User = UserFactory::getUser($userInfo);
    
    	$this->assertEquals('Authhelper\Model\Auth0\MicrosoftUser', get_class($auth0User));
    }
    
    /**
     * method getUser
     * when userComesFromLinkedin
     * should returnCorrectClassInstantiated
     * @test
     */
    public function getUser_userComesFromLinkedin_returnCorrectClassInstantiated()
    {
    	$userInfo['user_id'] = 'linkedin|3_v3214tZIJ';
    	$auth0User = UserFactory::getUser($userInfo);
    
    	$this->assertEquals('Authhelper\Model\Auth0\LinkedinUser', get_class($auth0User));
    }

    /**
     * method getUser
     * when userComesFromAuth0Database
     * should returnCorrectClassInstantiated
     * @test
     */
    public function getUser_userComesFromAuth0Database_returnCorrectClassInstantiated()
    {
        $userInfo['user_id'] = 'auth0|579644d12314c395d8c9dcd';
        $auth0User = UserFactory::getUser($userInfo);

        $this->assertEquals('Authhelper\Model\Auth0\Auth0User', get_class($auth0User));
    }

    /**
     * method getUser
     * when userComesFromUnknownOrigin
     * should throwException
     * @expectedException Authhelper\Exception\InvalidUserAuthTypeException
     * @test
     */
    public function getUser_userComesFromUnknownOrigin_returnCorrectClassInstantiated()
    {
        $userInfo['user_id'] = 'unknownType|579644d12314395d8c9dcd';
        UserFactory::getUser($userInfo);
    }
    
} 
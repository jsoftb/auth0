<?php
/**
 * Created by IntelliJ IDEA.
 * User: jgimenez
 * Date: 7/29/2016
 * Time: 10:45 AM
 */

namespace Authhelper\Test\TestCase\Model\Auth0;

use Authhelper\Model\Auth0\Auth0User;
use Cake\TestSuite\TestCase;

class Auth0UserTest extends TestCase {

    private $user = [
        'email' => 'juan.gimenez@email.org',
        'email_verified' => true,
        "user_metadata" =>[
                "firstname" => "Juan",
                "lastname" => "Smith"
        ],
        'updated_at' => '2016-07-26T21:47:40.072Z',
        'picture' => 'https://s.gravatar.com/avatar/5bc29b2891213123a52d1130824e5dec0?s=480&r=pg&d=https%3A%2F%2Fcdn.auth0.com%2Favatars%2Fju.png',
        'user_id' => 'auth0|579644d012395d8c9dcd',
        'name' => 'juan.gimenez@email.org',
        'nickname' => 'juan.gimenez',
        'identities' =>
            [
                0 =>
                    [
                        'user_id' => '579644d070dddc395d8c9dcd',
                        'provider' => 'auth0',
                        'connection' => 'Username-Password-Authentication',
                        'isSocial' => false,
                    ],
            ],
        'created_at' => '2016-07-25T16:56:48.067Z',
        'last_password_reset' => '2016-07-26T17:32:38.927Z',
        'last_ip' => '164.47.8.61',
        'last_login' => '2016-07-26T21:47:40.072Z',
        'logins_count' => 5,
        'blocked_for' =>[]
    ];

    private $entity;

    public function setUp()
    {
        parent::setUp();
        $this->entity = new Auth0User($this->user);
    }

    /**
     * method getFirstName
     * when always
     * should returnCorrectly
     * @test
     */
    public function getFirstName_always_returnCorrectly()
    {
        $this->assertEquals($this->user['user_metadata']['firstname'], $this->entity->getFirstName());
    }

    /**
     * method getLastName
     * when always
     * should returnCorrectly
     * @test
     */
    public function getLastName_always_returnCorrectly()
    {
        $this->assertEquals($this->user['user_metadata']['lastname'], $this->entity->getLastName());
    }

    /**
     * method getEmail
     * when always
     * should returnCorrectly
     * @test
     */
    public function getEmail_always_returnCorrectly()
    {
        $this->assertEquals($this->user['email'], $this->entity->getEmail());
    }

    /**
     * method getUserId
     * when always
     * should returnCorrectly
     * @test
     */
    public function getUserId_always_returnCorrectly()
    {
        $this->assertEquals($this->user['user_id'], $this->entity->getUserId());
    }

    /**
     * method getPicture
     * when always
     * should returnCorrectly
     * @test
     */
    public function getPicture_always_returnCorrectly()
    {
        $this->assertEquals($this->user['picture'], $this->entity->getPicture());
    }

    /**
     * method getLargePicture
     * when always
     * should returnCorrectly
     * @test
     */
    public function getLargePicture_always_returnCorrectly()
    {
        $this->assertEquals($this->user['picture'], $this->entity->getLargePicture());
    }

    /**
     * method getName
     * when always
     * should returnCorrectly
     * @test
     */
    public function getName_always_returnCorrectly()
    {
        $name = $this->user['user_metadata']['firstname'].' '.$this->user['user_metadata']['lastname'];
        $this->assertEquals($name, $this->entity->getName());
    }

    /**
     * method getLoginCounts
     * when always
     * should returnCorrectly
     * @test
     */
    public function getLoginCounts_always_returnCorrectly()
    {
        $this->assertEquals($this->user['logins_count'], $this->entity->getLoginCounts());
    }

    /**
     * method getLastLogin
     * when always
     * should returnCorrectly
     * @test
     */
    public function getLastLogin_always_returnCorrectly()
    {
        $this->assertEquals($this->user['last_login'], $this->entity->getLastLogin());
    }

    /**
     * method getNickname
     * when always
     * should returnCorrectly
     * @test
     */
    public function getNickname_always_returnCorrectly()
    {
        $this->assertEquals($this->user['nickname'], $this->entity->getNickname());
    }

    /**
     * method getCreatedAt
     * when always
     * should returnCorrectly
     * @test
     */
    public function getCreatedAte_always_returnCorrectly()
    {
        $this->assertEquals($this->user['created_at'], $this->entity->getCreatedAt());
    }

    /**
     * method isSocial
     * when always
     * should returnCorrectly
     * @test
     */
    public function isSocial_always_returnCorrectly()
    {
        $this->assertFalse($this->entity->isSocial());
    }
    
    /**
     * method toArray
     * when always
     * should returnCorrectly
     * @test
     */
    public function toArray_always_returnCorrectly()
    {
    	$this->assertEquals($this->user, $this->entity->toArray());
    }
    
    

} 
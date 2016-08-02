<?php
/**
 * Created by IntelliJ IDEA.
 * User: jgimenez
 * Date: 7/29/2016
 * Time: 10:45 AM
 */

namespace Authhelper\Test\TestCase\Model\Auth0;


use Authhelper\Model\Auth0\GoogleUser;
use Cake\TestSuite\TestCase;

class GoogleUserTest extends TestCase {

    private $user = [
        'email' => 'test_user@gmail.com',
        'email_verified' => true,
        'name' => 'Juan Giménez',
        'given_name' => 'Juan',
        'family_name' => 'Giménez',
        'picture' => 'https://lh5.googleusercontent.com/-Eu-kfCL_ei8/AAAAAAAAAAI/AAAAAAAAARA/N0NMZmt75fo/photo.jpg',
        'gender' => 'male',
        'locale' => 'en',
        'updated_at' => '2016-07-27T19:37:48.160Z',
        'user_id' => 'google-oauth2|115471329790116559',
        'nickname' => 'neojoda',
        'identities' => [0 =>
            [
                'provider' => 'google-oauth2',
                'user_id' => '115471329790116559',
                'connection' => 'google-oauth2',
                'isSocial' => true,
            ],
        ],
        'created_at' => '2016-07-25T16:48:54.129Z',
        'last_ip' => '164.47.8.185',
        'last_login' => '2016-07-27T19:37:48.160Z',
        'logins_count' => 33,
        'blocked_for' =>[],
    ];

    private $entity;

    public function setUp()
    {
        parent::setUp();
        $this->entity = new GoogleUser($this->user);
    }

    /**
     * method getFirstName
     * when always
     * should returnCorrectly
     * @test
     */
    public function getFirstName_always_returnCorrectly()
    {
        $this->assertEquals($this->user['given_name'], $this->entity->getFirstName());
    }

    /**
     * method getLastName
     * when always
     * should returnCorrectly
     * @test
     */
    public function getLastName_always_returnCorrectly()
    {
        $this->assertEquals($this->user['family_name'], $this->entity->getLastName());
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
        $this->assertEquals($this->user['name'], $this->entity->getName());
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
        $this->assertTrue($this->entity->isSocial());
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
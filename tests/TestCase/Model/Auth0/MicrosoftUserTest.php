<?php
/**
 * Created by IntelliJ IDEA.
 * User: jgimenez
 * Date: 7/29/2016
 * Time: 10:45 AM
 */

namespace Authhelper\Test\TestCase\Model\Auth0;


use Cake\TestSuite\TestCase;
use Authhelper\Model\Auth0\MicrosoftUser;

class MicrosoftUserTest extends TestCase {

    private $user = [
    		'name' => 'Juan Gimenez',
    		'given_name' => 'Juan',
    		'family_name' => 'Gimenez',
    		'locale' => 'en_US',
    		'email_verified' => true,
    		'picture' => 'https://apis.live.net/v5.0/ce3477849ccf590e/picture',
    		'updated_at' => '2016-07-30T01:33:37.572Z',
    		'user_id' => 'windowslive|ce3454849ccf590e',
    		'nickname' => 'ASDADS@outlook.com',
    		'identities' => [
    				0 => [
    						'provider' => 'windowslive',
    						'user_id' => 'ce3454849ccf590e',
    						'connection' => 'windowslive',
    						'isSocial' => true,
    				],
    		],
    		'created_at' => '2016-07-29T19:48:59.281Z',
    		'emails' => [
    				0 => 'ASDADS@outlook.com',
    		],
    		'email' => 'ASDADS@outlook.com',
    		'last_ip' => '65.128.81.59',
    		'last_login' => '2016-07-30T01:33:37.572Z',
    		'logins_count' => 5,
    		'blocked_for' => []
    		
	];

    private $entity;

    public function setUp()
    {
        parent::setUp();
        $this->entity = new MicrosoftUser($this->user);
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
<?php

namespace Authhelper\Test\TestCase\Model\Auth0;

use Cake\TestSuite\TestCase;
use Authhelper\Model\Auth0\LinkedinUser;

class LinkedinUserTest extends TestCase {

    private $user = [ 
    		'email' => 'neojoda@email.org',
    		'given_name' => 'Juan Bautista',
    		'family_name' => 'Giménez Sendiu',
    		'picture' => 'https://media.licdn.com/mpr/mprx/0_CcrSH03SMgjcUQF4C1kD8JjS4SNE4nEz_zHSmILSpxjI4QqN6zk28DkuYVTIjLovmQk_6DF2NOmwUt_NIkzlhIEhAOmoUtKMIkzmIoxDV0UQlkwLbz_hwYlplwNV-tFeCFlTuZ6DgRi',
    		'name' => 'Juan Giménez',
    		'distance' => 0,
    		'headline' => 'Project Lead / Senior Programmer Analyst at XXXXXXXX',
    		'industry' => 'Computer Software',
    		'email_verified' => true,
    		'updated_at' => '2016-07-30T03:07:47.140Z',
    		'user_id' => 'linkedin|3_vbQrtZIJ',
    		'nickname' => 'neojoda',
    		'identities' => [
    				0 => 
    				[
    						'provider' => 'linkedin',
    						'user_id' => '3_vbQrtZIJ',
    						'connection' => 'linkedin',
    						'isSocial' => true,
    						
    				],
    		],
    		'created_at' => '2016-07-29T19:57:14.514Z',
    		'last_ip' => '65.128.81.59',
    		'last_login' => '2016-07-30T03:07:47.139Z',
    		'logins_count' => 5,
    		'blocked_for' => []
    		
    ];

    private $entity;

    public function setUp() {
	parent::setUp ();
	$this->entity = new LinkedinUser( $this->user );
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
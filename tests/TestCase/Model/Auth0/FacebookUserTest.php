<?php
/**
 * Created by IntelliJ IDEA.
 * User: jgimenez
 * Date: 7/29/2016
 * Time: 10:45 AM
 */

namespace Authhelper\Test\TestCase\Model\Auth0;


use Authhelper\Model\Auth0\FacebookUser;
use Cake\TestSuite\TestCase;

class FacebookUserTest extends TestCase {

    private $user = array (
        'name' => 'Jsoftb Lamp',
        'email' => 'jsoftb@email.org',
        'given_name' => 'Jsoftb',
        'family_name' => 'Lamp',
        'gender' => 'male',
        'picture' => 'https://scontent.xx.fbcdn.net/v/t1.0-1/c192.46.576.576/s50x50/377226_1214234234234_1168724481_n.jpg?oh=75dff1a0623a72ec8b3590a7bac5ff50&oe=58223335',
        'picture_large' => 'https://scontent.xx.fbcdn.net/t31.0-1/asdasdasd.jpg',
        'age_range' => [
            'min' => 21,
        ],
        'context' =>
            [
                'mutual_likes' =>
                    [
                        'data' => [],
                        'summary' => [
                            'total_count' => 48,
                        ],
                    ],
                'id' => 'dXNlcl9jb250ZAXh0OgGQY5QExhwxWNhYTAKxRoUc3A7ktOxzVsemZB4nYBIXHOMLUBIqIZC2FLcKIkdJkRkiVFJ91egONcqrZA3QVumrVdxlgPzwXVCBkcp4dLVdlwrcZBUZD',
            ],
        'cover' =>[
            'id' => '1946612312345398',
            'offset_y' => 100,
            'source' => 'https://scontent.xx.fbcdn.net/v/t1.0-9/538233_194612345398_1182642577_n.jpg?oh=05b322c5b5a01bf41493770f79fdd0b8&oe=5835CB60',
            ],
        'devices' => [
            0 => [
                'hardware' => 'iPhone',
                'os' => 'iOS',
            ],
        ],
        'updated_time' => '2014-01-14T17:28:27+0000',
        'installed' => true,
        'is_verified' => false,
        'link' => 'https://www.facebook.com/app_scoped_user_id/9312313206259/',
        'locale' => 'en_US',
        'name_format' => '{first} {last}',
        'timezone' => -6,
        'third_party_id' => 'HrUpZ123AODJweBJr2uS8w1ds',
        'verified' => true,
        'email_verified' => true,
        'updated_at' => '2016-07-26T21:47:15.716Z',
        'user_id' => 'facebook|9312313206259',
        'nickname' => 'jsoftb',
        'identities' => [
            0 =>[
                'provider' => 'facebook',
                'user_id' => '9312313206259',
                'connection' => 'facebook',
                'isSocial' => true,
            ]
        ],
        'created_at' => '2016-07-25T19:43:11.618Z',
        'last_ip' => '164.47.8.61',
        'last_login' => '2016-07-26T21:47:15.715Z',
        'logins_count' => 7,
        'blocked_for' =>[]
    );

    private $entity;

    public function setUp()
    {
        parent::setUp();
        $this->entity = new FacebookUser($this->user);
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
        $this->assertEquals($this->user['picture_large'], $this->entity->getLargePicture());
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
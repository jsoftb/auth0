<?php
namespace Authhelper\Model\Auth0;


abstract class BaseUser implements IAuth0User
{
    protected $_user;

    public function __construct($userInfo)
    {
        $this->_user = $userInfo;
    }
    
    public function toArray()
    {
    	return $this->_user;
    }

    public function getFirstName()
    {
        return $this->_user['given_name'];
    }

    public function getLastName()
    {
        return $this->_user['family_name'];
    }

    public function getEmail()
    {
        return $this->_user['email'];
    }

    public function getUserId()
    {
        return $this->_user['user_id'];
    }

    public function getPicture()
    {
        return $this->_user['picture'];
    }
    
    public function getLargePicture()
    {
    	return $this->_user['picture'];
    }

    public function getName()
    {
        return $this->_user['name'];
    }

    public function getLoginCounts()
    {
        return $this->_user['logins_count'];
    }

    public function getLastLogin()
    {
        return $this->_user['last_login'];
    }

    public function getNickname()
    {
        return $this->_user['nickname'];
    }

    public function getCreatedAt()
    {
        return $this->_user['created_at'];
    }

    public function isSocial()
    {
        return $this->_user['identities'][0]['isSocial'];
    }

} 
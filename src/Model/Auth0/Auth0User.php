<?php
namespace Authhelper\Model\Auth0;


class Auth0User extends BaseUser
{

    public function getFirstName()
    {
        return $this->_user['user_metadata']['firstname'];
    }

    public function getLastName()
    {
        return $this->_user['user_metadata']['lastname'];
    }

    public function getName()
    {
        return $this->_user['user_metadata']['firstname'].' '.$this->_user['user_metadata']['lastname'];
    }

} 
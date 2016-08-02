<?php
namespace Authhelper\Model\Auth0;


class FacebookUser extends BaseUser
{
    
    public function getLargePicture()
    {
        return $this->_user['picture_large'];
    }

} 
<?php
namespace Authhelper\Model\Factory;


use Authhelper\Model\Auth0\Auth0User;
use Authhelper\Model\Auth0\FacebookUser;
use Authhelper\Model\Auth0\GoogleUser;
use Authhelper\Exception\InvalidUserAuthTypeException;
use Authhelper\Model\Auth0\LinkedinUser;
use Authhelper\Model\Auth0\MicrosoftUser;

class UserFactory
{

   static public function getUser($userInfo)
   {

       $userId = $userInfo['user_id'];
       $authType = explode('|', $userId)[0];

       switch ($authType)
       {
           case 'google-oauth2':
               return new GoogleUser($userInfo);
               break;
           case 'facebook':
               return new FacebookUser($userInfo);
               break;
           case 'auth0':
               return new Auth0User($userInfo);
               break;
           case 'linkedin':
           	   return new LinkedinUser($userInfo);
           	   break;
           case 'windowslive':
           	   	return new MicrosoftUser($userInfo);
           	   	break;
           default:
               throw new InvalidUserAuthTypeException($authType.' it is not allowed');
               break;
       }

   }

} 
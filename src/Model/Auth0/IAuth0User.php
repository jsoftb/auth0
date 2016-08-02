<?php
namespace Authhelper\Model\Auth0;

interface IAuth0User {

    public function __construct($userIfo);
    public function getFirstName();
    public function getLastName();
    public function getEmail();
    public function getUserId();
    public function getPicture();
    public function getLargePicture();
    public function getName();
    public function getLoginCounts();
    public function getLastLogin();
    public function getNickname();
    public function getCreatedAt();
    public function isSocial();

} 
<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class UpdateUserRequest extends Model
{
    /**
     * @var bool
     */
    public $adminUser;

    /**
     * @var bool
     */
    public $authAdminUser;

    /**
     * @var string
     */
    public $nickName;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var int
     */
    public $userType;
    protected $_name = [
        'adminUser'     => 'AdminUser',
        'authAdminUser' => 'AuthAdminUser',
        'nickName'      => 'NickName',
        'userId'        => 'UserId',
        'userType'      => 'UserType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adminUser) {
            $res['AdminUser'] = $this->adminUser;
        }
        if (null !== $this->authAdminUser) {
            $res['AuthAdminUser'] = $this->authAdminUser;
        }
        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdminUser'])) {
            $model->adminUser = $map['AdminUser'];
        }
        if (isset($map['AuthAdminUser'])) {
            $model->authAdminUser = $map['AuthAdminUser'];
        }
        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}

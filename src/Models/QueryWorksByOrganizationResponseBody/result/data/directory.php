<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryWorksByOrganizationResponseBody\result\data;

use AlibabaCloud\Tea\Model;

class directory extends Model
{
    /**
     * @description ID of the directory to which it belongs.
     *
     * @example 83d37ba6-d909-48a2-a517-f4d05c3a****
     *
     * @var string
     */
    public $id;

    /**
     * @description Name of the directory to which it belongs.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description Hierarchical structure of the directory ID, separated by『/』.
     *
     * @example 83d37ba6-d909-48a2-a517-f4d05c3a****
     *
     * @var string
     */
    public $pathId;

    /**
     * @description Hierarchical structure of the directory name, separated by『/』.
     *
     * @example Attention
     *
     * @var string
     */
    public $pathName;
    protected $_name = [
        'id' => 'Id',
        'name' => 'Name',
        'pathId' => 'PathId',
        'pathName' => 'PathName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pathId) {
            $res['PathId'] = $this->pathId;
        }
        if (null !== $this->pathName) {
            $res['PathName'] = $this->pathName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return directory
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PathId'])) {
            $model->pathId = $map['PathId'];
        }
        if (isset($map['PathName'])) {
            $model->pathName = $map['PathName'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class UpdateUserTagMetaRequest extends Model
{
    /**
     * @var string
     */
    public $tagDescription;

    /**
     * @description This parameter is required.
     *
     * @example e82f6c6c0333431bad0225b2f85e****
     *
     * @var string
     */
    public $tagId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $tagName;
    protected $_name = [
        'tagDescription' => 'TagDescription',
        'tagId'          => 'TagId',
        'tagName'        => 'TagName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagDescription) {
            $res['TagDescription'] = $this->tagDescription;
        }
        if (null !== $this->tagId) {
            $res['TagId'] = $this->tagId;
        }
        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateUserTagMetaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagDescription'])) {
            $model->tagDescription = $map['TagDescription'];
        }
        if (isset($map['TagId'])) {
            $model->tagId = $map['TagId'];
        }
        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class GetWorksEmbedListRequest extends Model
{
    /**
     * @var string
     */
    public $keyword;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example page
     *
     * @var string
     */
    public $worksType;

    /**
     * @example 919818-***-*****-wdasd
     *
     * @var string
     */
    public $wsId;
    protected $_name = [
        'keyword'   => 'Keyword',
        'pageNo'    => 'PageNo',
        'pageSize'  => 'PageSize',
        'worksType' => 'WorksType',
        'wsId'      => 'WsId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->worksType) {
            $res['WorksType'] = $this->worksType;
        }
        if (null !== $this->wsId) {
            $res['WsId'] = $this->wsId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetWorksEmbedListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['WorksType'])) {
            $model->worksType = $map['WorksType'];
        }
        if (isset($map['WsId'])) {
            $model->wsId = $map['WsId'];
        }

        return $model;
    }
}
<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListDataSourceResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 281*****-485******-8
     *
     * @var string
     */
    public $creatorId;

    /**
     * @example system
     *
     * @var string
     */
    public $creatorName;

    /**
     * @example 7FC9A6A6-****-5CED-B*****E891E4075
     *
     * @var string
     */
    public $datasourceId;

    /**
     * @example odps
     *
     * @var string
     */
    public $dsType;

    /**
     * @example 2024-04-16 13:17:39
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2024-08-15 10:06:31
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example dataphin
     *
     * @var string
     */
    public $parentDsType;

    /**
     * @example 0327
     *
     * @var string
     */
    public $showName;
    protected $_name = [
        'creatorId'    => 'CreatorId',
        'creatorName'  => 'CreatorName',
        'datasourceId' => 'DatasourceId',
        'dsType'       => 'DsType',
        'gmtCreate'    => 'GmtCreate',
        'gmtModified'  => 'GmtModified',
        'parentDsType' => 'ParentDsType',
        'showName'     => 'ShowName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->creatorName) {
            $res['CreatorName'] = $this->creatorName;
        }
        if (null !== $this->datasourceId) {
            $res['DatasourceId'] = $this->datasourceId;
        }
        if (null !== $this->dsType) {
            $res['DsType'] = $this->dsType;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->parentDsType) {
            $res['ParentDsType'] = $this->parentDsType;
        }
        if (null !== $this->showName) {
            $res['ShowName'] = $this->showName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['CreatorName'])) {
            $model->creatorName = $map['CreatorName'];
        }
        if (isset($map['DatasourceId'])) {
            $model->datasourceId = $map['DatasourceId'];
        }
        if (isset($map['DsType'])) {
            $model->dsType = $map['DsType'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['ParentDsType'])) {
            $model->parentDsType = $map['ParentDsType'];
        }
        if (isset($map['ShowName'])) {
            $model->showName = $map['ShowName'];
        }

        return $model;
    }
}
<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDatasetInfoResponseBody\result;

use AlibabaCloud\Dara\Model;

class measureList extends Model
{
    /**
     * @var string
     */
    public $caption;

    /**
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $expression;

    /**
     * @var string
     */
    public $expressionV2;

    /**
     * @var string
     */
    public $factColumn;

    /**
     * @var string
     */
    public $fieldDescription;

    /**
     * @var string
     */
    public $measureType;

    /**
     * @var string
     */
    public $tableUniqueId;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'caption' => 'Caption',
        'dataType' => 'DataType',
        'expression' => 'Expression',
        'expressionV2' => 'ExpressionV2',
        'factColumn' => 'FactColumn',
        'fieldDescription' => 'FieldDescription',
        'measureType' => 'MeasureType',
        'tableUniqueId' => 'TableUniqueId',
        'uid' => 'Uid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->caption) {
            $res['Caption'] = $this->caption;
        }

        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }

        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }

        if (null !== $this->expressionV2) {
            $res['ExpressionV2'] = $this->expressionV2;
        }

        if (null !== $this->factColumn) {
            $res['FactColumn'] = $this->factColumn;
        }

        if (null !== $this->fieldDescription) {
            $res['FieldDescription'] = $this->fieldDescription;
        }

        if (null !== $this->measureType) {
            $res['MeasureType'] = $this->measureType;
        }

        if (null !== $this->tableUniqueId) {
            $res['TableUniqueId'] = $this->tableUniqueId;
        }

        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Caption'])) {
            $model->caption = $map['Caption'];
        }

        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }

        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }

        if (isset($map['ExpressionV2'])) {
            $model->expressionV2 = $map['ExpressionV2'];
        }

        if (isset($map['FactColumn'])) {
            $model->factColumn = $map['FactColumn'];
        }

        if (isset($map['FieldDescription'])) {
            $model->fieldDescription = $map['FieldDescription'];
        }

        if (isset($map['MeasureType'])) {
            $model->measureType = $map['MeasureType'];
        }

        if (isset($map['TableUniqueId'])) {
            $model->tableUniqueId = $map['TableUniqueId'];
        }

        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryTicketInfoResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description Notes.
     *
     * @example a27a9aec-****-****-bd40-1a21ea41d7c5
     *
     * @var string
     */
    public $accessTicket;

    /**
     * @description The ID of the component in the report.
     *
     * @example sfdgsds-****-****-a608-mghdgd
     *
     * @var string
     */
    public $cmptId;

    /**
     * @description Global parameters.
     *
     * @example [&{quot;paramKey\\&quot;:\\&quot;price\\&quot;,\\&quot;joinType\\&quot;and\\&quot;,\\&quot;conditionList\\&quot;:[{\\&quot; operation\\&quot;\\&quot;\\&quot;\\&quot;\\&quot;\\&quot;\\&quot;value ;& quot;\\&quot;\\&quot;\\&quot;\\&quot;\\&quot;\\&quot;\\&quot;\\&quot;\\&quot product_type\\&quot;,\\&quot;joinType\\&quot;:\\&quot;and ";,& quot;conditionList\\&quot;, the conditions must be:[{\\&quot;operate" ;:& quot;in\\&quot;,\\&quot;value\\&quot;, the conditions must be:[\\&quot; office supplies\\&quot;,\\&quot; furniture products\\&quot;]}]}]\\n
     *
     * @var string
     */
    public $globalParam;

    /**
     * @description Expiration time of the note.
     *
     * @example 2022-01-30 03:03:49
     *
     * @var string
     */
    public $invalidTime;

    /**
     * @description The maximum number of supported bills.
     *
     * @example 9999
     *
     * @var int
     */
    public $maxTicketNum;

    /**
     * @description The ID of the organization.
     *
     * @example 2fe4fbd8-****-****-b3e1-e92c7af083ea
     *
     * @var string
     */
    public $organizationId;

    /**
     * @description The registration time of the ticket.
     *
     * @example 2022-01-09 22:23:49
     *
     * @var string
     */
    public $registerTime;

    /**
     * @description The number of bills that have been consumed.
     *
     * @example 47
     *
     * @var int
     */
    public $usedTicketNum;

    /**
     * @description The user ID of the Quick BI.
     *
     * @example 974e50**********9033f46
     *
     * @var string
     */
    public $userId;

    /**
     * @description Set the watermarking parameters.
     *
     * @example Tripartite embedding of Ticket
     *
     * @var string
     */
    public $watermarkParam;

    /**
     * @description The ID of the operations report.
     *
     * @example ccd3428c-****-****-a608-26bae29dffee
     *
     * @var string
     */
    public $worksId;
    protected $_name = [
        'accessTicket' => 'AccessTicket',
        'cmptId' => 'CmptId',
        'globalParam' => 'GlobalParam',
        'invalidTime' => 'InvalidTime',
        'maxTicketNum' => 'MaxTicketNum',
        'organizationId' => 'OrganizationId',
        'registerTime' => 'RegisterTime',
        'usedTicketNum' => 'UsedTicketNum',
        'userId' => 'UserId',
        'watermarkParam' => 'WatermarkParam',
        'worksId' => 'WorksId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessTicket) {
            $res['AccessTicket'] = $this->accessTicket;
        }
        if (null !== $this->cmptId) {
            $res['CmptId'] = $this->cmptId;
        }
        if (null !== $this->globalParam) {
            $res['GlobalParam'] = $this->globalParam;
        }
        if (null !== $this->invalidTime) {
            $res['InvalidTime'] = $this->invalidTime;
        }
        if (null !== $this->maxTicketNum) {
            $res['MaxTicketNum'] = $this->maxTicketNum;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->registerTime) {
            $res['RegisterTime'] = $this->registerTime;
        }
        if (null !== $this->usedTicketNum) {
            $res['UsedTicketNum'] = $this->usedTicketNum;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->watermarkParam) {
            $res['WatermarkParam'] = $this->watermarkParam;
        }
        if (null !== $this->worksId) {
            $res['WorksId'] = $this->worksId;
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
        if (isset($map['AccessTicket'])) {
            $model->accessTicket = $map['AccessTicket'];
        }
        if (isset($map['CmptId'])) {
            $model->cmptId = $map['CmptId'];
        }
        if (isset($map['GlobalParam'])) {
            $model->globalParam = $map['GlobalParam'];
        }
        if (isset($map['InvalidTime'])) {
            $model->invalidTime = $map['InvalidTime'];
        }
        if (isset($map['MaxTicketNum'])) {
            $model->maxTicketNum = $map['MaxTicketNum'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['RegisterTime'])) {
            $model->registerTime = $map['RegisterTime'];
        }
        if (isset($map['UsedTicketNum'])) {
            $model->usedTicketNum = $map['UsedTicketNum'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['WatermarkParam'])) {
            $model->watermarkParam = $map['WatermarkParam'];
        }
        if (isset($map['WorksId'])) {
            $model->worksId = $map['WorksId'];
        }

        return $model;
    }
}

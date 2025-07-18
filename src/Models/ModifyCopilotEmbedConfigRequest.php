<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class ModifyCopilotEmbedConfigRequest extends Model
{
    /**
     * @description Agent nickname.
     *
     * @example smartq
     *
     * @var string
     */
    public $agentName;

    /**
     * @description Embedding ID.
     *
     * This parameter is required.
     *
     * @example ccd3428c-dd2xxxxxxxxxxxxdffee
     *
     * @var string
     */
    public $copilotId;

    /**
     * @description Data range.
     * >Notice: The parameter type is jsonString, and only one switch between analysis themes and query resources can be effective. When the all-select switch is true, it takes precedence. It is recommended to pass only one parameter, with other notes
     *
     * @example Map<String,Object> data=new HashMap<>();
     * data.put("allTheme",true);
     * //data.put("allCube",true);
     * //data.put("themes",Lists.newArrayList("1111","22222"));
     * //data.put("llmCubes",Lists.newArrayList("33333","44444"));
     * request.setDataRange(JSON.toJSONString(data));
     *
     * @var string
     */
    public $dataRange;

    /**
     * @description Module name.
     *
     * @example smartq
     *
     * @var string
     */
    public $moduleName;
    protected $_name = [
        'agentName' => 'AgentName',
        'copilotId' => 'CopilotId',
        'dataRange' => 'DataRange',
        'moduleName' => 'ModuleName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }
        if (null !== $this->copilotId) {
            $res['CopilotId'] = $this->copilotId;
        }
        if (null !== $this->dataRange) {
            $res['DataRange'] = $this->dataRange;
        }
        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyCopilotEmbedConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }
        if (isset($map['CopilotId'])) {
            $model->copilotId = $map['CopilotId'];
        }
        if (isset($map['DataRange'])) {
            $model->dataRange = $map['DataRange'];
        }
        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }

        return $model;
    }
}

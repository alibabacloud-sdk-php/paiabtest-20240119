<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIABTest\V20240119\Models;

use AlibabaCloud\Tea\Model;

class CreateExperimentVersionResponseBody extends Model
{
    /**
     * @var string
     */
    public $experimentVersionId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'experimentVersionId' => 'ExperimentVersionId',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->experimentVersionId) {
            $res['ExperimentVersionId'] = $this->experimentVersionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateExperimentVersionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExperimentVersionId'])) {
            $model->experimentVersionId = $map['ExperimentVersionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

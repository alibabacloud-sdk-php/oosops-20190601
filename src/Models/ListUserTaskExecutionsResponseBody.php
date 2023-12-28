<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oosops\V20190601\Models;

use AlibabaCloud\SDK\Oosops\V20190601\Models\ListUserTaskExecutionsResponseBody\taskExecutions;
use AlibabaCloud\Tea\Model;

class ListUserTaskExecutionsResponseBody extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var taskExecutions[]
     */
    public $taskExecutions;
    protected $_name = [
        'maxResults'     => 'MaxResults',
        'nextToken'      => 'NextToken',
        'requestId'      => 'RequestId',
        'taskExecutions' => 'TaskExecutions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskExecutions) {
            $res['TaskExecutions'] = [];
            if (null !== $this->taskExecutions && \is_array($this->taskExecutions)) {
                $n = 0;
                foreach ($this->taskExecutions as $item) {
                    $res['TaskExecutions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserTaskExecutionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskExecutions'])) {
            if (!empty($map['TaskExecutions'])) {
                $model->taskExecutions = [];
                $n                     = 0;
                foreach ($map['TaskExecutions'] as $item) {
                    $model->taskExecutions[$n++] = null !== $item ? taskExecutions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

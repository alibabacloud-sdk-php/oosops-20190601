<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oosops\V20190601\Models;

use AlibabaCloud\Tea\Model;

class UpdatePublicTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $popularity;

    /**
     * @var string
     */
    public $publisher;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $templateName;
    protected $_name = [
        'content'      => 'Content',
        'popularity'   => 'Popularity',
        'publisher'    => 'Publisher',
        'regionId'     => 'RegionId',
        'templateName' => 'TemplateName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->popularity) {
            $res['Popularity'] = $this->popularity;
        }
        if (null !== $this->publisher) {
            $res['Publisher'] = $this->publisher;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePublicTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Popularity'])) {
            $model->popularity = $map['Popularity'];
        }
        if (isset($map['Publisher'])) {
            $model->publisher = $map['Publisher'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}

<?php

namespace skeeks\cms\models;

use Yii;

/**
 * This is the model class for table "{{%cms_content_element_image}}".
 *
 * @property integer $id
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $storage_file_id
 * @property integer $content_element_id
 * @property integer $priority
 *
 * @property CmsContentElement $contentElement
 * @property CmsStorageFile $storageFile
 */
class CmsContentElementImage extends \skeeks\cms\models\Core
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%cms_content_element_image}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_by', 'updated_by', 'created_at', 'updated_at', 'storage_file_id', 'content_element_id', 'priority'], 'integer'],
            [['storage_file_id', 'content_element_id'], 'required'],
            [['storage_file_id', 'content_element_id'], 'unique', 'targetAttribute' => ['storage_file_id', 'content_element_id'], 'message' => 'The combination of Storage File ID and Content Element ID has already been taken.']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'storage_file_id' => Yii::t('app', 'Storage File ID'),
            'content_element_id' => Yii::t('app', 'Content Element ID'),
            'priority' => Yii::t('app', 'Priority'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContentElement()
    {
        return $this->hasOne(CmsContentElement::className(), ['id' => 'content_element_id']);
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStorageFile()
    {
        return $this->hasOne(CmsStorageFile::className(), ['id' => 'storage_file_id']);
    }
}
<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "image".
 *
 * @property integer $id
 * @property string $author
 * @property string $category
 * @property string $title
 * @property string $date_upload
 * @property integer $status
 */
class Image extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'image';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date_upload'], 'safe'],
            [['status'], 'integer'],
            [['author', 'category', 'title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'author' => 'Author',
            'category' => 'Category',
            'title' => 'Title',
            'date_upload' => 'Date Upload',
            'status' => 'Status',
        ];
    }
}

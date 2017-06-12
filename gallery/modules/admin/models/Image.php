<?php

namespace app\modules\admin\models;

use Yii;
use app\modules\admin\models\Category;

/**
 * This is the model class for table "image".
 *
 * @property integer $id
 * @property string $author
 * @property integer $category_id
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
            [['category_id'], 'required'],
            [['category_id', 'status'], 'integer'],
            [['date_upload'], 'safe'],
            [['author', 'title'], 'string', 'max' => 255],
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
            'category_id' => 'Category ID',
            'title' => 'Title',
            'date_upload' => 'Date Upload',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory(){
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}

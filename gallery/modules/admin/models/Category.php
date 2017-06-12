<?php

namespace app\modules\admin\models;

use Yii;
use app\modules\admin\models\Image;

/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property string $slug
 * @property string $name
 * @property integer $status
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['slug', 'name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'slug' => 'Slug',
            'name' => 'Name',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImages(){
        return $this->hasMany(Image::className(), ['category_id' => 'id']);
    }
}

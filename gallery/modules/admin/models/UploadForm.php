<?php

namespace app\modules\admin\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
{

    public $file;

    public function rules()
    {
        return [
            // username and password are both required

            [['file'], 'file', 'extensions' => 'png, jpg, jpeg, gif', 'skipOnEmpty' => false]];
    }

    public function upload()
    {
        if ($this->validate()) {
            $this->file->saveAs('uploads/' . $this->file->baseName .'.'. $this->file->extension);
        } else {
            return false;
        }
    }

}
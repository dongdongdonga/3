<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "examination_typetbl".
 *
 * @property string $id
 * @property string $examination_type
 */
class ExaminationTypetbl extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'examination_typetbl';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['examination_type'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'examination_type' => 'Examination Type',
        ];
    }
}

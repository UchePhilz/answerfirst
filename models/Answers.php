<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "answers".
 *
 * @property int $id
 * @property string $answer
 * @property string $question
 * @property string $answer_token
 * @property string $create_time
 */
class Answers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'answers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['answer'], 'string'],
            [['question', 'answer_token'], 'required'],
            [['create_time'], 'safe'],
            [['question'], 'string', 'max' => 5000],
            [['answer_token'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'answer' => 'Answer',
            'question' => 'Question',
            'answer_token' => 'Answer Token',
            'create_time' => 'Create Time',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \app\models\queries\AnswersQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\queries\AnswersQuery(get_called_class());
    }
}

<?php

namespace app\models;

use Yii;
use app\models\ChatMessage;

/**
 * This is the model class for table "chat_form".
 *
 * @property int $id
 * @property string $chatname
 */
class ChatForm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'chat_form';
    }

    public function getMessages()
    {
        return $this->hasMany(ChatMessage::className(), ['chat_id' => 'id']);
    }    

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['chatname'], 'required'],
            [
                'chatname','default',
                'value' => 'test default value',
                'on' => 'insert',
            ],
            [['chatname'], 'string', 'max' => 255],
            [['chatname'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'chatname' => Yii::t('app', 'Chatname'),
        ];
    }
}

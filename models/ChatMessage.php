<?php

namespace app\models;

use Yii;
use app\models\ChatForm;

/**
 * This is the model class for table "chat_message".
 *
 * @property int $id
 * @property int $chat_id
 * @property string|null $message_text
 */
class ChatMessage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'chat_message';
    }

    public function getChat()
    {
        return $this->hasOne(ChatForm::className(), ['id' => 'chat_id']);
    } 

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['chat_id'], 'integer'],
            [['messagetext'], 'required'],
            [['messagetext'], 'string', 'max' => 255],
            [
                'messagetext','default',
                'value' => 'test default value',
                'on' => 'insert',
            ],
            [['messagetext'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'chat_id' => Yii::t('app', 'Chat ID'),
            'messagetext' => Yii::t('app', 'Message Text'),
        ];
    }
}

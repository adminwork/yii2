<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property string $username
 * @property string $pass
 * @property string $pass_confirm
 * @property string $email
 * @property string $age_user
 * @property string $create_at
 * @property string $update_at
 * @property string $first_name
 * @property string $last_name
 * @property string $avatar
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'pass', 'pass_confirm', 'email', 'age_user'], 'required'],
            [['create_at', 'update_at'], 'safe'],
            [['username', 'pass', 'pass_confirm', 'email', 'age_user', 'first_name', 'last_name'], 'string', 'max' => 255],
            [['avatar'], 'string', 'max' => 500]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'pass' => 'Pass',
            'pass_confirm' => 'Pass Confirm',
            'email' => 'Email',
            'age_user' => 'Age User',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'avatar' => 'Avatar',
        ];
    }
}

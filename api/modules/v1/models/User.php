<?php

namespace api\modules\v1\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $fullname
 * @property string $password
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 * @property string $last_login
 */
class User extends \yii\db\ActiveRecord
{

    const ROLE_USER = 1;
    const ROLE_ADMIN = 10;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'fullname', 'password'], 'required'],
            [['status'], 'integer'],
            [['created_at', 'updated_at', 'last_login'], 'safe'],
            [['username'], 'string', 'max' => 50],
            [['fullname'], 'string', 'max' => 255],
            [['password'], 'string', 'max' => 500],
            [['role'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'fullname' => 'Fullname',
            'password' => 'Password',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'last_login' => 'Last Login',
            'role' => 'Role',
        ];
    }
}

<?php
namespace backend\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * User model
 *
 * @property integer $id
 * @property string $username
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property string $auth_key
 * @property integer $role
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $password write-only password
 */
class Admin extends \common\models\Admin
{
    public $password;
    public $repassword;
    private $_statusLabel;
    private $_roleLabel;

    /**
     * @inheritdoc
     */
    public function getStatusLabel()
    {
        if ($this->_statusLabel === null) {
            $statuses = self::getArrayStatus();
            $this->_statusLabel = $statuses[$this->status];
        }
        return $this->_statusLabel;
    }

    public function behaviors()
    {
        return [
//            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public static function getArrayStatus()
    {
        return [
            self::STATUS_ACTIVE   => Yii::t('app', 'STATUS_ACTIVE'),
            self::STATUS_INACTIVE => Yii::t('app', 'STATUS_INACTIVE'),
            self::STATUS_DELETED  => Yii::t('app', 'STATUS_DELETED'),
        ];
    }

    public static function getArrayRole()
    {
        $uid  = Yii::$app->user->id;    // 用户ID
        $auth = Yii::$app->authManager; // 权限对象
        // 管理员
        $roles = $uid == 1 ? $auth->getRoles() : $auth->getRolesByUser($uid);
        return ArrayHelper::map($roles, 'name', 'description');
    }

    public function getRoleLabel()
    {
        if ($this->_roleLabel === null) {
            $roles = self::getArrayRole();
            $this->_roleLabel = $roles[$this->role];
        }
        return $this->_roleLabel;
    }

    // 验证规则
    public function rules()
    {
        return [
            [['username', 'email'], 'required'],
            [['password', 'repassword', 'role'], 'required', 'on' => ['admin-create']],
            [['username', 'email', 'password', 'repassword'], 'trim'],
            [['password', 'repassword'], 'string', 'min' => 6, 'max' => 30],
            // Unique
            [['username', 'email'], 'unique'],
            // Username
            ['username', 'match', 'pattern' => '/^[a-zA-Z0-9_-]+$/'],
            ['username', 'string', 'min' => 3, 'max' => 30],
            // E-mail
            ['email', 'string', 'max' => 100],
            ['email', 'email'],
            // Repassword
            ['repassword', 'compare', 'compareAttribute' => 'password'],
            //['status', 'default', 'value' => self::STATUS_ACTIVE],
            ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_INACTIVE, self::STATUS_DELETED]],
            // Status
            ['role', 'in', 'range' => array_keys(self::getArrayRole())],
        ];
    }

    // 验证场景
    public function scenarios()
    {
        return [
            'admin-create' => ['username', 'email', 'password', 'repassword', 'status', 'role'],
            'admin-update' => ['username', 'email', 'password', 'repassword', 'status', 'role']
        ];
    }

    // 字段信息
    public function attributeLabels()
    {
        $labels = parent::attributeLabels();

        return array_merge(
            $labels,
            [
                'password'   => '密码',
                'repassword' => '确认密码',
            ]
        );
    }

    // 修改之前
    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert))
        {
            // 新增记录和修改了密码
            if ($this->isNewRecord || (!$this->isNewRecord && $this->password))
            {
                $this->setPassword($this->password);
                $this->generateAuthKey();
                $this->generatePasswordResetToken();

                // 新增的时候添加新增时间和用户
                if ($this->isNewRecord)
                {
                    $this->create_id   = Yii::$app->getUser()->id;
                    $this->create_time = time();
                }
            }

            $this->update_id   = Yii::$app->getUser()->id;
            $this->update_time = time();
            return true;
        }
        return false;
    }

    // 获取错误信息
    public function getErrorString()
    {
        $str    = '';
        $errors = $this->getErrors();
        if ( ! empty($errors))
        {
            foreach ($errors as $value)
            {
                if (is_array($value))
                    foreach ($value as $val) $str .= $val;
                else
                    $str .= $value;
            }
        }

        return $str;
    }
}
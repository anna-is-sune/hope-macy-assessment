<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "application".
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $data_of_birth
 * @property string|null $description
 * @property float $income
 * @property int $number_of_dependents
 * @property int $created_at
 * @property int $updated_at
 */
class ApplicationModel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'application';
    }

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => \yii\behaviors\TimestampBehavior::class,
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
                'value' => time(),
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'default', 'value' => null],
            [['income'], 'default', 'value' => 0.00],
            [['number_of_dependents'], 'default', 'value' => 0],
            [['updated_at'], 'default', 'value' => 1749827404],
            [['first_name', 'last_name', 'data_of_birth'], 'required'],
            [['data_of_birth'], 'safe'],
            [['description'], 'string'],
            [['income'], 'number'],
            [['number_of_dependents', 'created_at', 'updated_at'], 'integer'],
            [['first_name', 'last_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'data_of_birth' => 'Data Of Birth',
            'description' => 'Description',
            'income' => 'Income',
            'number_of_dependents' => 'Number Of Dependents',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

}

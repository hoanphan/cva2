<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dsnamhoc".
 *
 * @property string $MaNamHoc
 * @property string $TenNamHoc
 * @property integer $NamHienTai
 *
 * @property Dshocsinhtheolop[] $dshocsinhtheolops
 * @property Dsmonhoctheolop[] $dsmonhoctheolops
 */
class DsNamHoc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dsnamhoc';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MaNamHoc'], 'required'],
            [['NamHienTai'], 'integer'],
            [['MaNamHoc'], 'string', 'max' => 8],
            [['TenNamHoc'], 'string', 'max' => 11],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'MaNamHoc' => 'Ma Nam Hoc',
            'TenNamHoc' => 'Ten Nam Hoc',
            'NamHienTai' => 'Nam Hien Tai',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDshocsinhtheolops()
    {
        return $this->hasMany(Dshocsinhtheolop::className(), ['MaNamHoc' => 'MaNamHoc']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDsmonhoctheolops()
    {
        return $this->hasMany(Dsmonhoctheolop::className(), ['MaNamHoc' => 'MaNamHoc']);
    }
}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dsmonhoc".
 *
 * @property string $MaMonHoc
 * @property string $TenMonHoc
 * @property integer $HeSo
 * @property integer $MaHinhThucDanhGia
 * @property string $HienThi
 * @property integer $XetHocLuc
 * @property string $HienThiSMS
 * @property integer $ThuTuThongKeTHCS
 * @property integer $ThuTuThongKeTHPT
 *
 * @property Dsdiem[] $dsdiems
 * @property Dsmonhoctheolop[] $dsmonhoctheolops
 */
class DsMonHoc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dsmonhoc';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MaMonHoc'], 'required'],
            [['HeSo', 'MaHinhThucDanhGia', 'XetHocLuc', 'ThuTuThongKeTHCS', 'ThuTuThongKeTHPT'], 'integer'],
            [['MaMonHoc'], 'string', 'max' => 4],
            [['TenMonHoc', 'HienThi', 'HienThiSMS'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'MaMonHoc' => 'Ma Mon Hoc',
            'TenMonHoc' => 'Ten Mon Hoc',
            'HeSo' => 'He So',
            'MaHinhThucDanhGia' => 'Ma Hinh Thuc Danh Gia',
            'HienThi' => 'Hien Thi',
            'XetHocLuc' => 'Xet Hoc Luc',
            'HienThiSMS' => 'Hien Thi Sms',
            'ThuTuThongKeTHCS' => 'Thu Tu Thong Ke Thcs',
            'ThuTuThongKeTHPT' => 'Thu Tu Thong Ke Thpt',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDsdiems()
    {
        return $this->hasMany(Dsdiem::className(), ['MaMonHoc' => 'MaMonHoc']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDsmonhoctheolops()
    {
        return $this->hasMany(Dsmonhoctheolop::className(), ['MaMonHoc' => 'MaMonHoc']);
    }
}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dsdiem".
 *
 * @property string $MaHocSinh
 * @property string $MaNamHoc
 * @property string $MaHocKy
 * @property string $MaMonHoc
 * @property string $MaLoaiDiem
 * @property integer $STTDiem
 * @property double $Diem
 * @property string $DiemCu
 * @property integer $ChoPhepDang
 * @property integer $KhoaSo
 * @property integer $ChoPhepSua
 *
 * @property Dshocsinh $maHocSinh
 * @property Dshocky $maHocKy
 * @property Dsloaidiem $maLoaiDiem
 * @property Dsmonhoc $maMonHoc
 */
class DsDiem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dsdiem';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MaHocSinh', 'MaNamHoc', 'MaHocKy', 'MaMonHoc', 'MaLoaiDiem', 'STTDiem'], 'required'],
            [['STTDiem', 'ChoPhepDang', 'KhoaSo', 'ChoPhepSua'], 'integer'],
            [['Diem'], 'number'],
            [['DiemCu'], 'string'],
            [['MaHocSinh'], 'string', 'max' => 7],
            [['MaNamHoc'], 'string', 'max' => 8],
            [['MaHocKy'], 'string', 'max' => 2],
            [['MaMonHoc'], 'string', 'max' => 4],
            [['MaLoaiDiem'], 'string', 'max' => 3],
            [['MaHocSinh'], 'exist', 'skipOnError' => true, 'targetClass' => Dshocsinh::className(), 'targetAttribute' => ['MaHocSinh' => 'MaHocSinh']],
            [['MaHocKy'], 'exist', 'skipOnError' => true, 'targetClass' => Dshocky::className(), 'targetAttribute' => ['MaHocKy' => 'MaHocKy']],
            [['MaLoaiDiem'], 'exist', 'skipOnError' => true, 'targetClass' => Dsloaidiem::className(), 'targetAttribute' => ['MaLoaiDiem' => 'MaLoaiDiem']],
            [['MaMonHoc'], 'exist', 'skipOnError' => true, 'targetClass' => Dsmonhoc::className(), 'targetAttribute' => ['MaMonHoc' => 'MaMonHoc']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'MaHocSinh' => 'Ma Hoc Sinh',
            'MaNamHoc' => 'Ma Nam Hoc',
            'MaHocKy' => 'Ma Hoc Ky',
            'MaMonHoc' => 'Ma Mon Hoc',
            'MaLoaiDiem' => 'Ma Loai Diem',
            'STTDiem' => 'Sttdiem',
            'Diem' => 'Diem',
            'DiemCu' => 'Diem Cu',
            'ChoPhepDang' => 'Cho Phep Dang',
            'KhoaSo' => 'Khoa So',
            'ChoPhepSua' => 'Cho Phep Sua',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMaHocSinh()
    {
        return $this->hasOne(Dshocsinh::className(), ['MaHocSinh' => 'MaHocSinh']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMaHocKy()
    {
        return $this->hasOne(Dshocky::className(), ['MaHocKy' => 'MaHocKy']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMaLoaiDiem()
    {
        return $this->hasOne(Dsloaidiem::className(), ['MaLoaiDiem' => 'MaLoaiDiem']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMaMonHoc()
    {
        return $this->hasOne(Dsmonhoc::className(), ['MaMonHoc' => 'MaMonHoc']);
    }
}

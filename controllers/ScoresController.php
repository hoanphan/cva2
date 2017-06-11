<?php
/**
 * Created by Navatech
 * @project sgl-com-vn
 * @author  Le Phuong
 * @email phuong17889@gmail.com
 * @time    4/22/2017 10:32 AM
 */

namespace app\modules\api\controllers;


use app\components\ApiController;
use app\models\DsHocSinh;
use app\models\DsLoaiDiem;
use Yii;
use yii\filters\VerbFilter;
use yii\helpers\Json;
use yii\helpers\Url;
use yii\web\UploadedFile;

class ScoresController extends ApiController
{

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
            ],
        ];
    }

    /**
     * {@inheritDoc}
     */
    public static function responseCode()
    {
        return [
            -1 => 'MISSING PARAMETER',
            0 => 'OK',
            1 => 'NOT FOUND',
            2 => 'CAN NOT SAVE',
        ];
    }

    /**
     * @api              {get} /scores/index 1. Lấy danh sách loại điểm
     * @apiGroup         Student
     * @apiVersion       1.0.0
     *
     * @apiSampleRequest  /scores/login
     *
     * @apiSuccess {number} code Mã kết quả trả về
     * @apiSuccess {string} message Nội dung kết quả trả về
     * @apiSuccess {Object[]} data Mảng đối tượng loại điểm
     * @apiSuccess {string} data.id Mã loại điểm
     * @apiSuccess {string} data.name Tên loại điểm
     * @apiSuccess {string} data.display Hiển thị
     * @apiSuccess {string} data.count Số lượng
     */
    public function actionTypeScores()
    {
        $listType=DsLoaiDiem::find();
        if($listType->exists())
        {
            $response['code']=0;
            /**@var  DsLoaiDiem[] $listType***/
            $listType=$listType->all();
            foreach ($listType as $item)
            {
                $response['data'][]=[
                    'id'=>$item->MaLoaiDiem,
                    'name'=>$item->TenLoaiDiem,
                    'display'=>$item->HienThi,
                    'count'=>$item->SoDiemToiDa
                ];
            }
            return $this->response(200,$response);
        }
        else
        {
            $response['code']=1;
            $response['message']="Không tồn tại dữ liệu";
            return $this->response(200,$response);
        }
    }



}
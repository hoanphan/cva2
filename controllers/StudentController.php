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
use Yii;
use yii\filters\VerbFilter;
use yii\helpers\Json;
use yii\helpers\Url;
use yii\web\UploadedFile;

class StudentController extends ApiController
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
     * @api              {get} /student/login 1. Đăng nhập
     * @apiGroup         Student
     * @apiVersion       1.0.0
     *
     * @apiSampleRequest  /student/login
     *
     * @apiParam {string} username Tài khoản đăng nhập
     * @apiParam {string} password Mật khẩu đăng nhập
     * @apiSuccess {number} code Mã kết quả trả về
     * @apiSuccess {string} message Nội dung kết quả trả về
     * @apiSuccess {Object} data Mảng đối tượng giá trị cần lấy
     * @apiSuccess {string} data.key Tên giá trị
     */
    public function actionLogin()
    {
        $username = $this->getBodyValue('username', true);
        $password=$this->getBodyValue('password',true);
        if($password==""||$username=="")
        {

            return $this->response(400,[
                'message'=>'Thiếu tham số'
            ]);
        }
        else {
            $student = DsHocSinh::findOne(['MaHocSinh' => $username, 'MatKhau' => $password]);
            if ($student != null) {
                $response['code'] = 0;
                $response['data']['key'] = 'ok';

            } else {
                $response['code'] = 1;
                $response['data']['key'] = 'fail';
            }
          return  $this->response(200, $response);
        }
    }


}
<?php

/**
 * Created by Navatech
 * @project sgl-com-vn
 * @author  Le Phuong
 * @email phuong17889@gmail.com
 * @time    4/24/2017 3:02 PM
 */
class LandController {

	/**
	 * @api              {get} /land/config 1. Cấu hình BDS
	 * @apiGroup         Land
	 * @apiVersion       1.0.0
	 *
	 * @apiSampleRequest /api/land/config
	 *
	 * @apiHeader {string=vi,en} [language=vi] Ngôn ngữ
	 * @apiHeader {string} time Thời gian hiện tại <b>DateTime.Now.ToString("yyyyMMddHHmmss")</b>
	 * @apiHeader {string} token Mã hóa MD5 của <b>code & time</b>
	 *
	 * @apiParam {string=area,price} type Kiểu giá trị cần lấy
	 * @apiSuccess {number} code Mã kết quả trả về
	 * @apiSuccess {string} message Nội dung kết quả trả về
	 * @apiSuccess {String[]} data Mảng chứa chuỗi giá trị
	 */
	function config_1_0_0() {
	}

	/**
	 * @api              {get} /land/config 1. Cấu hình BDS
	 * @apiGroup         Land
	 * @apiVersion       1.0.1
	 *
	 * @apiSampleRequest /api/land/config
	 *
	 * @apiHeader {string=vi,en} [language=vi] Ngôn ngữ
	 * @apiHeader {string} time Thời gian hiện tại <b>DateTime.Now.ToString("yyyyMMddHHmmss")</b>
	 * @apiHeader {string} token Mã hóa MD5 của <b>code & time</b>
	 *
	 * @apiParam {string=area,sell_price,rent_price} type Kiểu giá trị cần lấy
	 * @apiSuccess {number} code Mã kết quả trả về
	 * @apiSuccess {string} message Nội dung kết quả trả về
	 * @apiSuccess {String[]} data Mảng chứa chuỗi giá trị
	 */
	function config_1_0_1() {
	}

	/**
	 * @api              {get} /land/detail 5. Chi tiết nhà đất
	 * @apiGroup         Land
	 * @apiVersion       1.0.0
	 *
	 * @apiSampleRequest /api/land/detail
	 *
	 * @apiHeader {string=vi,en} [language=vi] Ngôn ngữ
	 * @apiHeader {string} time Thời gian hiện tại <b>DateTime.Now.ToString("yyyyMMddHHmmss")</b>
	 * @apiHeader {string} token Mã hóa MD5 của <b>code & time</b>
	 *
	 * @apiParam {number} land_id Khóa chính nhà đất
	 * @apiSuccess {number} code Mã kết quả trả về
	 * @apiSuccess {string} message Nội dung kết quả trả về
	 * @apiSuccess {Object[]} data Mảng chứa đối tượng nhà đất
	 * @apiSuccess {string} data.name Tiêu đề nhà đất
	 * @apiSuccess {string} data.image Ảnh đại diện
	 * @apiSuccess {string} data.items.price Khoảng giá
	 * @apiSuccess {string} data.items.area Diện tích
	 * @apiSuccess {string} data.items.address Địa chỉ
	 * @apiSuccess {Object[]} data.images Album ảnh
	 *
	 * @apiError (400) {number} code Mã kết quả trả về
	 * @apiError (400) {string} message Nội dung kết quả trả về
	 * @apiError (400) {String[]} data Danh sách các tham số bị thiếu
	 */
	function detail_1_0_0() {
	}
}

class LocationController {

	/**
	 * @api              {get} /location/district 2. Danh sách Quận Huyện
	 * @apiGroup         Location
	 * @apiVersion       1.0.0
	 *
	 * @apiSampleRequest /api/location/district
	 *
	 * @apiHeader {string=vi,en} [language=vi] Ngôn ngữ
	 * @apiHeader {string} time Thời gian hiện tại <b>DateTime.Now.ToString("yyyyMMddHHmmss")</b>
	 * @apiHeader {string} token Mã hóa MD5 của <b>code & time</b>
	 *
	 * @apiParam {number} province_id Mã Tỉnh Thành phố
	 * @apiSuccess {number} code Mã kết quả trả về
	 * @apiSuccess {string} message Nội dung kết quả trả về
	 * @apiSuccess {Object[]} data Mảng chứa đối tượng Quận huyện
	 * @apiSuccess {Number} data.id Khóa chính Quận huyện
	 * @apiSuccess {String} data.name Tên quận huyện
	 *
	 * @apiError (400) {number} code Mã kết quả trả về
	 * @apiError (400) {string} message Nội dung kết quả trả về
	 * @apiError (400) {String[]} data Danh sách các tham số bị thiếu
	 */
	function district_1_0_0() {
	}
}

class BookingController {

	/**
	 * @api              {post} /booking/cleaning 2. Đặt lịch dọn dẹp
	 * @apiGroup         Booking
	 * @apiVersion       1.0.0
	 *
	 * @apiSampleRequest /api/booking/cleaning
	 *
	 * @apiHeader {string=vi,en} [language=vi] Ngôn ngữ
	 * @apiHeader {string} time Thời gian hiện tại <b>DateTime.Now.ToString("yyyyMMddHHmmss")</b>
	 * @apiHeader {string} token Mã hóa MD5 của <b>code & time</b>
	 *
	 * @apiParam {string} customer_name Họ và tên của khách hàng
	 * @apiParam {string} customer_address Địa chỉ khách hàng
	 * @apiParam {string} customer_phone Điện thoại của khách hàng
	 * @apiParam {string} [customer_email=""] Email của khách hàng
	 * @apiParam {number} type Loại sản phẩm cần dọp dẹp (Lấy từ <a href="#api-Booking-GetBookingConfig">Booking.1</a>)
	 * @apiParam {string} serve_at Thời gian cần phục vụ. Định dạng: <b>2017-05-20 16:30</b>
	 * @apiSuccess {number} code Mã kết quả trả về
	 * @apiSuccess {string} message Nội dung kết quả trả về
	 * @apiSuccess {Object[]} data Mảng đối tượng Booking
	 * @apiSuccess {string} data.id Khóa chính của Booking
	 * @apiSuccess {string} data.customer_name Họ và tên của khách hàng
	 * @apiSuccess {string} data.customer_address Địa chỉ khách hàng
	 * @apiSuccess {string} data.customer_phone Điện thoại của khách hàng
	 * @apiSuccess {string} data.customer_email Email của khách hàng
	 * @apiSuccess {string} data.serve_at Thời gian cần phục vụ. Định dạng: <b>2017-05-20 16:30:00</b>
	 * @apiSuccess {string} data.created_at Thời gian tạo. Định dạng: <b>2017-05-20 16:30:00</b>
	 */
	function cleaning_1_0_0() {
	}

	/**
	 * @api              {post} /booking/maintenance 3. Đặt lịch bảo dưỡng
	 * @apiGroup         Booking
	 * @apiVersion       1.0.0
	 *
	 * @apiSampleRequest /api/booking/maintenance
	 *
	 * @apiHeader {string=vi,en} [language=vi] Ngôn ngữ
	 * @apiHeader {string} time Thời gian hiện tại <b>DateTime.Now.ToString("yyyyMMddHHmmss")</b>
	 * @apiHeader {string} token Mã hóa MD5 của <b>code & time</b>
	 *
	 * @apiParam {string} customer_name Họ và tên của khách hàng
	 * @apiParam {string} customer_address Địa chỉ khách hàng
	 * @apiParam {string} customer_phone Điện thoại của khách hàng
	 * @apiParam {string} [customer_email=""] Email của khách hàng
	 * @apiParam {number} product Loại sản phẩm cần bảo trì (Lấy từ <a
	 *           href="#api-Booking-GetBookingConfig">Booking.1</a>)
	 * @apiParam {number} services Loại dịch vụ cần bảo trì (Lấy từ <a
	 *           href="#api-Booking-GetBookingConfig">Booking.1</a>)
	 * @apiParam {number} quantity Số lượng sản phẩm
	 * @apiParam {string} serve_at Thời gian cần phục vụ. Định dạng: <b>2017-05-20 16:30</b>
	 * @apiSuccess {number} code Mã kết quả trả về
	 * @apiSuccess {string} message Nội dung kết quả trả về
	 * @apiSuccess {Object[]} data Mảng đối tượng Booking
	 * @apiSuccess {string} data.id Khóa chính của Booking
	 * @apiSuccess {string} data.customer_name Họ và tên của khách hàng
	 * @apiSuccess {string} data.customer_address Địa chỉ khách hàng
	 * @apiSuccess {string} data.customer_phone Điện thoại của khách hàng
	 * @apiSuccess {string} data.customer_email Email của khách hàng
	 * @apiSuccess {string} data.serve_at Thời gian cần phục vụ. Định dạng: <b>2017-05-20 16:30:00</b>
	 * @apiSuccess {string} data.created_at Thời gian tạo. Định dạng: <b>2017-05-20 16:30:00</b>
	 */
	function maintenance() {
	}
}
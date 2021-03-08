<?php
	$masp = 'EV2009';
	$tensp = 'Tấm hợp kim nhôm ngoài trời EV2009';
	$soluong = 500;
	$dongia = 160000;
	$VAT = 0.05;
	echo "<b>Thông tin sản phẩm trước khi trừ thuế :</b>".'<br/> Mã sản phẩm: EV2009'.'<br/> Tên sản phẩm: Tấm hợp kim nhôm ngoài trời EV2009'.'<br/> Số lượng: 500'.'<br/> Đơn giá: 160000'.'<br/> VAT = số lượng*đơn giá = '.$soluong*$dongia;
	echo "<br/><br/><b>Thông tin sản phẩm sau khi trừ thuế :</b>".'<br/> Mã sản phẩm: EV2009'.'<br/> Tên sản phẩm: Tấm hợp kim nhôm ngoài trời EV2009'.'<br/> Số lượng: 500'.'<br/> Đơn giá: 160000'.'<br/> VAT = số lượng*đơn giá*VAT = '.$soluong*$dongia*$VAT;
?>
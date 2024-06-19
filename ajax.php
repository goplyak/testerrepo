<?php
include 'inc/PhoneCode.php';

$phoneValue = $_POST['phone'];

if ( empty( $phoneValue ) ) {
	echo json_encode( [ 'error' => 'Заполните поле' ] );
}

$phone = new PhoneCode( $phoneValue );

$valid = $phone->valid();

if ( $valid && ! isset( $valid['error'] ) ) {
	$valid['country'] = 'Страна: <b>' . $valid['country'] . '</b>';
	echo json_encode( $valid );
	die();
}

if ( $valid && isset( $valid['error'] ) ) {
	echo json_encode(
		[
			'error' => 'Не верный номер, похоже это страна ' . $valid['country'] . ', но цифр с кодом должно быть: ' . $valid['count']
		]
	);
}
if ( $valid === false ) {
	echo json_encode(
		[
			'error' => 'Не похоже на номер, какой-либо страны.'
		]
	);
}


die();
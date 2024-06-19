<?php
$out   = '';
$value = isset( $_POST['phone'] ) ? $_POST['phone'] : '';


if ( ! empty( $value ) ) {
	$myCurl = curl_init();
	curl_setopt_array( $myCurl, array(
		CURLOPT_URL            => 'https://derror.ru/hi-tech/ajax.php',
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_POST           => true,
		CURLOPT_POSTFIELDS     => http_build_query( array( 'phone' => $value ) )
	) );
	$response = curl_exec( $myCurl );
	curl_close( $myCurl );
	$response = json_decode( $response, true );
	if ( $response && ! isset( $response['error'] ) ) {
		$out = $response['country'];
	}
	if ( $response && isset( $response['error'] ) ) {
		$out = $response['error'];
	}
}
?>
<div class="detect-phone">
    <div class="detect-phone__title">Узнать страну, по номеру</div>
    <form action="https://derror.ru/hi-tech/" method="post" class="detect-phone__form" id="detect-form">
        <div class="detect-phone__input">
            <label for="phone">Введи номер телефона в международном формате:</label>
            <input name="phone" id="phone" required type="text" value="<?php echo $value; ?>" placeholder="Введите номер">
        </div>
        <div class="detect-phone__btn">
            <button type="submit" id="detect-submit">Проверить</button>
        </div>
    </form>
    <div class="msg-result"><?php echo $out; ?></div>
</div>
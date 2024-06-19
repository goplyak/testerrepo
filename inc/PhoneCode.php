<?php

class PhoneCode {
	public $phone;

	public function __construct( $phone = '' ) {
		if ( ! empty( $phone ) ) {
			$phone = preg_replace( '/[^0-9.]/', '', $phone ); // оставляем только цифры
			$zero  = $phone[0] . $phone[1]; // если первые 00
			if ( $zero == '00' ) {
				$phone = mb_substr( $phone, 2 );
			}
		}

		$this->phone = $phone;
	}

	public function getAllCode( $code = '' ) {
		$list = array(
			"1"   => array(
				"country" => "США",
				"code"    => "1",
				"count"   => 10
			),
			"7"   => array(
				"country" => "Россия",
				"code"    => "7",
				"count"   => 10
			),
			"20"  => array(
				"country" => "Египет",
				"code"    => "20",
				"count"   => 10
			),
			"27"  => array(
				"country" => "Южная Африка",
				"code"    => "27",
				"count"   => 9
			),
			"30"  => array(
				"country" => "Греция",
				"code"    => "30",
				"count"   => 10
			),
			"31"  => array(
				"country" => "Нидерланды",
				"code"    => "31",
				"count"   => 9
			),
			"32"  => array(
				"country" => "Бельгия",
				"code"    => "32",
				"count"   => 9
			),
			"33"  => array(
				"country" => "Франция",
				"code"    => "33",
				"count"   => 9
			),
			"34"  => array(
				"country" => "Испания",
				"code"    => "34",
				"count"   => 9
			),
			"36"  => array(
				"country" => "Венгрия",
				"code"    => "36",
				"count"   => 9
			),
			"39"  => array(
				"country" => "Италия",
				"code"    => "39",
				"count"   => 10
			),
			"40"  => array(
				"country" => "Румыния",
				"code"    => "40",
				"count"   => 9
			),
			"41"  => array(
				"country" => "Швейцария",
				"code"    => "41",
				"count"   => 9
			),
			"43"  => array(
				"country" => "Австрия",
				"code"    => "43",
				"count"   => 10
			),
			"44"  => array(
				"country" => "Великобритания",
				"code"    => "44",
				"count"   => 10
			),
			"45"  => array(
				"country" => "Дания",
				"code"    => "45",
				"count"   => 8
			),
			"46"  => array(
				"country" => "Швеция",
				"code"    => "46",
				"count"   => 9
			),
			"47"  => array(
				"country" => "Норвегия",
				"code"    => "47",
				"count"   => 8
			),
			"48"  => array(
				"country" => "Польша",
				"code"    => "48",
				"count"   => 9
			),
			"49"  => array(
				"country" => "Германия",
				"code"    => "49",
				"count"   => 11
			),
			"51"  => array(
				"country" => "Перу",
				"code"    => "51",
				"count"   => 9
			),
			"52"  => array(
				"country" => "Мексика",
				"code"    => "52",
				"count"   => 10
			),
			"53"  => array(
				"country" => "Куба",
				"code"    => "53",
				"count"   => 8
			),
			"54"  => array(
				"country" => "Аргентина",
				"code"    => "54",
				"count"   => 10
			),
			"55"  => array(
				"country" => "Бразилия",
				"code"    => "55",
				"count"   => 10
			),
			"56"  => array(
				"country" => "Чили",
				"code"    => "56",
				"count"   => 9
			),
			"57"  => array(
				"country" => "Колумбия",
				"code"    => "57",
				"count"   => 10
			),
			"58"  => array(
				"country" => "Венесуэла",
				"code"    => "58",
				"count"   => 10
			),
			"60"  => array(
				"country" => "Малайзия",
				"code"    => "60",
				"count"   => 9
			),
			"61"  => array(
				"country" => "Австралия",
				"code"    => "61",
				"count"   => 9
			),
			"62"  => array(
				"country" => "Индонезия",
				"code"    => "62",
				"count"   => 10
			),
			"63"  => array(
				"country" => "Филиппины",
				"code"    => "63",
				"count"   => 10
			),
			"64"  => array(
				"country" => "Новая Зеландия",
				"code"    => "64",
				"count"   => 9
			),
			"65"  => array(
				"country" => "Сингапур",
				"code"    => "65",
				"count"   => 8
			),
			"66"  => array(
				"country" => "Таиланд",
				"code"    => "66",
				"count"   => 9
			),
			"81"  => array(
				"country" => "Япония",
				"code"    => "81",
				"count"   => 10
			),
			"82"  => array(
				"country" => "Южная Корея",
				"code"    => "82",
				"count"   => 10
			),
			"84"  => array(
				"country" => "Вьетнам",
				"code"    => "84",
				"count"   => 9
			),
			"86"  => array(
				"country" => "Китай",
				"code"    => "86",
				"count"   => 11
			),
			"90"  => array(
				"country" => "Турция",
				"code"    => "90",
				"count"   => 10
			),
			"91"  => array(
				"country" => "Индия",
				"code"    => "91",
				"count"   => 10
			),
			"92"  => array(
				"country" => "Пакистан",
				"code"    => "92",
				"count"   => 10
			),
			"93"  => array(
				"country" => "Афганистан",
				"code"    => "93",
				"count"   => 9
			),
			"94"  => array(
				"country" => "Шри-Ланка",
				"code"    => "94",
				"count"   => 9
			),
			"95"  => array(
				"country" => "Мьянма",
				"code"    => "95",
				"count"   => 9
			),
			"98"  => array(
				"country" => "Иран",
				"code"    => "98",
				"count"   => 10
			),
			"211" => array(
				"country" => "Южный Судан",
				"code"    => "211",
				"count"   => 9
			),
			"212" => array(
				"country" => "Марокко",
				"code"    => "212",
				"count"   => 9
			),
			"213" => array(
				"country" => "Алжир",
				"code"    => "213",
				"count"   => 9
			),
			"216" => array(
				"country" => "Тунис",
				"code"    => "216",
				"count"   => 8
			),
			"218" => array(
				"country" => "Ливия",
				"code"    => "218",
				"count"   => 9
			),
			"220" => array(
				"country" => "Гамбия",
				"code"    => "220",
				"count"   => 7
			),
			"221" => array(
				"country" => "Сенегал",
				"code"    => "221",
				"count"   => 9
			),
			"222" => array(
				"country" => "Мавритания",
				"code"    => "222",
				"count"   => 9
			),
			"223" => array(
				"country" => "Мали",
				"code"    => "223",
				"count"   => 8
			),
			"224" => array(
				"country" => "Гвинея",
				"code"    => "224",
				"count"   => 9
			),
			"225" => array(
				"country" => "Кот-д\'Ивуар",
				"code"    => "225",
				"count"   => 8
			),
			"226" => array(
				"country" => "Буркина-Фасо",
				"code"    => "226",
				"count"   => 8
			),
			"227" => array(
				"country" => "Нигер",
				"code"    => "227",
				"count"   => 8
			),
			"228" => array(
				"country" => "Того",
				"code"    => "228",
				"count"   => 8
			),
			"229" => array(
				"country" => "Бенин",
				"code"    => "229",
				"count"   => 8
			),
			"230" => array(
				"country" => "Маврикий",
				"code"    => "230",
				"count"   => 7
			),
			"231" => array(
				"country" => "Либерия",
				"code"    => "231",
				"count"   => 7
			),
			"232" => array(
				"country" => "Сьерра-Леоне",
				"code"    => "232",
				"count"   => 8
			),
			"233" => array(
				"country" => "Гана",
				"code"    => "233",
				"count"   => 9
			),
			"234" => array(
				"country" => "Нигерия",
				"code"    => "234",
				"count"   => 8
			),
			"235" => array(
				"country" => "Чад",
				"code"    => "235",
				"count"   => 8
			),
			"236" => array(
				"country" => "ЦАР",
				"code"    => "236",
				"count"   => 8
			),
			"237" => array(
				"country" => "Камерун",
				"code"    => "237",
				"count"   => 9
			),
			"238" => array(
				"country" => "Кабо-Верде",
				"code"    => "238",
				"count"   => 7
			),
			"239" => array(
				"country" => "Сан-Томе и Принсипи",
				"code"    => "239",
				"count"   => 7
			),
			"240" => array(
				"country" => "Экваториальная Гвинея",
				"code"    => "240",
				"count"   => 9
			),
			"241" => array(
				"country" => "Габон",
				"code"    => "241",
				"count"   => 7
			),
			"242" => array(
				"country" => "Республика Конго",
				"code"    => "242",
				"count"   => 9
			),
			"243" => array(
				"country" => "Демократическая Республика Конго",
				"code"    => "243",
				"count"   => 9
			),
			"244" => array(
				"country" => "Ангола",
				"code"    => "244",
				"count"   => 9
			),
			"245" => array(
				"country" => "Гвинея-Бисау",
				"code"    => "245",
				"count"   => 7
			),
			"246" => array(
				"country" => "Британская территория в Индийском океане",
				"code"    => "246",
				"count"   => 7
			),
			"247" => array(
				"country" => "Остров Вознесения",
				"code"    => "247",
				"count"   => 4
			),
			"248" => array(
				"country" => "Сейшельские Острова",
				"code"    => "248",
				"count"   => 7
			),
			"249" => array(
				"country" => "Судан",
				"code"    => "249",
				"count"   => 9
			),
			"250" => array(
				"country" => "Руанда",
				"code"    => "250",
				"count"   => 9
			),
			"251" => array(
				"country" => "Эфиопия",
				"code"    => "251",
				"count"   => 9
			),
			"252" => array(
				"country" => "Сомали",
				"code"    => "252",
				"count"   => 7
			),
			"253" => array(
				"country" => "Джибути",
				"code"    => "253",
				"count"   => 8
			),
			"254" => array(
				"country" => "Кения",
				"code"    => "254",
				"count"   => 9
			),
			"255" => array(
				"country" => "Танзания",
				"code"    => "255",
				"count"   => 9
			),
			"256" => array(
				"country" => "Уганда",
				"code"    => "256",
				"count"   => 9
			),
			"257" => array(
				"country" => "Бурунди",
				"code"    => "257",
				"count"   => 8
			),
			"258" => array(
				"country" => "Мозамбик",
				"code"    => "258",
				"count"   => 9
			),
			"260" => array(
				"country" => "Замбия",
				"code"    => "260",
				"count"   => 9
			),
			"261" => array(
				"country" => "Мадагаскар",
				"code"    => "261",
				"count"   => 9
			),
			"262" => array(
				"country" => "Реюньон",
				"code"    => "262",
				"count"   => 9
			),
			"263" => array(
				"country" => "Зимбабве",
				"code"    => "263",
				"count"   => 9
			),
			"264" => array(
				"country" => "Намибия",
				"code"    => "264",
				"count"   => 9
			),
			"265" => array(
				"country" => "Малави",
				"code"    => "265",
				"count"   => 9
			),
			"266" => array(
				"country" => "Лесото",
				"code"    => "266",
				"count"   => 8
			),
			"267" => array(
				"country" => "Ботсвана",
				"code"    => "267",
				"count"   => 8
			),
			"268" => array(
				"country" => "Эсватини",
				"code"    => "268",
				"count"   => 8
			),
			"269" => array(
				"country" => "Коморы",
				"code"    => "269",
				"count"   => 7
			),
			"290" => array(
				"country" => "Остров Святой Елены",
				"code"    => "290",
				"count"   => 4
			),
			"291" => array(
				"country" => "Эритрея",
				"code"    => "291",
				"count"   => 7
			),
			"297" => array(
				"country" => "Аруба",
				"code"    => "297",
				"count"   => 7
			),
			"298" => array(
				"country" => "Фарерские острова",
				"code"    => "298",
				"count"   => 6
			),
			"299" => array(
				"country" => "Гренландия",
				"code"    => "299",
				"count"   => 6
			),
			"350" => array(
				"country" => "Гибралтар",
				"code"    => "350",
				"count"   => 8
			),
			"351" => array(
				"country" => "Португалия",
				"code"    => "351",
				"count"   => 9
			),
			"352" => array(
				"country" => "Люксембург",
				"code"    => "352",
				"count"   => 9
			),
			"353" => array(
				"country" => "Ирландия",
				"code"    => "353",
				"count"   => 9
			),
			"354" => array(
				"country" => "Исландия",
				"code"    => "354",
				"count"   => 7
			),
			"355" => array(
				"country" => "Албания",
				"code"    => "355",
				"count"   => 9
			),
			"356" => array(
				"country" => "Мальта",
				"code"    => "356",
				"count"   => 8
			),
			"357" => array(
				"country" => "Кипр",
				"code"    => "357",
				"count"   => 8
			),
			"358" => array(
				"country" => "Финляндия",
				"code"    => "358",
				"count"   => 10
			),
			"359" => array(
				"country" => "Болгария",
				"code"    => "359",
				"count"   => 9
			),
			"370" => array(
				"country" => "Литва",
				"code"    => "370",
				"count"   => 8
			),
			"371" => array(
				"country" => "Латвия",
				"code"    => "371",
				"count"   => 8
			),
			"372" => array(
				"country" => "Эстония",
				"code"    => "372",
				"count"   => 8
			),
			"373" => array(
				"country" => "Молдова",
				"code"    => "373",
				"count"   => 8
			),
			"374" => array(
				"country" => "Армения",
				"code"    => "374",
				"count"   => 8
			),
			"375" => array(
				"country" => "Беларусь",
				"code"    => "375",
				"count"   => 9
			),
			"376" => array(
				"country" => "Андорра",
				"code"    => "376",
				"count"   => 6
			),
			"377" => array(
				"country" => "Монако",
				"code"    => "377",
				"count"   => 8
			),
			"378" => array(
				"country" => "Сан-Марино",
				"code"    => "378",
				"count"   => 10
			),
			"379" => array(
				"country" => "Ватикан",
				"code"    => "379",
				"count"   => 10
			),
			"380" => array(
				"country" => "Украина",
				"code"    => "380",
				"count"   => 9
			),
			"381" => array(
				"country" => "Сербия",
				"code"    => "381",
				"count"   => 8
			),
			"382" => array(
				"country" => "Черногория",
				"code"    => "382",
				"count"   => 8
			),
			"383" => array(
				"country" => "Косово",
				"code"    => "383",
				"count"   => 8
			),
			"385" => array(
				"country" => "Хорватия",
				"code"    => "385",
				"count"   => 9
			),
			"386" => array(
				"country" => "Словения",
				"code"    => "386",
				"count"   => 9
			),
			"387" => array(
				"country" => "Босния и Герцеговина",
				"code"    => "387",
				"count"   => 8
			),
			"389" => array(
				"country" => "Северная Македония",
				"code"    => "389",
				"count"   => 8
			),
			"420" => array(
				"country" => "Чехия",
				"code"    => "420",
				"count"   => 9
			),
			"421" => array(
				"country" => "Словакия",
				"code"    => "421",
				"count"   => 9
			),
			"423" => array(
				"country" => "Лихтенштейн",
				"code"    => "423",
				"count"   => 7
			),
			"500" => array(
				"country" => "Фолклендские острова",
				"code"    => "500",
				"count"   => 5
			),
			"501" => array(
				"country" => "Белиз",
				"code"    => "501",
				"count"   => 7
			),
			"502" => array(
				"country" => "Гватемала",
				"code"    => "502",
				"count"   => 8
			),
			"503" => array(
				"country" => "Сальвадор",
				"code"    => "503",
				"count"   => 8
			),
			"504" => array(
				"country" => "Гондурас",
				"code"    => "504",
				"count"   => 8
			),
			"505" => array(
				"country" => "Никарагуа",
				"code"    => "505",
				"count"   => 8
			),
			"506" => array(
				"country" => "Коста-Рика",
				"code"    => "506",
				"count"   => 8
			),
			"507" => array(
				"country" => "Панама",
				"code"    => "507",
				"count"   => 8
			),
			"508" => array(
				"country" => "Сен-Пьер и Микелон",
				"code"    => "508",
				"count"   => 6
			),
			"509" => array(
				"country" => "Гаити",
				"code"    => "509",
				"count"   => 8
			),
			"590" => array(
				"country" => "Гваделупа",
				"code"    => "590",
				"count"   => 9
			),
			"591" => array(
				"country" => "Боливия",
				"code"    => "591",
				"count"   => 8
			),
			"592" => array(
				"country" => "Гайана",
				"code"    => "592",
				"count"   => 7
			),
			"593" => array(
				"country" => "Эквадор",
				"code"    => "593",
				"count"   => 8
			),
			"594" => array(
				"country" => "Французская Гвиана",
				"code"    => "594",
				"count"   => 9
			),
			"595" => array(
				"country" => "Парагвай",
				"code"    => "595",
				"count"   => 9
			),
			"596" => array(
				"country" => "Мартиника",
				"code"    => "596",
				"count"   => 9
			),
			"597" => array(
				"country" => "Суринам",
				"code"    => "597",
				"count"   => 7
			),
			"598" => array(
				"country" => "Уругвай",
				"code"    => "598",
				"count"   => 8
			),
			"599" => array(
				"country" => "Кюрасао",
				"code"    => "599",
				"count"   => 7
			),
			"670" => array(
				"country" => "Восточный Тимор",
				"code"    => "670",
				"count"   => 8
			),
			"672" => array(
				"country" => "Антарктида",
				"code"    => "672",
				"count"   => 6
			),
			"673" => array(
				"country" => "Бруней",
				"code"    => "673",
				"count"   => 7
			),
			"674" => array(
				"country" => "Науру",
				"code"    => "674",
				"count"   => 7
			),
			"675" => array(
				"country" => "Папуа-Новая Гвинея",
				"code"    => "675",
				"count"   => 8
			),
			"676" => array(
				"country" => "Тонга",
				"code"    => "676",
				"count"   => 5
			),
			"677" => array(
				"country" => "Соломоновы острова",
				"code"    => "677",
				"count"   => 7
			),
			"678" => array(
				"country" => "Вануату",
				"code"    => "678",
				"count"   => 7
			),
			"679" => array(
				"country" => "Фиджи",
				"code"    => "679",
				"count"   => 7
			),
			"680" => array(
				"country" => "Палау",
				"code"    => "680",
				"count"   => 7
			),
			"681" => array(
				"country" => "Уоллис и Футуна",
				"code"    => "681",
				"count"   => 6
			),
			"682" => array(
				"country" => "Острова Кука",
				"code"    => "682",
				"count"   => 5
			),
			"683" => array(
				"country" => "Ниуэ",
				"code"    => "683",
				"count"   => 4
			),
			"685" => array(
				"country" => "Самоа",
				"code"    => "685",
				"count"   => 5
			),
			"686" => array(
				"country" => "Кирибати",
				"code"    => "686",
				"count"   => 5
			),
			"687" => array(
				"country" => "Новая Каледония",
				"code"    => "687",
				"count"   => 6
			),
			"688" => array(
				"country" => "Тувалу",
				"code"    => "688",
				"count"   => 5
			),
			"689" => array(
				"country" => "Французская Полинезия",
				"code"    => "689",
				"count"   => 6
			),
			"690" => array(
				"country" => "Токелау",
				"code"    => "690",
				"count"   => 4
			),
			"691" => array(
				"country" => "Федеративные Штаты Микронезии",
				"code"    => "691",
				"count"   => 7
			),
			"692" => array(
				"country" => "Маршалловы Острова",
				"code"    => "692",
				"count"   => 7
			),
			"850" => array(
				"country" => "Северная Корея",
				"code"    => "850",
				"count"   => 9
			),
			"852" => array(
				"country" => "Гонконг",
				"code"    => "852",
				"count"   => 8
			),
			"853" => array(
				"country" => "Макао",
				"code"    => "853",
				"count"   => 8
			),
			"855" => array(
				"country" => "Камбоджа",
				"code"    => "855",
				"count"   => 9
			),
			"856" => array(
				"country" => "Лаос",
				"code"    => "856",
				"count"   => 9
			),
			"880" => array(
				"country" => "Бангладеш",
				"code"    => "880",
				"count"   => 10
			),
			"886" => array(
				"country" => "Тайвань",
				"code"    => "886",
				"count"   => 9
			),
			"960" => array(
				"country" => "Мальдивы",
				"code"    => "960",
				"count"   => 7
			),
			"961" => array(
				"country" => "Ливан",
				"code"    => "961",
				"count"   => 8
			),
			"962" => array(
				"country" => "Иордания",
				"code"    => "962",
				"count"   => 9
			),
			"963" => array(
				"country" => "Сирия",
				"code"    => "963",
				"count"   => 9
			),
			"964" => array(
				"country" => "Ирак",
				"code"    => "964",
				"count"   => 10
			),
			"965" => array(
				"country" => "Кувейт",
				"code"    => "965",
				"count"   => 8
			),
			"966" => array(
				"country" => "Саудовская Аравия",
				"code"    => "966",
				"count"   => 9
			),
			"967" => array(
				"country" => "Йемен",
				"code"    => "967",
				"count"   => 9
			),
			"968" => array(
				"country" => "Оман",
				"code"    => "968",
				"count"   => 8
			),
			"970" => array(
				"country" => "Палестинские территории",
				"code"    => "970",
				"count"   => 9
			),
			"971" => array(
				"country" => "ОАЭ",
				"code"    => "971",
				"count"   => 9
			),
			"972" => array(
				"country" => "Израиль",
				"code"    => "972",
				"count"   => 9
			),
			"973" => array(
				"country" => "Бахрейн",
				"code"    => "973",
				"count"   => 8
			),
			"974" => array(
				"country" => "Катар",
				"code"    => "974",
				"count"   => 8
			),
			"975" => array(
				"country" => "Бутан",
				"code"    => "975",
				"count"   => 8
			),
			"976" => array(
				"country" => "Монголия",
				"code"    => "976",
				"count"   => 8
			),
			"977" => array(
				"country" => "Непал",
				"code"    => "977",
				"count"   => 8
			),
			"992" => array(
				"country" => "Таджикистан",
				"code"    => "992",
				"count"   => 9
			),
			"993" => array(
				"country" => "Туркменистан",
				"code"    => "993",
				"count"   => 8
			),
			"994" => array(
				"country" => "Азербайджан",
				"code"    => "994",
				"count"   => 9
			),
			"995" => array(
				"country" => "Грузия",
				"code"    => "995",
				"count"   => 9
			),
			"996" => array(
				"country" => "Киргизия",
				"code"    => "996",
				"count"   => 9
			),
			"998" => array(
				"country" => "Узбекистан",
				"code"    => "998",
				"count"   => 9
			)
		);

		if ( empty( $list[ $code ] ) ) {
			return false;
		}

		return $list[ $code ];
	}

	// в некоторых странах коды совпадают, поэтому нужна доп. проверка
	function altCheckCountry( $data ) {
		$phone = $this->phone;
		$code  = $data['code'];

		if ( $code == '1' ) {
			// Это может быть Канада или США, уточняем
			$listCanada = [
				403,
				780,
				368,
				587,
				825,
				604,
				250,
				236,
				672,
				778,
				778,
				204,
				431,
				584,
				584,
				506,
				428,
				709,
				879,
				902,
				782,
				416,
				613,
				519,
				705,
				807,
				905,
				226,
				249,
				289,
				343,
				365,
				437,
				548,
				647,
				683,
				742,
				753,
				418,
				514,
				450,
				819,
				263,
				354,
				367,
				438,
				468,
				579,
				581,
				873,
				306,
				474,
				639,
				867
			];
			$alt_code   = $phone[1] . $phone[2] . $phone[3]; // получаем из номера 3 цифры после кода
			if ( in_array( $alt_code, $listCanada ) ) {
				return array(
					"country" => "Канада",
					"code"    => "1",
					"count"   => 10
				);
			}
		}

		if ( $code == '373' ) {
			// Это может быть ПМР
			$list = [ 779, 778, 777, 775 ];
			$alt_code   = $phone[3] . $phone[4] . $phone[5]; // получаем из номера 3 цифры после кода
			if ( in_array( $alt_code, $list ) ) {
				return array(
					"country" => "Приднестровье",
					"code"    => "373",
					"count"   => 8
				);
			}
		}


		if ( $code == '7' ) {
			// Это может быть Казахстан или Россия
			$listCanada = [ 7, 6, 33 ];
			$alt_code   = $phone[1]; // получаем из номера 1 цифру после кода
			if ( in_array( $alt_code, $listCanada ) ) {
				return array(
					"country" => "Казахстан",
					"code"    => "7",
					"count"   => 10
				);
			}
		}


		return $data;
	}

	public function checkCountry() {
		$phone = $this->phone;

		if ( empty( $phone ) ) {
			return false;
		}

		// получаем первыю цифру
		$phone_1 = $phone[0]; // однозначный код
		$phone_2 = $phone[0] . $phone[1]; // двухзначный код
		$phone_3 = $phone[0] . $phone[1] . $phone[2]; // трехзначный код


		if ( ! empty( $this->getAllCode( $phone_3 ) ) ) {
			$data = $this->getAllCode( $phone_3 );
			$data = $this->altCheckCountry( $data );

			return $data;
		}

		if ( ! empty( $this->getAllCode( $phone_2 ) ) ) {
			$data = $this->getAllCode( $phone_2 );
			$data = $this->altCheckCountry( $data );

			return $data;
		}

		if ( ! empty( $this->getAllCode( $phone_1 ) ) ) {
			$data = $this->getAllCode( $phone_1 );
			$data = $this->altCheckCountry( $data );

			return $data;
		}

		return false;

	}

	// проверяем на количество символов номер
	function valid() {
		$country = $this->checkCountry();
		$phone   = $this->phone;

		if ( empty( $phone ) ) {
			return false;
		}

		if ( $country === false ) {
			return false;
		}

		$strlenPhone = strlen( $phone );
		$strlenCode  = strlen( $country['code'] );
		$countReal   = $strlenPhone - $strlenCode;

		$countValid = $country['count'];

		if ( $countReal == $countValid ) {
			$country['phone'] = $phone;

			return $country;
		} else {
			return [
				'error'   => true,
				'country' => $country['country'],
				'count'   => $country['count'] + $strlenCode
			];
		}

	}
}
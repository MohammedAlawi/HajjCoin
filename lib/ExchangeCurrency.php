<?php

class ExchangeCurrency {
	
	public static function change($from, $amount){		
		$data = json_decode(file_get_contents("http://www.apilayer.net/api/live?access_key=b6c58a3d8921dd3c1bd18b1e12158dc7&format=1"));
		$data = json_encode($data);
		$data = json_decode($data, TRUE);
		$allCurn = $data['quotes'];
		if($from == 'USD'){
			$result = $allCurn['USDSAR'] * $amount;
		} elseif($from == 'SAR') {
			$result = 1 * $amount;
		} else {
			foreach($allCurn as $k => $v){
				if($k == 'USD'.$from)
					$result = $amount / $v ;
			}
			$result = $result * $allCurn['USDSAR'];
		}
		return number_format($result, 2);
	}
	
}
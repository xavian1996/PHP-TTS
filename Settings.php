<?php

function TTS($text)
{

$curl = curl_init();

//to delete whitespaces and replace it with "%2C%20" so the text can be translated with the api
$text = str_replace(" ", "%2C%20", $text);

curl_setopt_array($curl, [
	CURLOPT_URL => "https://cloudlabs-text-to-speech.p.rapidapi.com/synthesize",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS => "voice_code=en-US-1&text=".$text."&speed=1.00&pitch=1.00&output_type=audio_url",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: cloudlabs-text-to-speech.p.rapidapi.com",
		"X-RapidAPI-Key: API Key",
		"content-type: application/x-www-form-urlencoded"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	
	$result = json_decode($response , true);
	$audio_url =  $result['result']["audio_url"];

	echo '
	<center>
	<div class="card">
  <div class="card-header">
    PHP TTS   
  </div>
  <div class="card-body">
    <h5 class="card-title">Click Play To Start The Audio</h5>
    <p class="card-text">
    <audio controls autoplay class="form-control">
	<source src="'.$audio_url.'">
	</audio>
	</p>
    <a href="'.$audio_url.'" class="btn btn-primary"><i class="fa-solid fa-download"></i></a>
  </div>
</div>
</center>
	';
}

}
?>
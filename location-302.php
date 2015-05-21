<?php
function location302Url($id, $secret, $url) {
	$serviceUrl = "http://302-location.com";

	$token = hash("sha256", $secret.$id.$url);
	$token = substr($token, 0, 4);

	return $serviceUrl."/?".http_build_query(array("i" => $id, "u" => $url, "t" => $token));
}
?>
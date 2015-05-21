<?php
function location302Url($id, $secret, $url) {
	$serviceUrl = "http://302-location.com";

	$params = array("i" => $id, "u" => $url);
	$params["t"] = hash("sha256", $secret.http_build_query($params));
	$params["t"] = substr($params["t"], 0, 4);

	return $serviceUrl."/?".http_build_query($params);
}
?>
<?php
function location302Url($id, $secret, $url) {
	$serviceUrl = "http://302-location.com";

	$params = array("id" => $id, "url" => $url);
	$params["token"] = hash("sha256", $secret.http_build_query($params));

	return $serviceUrl."/?".http_build_query($params);
}
?>
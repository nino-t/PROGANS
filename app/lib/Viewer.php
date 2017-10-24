<?php
/**
* Class Untuk mencatat viewer
* Author: Ala Rai AbdiAllah
*/
class Viewer
{
	public static function Thread($db,$thread_id)
	{
		$ip = Viewer::get_real_ip();
		$check = $db->query("SELECT view_id FROM thread_view_log WHERE thread_id = '$thread_id' AND viewer_ip = '$ip' AND DATE(view_at) = CURDATE() ")->num_rows;
		if ($check == 0) {
			$db->query("INSERT INTO thread_view_log(thread_id,viewer_ip) VALUES('$thread_id','$ip') ");
		}
		
	}

	public static function Article($db,$article_id)
	{
		$ip = Viewer::get_real_ip();
		$check = $db->query("SELECT view_id FROM article_view_log WHERE article_id = '$article_id' AND viewer_ip = '$ip' AND DATE(view_at) = CURDATE() ")->num_rows;
		if ($check == 0) {
			$db->query("INSERT INTO article_view_log(article_id,viewer_ip) VALUES('$article_id','$ip') ");
		}
		
	}

	static function get_real_ip() {
    $clientip      = isset( $_SERVER['HTTP_CLIENT_IP'] )       && $_SERVER['HTTP_CLIENT_IP']       ?
                     $_SERVER['HTTP_CLIENT_IP']         : false;
    $xforwarderfor = isset( $_SERVER['HTTP_X_FORWARDED_FOR'] ) && $_SERVER['HTTP_X_FORWARDED_FOR'] ?
                     $_SERVER['HTTP_X_FORWARDED_FOR']   : false;
    $xforwarded    = isset( $_SERVER['HTTP_X_FORWARDED'] )     && $_SERVER['HTTP_X_FORWARDED']     ?
                     $_SERVER['HTTP_X_FORWARDED']       : false;
    $forwardedfor  = isset( $_SERVER['HTTP_FORWARDED_FOR'] )   && $_SERVER['HTTP_FORWARDED_FOR']   ?
                     $_SERVER['HTTP_FORWARDED_FOR']     : false;
    $forwarded     = isset( $_SERVER['HTTP_FORWARDED'] )       && $_SERVER['HTTP_FORWARDED']       ?
                     $_SERVER['HTTP_FORWARDED']         : false;
    $remoteadd     = isset( $_SERVER['REMOTE_ADDR'] )          && $_SERVER['REMOTE_ADDR']          ?
                     $_SERVER['REMOTE_ADDR']            : false;
    
    // Function to get the client ip address
    if ( $clientip          !== false ) {
        $ipaddress = $clientip;
    }
    elseif( $xforwarderfor  !== false ) {
        $ipaddress = $xforwarderfor;
    }
    elseif( $xforwarded     !== false ) {
        $ipaddress = $xforwarded;
    }
    elseif( $forwardedfor   !== false ) {
        $ipaddress = $forwardedfor;
    }
    elseif( $forwarded      !== false ) {
        $ipaddress = $forwarded;
    }
    elseif( $remoteadd      !== false ) {
        $ipaddress = $remoteadd;
    }
    else{
        $ipaddress = false; # unknown
    }
    return $ipaddress;
}
}
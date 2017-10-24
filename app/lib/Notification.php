<?php 
/**
* 
*/
class Notif
{
	
	// public static function Read($db,$id)
	// {

	// }

	public static function Make($db,$type,$id,$user_id,$user_id_parent)
	{
		if ($user_id == $user_id_parent) {
			return false;
		} else {
					
			if ($type == "topic") {
				$notifQuery = $db->query("SELECT notification_id FROM notification WHERE thread_id = '$id' AND user_id = '$user_id' ");
				$rowNotif = $notifQuery->fetch_assoc();
				if ($notifQuery->num_rows > 0) {
					$sql = "UPDATE notification SET notification_sts = 1,created_at = NOW() WHERE notification_id = '$rowNotif[notification_id]' ";
				} else {
					$sql = "INSERT INTO notification(thread_id,article_id,user_id,user_id_parent)
						VALUES('$id','0','$user_id','$user_id_parent')";
				}
			} else {
				$notifQuery = $db->query("SELECT notification_id FROM notification WHERE article_id = '$id' AND user_id = '$user_id' ");
				$rowNotif = $notifQuery->fetch_assoc();
				if ($notifQuery->num_rows > 0) {
					$sql = "UPDATE notification SET notification_sts = 1,created_at = NOW() WHERE notification_id = '$rowNotif[notification_id]' ";
				} else {
					$sql = "INSERT INTO notification(thread_id,article_id,user_id,user_id_parent)
							VALUES('0','$id','$user_id','$user_id_parent')";
				}
				
			}
			$query = $db->query($sql);
			return true;
		}

		
		
	}
}
?>
<?php

/**
 * Filename: MessageDAO.php (Data Access Object)
 * Message class for the Guestbook
 */
class MessageDAO {

    /**
     * @param Message object
     * @return Boolean is the message added to messages table or not
     */
    public static function createMessage($name, $email, $message) {
        // Execute SQL query to INSERT into messages table
        $FirstName = $_POST['name'];
        $EAddress= $_POST['email'];
        $messsageBody = $_POST['message'];
        $query = "INSERT INTO message (name, email, message, date_posted) VALUES ('$FirstName' , '$EAddress' , '$messsageBody' , CURRENT_DATE ) ";
        $result = mysql_query($query);
        return $result;
    }

    /**
     * @param Integer ID number of message
     * @return Message object
     */
    public static function getMessage($id) {
        // Execute SQL to fetch message based on ID
        $query = "SELECT * FROM message where id = {$id}";
    }

    /**
     * @return Array of Message objects
     */
    public static function getAllMessages() {
        // Execute SQL to fetch all messages
        $query = "SELECT * FROM message";
        $result = mysql_query($query);
        if(mysql_num_rows($result) > 0){
            $array = array();
            while($row = mysql_fetch_assoc($result)){
                $array[] = $row;
            }
        }
        return $array;
    }

    /**
     * @param Message object
     * @return Boolean is the message updated or not
     */
    public static function updateMessage($name, $email, $date_posted, $message) {
        // Execute SQL to update the message
        $query = mysql_query("UPDATE message SET name = '$name', email = '$email', message = '$message', date_posted = current_date WHERE id = $id");
    }

    /**
     * @param Integer ID number of message
     * @return Message object
     */
    public static function deleteMessage($id) {
        // Execute SQL to delete the message based on ID
        $query ="DELETE from message where id={$id}";
        $result= mysql_query($query);
        return $result;

    }

    /**
     * Set is_approved to 'Y'
     * @param Integer id number
     * @return Boolean
     */
    public static function approveMessage($id) {
        $query= " UPDATE message set is_approve= 'Y' where id='$id' "; 
        $result = mysql_query($query);
        return $result;
    }

    /**
     * Set is_approved to 'N'
     * @param Integer id number
     * @return Boolean
     */
    public static function rejectMessage($id) {
        $query = "UPDATE message SET is_approve = 'N' where id = '$id'";
        $result = mysql_query($query);
        return $result;
    }
    /**
     * @return Array of Message objects
     */
    public static function getAllApproveMessage(){
    // Execute SQL to post all the message
    $query = " SELECT name, date_posted, message from message where is_approve= 'Y'";
    $result= mysql_query($query);
    return $result;
    }
}
?>
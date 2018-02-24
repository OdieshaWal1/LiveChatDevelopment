<? 
/**
 * 
 */

class Messages {
	
private $created_on;
private $updated_on;
private $m_id;
private $messages;
private $sender;
private $conver_id;
private $date;
private $time;
private $attach_id;
}

/**
 *add comment
 */

function_construct ($messages){

$this->created_on = date("Y-m-d H:i:s");
$this->updated_on = date("Y-m-d H:i:s");
$this->m_id = $messages->m_id;
$this->messages = $messages->messages;
$this->sender = $messages->sender;
$this->conver_id = $messages->conver_id;
$this->date = $messages->date;
$this->time = $messages->time;
$this->attach_id = $messages->attach_id;
}


		public function save() {
			$sql = 'INSERT INTO  messages (messages,sender,attach_id,created_on,updated_on,conver_id,date,time)
			 VALUES (:messages, :sender, :attach_id, :created_on, :updated_on, :conver_id, :date, :time)'

			try {
        $db = openDBConnection();
        $stmt = $db->prepare($sql);
        $stmt->execute(array(":conver_id" => $this->conver_id,
                            ":sender" => strtolower( $this->sender ),
                  			"attach_id" => $this->attach_id,
                  			"date" => $this->date,
                  			"time" => $this->time,
                  			"messages" => strtolower( $this->messages),
                            ":updated_on" => date("Y-m-d H:i:s"),
                            ":created_on" => date("Y-m-d H:i:s")
                            // ":m_id" => $this->m_id ));
       $m_id = $db->lastInsertId();
       closeDBConnection( $db );
      } catch (PDOException $e) {
        $m_id = false;
      }
      return $m_id;
    }

/**
 * getting messages by id 
 */
	static function getAll($m_id){

		$sql= 'SELECT  m_id,messages,sender,attach_id,created_on,updated_on,conver_id,date,time FROM messages
		 WHERE m_id=id ORDER BY created_on DESC';

		 	 try{
        $db = openDBConnection();
        $stmt = $db->prepare( $sql );
        $stmt->bindParam("id", $m_id);
        $stmt->execute();
        $result = $stmt->fetchAll( PDO::FETCH_OBJ );
        closeDBConnection( $db );
      }catch(PDOException $e){
       $result = '{"error":{"text":' .$e->getMessage(). '}}';
      }
      return $result;
    }

    


?>
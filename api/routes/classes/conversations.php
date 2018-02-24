<?

/**
 * 
 */

class Conversations {
  
private $created_on, 
private $updated_on, 
private $user_id,
private $create_id
private $title,
private $c_id
}

/**
 * 
 */

  function_construct ($conversations){

        $this->created_on = date("Y-m-d H:i:s");
        $this->updated_on = date("Y-m-d H:i:s");
        $this->c_id = $conversations->c_id;
        $this->user_id= $conversations->user_id;
        $this->create_id= $conversations->create_id;
        $this->title = $conversations->title;

  }

/*
Creates a conversation resource 
 */

     public function save() {

        $sql= 'INSERT INTO conversations (user_id,create_id,title,created_on,updated_on) 
        VALUES (:user_id,:create_id,:title,:created_on,:updated_on)'

        try {
                 $db = openDBConnection();
              $stmt = $db->prepare($sql);
              $stmt->execute(array(":create_id" => $this->create_id,
                                  "user_id" => $this->user_id,
                                  "title" => strtolower( $this->title),
                                  ":updated_on" => date("Y-m-d H:i:s"),
                                  ":created_on" => date("Y-m-d H:i:s")
                                  // ":c_id" => $this->c_id ));
             $c_id = $db->lastInsertId();
             closeDBConnection( $db );
            } catch (PDOException $e) {
              $c_id = false;
            }
            return $c_id;
              }
            }


/*
    getting conversations by id 

 */

    static function getAll($c_id) {

              $sql= 'SELECT  c_id, create_id, user_id,title,created_on,updated_on FROM conversations
                   WHERE c_id=id ORDER BY created_on DESC';

                     try{
                      $db = openDBConnection();
                      $stmt = $db->prepare( $sql );
                      $stmt->bindParam("id", $c_id);
                      $stmt->execute();
                      $result = $stmt->fetchAll( PDO::FETCH_OBJ );
                      closeDBConnection( $db );
                    }catch(PDOException $e){
                     $result = '{"error":{"text":' .$e->getMessage(). '}}';
                    }
                    return $result;

    }

     function update( $conversations ){
      $sql = 'UPDATE conversations
              SET title=:title,
                  create_id=:create_id,
                  user_id=:user_id,
            WHERE id=:id';
      try {
        $db = openDBConnection();
        $stmt = $db->prepare($sql);
        $stmt->execute(array(":create_id" => $conversations->create_id,
                            ":title" => strtolower( $conversations->title ),
                            ":id" => $conversations->id ));
       $c_id = true;
       closeDBConnection( $db );
      } catch (PDOException $e) {
        $c_id = false;
      }
      return $c_id;
    }


?>
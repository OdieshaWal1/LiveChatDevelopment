<? 
/**
 * 
 */

class Registration {
	
private $created_on;
private $created_by;
private $reg_id;
private $first_name;
private $last_name;
private $number;
private $email;
private $year;
private $specialization;
private $is_active;
}

/**
 *add comment
 */

function _construct ($registration){

$this->created_on = date("Y-m-d H:i:s");
$this->updated_on =  date("Y-m-d H:i:s");
$this->reg_id = $registration->reg_id;
$this->first_name = $registration->first_name;
$this->last_name = $registration->last_name;
$this->number = $registration->number;
$this->email = $registration->email;
$this->year = $registration->year;
$this->specialization = $registration->specilzation;
$this->is_active = $registration->is_active;
}


		public function save() {
			$sql = 'INSERT INTO  registration (reg_id,first_name,
			last_name,number,email,
			year,specialization,is_active,
			created_on,updated_on)
			 VALUES (:reg_id, :first_name, :last_name,:email,:year,
			 :specialization,:is_active,
			 :created_on,:updated_on)'

			try {
        $db = openDBConnection();
        $stmt = $db->prepare($sql);
        $stmt->execute(array(":specilization" => $this->specilization,
                            ":first_name" => strtolower( $this->first_name ),
                            ":last_name" =>strtolower( $this->last_name ),
                  			"is_active" => $this->is_active,
                  			"number" => $this-> number,
                  			"year" => $this->year,
                  			"email" => strtolower( $this->email),
                            ":updated_on" => date("Y-m-d H:i:s"),
                            ":created_on" => date("Y-m-d H:i:s"),
                            ":reg_id" => $this->reg_id ));
       $reg_id = $db->lastInsertId();
       closeDBConnection( $db );
      } catch (PDOException $e) {
        $reg_id = false;
      }
      return $regid;
    }

/**
 * getting registration by id 
 */
	static function getAll($reg_id){

		$sql= 'SELECT  reg_id,first_name,last_name,
		number,email,
		year,specialization,
		is_active,created_on,update_on FROM registration
		 WHERE dept_id=id ORDER BY created_on DESC';

		 	 try{
        $db = openDBConnection();
        $stmt = $db->prepare( $sql );
        $stmt->bindParam("id", $reg_id);
        $stmt->execute();
        $result = $stmt->fetchAll( PDO::FETCH_OBJ );
        closeDBConnection( $db );
      }catch(PDOException $e){
       $result = '{"error":{"text":' .$e->getMessage(). '}}';
      }
      return $result;
    }
?>
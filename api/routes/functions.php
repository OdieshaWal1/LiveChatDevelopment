<?php
$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();
/**
 * Opens database connection
 * @return [type] [description]
 */
// TODO: implement try catch block for db connection
function openDBConnection(){
    $user = getenv('DB_USER');
    $pass = getenv('DB_PASS');
    $pdo = new PDO('mysql:host='.getenv('DB_HOST').';port='.getenv('DB_PORT').';dbname='.getenv('DB_NAME'), $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
}
/**
 * Closes database connection
 * @param  [type] $connection [description]
 * @return [type]             [description]
 */
function closeDBConnection($connection){
  $connection = null;
}
/**
 * Sets the response header
 * @param [type] $app [description]
 */
function setResponseHeader($app){
  $app->response()->header("Content-Type", "application/json");
}
/**
 * Sets the http response code
 * @param [type] $app    [description]
 * @param [type] $status [description]
 */
function setHTTPStatus($app, $status){
  $app->response()->setStatus($status);
}

/**
 * Handles api responses
 * @param  [type] $error
 * @param  [type] $response
 * @param  [type] $app
 * @return [type]
 */
function apiResponse($response, $app, $error, $status){
  if($response === false) $status = 404;

  if(empty($response) === true) $status = 204;

  sendResponse($app, $status, $response);
}
/**
 * Sends api response
 * @param  [type] $app      [description]
 * @param  [type] $status   [description]
 * @param  [type] $response [description]
 * @return [type]           [description]
 */
function sendResponse($app, $status, $response){
    setResponseHeader($app);
    setHTTPStatus($app, $status);
    echo json_encode($response);
}
/**
 * Determines if parameters for search exists
 * @param  [type] $params [description]
 * @return [type]         [description]
 */
function paramCheck($params){
    $checked = true;
    if(empty($params)){
      $checked = false;
    }else{
      if($params['q'] === "") $checked = false;
    }
    return $checked;
}


/**
 * Connects to MYSQL (PHP Admin) server/
 */
  function openMYSQLlConnection(){

        $ser= "localhost";
        $db = "live_chat_api";
        $user = "root"
        $pass = "Odiesha"


        // Connection 
        // 
        
        $lca_conn = mysqli_connect($ser, $user, $pass,$db);

        if (!$lca_conn)
              {
                die ('Cannot Establish Connection to Database : ' . mysql_error());
              }

          $lca_dba = mysql_select_db($db, $lca_conn); 

          if (!$lca_dba)
                {
                  die ('Cannot Select Database : ' . mysql_error())

             }

  }


// /*/**
//  * Connects to a LDAP server.
//  * @return [type] [description]
//  */
// function openLDAPConnection(){
//   $ldaphost = "ldap://192.168.7.5"; //getenv('LDAP_HOST');
//   $ldapport = getenv('LDAP_PORT');
//   $ldapconn = ldap_connect($ldaphost, $ldapport);
//   ldap_set_option($ldapconn, LDAP_OPT_PROTOCOL_VERSION, 3);
//   ldap_set_option($ldapconn, LDAP_OPT_REFERRALS, 0);
//   return $ldapconn;
// }

// function getDnFromLDAP($conn, $q){
// 	$dn = getenv('LDAP_ROOT_DN');
// 	$filter = "(|(name=$q*)(samaccountname=$q)(sn=$q*))";
// 	$attrs = array("displayname","cn", "sn", "givenname", "userPrincipalName", "samaccountname", "telephonenumber", "memberOf", "distinguisedName", "ou");
// 	$results = ldap_search($conn, $dn, $filter, $attrs);
// 	$info = ldap_get_entries($conn, $results);
// 	return $info[0]["dn"];
// }

// function bindLDAP($conn, $dn, $password){
// 	$ldap_bind = @ldap_bind($conn, $dn, $password);
// 	return $ldap_bind;
// }*/

function startSession(){
  session_start();
}

function deleteSession(){
  unset($_SESSION['username']);
}

function setSession($key, $value){
  $_SESSION[$key] = $value;
}

function getSession($key){
  return $_SESSION[$key];
}

/**
 * Checks if a property of an object is empty
 * @param  [type]  $registration [description]
 * @return boolean       [description]
 */
function isValueEmpty( $registration ){
  $empty = false;
  foreach ($registration as $key => $value) {
    if(empty($value)){
      $empty = true;
    }
  }
  return $empty;

}


/*
Checks if a property of an object is empty
 */
function isValueEmpty( $messages ){
  $empty = false;
  foreach ($messages as $key => $value) {
    if(empty($value)){
      $empty = true;
    }
  }
  return $empty;
  
}

/*
Checks if a property of an object is empty
 */
function isValueEmpty( $conversations ){
  $empty = false;
  foreach ($conversations as $key => $value) {
    if(empty($value)){
      $empty = true;
    }
  }
  return $empty;
  
}
?>
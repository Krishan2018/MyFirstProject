<?php /*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DbHandler
 *
 * @author krish
 */
//$woord = "lepel";
//$db = new DbHandler();
//$db->findWoord($woord);

class DbHandler {
    private $woord;
    private $gevonden;
    
    //put your code here
    public function findWoord($woord){
        $this->woord = $woord;
        //Stap 1: Instellen van PDO
        $option = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,   
        ];
        
        $adres = '127.0.0.1';
        $charset = 'utf8mb4';
        $db = 'palindroom';
        $user = "root";
        $password = "";   
        
        $host = "mysql:host=$adres;dbname=$db;charset=$charset";  
        
        $sql = "SELECT * FROM palindromen WHERE woord= '".$woord."';";
        try{
            //Stap 2: Connect met de database 
            $conn = new PDO($host, $user, $password, $option);
            // Stap 3: Run de sql query
            $stmt = $conn->query($sql);
            
            // Stap 4: Connect met de database
            if ($stmt->rowCount () == 1){
                $this->gevonden = True;
            }
            else{
                $this->gevonden = False;
            }      
        }
        catch (PDOExeption $e) {
            echo "Ik ben Krishan Bhugwansing" . $e->getMassage()."(".$e->getCode().")." ;
        }        
    }
    
    public function isWoordGevonden(){
        return $this->gevonden;
    }
}

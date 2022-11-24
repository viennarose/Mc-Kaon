<?php 
require_once 'connection.php';

class Projects
{
    public function __construct()
    {
        $database   = new Database;
        $db         = $database->dbConnection();
        $this->conn = $db;
    }

    public function query($sql)
    {
        $stmt = $this->conn->prepare($sql);
        return $stmt;
    }
    public function create()
    {
        try {
            $this->conn->beginTransaction();
            $stmt = $this->conn->prepare("INSERT INTO
                projects
            SET
                title =?,
                description = ?
            ");
            $stmt->execute([$_POST['title'], $_POST['description']]);
            $this->conn->commit();
            return true;
        } catch (PDOException $e) {
            $this->conn->rollback();
            $validator['success'] = false;
            $validator['msg'] = 'ERROR: ' . $e->getMessage();
            echo json_encode($validator);
        }
    }
     public function update_Assigned_driver()
    {
        try {
            $this->conn->beginTransaction();
            $stmt = $this->conn->prepare("UPDATE
                `driver`
            SET
                Assigned_car = ?
               
            WHERE
                id = ?
            ");
            $stmt->execute([$_POST['assigned'], $_POST['id']]);
            $this->conn->commit();
            return true;
        } catch (PDOException $e) {
            $this->conn->rollback();
            $validator['success'] = false;
            $validator['msg'] = 'ERROR: ' . $e->getMessage();
            echo json_encode($validator);
        }
    }
   public function create_driver()
    {
        try {
            $this->conn->beginTransaction();
            $stmt = $this->conn->prepare("INSERT INTO
                driver
            SET
              First_name= ?,
            Middle_name= ?,
            Last_name= ?,
            Gender= ?,
            Date_of_birth= ?,
            House_Number= ?,
            Street= ?,
            Baranggay= ?,
            City_or_municipality= ?,
            Province= ?,
            Civil_status= ?,
            Citizenship= ?,
            Religion= ?,
            Contact_number= ?,
            Reference_contact_number= ?,
            Email_address= ?,
            Picture= ?,
            Drivers_license_id= ?,
            Drivers_category= ?,
            Restriction= ?,
            Work_experience= ?,
            Driving_Experience= ?,
            Employer= ?,
            Zipcode= ?,
            date_expired= ?,
            Username= ?,
            Password= ?
            ");



$UserName = $_POST['UserName'];

$Password = $_POST['Password'];

$Last = $_POST['Last'];

$First = $_POST['First'];


$Middle = $_POST['Middle'];

  $Gender = $_POST['Gender'];

$Civil = $_POST['Civil'];

$Citizenship = $_POST['Citizenship'];

$Birth = $_POST['Birth'];

  $Religion = $_POST['Religion'];

$Lot_Number = $_POST['Lot_Number'];

$Street = $_POST['Street'];

  $Barangay = $_POST['Barangay'];

$Zip = $_POST['Zip'];

$City = $_POST['City'];
//adddress
  $Province = $_POST['Province'];

$Contact = $_POST['Contact'];

$Other = $_POST['Other'];

  $Email = $_POST['Email'];

$License_id = $_POST['License_id'];
$Category = $_POST['Category'];

$Restriction = $_POST['Restriction'];

$Expiry = $_POST['Expiry'];

  $Driving_Experience = $_POST['Driving_Experience'];

$Experience = $_POST['Experience'];

$Employer = $_POST['Employer'];
$filename = $_FILES['file']['name'];
                  $Last = ucwords($Last);
      $First = ucwords($First);
    $Middle = ucwords($Middle);
    $Citizenship = ucwords($Citizenship);
    $Barangay = ucwords($Barangay);
    $Street = ucwords($Street);
   $City = ucwords($City);
 $Experience = ucwords($Experience);
$Province = ucwords($Province);
$Employer = ucwords($Employer);

$filetmpname = $_FILES['file']['tmp_name'];
$folder = '../../images/';
move_uploaded_file($filetmpname, $folder.$filename);



$Password =password_hash($Password, PASSWORD_DEFAULT);

            $stmt->execute([$First, $Middle, $Last, $Gender, $Birth, $Lot_Number, $Street, $Barangay, $City, $Province, $Civil, $Citizenship, $Religion, $Contact, $Other, $Email, $filename, $License_id, $Category, $Restriction, $Experience, $Driving_Experience, $Employer, $Zip, $Expiry, $UserName, $Password]);
            $this->conn->commit();
            return true;
        } catch (PDOException $e) {
            $this->conn->rollback();
            $validator['success'] = false;
            $validator['msg'] = 'ERROR: ' . $e->getMessage();
            echo json_encode($validator);
        }
    }
 

}
?>

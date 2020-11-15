<?php
/**
 * Created by PhpStorm.
 * User: troot
 * Date: 1/1/15
 * Time: 10:55 PM
 */

namespace dbPlayer;


class dbPlayer {

    private $db_host="localhost";
    private $db_name="hms";
    private $db_user="root";
    private $db_pass="";
    protected $con;

   public function open(){
        $this->con=$con = mysqli_connect($this->db_host,$this->db_user,$this->db_pass,$this->db_name);
       if($this->con){

               return "true";
           }
           else
            {
               return mysqli_error();
           }

    } //open close

    public  function close()
    {
        $res=mysqli_close($this->con);
        if($res)
        {
            return "true";
        }
        else
        {
            return mysqli_error();
        }

    }

    public function insertData($table,$data)
    {
        $keys   = "`" . implode("`, `", array_keys($data)) . "`";
        $values = "'" . implode("', '", $data) . "'";
       //var_dump("INSERT INTO `{$table}` ({$keys}) VALUES ({$values})");
        $this->con->query("INSERT INTO `{$table}` ({$keys}) VALUES ({$values})");

        //return mysqli_insert_id().mysqli_error();

    }
    public function registration($query,$query2)
    {
        $res=$this->con->query($query);
        if($res)
        {

            $res=$this->con->query($query2);
            if($res)
            {

                return "true";
            }
            else
            {
                return mysqli_error();
            }

        }
        else
        {
            return mysqli_error();
        }


    }

    public  function  getData($query)
    {
        $res = $this->con->query($query);
        if(!$res)
        {
            return "Can't get data ".mysqli_error();
        }
        else
        {
            return $res;
        }

    }
    public function  update($query)
    {
        $res = $this->con->query($query);
        if(!$res)
        {
            return "Can't update data ".mysqli_error();
        }
        else
        {
            return "true";
        }
    }
    public  function  updateData($table,$conColumn,$conValue,$data)
    {
        $updates=array();
        if (count($data) > 0) {
            foreach ($data as $key => $value) {

                $value = mysqli_real_escape_string($value); // this is dedicated to @Jon
                $value = "'$value'";
                $updates[] = "$key = $value";
            }
        }
        $implodeArray = implode(', ', $updates);
        $query ="UPDATE ".$table." SET ".$implodeArray." WHERE ".$conColumn."='".$conValue."'";
       //var_dump($query);
        $res = $this->con->query($query);
        if(!$res)
        {
            return "Can't Update data ".mysqli_error();
        }
        else
        {
            return "true";
        }
    }

    public  function delete($query)
    {
        $res = $this->con->query($query);
       // var_dump($query);
        if(!$res)
        {
            return "Can't delete data ".mysqli_error();
        }
        else
        {
            return "true";
        }
    }

    public  function  getAutoId($prefix)
    {
        $uId="";
        $q = "select number from auto_id where prefix='".$prefix."';";
        $result = $this->getData($q);
        $userId=array();
        while($row = mysqli_fetch_assoc($result))
        {

            array_push($userId,$row['number']);

        }
        // var_dump($UserId);
        if(strlen($userId[0])>=1)
        {
            $uId=$prefix."00".$userId[0];
        }
        elseif(strlen($userId[0])==2)
        {
            $uId=$prefix."0".$userId[0];
        }
        else
        {
            $uId=$prefix.$userId[0];
        }
        array_push($userId,$uId);
        return $userId;

    }
    public  function  updateAutoId($value,$prefix)
    {
         $id =intval($value)+1;

        $query="UPDATE auto_id set number=".$id." where prefix='".$prefix."';";
        return $this->update($query);

    }

    public  function execNonQuery($query)
    {
        $res = $this->con->query($query);
        if(!$res)
        {
            return "Can't Execute Query".mysqli_error();
        }
        else
        {
            return "true";
        }
    }
    public  function execDataTable($query)
    {
        $res = $this->con->query($query);
        if(!$res)
        {
            return "Can't Execute Query".mysqli_error();
        }
        else
        {
            return $res;
        }
    }

}

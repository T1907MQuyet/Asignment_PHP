<?php
namespace ass1;

namespace Model;
use lib\connector;
use lib\model;
class Book extends Model {
    public $id;
    public $name;
    public $category;

    protected $table = "books";


    public function __construct($id=null,$name=null, $category=null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->category = $category;
    }

    public function all(){
        $sql = "SELECT * FROM ".$this->getTable();
        $rs = $this->getConn()->query($sql);
        return $this->toArray($rs);
    }


    public function getBooks(){
        $sql = "SELECT * FROM ".$this->getTable();
        $rs = $this->getConn()->query($sql);
        return $this->toArray($rs);
    }



    public function save(){ // la su ket hop cua insert va update
        $sql_text = "INSERT INTO ".$this->getTable()." (id,name,category) VALUES(".(is_null($this->id)?'null':$this->id).",'".$this->name.
            "','".$this->category."') ON DUPLICATE KEY UPDATE name = '".$this->name."',category = '".$this->category. "';";
        try{
            $this->getConn()->query($sql_text);
        }catch (\Exception $e){
            die($e->getMessage());
        }
    }

    public function find($id){
        $sql_text = "SELECT * FROM ".$this->getTable()." WHERE id = ".$id;
        $ary = $this->toArray($this->getConn()->query($sql_text));
        if(count($ary) > 0){
            $data = $ary[0];
            return new Book($data["id"],$data["name"],$data["category"]);
        }
        return null;
    }

    public function delete(){
        $sql_text = "DELETE FROM ".$this->getTable()." WHERE id = ".$this->id;
        $this->getConn()->query($sql_text);
    }
}

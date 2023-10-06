<?php
 class Patient {
    private $id;
    private  $tenBenhNhan;
    private  $ngaykham;
    private $trieuChung;
    private $idBacSi;
    
    public function __construct($id,$tenBenhNhan,$ngaykham,$trieuChung,$idBacSi)
    {
        $this->id=$id;
        $this->tenBenhNhan=$tenBenhNhan;
        $this->ngaykham=$ngaykham;
        $this->trieuChung=$trieuChung;
        $this->idBacSi=$idBacSi;

    }
    public function getID(){
        return $this->getID();
    }
    public function setID($id){
        $this->id=$id;
    }
    public function gettenBenhNhan(){
        return $this->getID();
    }
    public function settenBenhNhan($tenBenhNhan){
        $this->tenBenhNhan=$tenBenhNhan;
    }
    public function getngayKham(){
        return $this->getID();
    }
    public function setngayKham($ngaykham){
        $this->ngaykham=$ngaykham;
    }
    public function gettrieuChung(){
        return $this->getID();
    }
    public function settrieuChung($trieuChung){
        $this->trieuChung=$trieuChung;
    }
    public function getidBacSi(){
        return $this->getID();
    }
    public function setidBacSi($idBacSi){
        $this->idBacSi=$idBacSi;
    }
}

<?php
require_once APP_ROOT.'/app/models/Patient.php';

class PatientService {
    public function getAllPatients(){
        try {
            $conn = new PDO('mysql:host=localhost;dbname=phongmach', 'root', '');
            $sql = "SELECT * FROM phongmach";
            $stmt = $conn->query($sql);
            $patients = [];

            while ($row = $stmt->fetch()) {
                $patient = new Patient($row['id'], $row['tenBenhNhan'], $row['ngayKham'], $row['trieuChung'], $row['idBacSi']);
                $patients[] = $patient;
            }

            return $patients;
        } catch(PDOException $e) {
            // Xử lý lỗi và hiển thị thông báo hoặc ghi log
            // Đảm bảo khai báo biến $patients trong khối catch
            $patients = [];
            // Xử lý lỗi tại đây (ví dụ: ghi log, hiển thị thông báo)
            return $patients;
        }
    }
}
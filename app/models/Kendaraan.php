<?php

namespace App\Models;

use App\Core\Model;

class Kendaraan extends Model
{

      public function show()
      {
            $query = "SELECT * FROM tb_kendaraan";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }

      public function save()
      {
            $nama = $_POST['nama'];
            $nomor_polisi = $_POST['nomor_polisi'];
            $warna = $_POST['warna'];
            $jumlah = $_POST['jumlah'];

            

          $sql = "INSERT INTO tb_kendaraan
            SET nama=:nama, nomor_polisi=:nomor_polisi, warna=:warna, jumlah=:jumlah";
          $stmt = $this->db->prepare($sql);


            $stmt->bindParam(":nama", $nama);
            $stmt->bindParam(":nomor_polisi", $nomor_polisi);
            $stmt->bindParam(":warna", $warna);
            $stmt->bindParam(":jumlah", $jumlah);

            $stmt->execute();
      }

      public function edit($id)
      {
            $query = "SELECT * FROM tb_kendaraan WHERE id=:id";
            $stmt = $this->db->prepare($query);

            $stmt->bindParam(":id", $id);
            $stmt->execute();

            return $this->select($stmt);
      }

      public function update()
      {
            $nama = $_POST['nama'];
            $nomor_polisi = $_POST['nomor_polisi'];
            $warna = $_POST['warna'];
            $jumlah = $_POST['jumlah'];
            $id = $_POST['id'];

            $sql = "UPDATE tb_kendaraan
          SET nama=:nama, nomor_polisi=:nomor_polisi, warna=:warna, jumlah=:jumlah WHERE id=:id";

          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":nama", $nama);
            $stmt->bindParam(":nomor_polisi", $nomor_polisi);
            $stmt->bindParam(":warna", $warna);
            $stmt->bindParam(":jumlah", $jumlah);
          $stmt->bindParam(":id", $id);

          $stmt->execute();
      }

      public function delete($id)
      {
            $sql = "DELETE FROM tb_kendaraan WHERE id=:id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":id", $id);
            $stmt->execute();
      }
}

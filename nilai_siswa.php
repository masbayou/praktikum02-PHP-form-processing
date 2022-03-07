<?php
// mengambil request data yang di input
  $proses = $_POST['proses'];
  $nama_siswa = $_POST['nama'];
  $mata_kuliah = $_POST['matkul'];
  $uts = $_POST['nilai_uts'];
  $uas = $_POST['nilai_uas'];
  $tugas = $_POST['nilai_tugas'];
  $total = $uts + $uas + $tugas;
  $alphabet = $total/3;
  if ($alphabet <=55) 
  {
      $lulus = "Anda tidak lulus";
  } 
  else {
      $lulus = "Selamat anda lulus";
  }

  if ($alphabet >=85) {
      $grade = "A";
  }
  elseif ($alphabet >=70) {
      $grade = "B";
  }
  elseif ($alphabet >=56) {
      $grade = "C";
  }
  elseif ($alphabet >=36) {
      $grade = "D";
  }
  elseif ($alphabet >= 10) {
      $grade = "E";
  }else {
      $grade ="I(Tidak ada nilai)";
  }
// menampilkan data yang telah di ambil
  
  echo '</br>Nama :' .$nama_siswa;
  echo '</br>Mata Kuliah :' .$mata_kuliah;
  echo '</br>Nilai UTS :' .$uts;
  echo '</br>Nilai UAS :' .$uas;
  echo '</br>Nilai Tugas :' .$tugas;
  echo '</br>Keterangan :' .$lulus;
  echo '</br>Grade :' .$grade;
  echo '</br>' .$proses;
  ?>
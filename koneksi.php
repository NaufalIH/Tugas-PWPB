<?php
   $koneksi = new PDO("mysql:host=localhost;dbname=naufal_database", "root", "");
   
   $koneksi->query("insert into siswa values (2, 'saki')");

   $koneksi->query("delete from siswa where id=2");

   $koneksi->query("update siswa set id='56' where nama='Fuwa' ");

   $koneksi->query("select  `nama` from `siswa` where id=56");
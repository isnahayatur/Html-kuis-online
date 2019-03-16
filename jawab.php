<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="css2.CSS"/>
<title>LIHAT NILAIMU ^-^</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="css2.CSS"/>
<title>LIHAT NILAIMU ^-^</title>
</head>

<body background="3.jpg">
</body>



<div id=header>
<h2>QUISHY Game!</h2>
<marquee direction="left">Selamat datang di QUISHY GAME!!! masukkan uname dan password, jawab beberapa kuis dan lihatlah hasilmu ^-^</marquee>
</div>

<div class="transparent">
<?php
mysql_connect("localhost","root","");
mysql_select_db("db_kuis");

       if(isset($_POST['submit'])){
			$pilihan = isset($_POST['pilihan']) ? $_POST['pilihan'] : "";
            $id_soal=$_POST["id"];
            $jumlah=$_POST['jumlah'];
            
            $score=0;
            $benar=0;
            $salah=0;
            $kosong=0;
            
            for ($i=0;$i<$jumlah;$i++){
                //id nomor soal
                $nomor=$id_soal[$i];
                
                //jika user tidak memilih jawaban
                if (empty($pilihan[$nomor])){
                    $kosong++;
                }else{
                    //jawaban dari user
                    $jawaban=$pilihan[$nomor];
                    
                    //cocokan jawaban user dengan jawaban di database
                    $query=mysql_query("select * from tbl_soal where id_soal='$nomor' and knc_jawaban='$jawaban'");
                    
                    $cek=mysql_num_rows($query);
                    
                    if($cek){
                        //jika jawaban cocok (benar)
                        $benar++;
                    }else{
                        //jika salah
                        $salah++;
                    }
                    
                } 
                /*RUMUS
                Jika anda ingin mendapatkan Nilai 100, berapapun jumlah soal yang ditampilkan 
                hasil= 100 / jumlah soal * jawaban yang benar
                */
                
                $result=mysql_query("select * from tbl_soal WHERE aktif='Y'");
                $jumlah_soal=mysql_num_rows($result);
                $score = 100/$jumlah_soal*$benar;
                $hasil = number_format($score,1);
            }
        }

		?>
		
		<center>
		<?php
      echo "
         <tr><td>Jumlah Jawaban Benar</td><td> : $benar </td></tr></br>
         <tr><td>Jumlah Jawaban Salah</td><td> : $salah</td></tr></br>
         <tr><td>Jumlah Jawaban Kosong</td><td>: $kosong</td></tr></br>
        </table></div>";
        ?>
		</center>
</div>

<div id="gif">
<?php
if($benar=='5'){
		echo '<img src=100.gif>';
		}else if($kosong=='5'){
		echo '<img src=gagal.gif>';
		}else {echo'<img src=ok.gif>';}
		?>
</div>

<div id="tombol">
<table style="margin:10px 10px 0px 300px">
<tr><td><a href="soal.php"><input type="submit" name="masuk" value="Main Lagi" /></a></td>
<td><a href="awal.php"><input type="submit" name="masuk2" value="Kembali ke awal" /></a></tr></td>
</table>
</div>


<div id="footer" style=" margin:310px 0px 0px 0px">
<p>Created by:<a href="https://www.instagram.com/_isna.lfrdh/?hl=id">Isna Hayatur Rodhiyah</a> &
<a href="https://www.instagram.com/putri_jayanti261/">Putri Jayanti</a></p>
<h4>Teknik Komputer Jaringan <a href="#">SMK N 1 Rembang</a> 2016/2017</h4>
</div>

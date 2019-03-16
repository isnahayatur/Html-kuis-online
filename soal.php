<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="css2.CSS"/>
<title>SELAMAT MENGERJAKAN!</title>
</head>

<body background="3.jpg">
<audio src="backsong.mp3" autoplay="autoplay" hidden="hidden"></audio>
</body>
</html>

<div id="header">
<h2>QUISHY Game!</h2>
<marquee direction="left">Selamat datang di QUISHY GAME!!! masukkan uname dan password, jawab beberapa kuis dan lihatlah hasilmu ^-^</marquee>

</div>

<div class="transparent" style="height:800">
</h3>Jawablah kuis-kuis berikut dengan tepat!</h3></br></br>
<?php
mysql_connect("localhost","root","");
mysql_select_db("db_kuis");

$hasil=mysql_query("select * from tbl_soal WHERE aktif='Y' ORDER BY RAND ()");
        $jumlah=mysql_num_rows($hasil);
        $urut=0;
        while($row =mysql_fetch_array($hasil))
		{
            $id=$row["id_soal"];
            $pertanyaan=$row["soal"];
            $pilihan_a=$row["a"];
            $pilihan_b=$row["b"];
            $pilihan_c=$row["c"];
            $pilihan_d=$row["d"]; 
            
			
            ?>
			
            <form name="form1" method="post" action="jawab.php">
            <input type="hidden" name="id[]" value=<?php echo $id; ?>>
            <input type="hidden" name="jumlah" value=<?php echo $jumlah; ?>>
			
			<table>
			<tr>
                  <?php 
				  echo $urut=$urut+1;
             	  echo ". $pertanyaan"; 
				  ?>
            </tr>
            

            <tr>
			
                  <td height="21"><font color="#000000">&nbsp;</font></td>
              <td> A.  <input name= "pilihan[<?php echo $id; ?>]" type="radio" value="A "> 
                <?php echo "$pilihan_a";?></td>
            </tr>
			
            <tr>
                  <td><font color="#000000">&nbsp;</font></td>
                <td> B. <input name="pilihan[<?php echo $id; ?>]" type="radio" value="B"> 
                <?php echo "$pilihan_b";?></td>
            </tr>
			
            <tr>
                  <td><font color="#000000">&nbsp;</font></td>
                <td> C.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="C"> 
                <?php echo "$pilihan_c";?></td>
            </tr>
            <tr>
                <td><font color="#000000">&nbsp;</font></td>
                <td> D.   <input name="pilihan[<?php echo $id; ?>]" type="radio" value="D"> 
                <?php echo "$pilihan_d";?></td>
            </tr></br>
</table>
            
        <?php
        }
        ?>          
</div>

<div id="demo"></p>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>
            var url = "waktuhabis.php"; // url tujuan
            var count = 30; // dalam detik
            function countDown() {
                if (count > 0) {
                    count--;
                    $('#demo').html('00 : 00 : ' + count );
                    setTimeout("countDown()", 1000);
                } else {
                    window.location.href = url;
                }
            }

            countDown();
        </script>
</div>

<div class="submit">
  <td>&nbsp;</td>
                  <td><p><input type="submit" name="submit" value="Kumpulkan Jawaban" onclick="return confirm('Apakah Anda yakin dengan jawaban Anda?')"></p></td>
       
            
            </table>
</form>
</div>

<div id="footer" style="border-style:solid">
<p>Created by:<a href="https://www.instagram.com/_isna.lfrdh/?hl=id">Isna Hayatur Rodhiyah</a> &
<a href="https://www.instagram.com/putri_jayanti261/">Putri Jayanti</a></p>
<h4>Teknik Komputer Jaringan <a href="#">SMK N 1 Rembang</a> 2016/2017</h4>
</div>




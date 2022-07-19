<!DOCTYPE html>
<html>
<head>
	<style>
		* {
			box-sizing: border-box;
		}

		body {
			font-family: arial;
			padding: 10px;
			background: #f1f1f1;
			background-image: url("bg.jpg");
		}

		.header {
			padding: 30px;
			text-align: center;
			background: white
		}

		.header h1 {
			font-size: 50px
		}

		.topnav {
			overflow: hidden;
			background-color: #333;
		}

		.topnav a {
			float: left;
			display: block;
			color: #f2f2f2;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		.topnav a:hover {
			background-color: #007272;
			color: blue;
		}

		.leftcolumn {
			float: left;
			width: 25%;
			background-color: #002020;
			padding-left: 20px
		}

		.centercolumn {
			float: left;
			width: 50%;
			background-color: #002020;
			padding-left: 20px
		}

		.rightcolumn {
			float: left;
			width: 25%;
			background-color: #002020;
			padding-left: 20px
		}

		.fakeimg {
			background-color: #004141;
			width: 75%;
		}

		.card {
			background-color: white;
			padding: 20px;
			margin-top: 20px;
		}

		.row:after {
			content: "";
			display: table;
			clear: both;
		}

		.footer {
			padding: 20px;
			text-align: center;
			background-color: #002020;
			margin-top: 20px;
		}

		.leftcolumn, .rightcolumn {
			width: 100%
			padding0;
		}
	}

	    .topnav a {
	    	float: none;
	    	width: 100%
	    }
	}
	</style>
</head>
<body>

	<div class="header" style="background-color: skyblue;">
		<h1 style="font-family: serif;">IKA WEBSITE</h1>
		<p>Selamat datang di website ini!!!</p>
	</div>

	<div class="rightcolumn">
			<div class="card" style="background-color: lightblue;">
				<h2 style="font-family: Times New Roman">Hobiku Adalah!!!</h2>
				<p>Aku memiliki banyak sekali hobi diataranya tidur heheh, becanda. aku suka masak meski mungkin gak enak wkwkw, baca buku meski sebagian bukunya berjenre petualangan fiksi hehe, aku juga suka main alat musik meski gak jago, dan masih banyak lagi sih sebenarnya. tapi sepertinya segini aja udah cukup untuk intro</p>
			</div>

		</div>

	<div class="row">
		<div class="centercolumn">
			<div class="card" style="background-color: skyblue;">
				<h2 align="center" style="font-family: cursive;">PEMROGRAMAN WEB</h2><br><br>

				<div style="background-color: skyblue;">
					<img src="rembang.jpg" width="550px" height="350px">
					<div align="center"><strong><font size="5" face="courier New, courier,mono">Isi Data Diri</font></strong></div>
		            <form name="nama" method="post" action="proses.php">
			        <table width="54%" border="0" align="center">
				    <tr>
					    <td><h4>Nama lengkap</h4></td>
					    <td><input style="background-color:lightblue;" type="text" name="nama" id="nama"></td>
				    </tr>
				    <tr>
					    <td><h4>NIM</h4></td>
					    <td><input style="background-color:lightblue;" type="text" name="nim" id="nim"></td>
				    </tr>
				    <tr>
					    <td><h4>E-mail</h4></td>
					    <td><input style="background-color:lightblue;" type="text" name="email" id="email"></td>
				    </tr>
				    <tr>
					<td><h4>Prodi</h4></td>
					<td><select style="background-color:lightblue;" name="prodi" id="prodi">
						<option>Informatika</option>
						<option>Hukum</option>
						<option>PGSD</option>
						<option>Teknik Kimia</option>
						<option>Teknik Industri</option>
					</select></td>
				</tr>
				<tr>
					<td>&nbsp</td>
					<td><input style="background-color:lightblue;" type="submit" name="submit" value="kirim" id="kirim"><input style="background-color:lightblue;" type="reset" name="reset" value="batal"></td>
				</tr>
				
			</table>
		</form>
		<br>
		<div align="center"><strong><a href="lihat.php">::Lihat Data Diri::</a></strong></div>
				</div>
			</div>

			<div class="card"; style="background-color: skyblue;">
				<h1><center style="font-family:cursive ;">KALKULATOR</center></h1>
			<table border="1" cellspacing="10" align="center" cellpadding="">
                <tr>
                    <td colspan="4" id="inputLabel">0</td>
                </tr>

                <tr>
                    <td colspan="3"><button onclick="pushBtn(this);">Reset</button></td>
                    <td><button onclick="pushBtn(this);">/</button></td>
                </tr>

                <tr>
                    <td><button onclick="pushBtn(this);">7</button></td>
                    <td><button onclick="pushBtn(this);">8</button></td>
                    <td><button onclick="pushBtn(this);">9</button></td>
                    <td><button onclick="pushBtn(this);">*</button></td>
                </tr>

                <tr>
                    <td><button onclick="pushBtn(this);">4</button></td>
                    <td><button onclick="pushBtn(this);">5</button></td>
                    <td><button onclick="pushBtn(this);">6</button></td>
                    <td><button onclick="pushBtn(this);">-</button></td>
                </tr>

                <tr>
                    <td><button onclick="pushBtn(this);">1</button></td>
                    <td><button onclick="pushBtn(this);">2</button></td>
                    <td><button onclick="pushBtn(this);">3</button></td>
                    <td><button onclick="pushBtn(this);">+</button></td>
                </tr>

                <tr>
                   <td colspan="2"><button onclick="pushBtn(this);">0</button></td>
                   <td><button onclick="pushBtn(this);">.</button></td>
                   <td><button onclick="pushBtn(this);">=</button></td>
                </tr>
                </table>
                <script type="text/javascript">
                var inputLabel = document.getElementById('inputLabel');
                function pushBtn(obj) {
                    var pushed = obj.innerHTML
                    if (pushed == '=') {
                    // Calculate
                    inputLabel.innerHTML = eval(inputLabel.innerHTML);
                    } else if (pushed == 'Reset') {
                    // All Clear
                    inputLabel.innerHTML = '0';
                    } else {
                        if (inputLabel.innerHTML == '0') {
                               inputLabel.innerHTML = pushed;  
                    } else {
                        inputLabel.innerHTML += pushed;   
                    }
                }
            }
            </script>
            </div>

			<div class="card" style="background-color: skyblue;">
				<h1><center>KALENDER</center></h1>
				<h2><center>July 2022</center></h2>
				<?php
                $hari	= date("d");
                $bulan	= date ("m");
                $tahun	= date("Y");
                $jumlahhari=date("t",mktime(0,0,0,$bulan,$hari,$tahun));
                ?>

                <table style="border:2px solid #00000f " align="center" width="10%" height="35%">
                <tr style="background-color: deepskyblue;">
                    <td align=center><font color="#FF0000">Minggu</font></td>
                    <td align=center>Senin</td>
                    <td align=center>Selasa</td>
                    <td align=center>Rabu</td>
                    <td align=center>Kamis</td>
                    <td align=center>Jumat</td>
                    <td align=center>Sabtu</td>
                </tr>
                <?php
                $s=date ("w", mktime (0,0,0,$bulan,1,$tahun));
                for ($ds=1;$ds<=$s;$ds++) {
                    echo "<td></td>";
                }
 
                for ($d=1;$d<=$jumlahhari;$d++) {
	                if (date("w",mktime (0,0,0,$bulan,$d,$tahun)) == 0) {
		                echo "<tr>"; 
		            }
                $warna="#000000";
 
                if (date("l",mktime (0,0,0,$bulan,$d,$tahun)) == "Sunday") { $warna="#002020"; }
                echo "<td align=center valign=middle> <span style=\"color:$warna\">$d</span></td>"; 
                if (date("w",mktime (0,0,0,$bulan,$d,$tahun)) == 6) { echo "</tr>"; }
                }
                echo '</table>'; 
				?>
		    </div>
		</div>

		<div class="rightcolumn">
			<div class="card" style="background-color: lightblue;">
				<h2 style="font-family: Times New Roman">Intip prestasiku yuk, sombong dikit gak papa lah!!!</h2>
				<p>semester 1 kemaren aku dan timku berhasil menang juara 3 lomba nasional Nasyid dan aku juga menduduki haran 1 lomba menulis di Competer Malang. semester 2 nya aku dan timku berhasil menduduki juara 2 nasional lomba paduan suara umum yang diadakan oleh umm dan sekarang aku resmi menjadi devisi HPD di ukm psm ahda gitana</p>
			</div>

		</div>
		<div class="rightcolumn">
			<div class="card" style="background-color: lightblue;">
				<h2 style="font-family: Times New roman">Hay aku Imroatus Sholihah</h2>
				<h4>Aku adalah mahasiswa Informatika Universitas Ahmad Dahlan</h4>
				<div>
					<img src="ika.jpg" width="100px">
				</div>
			</div>
		</div>
</div>   
     <div class="footer" style="background-color: deepskyblue;">
     	<p>Copyright(c)Imroatus2022</p>
     	<p></p>
     </div>

</body>
</html>
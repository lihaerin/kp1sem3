<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pendaftaran Santri </title>
	<link rel="stylesheet" href="daftar.css">
</head>
<body>
<form action="proses-pendaftaran.php" method="POST">
<div class="wrapper">
    <div class="title">
      Pendaftaran Santri Baru
    </div>
    <div class="form">
       <div class="inputfield">
          <label>Nama Santri</label>
          <input type="text" required class="input" name="nama_santri">
       </div>  
        <div class="inputfield">
          <label>Nama WaliSantri</label>
          <input type="text" required class="input" name="nama_walisantri">
       </div>  
       <div class="inputfield">
          <label>Tempat Tanggal Lahir</label>
          <input type="text" required class="input" name="ttl">
       </div>
        <div class="inputfield">
          <label>Jenis Kelamin</label>
          <div class="custom_select">
            <select required name="jenis_kelamin">
              <option value="">Select</option>
              <option value="Laki-laki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>
       </div> 
       <div class="inputfield">
        <label>Kelas</label>
        <div class="custom_select">
          <select required name="kelas">
            <option value="">Select</option>
            <option value="Paud">Paud</option>
            <option value="Tk A">Tk A</option>
            <option value="Tk B">Tk B</option>
            <option value="1 SD">1 SD</option>
            <option value="2 SD">2 SD</option>
            <option value="3 SD">3 SD</option>
            <option value="4 SD">4 SD</option>
            <option value="5 SD">5 SD</option>
            <option value="6 SD">6 SD</option>
            <option value="7 SMP">7 SMP</option>
            <option value="8 SMP">8 SMP</option>
            <option value="9 SMP">9 SMP</option>
            <option value="10 SMA/SMK">10 SMA/SMK</option>
            <option value="11 SMA/SMK">11 SMA/SMK</option>
            <option value="12 SMA/SMK">12 SMA/SMK</option>
          </select>
        </div>
     </div>  
      <div class="inputfield">
          <label>No.Telepon WaliSantri</label>
          <input type="text"required class="input" name="no_hp_walisantri">
       </div>
      <div class="inputfield">
          <label>Alamat</label>
          <textarea class="textarea" required name="alamat"></textarea>
       </div> 
      <div class="inputfield">
      <input type="submit" value="Daftar" name="Daftar" class="btn">
      </div>
    </form>
    </div>
</div>	
</body>
</html>
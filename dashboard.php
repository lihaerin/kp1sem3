<?include("config.php");?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>dashboard </title>
    <link rel="stylesheet" href="dashboard.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet' >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <span class="logo_name">MY TPQ NI</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="dashboard.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Calon Santri</span>
          </a>
        </li>
        <li class="log_out">
          <a href="index.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Selamat Datang di Dashboard Admin</span>
      </div>
      <div class="profile-details">
        <img src="profile.jpeg" alt="">
        <span class="admin_name">raoncew</span>
       </nav>
      </section> 
</div>
<div class="tabel-col">
                <table class="table table-sm">
                    <thead>
                    <tr>
                    <th>No</th>
                    <th>Nama Santri</th>
                    <th>Nama Wali Santri</th>
                    <th>Ttl</th>
                    <th>Jenis Kelamin</th>
                    <th>Kelas</th>
                    <th>No.hp Wali santri</th>
                    <th>Alamat</th>
                    <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
  
                    <?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "mytpqni";
$db = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM calon_santri";
$query = mysqli_query($db, $sql);
 while($santri = mysqli_fetch_array($query))
 {
    echo "<tr>";
    echo "<td>".$santri['id']."</td>";
    echo "<td>".$santri['nama_santri']."</td>";
    echo "<td>".$santri['nama_walisantri']."</td>";
    echo "<td>".$santri['ttl']."</td>";
    echo "<td>".$santri['jenis_kelamin']."</td>";
    echo "<td>".$santri['kelas']."</td>";
    echo "<td>".$santri['no_hp_walisantri']."</td>"; 
    echo "<td>".$santri['alamat']."</td>";
    echo "<td>";
    echo "<button onclick='confirm(`Yakin untuk menghapus ini?`) ? window.location.href = `dashboard.php?delete=$santri[id]` : window.location.reload();'><i class='btn btn-danger'>Hapus</i></button>";
    echo "</td>";
    echo "</tr>";
    }
?>
  </table>
  </div>
  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: 'Montserrat', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }
    
    header {
      font-family: 'Montserrat', sans-serif;
      background-color: #00008B;
      color: #fff;
      text-align: center;
      padding: 20px 0;
    }
    
    .container1 {
      display: flex;
      height: 100vh;
    }
    
    .sidebar {
      background-color: #ff1810;
      color: #fff;
      width: 200px;
      padding: 20px;
    }
    
    .sidebar ul {
      list-style: none;
      padding: 0;
    }
    
    .sidebar a {
      text-decoration: none;
      color: #fff;
      display: block;
      padding: 10px 0;
    }
    
    .sidebar a:hover {
      background-color: #555;
    }
    
    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    
    .member {
      position: relative;
      margin: 20px;
      overflow: hidden;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease-in-out;
    }
    
    .member img {
      width: 400px; /* lebar */
      height: 600px; /* tinggi */
      object-fit: cover; 
      border-radius: 10px 10px 0 0;
    }
    
    .info {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      background: rgba(0, 0, 0, 0.8);
      color: #fff;
      padding: 15px;
      text-align: center;
      transition: transform 0.3s ease-in-out;
      transform: translateY(100%);
    }
    
    .member:hover .info {
      transform: translateY(0);
    }
    
    .info h2,
    .info p {
      margin: 0;
    }
    
    .info p:not(:last-child) {
      margin-bottom: 10px;
    }
  </style>
  <title>Tentang Kami</title>
</head>
<body>

  <header>
    <h1>KELOMPOK 6 PEMROGRAMAN WEB</h1>
    <h3>Sistem Informasi UPN "Veteran" Jawa Timur</h3>
  </header>

    <div class="container">
      <div class="member">
        <img src="wonganteng.png" alt="Anggota 1">
        <div class="info">
          <h2>Faizur Rahman</h2>
          <p>Jabatan: Leader</p>
          <p>Domisili: Surabaya</p>
          <p>Tempat & Tanggal Lahir: Surabaya, 05/09/2004</p>
          <p>Nomer HP: +62 85230334223</p>
          <p>Email: 22082010186@student.upnjatim.ac.id</p>
        </div>
      </div>

      <div class="member">
        <img src="yustio.jpeg" alt="Anggota 2">
        <div class="info">
          <h2>M. Yustitio Hadi Utomo</h2>
          <p>Jabatan: Anggota </p>
          <p>Domisili: Blitar</p>
          <p>Tempat & Tanggal Lahir: Blitar, 05/12/2003</p>
          <p>Nomer HP: +62 82141050920</p>
          <p>Email: yustitio61@gmail.com</p>
        </div>
      </div>

      <div class="member">
        <img src="nala.jpeg" alt="Anggota 3">
        <div class="info">
          <h2>Nala Widyadhana</h2>
          <p>Jabatan: Anggota </p>
          <p>Domisili: Surabaya</p>
          <p>Tempat & Tanggal Lahir: Surabaya, 12/07/2004</p>
          <p>Nomer HP: +62 81231485838</p>
          <p>Email: nalawidyadhana127@gmail.com</p>
        </div>
      </div>
      <!-- Tambahkan blok serupa untuk setiap anggota -->
    </div>
  </div>

</body>
</html>
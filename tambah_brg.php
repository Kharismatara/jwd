<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div class="container">
      <!---awal header-->
      <header>
        <div class="logo">
          <a href="index.html">
            <img src="img/logo.png" alt="logo" />
          </a>
        </div>

        <div class="seacrh">
          <form action="">
            <input type="seacrh" name="seacrh" placeholder="seacrh site ..." />
            <input type="submit" value="> " />
          </form>
        </div>
        <div class="clearfix"></div>
        <!---awal navbar-->
        <nav class="main-menu">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Tentang Kami</a></li>
            <li>
              <a href="#">Layanan</a>
              <ul class="drop">
                <li><a href="#">Peminjaman</a></li>
                <li><a href="#">Pengadaan</a></li>
                <li><a href="#">Stock Opname</a></li>
              </ul>
            </li>

            <li><a href="#">Mater Data</a></li>
            <li><a href="#">Kontak Kami</a></li>
          </ul>
        </nav>
        <!---akhir navbar -->
      </header>
      <!---akhir header-->
      <section class="banner">
        <img src="img/banner1.jpeg" alt="banner1" />
        <img src="img/banner1.jpeg" alt="banner2" />
      </section>
      <!---akhir benner-->

      <!---awal content-->
      <section class="content-holder">
        <article class="content">
          <?php 
          include('utils/koneksi.php');
          ?>

          <h1>FORMULIR TAMBAH BARANG </h1>
         <form action="action/create.php" method="POST">
          <table>
            <tr>
              <td>
              <label for="no_brg">No</label>
              </td>
              <td>
              <input type="number" name="no_brg">

              </td>
            </tr>
            <tr>
              <td>
              <label for="nama_brg">Nama</label>
              <td><input type="text" name="nama_brg"></td>
              </td>
            </tr>
            <tr>
              <td>
              <label for="warna_brg">Warna</label>
             <td>
             <input type="text" name="warna_brg">
             </td>
              </td>
            </tr>
            <tr>
              <td>
              <label for="jumlah_brg">Jumlah</label>
              <td>
              <input type="number" name="jumlah_brg">
              </td>
              </td>
            </tr>

            <tr>
              <td>
                <input type="submit" value="simpan" name="simpan">
              </td>
            </tr>
            
          </table>
         </form>
        </article>

        <aside class="sidebar">
          <div>
            <h3>Katagori</h3>
            <ul>
              <li><a href="#">2022</a></li>
              <li><a href="#">2021</a></li>
              <li><a href="#">2020</a></li>
            </ul>
          </div>
        </aside>
        <div class="clearfix"></div>
      </section>
      <!--- akhir content-->

      <footer class="main-footer ">
        <div class="footer-box">
          <h3>Menu Footer</h3>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Tentang Kami</a></li>
            <li><a href="#">Layanan</a></li>
            <li><a href="#">Mater Data</a></li>
            <li><a href="#">Kontak Kami</a></li>
          </ul>
        </div>
        <div class="footer-box">
          <h3>Menu Footer</h3>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Tentang Kami</a></li>
            <li><a href="#">Layanan</a></li>
            <li><a href="#">Mater Data</a></li>
            <li><a href="#">Kontak Kami</a></li>
          </ul>
        </div>
        <div class="footer-box">
          <h3>Menu Footer</h3>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Tentang Kami</a></li>
            <li><a href="#">Layanan</a></li>
            <li><a href="#">Mater Data</a></li>
            <li><a href="#">Kontak Kami</a></li>
          </ul>
        </div>

        <div>
          <address>
            <h3>Alamat Kantor</h3>
            <p>Jln Raya Jember KM13, Kabat</p>
            <p> Email : <a href="maito: test@gmail.com">test@gmail.com</a></p>
            <p> Telp : <a href="telp: 3535533636">577575735553</a></p>
          </address>
        </div>
        <div class="clearfix"></div>
      </footer>
      <div>
        <p><small>Hak Cipta &copy;2022. Hak Cipta dilindungi</small></p>
      </div>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="http://malsup.github.com/jquery.cycle2.js"></script>
  </html>
  </body>
 

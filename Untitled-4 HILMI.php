// contoh kode PHP untuk membuat backend website perpustakaan

// koneksi ke database
$conn = mysqli_connect("localhost", "username", "password", "perpustakaan");

// cek koneksi
if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}

// contoh kode PHP untuk membuat CRUD buku
if (isset($_POST['tambah_buku'])) {
  $judul = $_POST['judul'];
  $pengarang = $_POST['pengarang'];
  $tahun_terbit = $_POST['tahun_terbit'];
  $jumlah_buku = $_POST['jumlah_buku'];

  $sql = "INSERT INTO buku (judul, pengarang, tahun_terbit, jumlah_buku) VALUES ('$judul', '$pengarang', '$tahun_terbit', '$jumlah_buku')";
  mysqli_query($conn, $sql);
}

// contoh kode PHP untuk membuat CRUD anggota
if (isset($_POST['tambah_anggota'])) {
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "INSERT INTO anggota (nama, email, password) VALUES ('$nama', '$email', '$password')";
  mysqli_query($conn, $sql);
}

// contoh kode PHP untuk membuat CRUD peminjaman
if (isset($_POST['tambah_peminjaman'])) {
  $id

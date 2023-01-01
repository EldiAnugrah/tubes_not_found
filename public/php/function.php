<?php  
// api
function get_CURL($url)
{
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  $result = curl_exec($curl);
  curl_close($curl);

  return json_decode($result, true);
}

// koneksi
function koneksi()
{
  $conn = mysqli_connect("localhost", "root", "");
  mysqli_select_db($conn, "notfound");

  return $conn;
}

// query
function query($sql)
{
  $conn = koneksi();
  $result = mysqli_query($conn, "$sql");

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

// ambil foto
$image = query("SELECT title FROM posts WHERE category_id = 1");
$image = array_column($image, 'nama_produk');
$allImg = [];
foreach ($image as $img) {
  $myImg = [];
  $hasil = get_CURL('http://www.omdbapi.com/?apikey=b9411804&s=' . $ft);
  $myFoto['foto'] = $hasil['data']['phones'][0]['image'];
  $myFoto['nama'] = $ft;

  $allFoto[] = $myFoto;
}
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Pendaftaran</title>
</head>
<body>
    <p>Hallo <b>{{$details['nama']}}</b> berikut ini adalah Pendaftaran TKTI Al-Qolam:</p>
    <table>
      <tr>
        <td>Nama Lengkap</td>
        <td>:</td>
        <td>{{$details['nama']}}</td>
      </tr>
      <tr>
        <td>Email</td>
        <td>:</td>
        <td>{{$details['email']}}</td>
      </tr>
    </table>
    <p>Mohon maaf <b>{{$details['nama']}}</b> belum Berhasil Mendaftar.</p>
    @if($details['usia'] < 4)
    <p>Usia Belum mencukupi</p>
    @elseif($details['usia'] > 6)
    <p>Usia sudah melewati batas</p>
    @endif
</body>
</html>
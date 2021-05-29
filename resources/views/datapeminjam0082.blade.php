<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome/css/font-awesome.min.css')}}" />
    <title>Tiara Rizky Amanda Putri</title>
</head>
<body>
  <header style="    background-color: #508abb;height: 60px;">
    <div class="main"></div>
    <ul class="active">
      <li><a href="/">Home</a>
        <li><a href="/databuku">Data Buku</li></a>
        <li><a href="/datapeminjam">Data Peminjaman</li></a>
    </ul>
  </header>

              <div class="hero-content" style="margin-left: 100px;margin-right: 100px;">
                <br><br>
                  <h1 style="font-size: 20px;">Data Buku</h1><br> 
  <table class="data-table" style="margin-left:5px;width: 1150px;">
    <thead>
      <tr> 
        <th>No</th> 
        <th>Nama Peminjam</th> 
        <th>Alamat Peminjam</th> 
        <th>Telp Peminjam</th> 
      </tr>
    </center> 
    @foreach ($item as $key => $i) 
    <tr> 
      <td>{{$key+1}}</td> 
      <td>{{$i->nama_peminjam}}</td> 
      <td>{{$i->alamat_peminjam}}</td> 
      <td>{{$i->telp_peminjam}}</td> 
    </tr> 
    @endforeach
      
    </tbody>
    <tfoot>
    </tfoot>
  </table>
              </div>
        </div>   
</body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Pengaduan Modern</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f7f6;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .main-card {
            background: white;
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            padding: 30px;
            margin-bottom: 30px;
        }

        h1 {
            color: #2c3e50;
            font-weight: 700;
            text-align: center;
            margin-bottom: 30px;
            position: relative;
        }

        h1::after {
            content: '';
            width: 50px;
            height: 4px;
            background: #0d6efd;
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2px;
        }

        .form-control {
            border-radius: 10px;
            padding: 12px;
            border: 1px solid #dee2e6;
            transition: all 0.3s;
        }

        .form-control:focus {
            box-shadow: 0 0 0 0.25 red rgba(13, 110, 253, 0.1);
            border-color: #0d6efd;
        }

        .btn-tambah {
            border-radius: 10px;
            padding: 10px 25px;
            font-weight: 600;
            width: 100%;
            background: linear-gradient(45deg, #0d6efd, #0046af);
            border: none;
            transition: transform 0.2s;
        }

        .btn-tambah:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(13, 110, 253, 0.3);
        }

        .table {
            border-radius: 10px;
            overflow: hidden;
            background: white;
        }

        .table thead {
            background-color: #0d6efd;
            color: white;
        }

        .table th {
            font-weight: 600;
            border: none;
            padding: 15px;
        }

        .table td {
            vertical-align: middle;
            padding: 15px;
        }

        .btn-danger {
            border-radius: 8px;
            transition: all 0.3s;
        }

        /* Animasi saat baris tabel muncul */
        tr {
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            
            <div class="main-card">
                <h1>Pengaduan Masyarakat</h1>

                <form action="/tambah" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label class="form-label fw-bold">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan nama Anda...">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label fw-bold">Isi Laporan</label>
                            <textarea name="laporan" class="form-control" rows="4" placeholder="Ceritakan detail pengaduan Anda..."></textarea>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-tambah">
                                Kirim Pengaduan
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="table-responsive">
                <table class="table table-hover shadow-sm">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th width="25%">Nama</th>
                            <th>Laporan</th>
                            <th width="10%" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pengaduan as $item)
                        <tr>
                            <td class="text-center fw-bold">{{ $loop->iteration }}</td>
                            <td class="fw-semibold text-primary">{{ $item->nama }}</td>
                            <td>{{ $item->laporan }}</td>
                            <td class="text-center">
                                <form action="/hapus/{{ $item->id }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

</body>
</html>
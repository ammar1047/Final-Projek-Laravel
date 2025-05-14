<!DOCTYPE html>
<html>
<head>
    <title>Daftar Template Surat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Daftar Template Surat</h2>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-outline-danger">Logout</button>
        </form>
    </div>
    <table class="table table-bordered table-striped shadow-sm">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Link File</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($templates as $template)
                <tr>
                    <td>{{ $template->id }}</td>
                    <td>{{ $template->title }}</td>
                    <td>{{ $template->category }}</td>
                    <td><a href="{{ asset('storage/' . $template->file_path) }}" class="btn btn-sm btn-info" target="_blank">Lihat File</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>

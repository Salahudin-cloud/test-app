<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Jumbotron example · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/jumbotron/">
    <script src="https://kit.fontawesome.com/34ab9dca21.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">


</head>

<body>
    @include('templates.navigation.nav');
    <main>

        <div class="container py-4 pt-5">
            <a href="<?php echo url('mahasiswa/tambah'); ?>">
                <button class="btn btn-success">Tambah Mahasiswa </button>
            </a>
            <table class="table table-border">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">nama</th>
                        <th scope="col">semester</th>
                        <th scope="col">prodi</th>
                        <th class="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($mahasiswa as $item)
                        <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td> {{ $item->nama }} </td>
                            <td> {{ $item->semester }} </td>
                            <td> {{ $item->prodi }} </td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ url('mahasiswa/edit', $item->id) }}" class="btn btn-warning me-2"><i
                                            class="fa-solid fa-file-pen "></i></a>
                                    <form action="{{ url('mahasiswa/proses/delete', $item->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger me-2"><i class="fa-solid fa-trash"></i></button>
                                    </form>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>


    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>

</html>

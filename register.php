<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Register Pegawai</title>
</head>
<body class="bg-primary d-flex justify-content-center align-items-center" style="height: 100vh; overflow: hidden;">
    <section class="py-3 py-md-5 py-xl-8">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-12 col-md-6 col-xl-7">
                    <div class="d-flex justify-content-center text-bg-primary">
                        <div class="col-12 col-xl-9">
                            <h2 class="h1 mb-4">We make digital products that drive you to stand out.</h2>
                            <p class="lead mb-5">We write words, take photos, make videos, and interact with artificial intelligence.</p>
                            <div class="text-endx">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-grip-horizontal" viewBox="0 0 16 16">
                                <path d="M2 8a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-5">
                    <div class="card border-0 rounded-4">
                        <div class="card-body p-3 p-md-4 p-xl-5">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-4">
                                        <h3>Register Pegawai</h3>
                                        <p>Already have an account? <a href="login.html">Sign in</a></p>
                                    </div>
                                </div>
                            </div>
                            <form action="proses_register.php" method="POST">
                                <div class="row gy-1 overflow-hidden">
                                    <div class="col-12">
                                        <div class="form-floating mb-1">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                                            <label for="email" class="form-label">Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-1">
                                            <input type="password" class="form-control" name="password" id="password" value="" placeholder="Password" required>
                                            <label for="password" class="form-label">Password</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-1">
                                            <input type="number" class="form-control" name="nik" id="nik" value="" placeholder="NIK" required>
                                            <label for="nik" class="form-label">NIK</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-1">
                                            <input type="text" class="form-control" name="nama" id="nama" value="" placeholder="Nama" required>
                                            <label for="nama" class="form-label">Nama</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-1">
                                            <textarea class="form-control" name="alamat" id="alamat" value="" placeholder="Alamat" required></textarea>
                                            <label for="alamat" class="form-label">Alamat</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-1">
                                            <select class="form-control" name="jk" id="jk" required>
                                                <option></option>
                                                <option value="L">Laki-laki</option>
                                                <option value="P">Perempuan</option>
                                            </select>
                                            <label for="jk" class="form-label">Jenis Kelamin</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-1">
                                            <input type="number" class="form-control" name="telp" id="telp" value="" placeholder="Nomor Telepon" required>
                                            <label for="telp" class="form-label">Nomor Telepon</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-1">
                                            <select class="form-control" name="id_jabatan" id="id_jabatan">
                                                <option></option>
                                                <?php 
                                                $qry_jabatan = mysqli_query($conn,"select * from jabatan");
                                                while($data_jabatan = mysqli_fetch_array($qry_jabatan)){
                                                    echo '<option value="'.$data_jabatan['id_jabatan'].'">'.$data_jabatan['nama_jabatan'].'</option>';    
                                                }
                                                ?>
                                            </select>
                                            <label for="id_jabatan" class="form-label">Jabatan</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button class="btn btn-primary btn-lg" type="submit">Register now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

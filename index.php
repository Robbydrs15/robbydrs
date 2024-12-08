<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Library Robby Darius</title>
    
    <!-- Font Awesome untuk icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Google Fonts - Inter & Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- CSS Utama -->
    <link rel="stylesheet" href="modul7.css">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 1rem;
        }
        th, td {
            padding: 0.75rem;
            text-align: left;
            border-bottom: 1px solid #ddd;
            color: #333;
        }
        th {
            background-color: #f2f2f2;
            color: #333;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="container">
                <a href="index.html" class="logo">
                    <i class="fas fa-book-reader"></i>
                    Digital Library
                </a>
                
                <button class="mobile-menu-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                
                <ul class="nav-menu">
                    <li><a href="index.html">
                        <i class="fas fa-home"></i> Home
                    </a></li>
                    <li><a href="tentang-kami.html">
                        <i class="fas fa-info-circle"></i> Tentang Kami
                    </a></li>
                    
                    <li class="dropdown">
                        <a href="javascript:void(0)">
                            <i class="fas fa-cogs"></i> Layanan
                            <i class="fas fa-chevron-down"></i>
                        </a>
                        <div class="dropdown-content">
                            <a href="perpanjangan.html">
                                <i class="fas fa-clock"></i> Perpanjangan Peminjaman
                            </a>
                            <a href="pemesanan.html">
                                <i class="fas fa-book"></i> Pemesanan Buku
                            </a>
                            <a href="tabel.html">
                                <i class="fas fa-table"></i> Tabel Bahan Buku
                            </a>
                            <a href="#">
                                <i class="fas fa-sync"></i> Sirkulasi
                            </a>
                        </div>
                    </li>
                    
                    <li><a href="Daftar Anggota.html">
                        <i class="fas fa-users"></i> Daftar Anggota
                    </a></li>
                    
                    <li class="dropdown">
                        <a href="javascript:void(0)">
                            <i class="fas fa-tasks"></i> Tugas
                            <i class="fas fa-chevron-down"></i>
                        </a>
                        <div class="dropdown-content">
                            <a href="modul1.html"><i class="fas fa-file"></i> MODUL 1</a>
                            <a href="modul2.html"><i class="fas fa-file"></i> MODUL 2</a>
                            <a href="modul3.html"><i class="fas fa-file"></i> MODUL 3</a>
                            <a href="modul4.html"><i class="fas fa-file"></i> MODUL 4</a>
                            <a href="modul5.html"><i class="fas fa-file"></i> MODUL 5</a>
                            <a href="modul6.html"><i class="fas fa-file"></i> MODUL 6</a>
                            <a href="http://localhost/robby/"><i class="fas fa-file"></i> MODUL 7</a>
                            <a href="http://localhost/robby/"><i class="fas fa-file"></i> MODUL 8</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="container mt-5 py-4" style="margin-top: 6rem !important;">
    <!-- Task 1: List 1-1000 -->
    <div class="card mb-4 bg-primary text-white box-container">
        <div class="card-body">
            <h3 class="card-title"><i class="fas fa-list"></i> Daftar Hari Belajar PHP</h3>
            <div class="scrollable-box">
                <?php
                for($i = 1; $i <= 1000; $i++) {
                    echo "<p class='m-0 list-item'>$i. Ini adalah hari ke-$i belajar PHP</p>";
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Task 2 & 3: Calculator -->
    <div class="card mb-4 bg-success text-white box-container">
        <div class="card-body">
            <h3 class="card-title"><i class="fas fa-calculator"></i> Kalkulator</h3>
            <div class="form-box">
                <form action="hitung.php" method="post">
                    <div class="mb-3">
                        <input type="number" class="form-control calc-input" name="bil1" placeholder="Bilangan Pertama" required>
                    </div>
                    <div class="mb-3">
                        <select class="form-control calc-input" name="operator" required>
                            <option value="+">Penjumlahan (+)</option>
                            <option value="-">Pengurangan (-)</option>
                            <option value="*">Perkalian (*)</option>
                            <option value="/">Pembagian (/)</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="number" class="form-control calc-input" name="bil2" placeholder="Bilangan Kedua" required>
                    </div>
                    <button type="submit" class="btn btn-light">Hitung</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Task 4: Login Form -->
    <div class="card mb-4 bg-info text-white box-container">
        <div class="card-body">
            <h3 class="card-title"><i class="fas fa-user-lock"></i> Login</h3>
            <div class="form-box">
                <form action="login.php" method="post">
                    <div class="mb-3">
                        <input type="text" class="form-control login-input" name="username" placeholder="Username">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control login-input" name="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-light">Login</button>
                </form>
                <?php
                if(isset($_GET['error'])) {
                    $error = $_GET['error'];
                    if($error == 'empty') {
                        echo '<div class="alert alert-warning mt-3">Input tidak lengkap!</div>';
                    } elseif($error == 'invalid') {
                        echo '<div class="alert alert-danger mt-3">Username atau password salah!</div>';
                    }
                } elseif(isset($_GET['success'])) {
                    echo '<div class="alert alert-success mt-3">Login berhasil!</div>';
                }
                ?>
            </div>
        </div>
        
    </div>
    
    <!-- Task 5: CRUD Form -->
    <div class="card mb-4 bg-warning text-dark box-container">
        <div class="card-body">
            <h3 class="card-title"><i class="fas fa-database"></i> Data Management</h3>
            <div class="form-box">
                <?php
                // Tampilkan pesan sukses/error jika ada
                if(isset($_SESSION['message'])) {
                    echo "<div class='alert alert-{$_SESSION['msg_type']} alert-dismissible fade show'>
                            {$_SESSION['message']}
                            <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                          </div>";
                    unset($_SESSION['message']);
                    unset($_SESSION['msg_type']);
                }
                ?>
                
                <form action="process_data.php" method="post">
                    <input type="hidden" name="id" value="<?php echo isset($_GET['edit']) ? $_GET['edit'] : ''; ?>">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="nama" placeholder="Nama" required
                               value="<?php echo isset($_GET['nama']) ? $_GET['nama'] : ''; ?>">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email" required
                               value="<?php echo isset($_GET['email']) ? $_GET['email'] : ''; ?>">
                    </div>
                    <div class="mb-3">
                        <input type="tel" class="form-control" name="telepon" placeholder="Nomor Telepon" required
                               value="<?php echo isset($_GET['telepon']) ? $_GET['telepon'] : ''; ?>">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" name="alamat" placeholder="Alamat" required><?php echo isset($_GET['alamat']) ? $_GET['alamat'] : ''; ?></textarea>
                    </div>
                    <div class="btn-group">
                        <?php if(isset($_GET['edit'])): ?>
                            <button type="submit" name="action" value="update" class="btn btn-primary">
                                <i class="fas fa-save"></i> Update
                            </button>
                            <a href="index.php" class="btn btn-secondary">
                                <i class="fas fa-times"></i> Cancel
                            </a>
                        <?php else: ?>
                            <button type="submit" name="action" value="tambah" class="btn btn-success">
                                <i class="fas fa-plus"></i> Tambah
                            </button>
                        <?php endif; ?>
                    </div>
                </form>

                <!-- Tabel Data -->
                <div class="table-responsive mt-4">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Telepon</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require_once 'config.php';
                            $stmt = $pdo->query("SELECT * FROM users ORDER BY created_at DESC");
                            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                echo "<tr>";
                                echo "<td>{$row['nama']}</td>";
                                echo "<td>{$row['email']}</td>";
                                echo "<td>{$row['telepon']}</td>";
                                echo "<td>{$row['alamat']}</td>";
                                echo "<td>
                                        <a href='index.php?edit={$row['id']}&nama={$row['nama']}&email={$row['email']}&telepon={$row['telepon']}&alamat={$row['alamat']}' 
                                           class='btn btn-sm btn-primary'><i class='fas fa-edit'></i></a>
                                        <a href='process_data.php?delete={$row['id']}' 
                                           class='btn btn-sm btn-danger' 
                                           onclick='return confirm(\"Yakin ingin menghapus data ini?\")'><i class='fas fa-trash'></i></a>
                                      </td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
   

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section about">
                    <h3>Tentang Kami</h3>
                    <p>Digital Library Robby Darius adalah platform perpustakaan digital yang menyediakan akses ke berbagai sumber daya pendidikan dan literatur.</p>
                </div>
                <div class="footer-section links">
                    <h3>Tautan Cepat</h3>
                    <ul>
                        <li><a href="index.html">Beranda</a></li>
                        <li><a href="tentang-kami.html">Tentang Kami</a></li>
                        <li><a href="layanan.html">Layanan</a></li>
                        <li><a href="kontak.html">Kontak</a></li>
                    </ul>
                </div>
                <div class="footer-section contact">
                    <h3>Kontak Kami</h3>
                    <p><i class="fas fa-phone"></i> +62 123 456 7890</p>
                    <p><i class="fas fa-envelope"></i> info@digitallibrary.com</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Digital Library Robby Darius. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>

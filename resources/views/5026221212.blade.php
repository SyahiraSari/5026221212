{{-- resources/views/5026221212.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bimbel Terpercaya!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #6c939c;4
        }

        .pricing-header {
            text-align: center;
            margin-bottom: 50px;
            color: white;
        }

        .card {
            border: 3px solid #d5e6c2;
            transition: all 0.3s ease-in-out;
            box-shadow: 0 10px 15px rgba(152, 177, 29, 0.1);
            background: linear-gradient(115deg, rgb(187, 163, 255), rgb(255, 199, 179));
            border-radius: 15px;
            overflow: hidden;
            margin-bottom: 50px;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.2);
        }

        .card-body {
            padding: 40px 20px;
        }

        .plan-price {
            font-size: 30px;
            font-weight: bold;
            color: #fdfafa;
            margin-bottom: 15px;
        }

        .card-popular {
            border: 3px solid #8eccfe;
            background: linear-gradient(115deg, rgb(255, 195, 163), rgb(211, 246, 151));
            color: white;
            border-radius: 20px;
            margin-bottom: 50px;
        }

        .card-popular .plan-price, .card-popular h3 {
            color: white;
        }

        .upgrade-btn {
            background-color: #dc3545;
            color: white;
            padding: 12px 20px;
            border-radius: 8px;
            font-weight: bold;
            font-size: 16px;
            transition: 0.4s;
        }

        .upgrade-btn:hover {
            background-color: #fd796d;
            box-shadow: 0 8px 15px rgba(136, 186, 19, 0.2);
            color: white;
        }

        .plan-features {
            list-style-type: none;
            padding: 0;
        }

        .plan-features li {
            padding: 10px 0;
            font-size: 16px;
            color: #666;
        }

        .plan-features li i {
            margin-right: 10px;
            color: #401ffc;
        }

        .tooltip-text {
            font-size: 14px;
            color: #888;
        }


        @media (max-width: 768px) {
            .plan-price {
                font-size: 26px;
            }

            .card-body {
                padding: 30px;
            }

            .upgrade-btn {
                font-size: 14px;
                padding: 10px 15px;
            }
        }
    </style>
</head>
<body>

    <div class="container mt-5">
        <div class="pricing-header">
            <h1 style="color: #f5f7fa;">Pilih Paket Les Privatmu Di Sini!</h1>
            <p style="color:#f0f4fd;">Nggak Perlu Pusing Mata Pelajaran! Ada Kami Solusinya!</p>
        </div>

        <div class="row text-center">

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h3  style="color:white">1 Semester</h3>
                        <p class="plan-price">Rp 1,5 Juta</p>
                        <button class="btn upgrade-btn" disabled>Grab It Fast!</button>
                        <ul class="plan-features mt-4">
                            <li><i class="fas fa-check"></i> Promo 5 orang pendaftar pertama <span class="tooltip-text"></span></li>
                            <li><i class="fas fa-check"></i> 2 Mata Pelajaran (Matematika, Fisika)</li>
                            <li><i class="fas fa-check"></i> Guru datang On Time</li>
                            <li><i class="fas fa-check"></i> 3 pertemuan dalam seminggu</li>
                            <li><i class="fas fa-check"></i> Ada kelas online dan materi dibagikan</li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="card card-popular">
                    <div class="card-body">
                        <h3>2 Semester</h3>
                        <p class="plan-price">Rp 2,7 Juta</p>
                        <button class="btn upgrade-btn">Daftar Sekarang!</button>
                        <ul class="plan-features mt-4">
                            <li><i class="fas fa-check"></i> Promo 5 orang pendaftar pertama <span class="tooltip-text"></span></li>
                            <li><i class="fas fa-check"></i> 2 Mata Pelajaran (Fisika, Biologi)</li>
                            <li><i class="fas fa-check"></i> Guru datang on time</li>
                            <li><i class="fas fa-check"></i> 4 Pertemuan dalam seminggu</li>
                            <li><i class="fas fa-check"></i> Ada kelas online dan materi dibagikan</li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h3 style="color:white">Per Pertemuan</h3>
                        <p class="plan-price">Rp 300 Ribu</p>
                        <button class="btn upgrade-btn">Daftar Sekarang!</button>
                        <ul class="plan-features mt-4">
                            <li><i class="fas fa-check"></i> Promo 5 orang pendaftar pertama  <span class="tooltip-text"></span></li>
                            <li><i class="fas fa-check"></i> 2 Mata Pelajaran (Kimia, Biologi)</li>
                            <li><i class="fas fa-check"></i> Guru datang on time</li>
                            <li><i class="fas fa-check"></i> Guru Ramah</li>
                            <li><i class="fas fa-check"></i> Jam/Jadwal Fleksibel</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

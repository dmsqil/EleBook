<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>E-Book</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pjDt/Wq7I5c9Zk2o6+g9vq41rKLZ4BbEz5LFLmowvIJ7WUGj2Fb+6H/E3ZbTbpk1"
    crossorigin="anonymous"></script>
<style>@font-face {
font-family: 'TheSeasons';
/* Ganti NamaFont dengan nama yang ingin Anda berikan pada font */
src: url('Fonts/Fontspring-DEMO-theseasons-it.otf') format('opentype');
/* Sesuaikan path dengan lokasi font */
}

body {
font-family: 'TheSeasons';
background-image: url(/images/Elements/bg.jpg);
background-size: cover;
background-position: center;
background-repeat: no-repeat;
}

.navbar-nav .nav-link {
font-size: 20px;
}

.navbar-nav a {
text-decoration: none;
color: black;
transition: color 0.5s;
margin-right: 25px;
}

.navbar-nav a.active,
.navbar-nav a.active:hover {
background-color: #FF597B !important;
border-radius: 3px;
}

.navbar-nav a:hover {
background-color: #FF8DF5;
border-radius: 3px;
}

.kotak1 {
width: 100%;
}

nav {
margin-bottom: 5px;
border: outset #EFB9BF;
border-radius: 5px;
}

.banner {
margin-bottom: 5px;
border: outset #EFB9BF;
border-radius: 5px;
}

.banner img {
display: block;
width: 100%;
height: 340px;
}

.kotak {
padding: 10px;
margin-bottom: 10px;
background-color: #F3BCD1;
border: outset #EFB9BF;
border-radius: 5px;
}

.kotak h3 {
background-color: #FF597B;
color: white;
text-align: center;
padding: 10px;
margin-bottom: 13px;
font-size: 14px;
}

.kotak h2 {
text-align: center;
font-size: 20px;
color: #FF597B;
}

.kotak img {
display: block;
width: 50%;
margin-bottom: 10px;
}

.kotak p {
margin-bottom: 10px;
text-align: left;
}

.menu-kiri {
width: 265px;
margin-right: 10px;
float: left;
}


.menu-tengah {
width: 560px;
margin-right: 10px;
float: left;
}

.menu-tengah h3 {
background: none;
color: crimson;
margin-bottom: 0;
}

.tanggal-posting {
color: gray;
text-align: right;
font-size: 12px;
margin-bottom: 10px;
display: block;
}

.tombol {
display: block;
text-decoration: none;
padding: 10px;
width: 120px;
color: white;
border-radius: 5px;
text-align: center;
}

.tombol:hover {
background-color: #FF8FB1;
transition-duration: 0.5s;
}

.tombol-pesan {
background-color: #446A46;
}

.tombol-lengkap {
background-color: #FF597B;
}

.menu-kanan {
width: 265px;
float: left;
}

.menu-kanan,
.menu-kiri,
.menu-tengah {
margin-bottom: 15px;
}

footer {
clear: both;
padding: 5px;
text-align: center;
background-color: #F3BCD1;
border: outset #EFB9BF;
border-radius: 5px;
}

.menu-artikel ul {
list-style-type: none;
}

.menu-artikel ul li a {
text-decoration: none;
color: black;
display: block;
padding: 13px;
border-bottom: 1px solid rgb(0, 0, 0);
margin-bottom: 12px;
text-align: left;
font-size: 16px;
}

.menu-artikel ul li a:hover {
color: #FF597B;
border-bottom: 5px double #FF597B;
transition-duration: 0s;
}

.kotak {
text-align: center;
}

.image-container {
display: flex;
justify-content: center;
align-items: center;
}

.image-container img {
max-width: 100%;
max-height: 100%;
vertical-align: middle;
}

.card {
margin-top: 5px;
margin-bottom: 10px;
border-radius: 5px;
}

.card-body {
background-color: #FF597B;
font-family: 'TheSeasons';
opacity: 0.9;
}

.card-title {
font-weight: bold;
}

.isi {
font-family: 'TheSeasons';
font-size: 15px;
font-weight: italic;
}

.isi h1 {
background-color: #FF597B;
padding: 15px;
text-align: center;
border: thick double #AB3451;
border-block-color: #886D6E;
opacity: 0.9;
}

/*untuk tablet*/
@media screen and (max-width:1080px) {
.badan-utama {
    width: 100%;
}

.menu-kiri {
    width: 25%;
}

.menu-tengah {
    width: 68%;
    float: right;
}

.menu-kanan {
    clear: both;
    float: none;
    width: 100%;
}
}

/*untuk android*/
@media screen and (max-width:780px) {

header h2,
header p {
    text-align: center;
}

.menu-kiri,
.menu-kanan,
.menu-tengah {
    float: none;
    width: 100%;
}

.navigasi li {
    float: none;
}

.card {
    width: 15;
}

.card-link {
text-decoration: none;
}

.card-link:hover {
opacity: 0.8;
}

.card-link:hover .card {
border: 2px solid #DA0C81;
}

.col-md-3 {
    width: 33%;
}

iframe {
    width: 419px;
    height: 300px;
    border: 1px;
}
} </style>
</head>

<body>
    <div class="row">
    <div class="isi">
        <h1>E-Book</h1>
    </div>
    <div class="col-md-3">
        <a link href="/Pages/MenuVal.html" class="card-link">
        <div class="card" style="width: 15rem;">
            <img url="https://cdn.gramedia.com/uploads/picture_meta/2023/2/14/iddphd9rbufdfjabf4owuf.jpg" class="card-img-top" style="max-height: 300px;">
            <div class="card-body">
            <h5 class="card-title">The Girl who Fell Beneath the Sea</h5>
            <p class="card-text">Badai mematikan telah merusak tanah kelahiran Mina selama beberapa generasi. Banjir menyapu seluruh desa, sementara perang berdarah dikobarkan untuk memperebutkan sumber daya yang tersisa.
            </p>
            </div>
        </div>
        </a>
    </div>
    <div class="col-md-3">
        <a link href="/Pages/MenuMat.html" class="card-link">
        <div class="card" style="width: 15rem;">
            <img url="https://cdn.gramedia.com/uploads/items/9786022962168_adolf_hitler_biografi_kospirasi_kontroversi.jpg" class="card-img-top" style="max-height: 300px;">
            <div class="card-body">
            <h5 class="card-title">Adolf Hitler : Biografi,Konspirasi & Kontroversi</h5>
            <p class="card-text">Kehidupan Adolf Hitler pada masa Perang Dunia II adalah cerminan dirinya ketika masih kecil.</p>
            </div>
        </div>
        </a>
    </div>
    <div class="col-md-3">
        <a link href="/Pages/MenuMoc.html" class="card-link">
        <div class="card" style="width: 15rem;">
            <img url="https://cdn.gramedia.com/uploads/picture_meta/2024/2/7/heb6pwq9z6jtiwgee7p8ac.jpg" class="card-img-top" style="max-height: 300px;">
            <div class="card-body">
            <h5 class="card-title">Seni Berperang (The Art of War)</h5>
            <p class="card-text">Buku ini membawa kita ke dalam pikiran seorang ahli strategi militer abad ke-5 SM</p>
            </div>
        </div>
        </a>
    </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
</body>

</html>
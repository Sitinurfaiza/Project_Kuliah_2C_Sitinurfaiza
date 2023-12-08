<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM tb_daftar_menu");
while ($row = mysqli_fetch_array($query)) {
    $result[] = $row;
}
?>
<div class="col-lg-9 mt-2">

    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/1.png" class="img-fluid" style="height: 400px; width: 1000px; object-fit: cover" alt="...">
            </div>
        </div>
        
    </div>
    <!-- Akhir Carousel -->

    <div class="card mt-4 border-0 bg-light">
        <div class="card-body text-center">
            <h5 class="card-title">CleanRide - Aplikasi Booking Doorsmeer</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis quo eligendi nam assumenda consequatur, harum quasi beatae dolore fuga omnis sit voluptatum asperiores ea quod soluta voluptatibus alias, quibusdam ducimus.</p>
            <a href="order" class="btn btn-primary">Booking</a>
        </div>
    </div>
</div>
<?php
$sqlCom = "SELECT * FROM data_company limit 1";
$hasilCom = $this->db->query($sqlCom);

$comp = $hasilCom->row_object();
$levels = $this->Level_model->get_all_levels();

                     
	  				
?>

<style>

* {
    margin: 0px;
    padding: 0px;
    font-family: 'Poppins', sans-serif;
}

.container-home {
    padding: 10px;

}

.main-container {
    padding: 10px;
    margin-top: 5%;
}

h1 {
    text-align: center;
    font-weight: 800;
    font-size: 60px;
    color: #751012;
}

.flex-main {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap; /* Tambahkan ini untuk memastikan konten dibungkus pada perangkat yang lebih kecil */
}

.flex-leftcontent {
    padding: 10px;
    margin-top: 10%;
    flex: 1 1 45%; /* Tambahkan flex property untuk responsivitas */
}

.flex-rightcontent {
    padding: 10px;
    margin-top: 10%;
    max-height: 800px;
    flex: 1 1 45%; /* Tambahkan flex property untuk responsivitas */
}

.japan-flag {
    width: 100%; /* Ubah lebar menjadi 100% untuk responsivitas */
    height: auto;
}

.listleft {
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    padding: 10px;
    margin-left: 10px;
}

.list-flexleft {
    color: #751012;
    font-weight: 500;
    font-size: 22px;
}

.cardright {
    padding: 10px;
    background-color: white;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    width: 100%; /* Ubah lebar menjadi 100% untuk responsivitas */
    height: 100%;
    border-radius: 20px;
}

.cardjudul {
    padding: 10px;
    background-color: #BF1E2E;
    border-radius: 20px;
}

.level-list {
    list-style: none;
    padding: 10px;
}

.level-list > a {
    text-decoration: none;
}

.level-list > a > li {
    padding: 10px;
    background-color: #F2F2F2;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    border-radius: 10px;
    margin-top: 10px;
    color: #BF1E2E;
    font-size: 20px;
    font-weight: 600;
    text-align: center;
    transition: transform ease 0.2s;
}

.level-list > a > li:hover {
    transform: scale(1.1);
    border: 2px solid #BF1E2E;
    border-style: dashed;
}

.roadmap-container {
    margin-top: 10%;
}

.roadmap {
    padding: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.roadmap-img {
    width: 100%; /* Ubah lebar menjadi 100% untuk responsivitas */
    height: auto;
}

@media only screen and (max-width: 768px) {
    .flex-main {
        flex-direction: column;
        align-items: center;
    }

    .flex-leftcontent, .flex-rightcontent {
        flex: 1 1 100%;
        margin-top: 5%;
    }

    .level-list > a > li {
        font-size: 18px; /* Sesuaikan ukuran font untuk perangkat tablet */
    }

    .cardright {
        width: 90%; /* Mengurangi lebar card untuk tablet */
    }

    .roadmap-container {
      margin-bottom: 50px;
    }

    .container-home {
      margin-top: 10%;
    }
}

@media only screen and (max-width: 480px) {
    .list-flexleft {
        font-size: 18px;
    }

    .cardright {
        width: 100%; /* Lebarkan card pada perangkat mobile agar tidak ada space kosong */
        padding: 20px; /* Tambahkan padding untuk memberikan ruang lebih pada isi card */
    }

    .level-list > a > li {
        font-size: 16px; /* Sesuaikan ukuran font untuk perangkat mobile */
        margin-top: 15px; /* Tambahkan margin untuk memberikan lebih banyak ruang antar card */
    }

    .roadmap-container {
      margin-bottom: 50px;
    }

    .container-home {
      margin-top: 10%;
    }
}


</style>
<div class="container-content">
<div class="container-home">
    <div class="main-container">
        <h1>BAHASA JEPANG</h1>

        <div class="flex-main">
                <div class="flex-leftcontent">
                        <div>
                            <img class="japan-flag" src="assets/images/japan_flag.png" alt="japan-flag">
                        </div>

                        <div class="listleft">
                            <ul class="list-flexleft">
                                <li>Kelas Reguler / Group Class</li>
                                <li>Kelas Semi-Private</li>
                                <li>Kelas Intensif 1 on 1</li>
                                <li>Japanese Online Class</li>
                                <li>Japanese for Kids (SD)</li>
                            </ul>
                        </div>

                    </div>
                    <div class="flex-rightcontent">
                       <div class="cardright">
                            <div class="cardjudul">
                                <h2 style="color:white; text-align:center; font-weight: 800; font-size: 30px">Level : </h2>
                            </div>

                            <div class="listlevel-container">
                                <ul class="level-list">
                 
                    <?php foreach ($levels as $level): ?>
                                <a href="<?php echo site_url('bahasajepang/level/' . $level->id); ?>" class="level">
                                    <li><?php echo $level->name; ?></li>
                                </a>
                            <?php endforeach; ?>
                                </ul>
                            </div>
                       </div>
                    </div>
        </div>




        <div class="roadmap-container">
            <div class="roadmap">
                <img class="roadmap-img" src="assets/images/bahasajepang_roadmap.png" alt="roadmap-bahasajepang">
            </div>
        </div>
     
    </div>



 

</div>

</div>




<script>


</script>
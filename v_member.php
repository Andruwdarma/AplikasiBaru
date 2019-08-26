<div class="page page-hide" id="MasterMember" visibility="close">
    <?php include 'Template/modal/modal-siswa.php';?>
    <span class="page-title">Data Siswa</span>
    <div class="button-container">
<<<<<<< HEAD
        <button data-toggle="modal" data-target="#modalinput" class="btn btn-input">Input</button>
=======
        <button data-toggle="modal" data-target="#exampleModal" class="btn btn-input">Input</button>
>>>>>>> 0220c305b2a50270db5a1cfd2900ae3580682e24
    </div>
    <div class="tableData">
        <table id="DataSiswa">
            <thead>
                <tr>
                    <td>NIS</td>
                    <td>Nama</td>
                    <td>Kelas</td>
                    <td>Jurusan</td>
<<<<<<< HEAD
                    <td>Action</td>
=======
>>>>>>> 0220c305b2a50270db5a1cfd2900ae3580682e24
                </tr>
            </thead>

            <tbody>
                <?php
                $Data =  DataSiswa($koneksi);
                while($d = mysqli_fetch_array($Data)){
            ?>
                <tr>
                    <td><?php echo $d['NIS']; ?></td>
                    <td><?php echo $d['NamaSiswa']; ?></td>
                    <td><?php echo $d['Kelas']; ?></td>
                    <td><?php echo $d['Jurusan']; ?></td>
<<<<<<< HEAD
                    <td><button onclick="Delete('')" class="btn btn-danger">Delete</button></td>
=======
>>>>>>> 0220c305b2a50270db5a1cfd2900ae3580682e24
                </tr>

                <?php 
                }
            ?>
            </tbody>

        </table>
    </div>
</div>
<html>
    <head>
    </head>
    <body>
        <h1>Form Tambah </h1>
        <form action="proses_tambah.php" method="POST">
        <form>
            <fieldset>
                <p> 
                    <label for="nama">Nama :</label>
                    <input type="text" name="nama"/>
                </p>
                <p>
                    <label for="kelas">Kelas :</label>
                    <input type="text" name="kelas" />
                    
                </p>

                <p>
                
                    <label for="jurusan">Jurusan:</label>
                    <select name="jurusan">
                        <option value="rpl">RPL</option>
                        <option value="tbsm">TBSM</option>
                        <option value="tl">TL</option>
                        <option value="tataboga">TATABOGA</option>
                        <option value="busana">Busana</option>
                    </select>
                </p> 

                <p>
                    <label for="tahun">Tahun:</label>
                    <input type="date" name="tahun" />
                    
                </p>
                <p>
                    <label for="nominal">Nominal:</label>
                    <input type="text" name="nominal" />
                    
                </p>

                    <input type="submit" value="Tambah Siswa" name="tambah_siswa" />
                </p>
            </fieldset>
        </form>
    </body?>
</html>
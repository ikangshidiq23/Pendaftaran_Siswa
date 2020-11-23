<!DOCTYPE html>
<html>
    <head>
        <title>Formulir Pendaftaran</title>
    </head>
    
    <body>
        <header>
            <h3>Formulir Pendaftaran</h3>
        </header>

        <form action="proses-pendaftaran.php" method="POST">
            <fieldset>
                <p>
                    <label for="nama">Nama:</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap" />
                </p>

                <p>
                    <label for="alamat">Alamat:</label>
                    <input type="text" name="alamat" placeholder="Alamat" />
                </p>

                <p>
                    <label for="jenis_kelamin">Jenis Kelamin:</label>
                    <label><input type="radio" name="jenis_kelamin" value="laki-laki" />laki-laki</label>
                    <label><input type="radio" name="jenis_kelamin" value="laki-laki" />Perempuan</label>
                </p>

                <p>
                    <label for="agama">Agama:</label>
                    <select nama="agama">
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                        <option>Atheis</option>
                    </select>
                </p>

                <p>
                    <label for="sekolah_asal">Sekolah Asal:</label>
                    <input type="text" name="sekolah_asal" placeholder="sekolah Asal"/>
                </p>
                <p>
                    <input type="submit" value="Daftar" name="daftar" />
                </p>
            </fieldset>
        </form>
    </body>
</html>
@include('header')
        <section id="search" style="background-color: #F9F8F5;">
            <div id="container" style="width: 80%; margin: 0px auto;">
                <div class="row" style="background-color: #FFF;">
                    <div class="col-md-12 col-xs-18" style="padding: 25px 50px 0px 50px;;">
                        <div id="simply-search">
                            <form action="https://digilib.uns.ac.id/dokumen/search" method="post" accept-charset="utf-8">           
                                <input type="text" name="keyword" class="input-simple-search" placeholder="Keyword" required="required">
                                <button type="submit" class="submit-simple-search">Search</button>
                            </form>                        
                        </div>
                    </div>
                    <div class="col-md-12 col-xs-18" style="background-color: #FFD700; height: 3px; margin-top: 10px;">
                    </div> 
                </div> 
            </div>
        </section>
        <section id="main" style="background-color: #F9F8F5;">
            <div id="container" style="width: 80%; margin: 0px auto;">
                <div class="row" style="padding: 0px 20px; background-color:#FFF;">

                    <!--    ------------------------------ MAIN PAGE  ---------------------------------------   -->
                    <div class="col-md-12 col-xs-18">
                        <div class="body-main">
                            <div class="col-md-12 col-xs-18" style="margin: 20px 0px 10px 0px; padding-bottom: 10px;">
                                &nbsp<br>&nbsp<br>&nbsp
                                <h3 style="text-align: left;" style="font: bold;">Pendaftaran Sebagai {{$user}} </h3>
                                <br>
                                <table width="500px">
                                    <tr>
                                        <td height="50">Nama </td>
                                        <td><input type="text" name="name" style="width: 300px"></td>
                                    </tr>
                                    <tr>
                                        <td height="50">Tanggal Lahir</td>
                                        <td>
                                            <select name="tanggal">
                                                <?php
                                                    for($i=1; $i<=31; $i++){
                                                        echo "<option value=$i>$i</option>";
                                                    }
                                                ?>
                                            </select>
                                            <select>
                                                <?php
                                                    $bulan = array("Januari" , "Februari" , "Maret" , "April" , "Mei" , "Juni" , "Juli" , "Agustus" , "September" , "Oktober" , "Novermber" , "Desember");
                                                    foreach ($bulan as $newbulan){ 
                                                        echo "<option value=$newbulan> $newbulan </option>";
                                                    }
                                                ?>
                                            </select>
                                            <select>
                                                <?php
                                                    for($i=1940;$i<=2017;$i++){
                                                        echo "<option value=$i> $i </option>";
                                                    }
                                                ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="50">Jenis Kelamin</td>
                                        <td>
                                            <select style="width: 300px text-align:center;">
                                                <option value="jk">-Pilih Jenis Kelamin-</option>
                                                <option value="laki">Laki-Laki</option>
                                                <option value="perempuan">Perempuan</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="50">Nomor Telepon</td>
                                        <td><input type="number" name="telepon" style="width: 300px"></td>
                                    </tr>
                                    <tr>
                                        <td height="50">Alamat</td>
                                        <td><textarea rows="5" cols="20" style="width: 300px"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td height="50">Email</td>
                                        <td><input type="text" name="email" style="width: 300px"></td>
                                    </tr>
                                    <tr>
                                        <td height="50">Password</td>
                                        <td><input type="password" name="password" style="width: 300px"></td>
                                    </tr>
                                    <tr>
                                        <td height="50">Confirm Password</td>
                                        <td><input type="password" name="cpassword" style="width: 300px"></td>
                                    </tr>
                                </table>  
                                <br>
                                <br>
                                <input type="submit" name="simpan" value="Simpan">
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--    ------------------------------ END OF MAIN PAGE  ---------------------------------------   -->
@include('footer')
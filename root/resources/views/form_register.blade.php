@include('header')
<!--
    CONTACT US  start
    ============================= -->
    <section id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 class="heading wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">Daftar Sebagai {{$user}}</h1>
                        <form>
                            <h2>Nama</h2>
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
                                <input type="name" class="form-control" placeholder="Write your full name here...">
                            </div>
                            <h2>Tanggal Lahir</h2>
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="800ms">
                                <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                  </div>
                                  <input type="text" class="form-control pull-right" id="datepicker">
                                </div>
                               <!-- <select class="form-control" style="width: 100px">
                                    <?php
                                        /*for($i=1; $i<=31; $i++){
                                            echo "<option value=$i>$i</option>";
                                        }
                                    ?>
                                </select>
                                <select class="form-control" style="width: 100px">
                                    <?php
                                        $bulan = array("Januari" , "Februari" , "Maret" , "April" , "Mei" , "Juni" , "Juli" , "Agustus" , "September" , "Oktober" , "Novermber" , "Desember");
                                        foreach ($bulan as $newbulan){ 
                                            echo "<option value=$newbulan>$newbulan</option>";
                                        }
                                    ?>
                                </select>
                                <select class="form-control" style="width: 100px">
                                    <?php
                                        for($i=1940;$i<=2017;$i++){
                                            echo "<option value=$i>$i</option>";
                                        } */
                                    ?>
                                </select> -->
                            </div>
                            <h2>Jenis Kelamin</h2>
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
                                <select class="form-control">
                                    <option value="laki">Laki-Laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>
                            <h2>Nomor Telepon</h2>
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
                                <input type="telepon" class="form-control" placeholder="Write your telephone number here...">
                            </div>
                            <h2>Alamat</h2>
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1000ms">
                                <textarea class="form-control" rows="3" placeholder="Write your message here..."></textarea>
                            </div>
                            <h2>E-mail</h2>
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
                                <input type="email" class="form-control" placeholder="Write your email address here...">
                            </div>
                            <h2>Password</h2>
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
                                <input type="password" class="form-control" placeholder="Write your password here...">
                            </div>
                            <h2>Confirm Password</h2>
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
                                <input type="password" class="form-control" placeholder="Confirm your password here...">
                            </div>
                        </form>
                        <a class="btn btn-default wow bounceIn" data-wow-duration="500ms" data-wow-delay="1300ms" href="#" role="button">daftar</a>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .container close -->
    </section><!-- #contact-us close -->
    <script type="text/javascript">
        //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })
    </script>
@include('footer')
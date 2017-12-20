@include('header')
        <section id="main" style="background-color: #F9F8F5;">
            <div id="container" style="width: 80%; margin: 0px auto;">
                <div class="row" style="padding: 0px 20px; background-color:#FFF;">

                    <!--    ------------------------------ MAIN PAGE  ---------------------------------------   -->
                    <div class="col-md-12 col-xs-18">
                        <div class="body-main">
                            <div class="col-md-12 col-xs-18" style="margin: 20px 0px 10px 0px; padding-bottom: 10px; text-align: center;">
                                &nbsp<br>&nbsp<br>&nbsp
                                <h3 style="text-align: center;" style="font: bold;">Masuk Sebagai {{ $user }}</h3>
                                <br>
                                
                                <br>
                                <br>
                                <input type="submit" name="simpan" value="Masuk">
                                &nbsp<br>&nbsp<br>&nbsp
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--    ------------------------------ END OF MAIN PAGE  ---------------------------------------   -->
@include('footer')
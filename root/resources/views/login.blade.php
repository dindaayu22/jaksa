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
    	                        <!--<div class="col-md-1 col-xs-1 tile" style="background-color: #; border: 0px; margin: 0.83%; padding: 38px 10px 5px 5px; text-align: left; font-size: 15px; color: #FFF;"> -->
                                    &nbsp<br>&nbsp<br>&nbsp
                                    <h3 style="text-align: center;" style="font: bold;">Login Sebagai</h3>
                                    <br>
                                    <br>
                                    <div style="text-align: center;">
                                        <a href="{{ URL::to('/login', ['user' => 'Admin']) }}"><img src="{{ URL::to('/assets/img/setting.png') }}" alt="Admin" height="100px" width="100px" /></a>
                                        <a href="{{ URL::to('/login', ['user' => 'Pimpinan']) }}"><img src="{{ URL::to('/assets/img/male.png') }}" alt="Pmpinan" height="100px" width="100px" style="margin: 0px 50px" /></a>
                                        <a href="{{ URL::to('/login', ['user' => 'Anggota']) }}"><img src="{{ URL::to('/assets/img/people.png') }}" alt="Anggota" height="100px" width="100px" /></a>
                                    </div>
                                    <br>
                                    <div style="text-align: center;">
                                        <label style="width: 100px">Admin</label>
                                        <label style="width: 200px">Pimpinan</label>
                                        <label style="width: 100px">Anggota</label>
                                    </div>
                                    &nbsp<br>&nbsp<br>&nbsp
                                </div>
                                <!--<div style="clear: both;"></div> -->
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--    ------------------------------ END OF MAIN PAGE  ---------------------------------------   -->
       @include('footer')
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
                            <div class="col-md-12 col-xs-18" style="margin: 20px 0px 10px 0px; padding-bottom: 10px; text-align: center;">
                                &nbsp<br>&nbsp<br>&nbsp
                                <h3 style="text-align: center;" style="font: bold;">Masuk Sebagai </h3>
                                <br>
                                <table width="500px">
                                    <tr>
                                        <td height="50">Username </td>
                                        <td><input type="text" name="name" width="200px"></td>
                                    </tr>
                                    <tr>
                                        <td height="50">Password</td>
                                        <td><input type="password" name="password"></td>
                                    </tr>
                                </table>  
                                <br>
                                <br>
                                <input type="submit" name="simpan" value="Masuk">
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--    ------------------------------ END OF MAIN PAGE  ---------------------------------------   -->
@include('footer')
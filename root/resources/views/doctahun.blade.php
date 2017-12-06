@include('header')
        <section id="main" style="background-color: #F9F8F5;">
            <div id="container" style="width: 80%; margin: 0px auto;">
                <div class="row" style="padding: 0px 20px; background-color:#FFF;">

                    <!--    ------------------------------ MAIN PAGE  ---------------------------------------   -->
                    <div class="col-md-12 col-xs-18">
                        <div class="body-main">
                            <div class="col-md-12 col-xs-18" style="margin: 20px 0px 10px 0px; padding-bottom: 10px;">
                            </div>  
                            <h3>Dokumen Per Tahun</h3>
                            <select style="width: 200px">
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                            </select>
                            <br>
                            <table border="1px" style="font: bold; margin-top: 10px" width="1000px">
                                <tr>
                                    <td style="text-align: center;" width="500px">Judul File</td>
                                    <td style="text-align: center;" width="300px">Kategori</td>
                                    <td style="text-align: center;">Tanggal</td>
                                </tr>
                            </table>
                            &nbsp<br>&nbsp<br>&nbsp<br>&nbsp<br>&nbsp<br>&nbsp<br>&nbsp<br>&nbsp<br>&nbsp<br>&nbsp<br>&nbsp<br>&nbsp                          
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--    ------------------------------ END OF MAIN PAGE  ---------------------------------------   -->
@include('footer')
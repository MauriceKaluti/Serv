    
    

    <link href="{{asset('front/css/select2.min.css')}}" rel="stylesheet" />


    <script src="{{asset('front/js/vendor/jquery-1.12.4.min.js')}} "></script>



    <script src="{{asset('front/js/select2.min.js')}} "></script>

      <script type="text/javascript">
            $(document).ready(function() {
                var service = ["Emergency Medical", "Emergency Road", "Emergency Fire"];
                $("#service").select2({
                  data: service
                });

                    $("#service").select2({

                   placeholder: "Search/Select Service",
                   maximumSelectionLength: 1        
                  
                });


           
            });
        </script>


                   <script type="text/javascript">
            $(document).ready(function() {
                var county = ["Mombasa", "Kwale", "Kilifi", "Tana-River", "Lamu", "Taita Taveta", "Garissa", "Mandera", "Marsabit", "Wajir", "Isiolo", "Meru", "Tharaka Nithi", "Embu", "Kitui", "Machakos", "Makueni", "Nyandarua", "Nyeri", "Kirinyaga", "Muranga", "Kiambu", "Turkana", "West Pokot", "Samburu", "Trans Nzoia", "Uasin Gishu", "Elgeyo Marakwet", "Nandi", "Baringo", "Laikipia", "Nakuru", "Narok", "Kajiado", "Kericho", "Bomet", "Kakamega", "Vihiga", "Bungoma", "Busia", "Siaya", "Kisumu", "Homa-Bay", "Migori", "Kisii", "Nyamira", "Nairobi City"];

                $("#county").select2({
                    data: county           
                  
                }); 

                   $("#county").select2({
                         
                  placeholder: "Select County",

                   maximumSelectionLength: 1        
                  
                }); 

            });
        </script>

      <script type="text/javascript">
            $(document).ready(function() {
                var hotcounty = ["Mombasa", "Kwale", "Kilifi", "Tana-River", "Lamu", "Taita Taveta", "Garissa", "Mandera", "Marsabit", "Wajir", "Isiolo", "Meru", "Tharaka Nithi", "Embu", "Kitui", "Machakos", "Makueni", "Nyandarua", "Nyeri", "Kirinyaga", "Muranga", "Kiambu", "Turkana", "West Pokot", "Samburu", "Trans Nzoia", "Uasin Gishu", "Elgeyo Marakwet", "Nandi", "Baringo", "Laikipia", "Nakuru", "Narok", "Kajiado", "Kericho", "Bomet", "Kakamega", "Vihiga", "Bungoma", "Busia", "Siaya", "Kisumu", "Homa-Bay", "Migori", "Kisii", "Nyamira", "Nairobi City"];

                $("#hotcounty").select2({
                    data: hotcounty           
                  
                }); 

                   $("#hotcounty").select2({
                         
                  placeholder: "Select County",

                   maximumSelectionLength: 1        
                  
                }); 

            });
        </script>

              <script type="text/javascript">
            $(document).ready(function() {
                var rescounty = ["Mombasa", "Kwale", "Kilifi", "Tana-River", "Lamu", "Taita Taveta", "Garissa", "Mandera", "Marsabit", "Wajir", "Isiolo", "Meru", "Tharaka Nithi", "Embu", "Kitui", "Machakos", "Makueni", "Nyandarua", "Nyeri", "Kirinyaga", "Muranga", "Kiambu", "Turkana", "West Pokot", "Samburu", "Trans Nzoia", "Uasin Gishu", "Elgeyo Marakwet", "Nandi", "Baringo", "Laikipia", "Nakuru", "Narok", "Kajiado", "Kericho", "Bomet", "Kakamega", "Vihiga", "Bungoma", "Busia", "Siaya", "Kisumu", "Homa-Bay", "Migori", "Kisii", "Nyamira", "Nairobi City"];

                $("#rescounty").select2({
                    data: rescounty           
                  
                }); 

                   $("#rescounty").select2({
                         
                  placeholder: "Select County",

                   maximumSelectionLength: 1        
                  
                }); 

            });
        </script>

         <script type="text/javascript">
            $(document).ready(function() {
                var facilitycounty = ["Mombasa", "Kwale", "Kilifi", "Tana-River", "Lamu", "Taita Taveta", "Garissa", "Mandera", "Marsabit", "Wajir", "Isiolo", "Meru", "Tharaka Nithi", "Embu", "Kitui", "Machakos", "Makueni", "Nyandarua", "Nyeri", "Kirinyaga", "Muranga", "Kiambu", "Turkana", "West Pokot", "Samburu", "Trans Nzoia", "Uasin Gishu", "Elgeyo Marakwet", "Nandi", "Baringo", "Laikipia", "Nakuru", "Narok", "Kajiado", "Kericho", "Bomet", "Kakamega", "Vihiga", "Bungoma", "Busia", "Siaya", "Kisumu", "Homa-Bay", "Migori", "Kisii", "Nyamira", "Nairobi City"];

                $("#facilitycounty").select2({
                    data: facilitycounty           
                  
                }); 

                   $("#facilitycounty").select2({
                         
                  placeholder: "Select Facility County",

                   maximumSelectionLength: 1        
                  
                }); 

            });
        </script>



      <script type="text/javascript">
            $(document).ready(function() {
                var year_manuf = ["2005", "2006", "2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019", "2020"];

                $("#year_manuf").select2({
                    data: year_manuf           
                  
                }); 

                   $("#year_manuf").select2({
                         
                  placeholder: "Select Manufacture Year",

                   maximumSelectionLength: 1        
                  
                }); 

            });
        </script>

              <script type="text/javascript">
            $(document).ready(function() {
                var year_manuf1 = ["2005", "2006", "2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019", "2020"];

                $("#year_manuf1").select2({
                    data: year_manuf1           
                  
                }); 

                   $("#year_manuf1").select2({
                         
                  placeholder: "Select Manufacture Year",

                   maximumSelectionLength: 1        
                  
                }); 

            });
        </script>


              <script type="text/javascript">
            $(document).ready(function() {
                var year_manuf2 = ["2005", "2006", "2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019", "2020"];

                $("#year_manuf2").select2({
                    data: year_manuf2           
                  
                }); 

                   $("#year_manuf2").select2({
                         
                  placeholder: "Select Manufacture Year",

                   maximumSelectionLength: 1        
                  
                }); 

            });
        </script>


              <script type="text/javascript">
            $(document).ready(function() {
                var year_manuf3 = ["2005", "2006", "2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019", "2020"];

                $("#year_manuf3").select2({
                    data: year_manuf3           
                  
                }); 

                   $("#year_manuf3").select2({
                         
                  placeholder: "Select Manufacture Year",

                   maximumSelectionLength: 1        
                  
                }); 

            });
        </script>



      <script type="text/javascript">
            $(document).ready(function() {
                var vehicles = ["Acura","Alfa Romeo","Aston Martin","Audi","Bentley", "BMW","Bugatti","Buick","Cadillac","Chevrolet","Chrysler","Citroen","Dodge","Ferrari","Fiat", "Ford","Geely","General Motors","GMC","Honda","Hyundai","Infiniti","Isuzu","Jaguar","Jeep", "Kia", "Koenigsegg", "Lamborghini", "Land Rover","Lexus","Maserati","Mazda","McLaren","Mercedes-Benz","Mini","Mitsubishi","Nissan","Pagani","Peugeot","Porsche","Ram","Renault","Rolls Royce","Saab","Subaru","Suzuki","Tata Motors","Tesla","Toyota","Volkswagen","Volvo"];

                $("#vehicles").select2({
                    data: vehicles           
                  
                }); 

                   $("#vehicles").select2({
                         
                  placeholder: "Select Vehicle Make",

                   maximumSelectionLength: 1        
                  
                }); 

            });
        </script>


              <script type="text/javascript">
            $(document).ready(function() {
                var vehicles1 = ["Acura","Alfa Romeo","Aston Martin","Audi","Bentley", "BMW","Bugatti","Buick","Cadillac","Chevrolet","Chrysler","Citroen","Dodge","Ferrari","Fiat", "Ford","Geely","General Motors","GMC","Honda","Hyundai","Infiniti","Isuzu","Jaguar","Jeep", "Kia", "Koenigsegg", "Lamborghini", "Land Rover","Lexus","Maserati","Mazda","McLaren","Mercedes-Benz","Mini","Mitsubishi","Nissan","Pagani","Peugeot","Porsche","Ram","Renault","Rolls Royce","Saab","Subaru","Suzuki","Tata Motors","Tesla","Toyota","Volkswagen","Volvo"];

                $("#vehicles1").select2({
                    data: vehicles1           
                  
                }); 

                   $("#vehicles1").select2({
                         
                  placeholder: "Select Vehicle Make",

                   maximumSelectionLength: 1        
                  
                }); 

            });
        </script>



              <script type="text/javascript">
            $(document).ready(function() {
                var vehicles2 = ["Acura","Alfa Romeo","Aston Martin","Audi","Bentley", "BMW","Bugatti","Buick","Cadillac","Chevrolet","Chrysler","Citroen","Dodge","Ferrari","Fiat", "Ford","Geely","General Motors","GMC","Honda","Hyundai","Infiniti","Isuzu","Jaguar","Jeep", "Kia", "Koenigsegg", "Lamborghini", "Land Rover","Lexus","Maserati","Mazda","McLaren","Mercedes-Benz","Mini","Mitsubishi","Nissan","Pagani","Peugeot","Porsche","Ram","Renault","Rolls Royce","Saab","Subaru","Suzuki","Tata Motors","Tesla","Toyota","Volkswagen","Volvo"];

                $("#vehicles2").select2({
                    data: vehicles2           
                  
                }); 

                   $("#vehicles2").select2({
                         
                  placeholder: "Select Vehicle Make",

                   maximumSelectionLength: 1        
                  
                }); 

            });
        </script>


              <script type="text/javascript">
            $(document).ready(function() {
                var vehicles3 = ["Acura","Alfa Romeo","Aston Martin","Audi","Bentley", "BMW","Bugatti","Buick","Cadillac","Chevrolet","Chrysler","Citroen","Dodge","Ferrari","Fiat", "Ford","Geely","General Motors","GMC","Honda","Hyundai","Infiniti","Isuzu","Jaguar","Jeep", "Kia", "Koenigsegg", "Lamborghini", "Land Rover","Lexus","Maserati","Mazda","McLaren","Mercedes-Benz","Mini","Mitsubishi","Nissan","Pagani","Peugeot","Porsche","Ram","Renault","Rolls Royce","Saab","Subaru","Suzuki","Tata Motors","Tesla","Toyota","Volkswagen","Volvo"];

                $("#vehicles3").select2({
                    data: vehicles3           
                  
                }); 

                   $("#vehicles3").select2({
                         
                  placeholder: "Select Vehicle Make",

                   maximumSelectionLength: 1        
                  
                }); 

            });
        </script>


     <script type="text/javascript">
            $(document).ready(function() {
                var vehtypes = ["Saloon", "SUV", "VAN", "Truck", "Bus"];

                $("#vehtypes").select2({
                    data: vehtypes           
                  
                }); 

                   $("#vehtypes").select2({
                         
                  placeholder: "Select Vehicle Type",

                   maximumSelectionLength: 1        
                  
                }); 

            });
        </script>

             <script type="text/javascript">
            $(document).ready(function() {
                var vehtypes1 = ["Saloon", "SUV", "VAN", "Truck", "Bus"];

                $("#vehtypes1").select2({
                    data: vehtypes1           
                  
                }); 

                   $("#vehtypes1").select2({
                         
                  placeholder: "Select Vehicle Type",

                   maximumSelectionLength: 1        
                  
                }); 

            });
        </script>


             <script type="text/javascript">
            $(document).ready(function() {
                var vehtypes2 = ["Saloon", "SUV", "VAN", "Truck", "Bus"];

                $("#vehtypes2").select2({
                    data: vehtypes2          
                  
                }); 

                   $("#vehtypes2").select2({
                         
                  placeholder: "Select Vehicle Type",

                   maximumSelectionLength: 1        
                  
                }); 

            });
        </script>


             <script type="text/javascript">
            $(document).ready(function() {
                var vehtypes3 = ["Saloon", "SUV", "VAN", "Truck", "Bus"];

                $("#vehtypes3").select2({
                    data: vehtypes3           
                  
                }); 

                   $("#vehtypes3").select2({
                         
                  placeholder: "Select Vehicle Type",

                   maximumSelectionLength: 1        
                  
                }); 

            });
        </script>

                      <script type="text/javascript">
            $(document).ready(function() {
                var estcounty = ["Mombasa", "Kwale", "Kilifi", "Tana-River", "Lamu", "Taita Taveta", "Garissa", "Mandera", "Marsabit", "Wajir", "Isiolo", "Meru", "Tharaka Nithi", "Embu", "Kitui", "Machakos", "Makueni", "Nyandarua", "Nyeri", "Kirinyaga", "Muranga", "Kiambu", "Turkana", "West Pokot", "Samburu", "Trans Nzoia", "Uasin Gishu", "Elgeyo Marakwet", "Nandi", "Baringo", "Laikipia", "Nakuru", "Narok", "Kajiado", "Kericho", "Bomet", "Kakamega", "Vihiga", "Bungoma", "Busia", "Siaya", "Kisumu", "Homa-Bay", "Migori", "Kisii", "Nyamira", "Nairobi City"];

                $("#estcounty").select2({
                    data: estcounty           
                  
                }); 

                   $("#estcounty").select2({
                         
                  placeholder: "Select County",

                   maximumSelectionLength: 1        
                  
                }); 

            });
        </script>





            <script type="text/javascript">
            $(document).ready(function() {
                var town = ["Nairobi Metro", "Nairobi", "Mombasa", "Kisumu", "Nakuru","Eldoret","Kehancha","Ruiru","Kangundo/Tala","Malindi","Naivasha","Kitui","Machakos","Thika","Athi River (Mavoko)","Karuri","Nyeri","Kilifi","Garissa","Vihiga","Mumias","Bomet","Molo","Ngong","Kitale","Litein","Limuru","Kericho","Kimilili","Awasi","Kakamega","Kapsabet","Mariakani","Kiambu","Mandera","Nyamira","Mwingi","Kisii","Wajir","Rongo","Bungoma","Ahero","Nandi Hills","Makuyu","Kapenguria","Taveta","Narok","Ol Kalou","Kakuma","Webuye","Malaba","Mbita Point","Ukunda","Wundanyi","Busia","Runyenjes","Migori","Malava","Suneka","Embu","Ogembo","Homa Bay","Lodwar","Kitengela","Ukwala","Keroka","Meru","Matuu","Oyugis","Nyahururu","Kipkelion","Luanda","Nanyuki","Maua","Mtwapa","Isiolo","Eldama Ravine","Voi","Siaya","Nyansiongo","Londiani","Iten/Tambach","Chuka","Malakisi","Juja","Ongata Rongai","Bondo","Moyale","Maralal","Gilgil","Nambale","Tabaka","Muhoroni","Kerugoya/Kutu","Ugunja","Rumuruti","Burnt Forest","Maragua","Kendu Bay","Msambweni","Lunga Lunga","Mtwapa","Kikoneni","Shimoni","Kwale"];
                $("#town").select2({
                  data: town
                });

                    $("#town").select2({
                    
                   placeholder: "Select Town",
                   maximumSelectionLength: 1        
                  
                });


           
            });
        </script>



            <script type="text/javascript">
            $(document).ready(function() {
                var city = ["Nairobi", "Mombasa", "Kisumu"];
                $("#city").select2({
                  data: city
                });

                    $("#city").select2({
                    
                   placeholder: "Select City",
                   maximumSelectionLength: 1        
                  
                });


           
            });
        </script>

                    <script type="text/javascript">
            $(document).ready(function() {
                var esttown = ["Nairobi Metro", "Nairobi", "Mombasa", "Kisumu", "Nakuru","Eldoret","Kehancha","Ruiru","Kangundo/Tala","Malindi","Naivasha","Kitui","Machakos","Thika","Athi River (Mavoko)","Karuri","Nyeri","Kilifi","Garissa","Vihiga","Mumias","Bomet","Molo","Ngong","Kitale","Litein","Limuru","Kericho","Kimilili","Awasi","Kakamega","Kapsabet","Mariakani","Kiambu","Mandera","Nyamira","Mwingi","Kisii","Wajir","Rongo","Bungoma","Ahero","Nandi Hills","Makuyu","Kapenguria","Taveta","Narok","Ol Kalou","Kakuma","Webuye","Malaba","Mbita Point","Ukunda","Wundanyi","Busia","Runyenjes","Migori","Malava","Suneka","Embu","Ogembo","Homa Bay","Lodwar","Kitengela","Ukwala","Keroka","Meru","Matuu","Oyugis","Nyahururu","Kipkelion","Luanda","Nanyuki","Maua","Mtwapa","Isiolo","Eldama Ravine","Voi","Siaya","Nyansiongo","Londiani","Iten/Tambach","Chuka","Malakisi","Juja","Ongata Rongai","Bondo","Moyale","Maralal","Gilgil","Nambale","Tabaka","Muhoroni","Kerugoya/Kutu","Ugunja","Rumuruti","Burnt Forest","Maragua","Kendu Bay","Msambweni","Lunga Lunga","Mtwapa","Kikoneni","Shimoni","Kwale"];
                $("#esttown").select2({
                  data: esttown
                });

                    $("#esttown").select2({
                    
                   placeholder: "Select Town",
                   maximumSelectionLength: 1        
                  
                });


           
            });
        </script>

    <script type="text/javascript">
            $(document).ready(function() {
                var familytown = ["Nairobi Metro", "Nairobi", "Mombasa", "Kisumu", "Nakuru","Eldoret","Kehancha","Ruiru","Kangundo/Tala","Malindi","Naivasha","Kitui","Machakos","Thika","Athi River (Mavoko)","Karuri","Nyeri","Kilifi","Garissa","Vihiga","Mumias","Bomet","Molo","Ngong","Kitale","Litein","Limuru","Kericho","Kimilili","Awasi","Kakamega","Kapsabet","Mariakani","Kiambu","Mandera","Nyamira","Mwingi","Kisii","Wajir","Rongo","Bungoma","Ahero","Nandi Hills","Makuyu","Kapenguria","Taveta","Narok","Ol Kalou","Kakuma","Webuye","Malaba","Mbita Point","Ukunda","Wundanyi","Busia","Runyenjes","Migori","Malava","Suneka","Embu","Ogembo","Homa Bay","Lodwar","Kitengela","Ukwala","Keroka","Meru","Matuu","Oyugis","Nyahururu","Kipkelion","Luanda","Nanyuki","Maua","Mtwapa","Isiolo","Eldama Ravine","Voi","Siaya","Nyansiongo","Londiani","Iten/Tambach","Chuka","Malakisi","Juja","Ongata Rongai","Bondo","Moyale","Maralal","Gilgil","Nambale","Tabaka","Muhoroni","Kerugoya/Kutu","Ugunja","Rumuruti","Burnt Forest","Maragua","Kendu Bay","Msambweni","Lunga Lunga","Mtwapa","Kikoneni","Shimoni","Kwale"];
                $("#familytown").select2({
                  data: familytown
                });

                    $("#familytown").select2({
                    
                   placeholder: "Select Town",
                   maximumSelectionLength: 1        
                  
                });


           
            });
        </script>


            <script type="text/javascript">
            $(document).ready(function() {
                var departure_location = ["Nairobi Metro", "Nairobi", "Mombasa", "Kisumu", "Nakuru","Eldoret","Kehancha","Ruiru","Kangundo/Tala","Malindi","Naivasha","Kitui","Machakos","Thika","Athi River (Mavoko)","Karuri","Nyeri","Kilifi","Garissa","Vihiga","Mumias","Bomet","Molo","Ngong","Kitale","Litein","Limuru","Kericho","Kimilili","Awasi","Kakamega","Kapsabet","Mariakani","Kiambu","Mandera","Nyamira","Mwingi","Kisii","Wajir","Rongo","Bungoma","Ahero","Nandi Hills","Makuyu","Kapenguria","Taveta","Narok","Ol Kalou","Kakuma","Webuye","Malaba","Mbita Point","Ukunda","Wundanyi","Busia","Runyenjes","Migori","Malava","Suneka","Embu","Ogembo","Homa Bay","Lodwar","Kitengela","Ukwala","Keroka","Meru","Matuu","Oyugis","Nyahururu","Kipkelion","Luanda","Nanyuki","Maua","Mtwapa","Isiolo","Eldama Ravine","Voi","Siaya","Nyansiongo","Londiani","Iten/Tambach","Chuka","Malakisi","Juja","Ongata Rongai","Bondo","Moyale","Maralal","Gilgil","Nambale","Tabaka","Muhoroni","Kerugoya/Kutu","Ugunja","Rumuruti","Burnt Forest","Maragua","Kendu Bay","Msambweni","Lunga Lunga","Mtwapa","Kikoneni","Shimoni","Kwale"];
                $("#departure_location").select2({
                  data: departure_location
                });

                    $("#departure_location").select2({
                    
                   placeholder: "Enter Departure Location",
                   maximumSelectionLength: 1        
                  
                });


           
            });
        </script>

        
            <script type="text/javascript">
            $(document).ready(function() {
                var destination_location = ["Nairobi Metro", "Nairobi", "Mombasa", "Kisumu", "Nakuru","Eldoret","Kehancha","Ruiru","Kangundo/Tala","Malindi","Naivasha","Kitui","Machakos","Thika","Athi River (Mavoko)","Karuri","Nyeri","Kilifi","Garissa","Vihiga","Mumias","Bomet","Molo","Ngong","Kitale","Litein","Limuru","Kericho","Kimilili","Awasi","Kakamega","Kapsabet","Mariakani","Kiambu","Mandera","Nyamira","Mwingi","Kisii","Wajir","Rongo","Bungoma","Ahero","Nandi Hills","Makuyu","Kapenguria","Taveta","Narok","Ol Kalou","Kakuma","Webuye","Malaba","Mbita Point","Ukunda","Wundanyi","Busia","Runyenjes","Migori","Malava","Suneka","Embu","Ogembo","Homa Bay","Lodwar","Kitengela","Ukwala","Keroka","Meru","Matuu","Oyugis","Nyahururu","Kipkelion","Luanda","Nanyuki","Maua","Mtwapa","Isiolo","Eldama Ravine","Voi","Siaya","Nyansiongo","Londiani","Iten/Tambach","Chuka","Malakisi","Juja","Ongata Rongai","Bondo","Moyale","Maralal","Gilgil","Nambale","Tabaka","Muhoroni","Kerugoya/Kutu","Ugunja","Rumuruti","Burnt Forest","Maragua","Kendu Bay","Msambweni","Lunga Lunga","Mtwapa","Kikoneni","Shimoni","Kwale"];
                $("#destination_location").select2({
                  data: destination_location
                });

                    $("#destination_location").select2({
                    
                   placeholder: "Enter Destination Location",
                   maximumSelectionLength: 1        
                  
                });


           
            });
        </script>


        <script type="text/javascript">
            $(document).ready(function() {
                var hottown = ["Nairobi Metro", "Nairobi", "Mombasa", "Kisumu", "Nakuru","Eldoret","Kehancha","Ruiru","Kangundo/Tala","Malindi","Naivasha","Kitui","Machakos","Thika","Athi River (Mavoko)","Karuri","Nyeri","Kilifi","Garissa","Vihiga","Mumias","Bomet","Molo","Ngong","Kitale","Litein","Limuru","Kericho","Kimilili","Awasi","Kakamega","Kapsabet","Mariakani","Kiambu","Mandera","Nyamira","Mwingi","Kisii","Wajir","Rongo","Bungoma","Ahero","Nandi Hills","Makuyu","Kapenguria","Taveta","Narok","Ol Kalou","Kakuma","Webuye","Malaba","Mbita Point","Ukunda","Wundanyi","Busia","Runyenjes","Migori","Malava","Suneka","Embu","Ogembo","Homa Bay","Lodwar","Kitengela","Ukwala","Keroka","Meru","Matuu","Oyugis","Nyahururu","Kipkelion","Luanda","Nanyuki","Maua","Mtwapa","Isiolo","Eldama Ravine","Voi","Siaya","Nyansiongo","Londiani","Iten/Tambach","Chuka","Malakisi","Juja","Ongata Rongai","Bondo","Moyale","Maralal","Gilgil","Nambale","Tabaka","Muhoroni","Kerugoya/Kutu","Ugunja","Rumuruti","Burnt Forest","Maragua","Kendu Bay","Msambweni","Lunga Lunga","Mtwapa","Kikoneni","Shimoni","Kwale"];
                $("#hottown").select2({
                  data: hottown
                });

                    $("#hottown").select2({
                    
                   placeholder: "Select Town",
                   maximumSelectionLength: 1        
                  
                });
           
            });
        </script>

            <script type="text/javascript">
            $(document).ready(function() {
                var restown = ["Nairobi Metro", "Nairobi", "Mombasa", "Kisumu", "Nakuru","Eldoret","Kehancha","Ruiru","Kangundo/Tala","Malindi","Naivasha","Kitui","Machakos","Thika","Athi River (Mavoko)","Karuri","Nyeri","Kilifi","Garissa","Vihiga","Mumias","Bomet","Molo","Ngong","Kitale","Litein","Limuru","Kericho","Kimilili","Awasi","Kakamega","Kapsabet","Mariakani","Kiambu","Mandera","Nyamira","Mwingi","Kisii","Wajir","Rongo","Bungoma","Ahero","Nandi Hills","Makuyu","Kapenguria","Taveta","Narok","Ol Kalou","Kakuma","Webuye","Malaba","Mbita Point","Ukunda","Wundanyi","Busia","Runyenjes","Migori","Malava","Suneka","Embu","Ogembo","Homa Bay","Lodwar","Kitengela","Ukwala","Keroka","Meru","Matuu","Oyugis","Nyahururu","Kipkelion","Luanda","Nanyuki","Maua","Mtwapa","Isiolo","Eldama Ravine","Voi","Siaya","Nyansiongo","Londiani","Iten/Tambach","Chuka","Malakisi","Juja","Ongata Rongai","Bondo","Moyale","Maralal","Gilgil","Nambale","Tabaka","Muhoroni","Kerugoya/Kutu","Ugunja","Rumuruti","Burnt Forest","Maragua","Kendu Bay","Msambweni","Lunga Lunga","Mtwapa","Kikoneni","Shimoni","Kwale"];
                $("#restown").select2({
                  data: restown
                });

                    $("#restown").select2({
                    
                   placeholder: "Select Town",
                   maximumSelectionLength: 1        
                  
                });
           
            });
        </script>

 

      <script type="text/javascript">
            $(document).ready(function() {
                var service = ["Tow Truck", "Ambulance", "Basic Road Assistances"];
                $("#service").select2({
                  data: service
                });

                    $("#service").select2({

                   placeholder: "Select Service",
                   maximumSelectionLength: 1        
                  
                });


           
            });
        </script>


              <script type="text/javascript">
            $(document).ready(function() {
                var services = ["Emergency Medical", "Emergency Road", "Emergency Fire"];
                $("#services").select2({
                  data: services
                });

                    $("#services").select2({

                   placeholder: "Select Service",
                   maximumSelectionLength: 1        
                  
                });


           
            });
        </script>


        <script type="text/javascript">
            $(document).ready(function() {
                var fire_serv_category = ["Fire Inspection", "Fire Audit", "Fire and Emergency Medical Rescue(s)"];
                $("#fire_serv_category").select2({
                  data: fire_serv_category
                });

                    $("#fire_serv_category").select2({

                   placeholder: "Select Service",
                   maximumSelectionLength: 1        
                  
                });


           
            });
        </script>


        <script type="text/javascript">
            $(document).ready(function() {
                var hotfire_serv_category = ["Fire Inspection", "Fire Audit", "Fire and Emergency Medical Rescue(s)"];
                $("#hotfire_serv_category").select2({
                  data: hotfire_serv_category
                });

                    $("#hotfire_serv_category").select2({

                   placeholder: "Select Service",
                   maximumSelectionLength: 1        
                  
                });


           
            });
        </script>

        <script type="text/javascript">
            $(document).ready(function() {
                var estfire_serv_category = ["Fire Inspection", "Fire Audit", "Fire and Emergency Medical Rescue(s)"];
                $("#estfire_serv_category").select2({
                  data: estfire_serv_category
                });

                    $("#estfire_serv_category").select2({

                   placeholder: "Select Service",
                   maximumSelectionLength: 1        
                  
                });


           
            });
        </script>


        <script type="text/javascript">
            $(document).ready(function() {
                var resfire_serv_category = ["Fire Inspection", "Fire Audit", "Fire and Emergency Medical Rescue(s)"];
                $("#resfire_serv_category").select2({
                  data: resfire_serv_category
                });

                    $("#resfire_serv_category").select2({

                   placeholder: "Select Service",
                   maximumSelectionLength: 1        
                  
                });


           
            });
        </script>


        <script type="text/javascript">
            $(document).ready(function() {
                var industry = ["Manufacturing", "Tours & Travel", "ICT", "Education", "Finance", "Agriculture", "Logistics", "Hotel & Hospitality", "Media", "Medical/Health", "Construction", "Beauty", "NGO", "Aviation", "Others"];
                $("#industry").select2({
                  data: industry
                });

                    $("#industry").select2({

                   placeholder: "Select Industry",
                   maximumSelectionLength: 1        
                  
                });


           
            });
        </script>


        <script type="text/javascript">
            $(document).ready(function() {
                var no_employees = ["1-10", "10-20", "20-30", "30-40", "40-50", "50-Above"];
                $("#no_employees").select2({
                  data: no_employees
                });

                    $("#no_employees").select2({

                   placeholder: "Click, Select Number of Employees",
                   maximumSelectionLength: 1        
                  
                });


           
            });
        </script>
 
        <script type="text/javascript">
            $(document).ready(function() {
                var no_students = ["50-100", "100-200", "200-300", "300-400", "400-500", "500-Above"];
                $("#no_students").select2({
                  data: no_students
                });

                    $("#no_students").select2({

                   placeholder: "Click, Select Number of Students",
                   maximumSelectionLength: 1        
                  
                });


           
            });
        </script>
        


               <script type="text/javascript">
            $(document).ready(function() {
                var gender = ["Male", "Female", "Rather Not Say"];
                $("#gender").select2({
                  data: gender
                });

                    $("#gender").select2({

                   placeholder: "Click, Select Gender",
                   maximumSelectionLength: 1        
                  
                });


           
            });
        </script>


               <script type="text/javascript">
            $(document).ready(function() {
                var bloodGrp = ["O", "O+", "A","AB","A+"];
                $("#bloodGrp").select2({
                  data: bloodGrp
                });

                    $("#bloodGrp").select2({

                   placeholder: "Click, Select Blood Group",
                   maximumSelectionLength: 1        
                  
                });


           
            });
        </script>

        <script type="text/javascript">
            $(document).ready(function() {
                var medCond = ["Stroke", "Hypertension", "Diabetes","Epilepsy","Paralysis","Asthma","None of the Above"];
                $("#medCond").select2({
                  data: medCond
                });

                    $("#medCond").select2({

                   placeholder: "Click, Select Medical Condition",
                   maximumSelectionLength: 1        
                  
                });


           
            });
        </script>

                <script type="text/javascript">
            $(document).ready(function() {
                var medCondSp = ["Stroke", "Hypertension", "Diabetes","Epilepsy","Paralysis","Asthma","None of the Above"];
                $("#medCondSp").select2({
                  data: medCondSp
                });

                    $("#medCondSp").select2({

                   placeholder: "Click, Select Medical Condition",
                   maximumSelectionLength: 1        
                  
                });


           
            });
        </script>

     <script type="text/javascript">
            $(document).ready(function() {
                var medCondSp1 = ["Stroke", "Hypertension", "Diabetes","Epilepsy","Paralysis","Asthma","None of the Above"];
                $("#medCondSp1").select2({
                  data: medCondSp1
                });

                    $("#medCondSp1").select2({

                   placeholder: "Click, Select Medical Condition",
                   maximumSelectionLength: 1        
                  
                });


           
            });
        </script>



                <script type="text/javascript">
            $(document).ready(function() {
                var noDep = ["1", "2", "3","4","5"];
                $("#noDep").select2({
                  data: noDep
                });

                    $("#noDep").select2({

                   placeholder: "Click, Select Number of Dependants",
                   maximumSelectionLength: 1        
                  
                });


           
            });
        </script>


                 <script type="text/javascript">
            $(document).ready(function() {
                var noDep = ["1", "2", "3","4","5"];
                $("#noDep").select2({
                  data: noDep
                });

                    $("#noDep").select2({

                   placeholder: "Click, Select Number of Dependants",
                   maximumSelectionLength: 1        
                  
                });


           
            });
        </script>


                 <script type="text/javascript">
            $(document).ready(function() {
                var noDep = ["1", "2", "3","4","5"];
                $("#noDep").select2({
                  data: noDep
                });

                    $("#noDep").select2({

                   placeholder: "Click, Select Number of Dependants",
                   maximumSelectionLength: 1        
                  
                });


           
            });
        </script>


                 <script type="text/javascript">
            $(document).ready(function() {
                var durationCov = ["1 Year", "2 Years", "3 Years","4 Years","5 Years"];
                $("#durationCov").select2({
                  data: durationCov
                });

                    $("#durationCov").select2({

                   placeholder: "Click, Select Duration Cover(Years)",
                   maximumSelectionLength: 1        
                  
                });


           
            });
        </script>

    <script type="text/javascript">
            $(document).ready(function() {
                var durationCov2 = ["1 Year", "2 Years", "3 Years","4 Years","5 Years"];
                $("#durationCov2").select2({
                  data: durationCov2
                });

                    $("#durationCov2").select2({

                   placeholder: "Click, Select Duration Cover(Years)",
                   maximumSelectionLength: 1        
                  
                });


           
            });
        </script>

            <script type="text/javascript">
            $(document).ready(function() {
                var no_households = ["1", "2", "3","4","5"];
                $("#no_households").select2({
                  data: no_households
                });

                    $("#no_households").select2({

                   placeholder: "Click, Select Number Of Households",
                   maximumSelectionLength: 1        
                  
                });


           
            });
        </script>
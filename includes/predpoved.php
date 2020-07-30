<div class="bg-text-bg">
    <?php
            $apiKlic = "fd50c77dbbf83be118a2324426cf6bf3";
            
            if(isset($_GET['mesto']))
            {
                $mesto = $_GET['mesto'];      
            }
            else
            {
                $mesto = "Praha"; 
            }
            
            
            //https://openweathermap.org/weather-conditions
            //https://openweathermap.org/current#name
            
            // weather = současné, forecast = předpověď
            $volbaPredpovedPocasi = "weather";
            $apiUrl = "http://api.openweathermap.org/data/2.5/" . $volbaPredpovedPocasi . "?q=" . $mesto . "&units=metric&appid=".$apiKlic."&lang=cz";
            $apiUrlSK = "http://api.openweathermap.org/data/2.5/" . $volbaPredpovedPocasi . "?q=" . $mesto . "&units=metric&appid=".$apiKlic."&lang=sk";
            
            //$apiUrl = "/sources/weather.json";
            //$data = json_decode($apiUrl, true);
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $apiUrl);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_VERBOSE, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $response = curl_exec($ch);
            
            $chsk = curl_init();
            curl_setopt($chsk, CURLOPT_HEADER, 0);
            curl_setopt($chsk, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($chsk, CURLOPT_URL, $apiUrlSK);
            curl_setopt($chsk, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($chsk, CURLOPT_VERBOSE, 0);
            curl_setopt($chsk, CURLOPT_SSL_VERIFYPEER, false);
            $responseSK = curl_exec($chsk);
            
            curl_close($chsk);
            $dataSK = json_decode($responseSK);

            curl_close($ch);
            $data = json_decode($response);
            ?>

            <div class="report-container">
                <h2><?php echo $dataSK->name; ?></h2>
                <div>
                    
                    
                    <div><?php echo ucwords($data->weather[0]->description);?></div>
                    <img src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png" class="weather-icon" />
                </div>
                
                <div class="weather-forecast">    
                    <span class="min-temperature">
                    <?php echo "Minimální denní teplota: " . $data->main->temp_min; ?>°C</span><br>
                    <?php echo "Maximální denní teplota: " . $data->main->temp_max; ?>°C
                </div>
                <div class="time">
                    <div>Vlhkost: <?php echo $data->main->humidity; ?> %</div>
                    <div>Vítr: <?php echo $data->wind->speed; ?> km/h</div>
                </div>
            </div>
            
            <button id="refresh" type="submit" class="btn-primary-outline" onclick="return RefreshWindow();">
                <img src="img/refresh.png">
            </button>
        </div>
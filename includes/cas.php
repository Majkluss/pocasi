<div class="cas">
            <?php
            $currentTime = time();
            $czDen = "";
            $engDen = date("l");
            switch($engDen)
            {
                case "Monday": $czDen = "Pondělí";
                    break;
                case "Tuesday": $czDen = "Úterý";
                    break;
                case "Wednesday": $czDen = "Středa";
                    break;
                case "Thursday": $czDen = "Čtvrtek";
                    break;
                case "Friday": $czDen = "Pátek";
                    break;
                case "Saturday": $czDen = "Sobota";
                    break;
                case "Sunday": $czDen = "Neděle";
                    break;
            }
            echo "Dnes je: " . $czDen . " " . date("d.n.Y",$currentTime); ?>

            <div><?php echo date("G:i", $currentTime); ?></div>
</div>
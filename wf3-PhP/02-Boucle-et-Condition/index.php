        <?php 

            $resultat = "<ul>";
            for( $i = 2 ; $i <= 128 ; $i += 2 ) {
                if ($i % 5 == 0){
                
                    $resultat .= "<li> " . $i . " <ul>";

                    for ( $j = 1 ; $j <= 10 ; $j++ ) {
                        if ( $j % 3 == 0 )
                            $resultat .= " <li> " . $j . "</li>"; 
                    }
                    $resultat .= "</ul> </li>";
                }
            }
            $resultat .= "</ul>";
            echo($resultat);
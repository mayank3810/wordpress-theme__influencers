<?php function number_format_short( $n, $precision = 1 ) {
        if ($n < 900) {
            // 0 - 900
            $n_format = number_format($n, $precision);
            $suffix = '';
        } else if ($n < 900000) {
            // 0.9k-850k
            $n_format = number_format($n / 1000, $precision);
            $suffix = 'K';
        } else if ($n < 900000000) {
            // 0.9m-850m
            $n_format = number_format($n / 1000000, $precision);
            $suffix = 'M';
        } else if ($n < 900000000000) {
            // 0.9b-850b
            $n_format = number_format($n / 1000000000, $precision);
            $suffix = 'B';
        } else {
            // 0.9t+
            $n_format = number_format($n / 1000000000000, $precision);
            $suffix = 'T';
        }

          // Remove unecessary zeroes after decimal. "1.0" -> "1"; "1.00" -> "1"
        // Intentionally does not affect partials, eg "1.50" -> "1.50"
            if ( $precision > 0 ) {
                $dotzero = '.' . str_repeat( '0', $precision );
                $n_format = str_replace( $dotzero, '', $n_format );
            }

            return $n_format . $suffix;
    }


    // Twitter get info

    // function twitter_user_info($screen_name){

    //     $data = file_get_contents("https://cdn.api.twitter.com/1/users/lookup.json?screen_name=" . $screen_name );
    //     $data = json_decode($data, true);
    //     return $data[0];
    // }


    // Pulling Live instagram followers
    function instagram_user_info($page){
    $response = file_get_contents("https://www.instagram.com/$page/?__a=1");
    if ($response !== false) {
        $data = json_decode($response, true);
        if ($data !== null) {
            // $follows = $data['graphql']['user']['edge_follow']['count'];
            $followedBy = $data['graphql']['user']['edge_followed_by']['count'];
            $followers = number_format_short($followedBy);
        }
     return $followers;
    }
    
    }
        ?>
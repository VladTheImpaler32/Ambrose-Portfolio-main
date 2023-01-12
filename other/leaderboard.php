<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    $score = null;
    $userName = null;
    $bannedNames = array("fucker", "asses", "ass", "fuckerass", "fukka", "asshole", "assholes", "asswhole", "b!tch", "b00bs", "b17ch", "b1tch", "ballbag", "balls", "ballsack", "bastard", "beastial", "beastiality", "bi+ch", "biatch", "bitch", "bitcher", "bitchers", "bitches", "bitchin", "bitching", "bloody", "blowjob", "blowjob", "blowjobs", "boiolas", "bollock", "bollok", "boner", "boob", "boobs", "booobs", "boooobs", "booooobs", "booooooobs", "breasts", "bucetabuggerbumbunny", "fucker", "butt", "butthole", "buttmunch", "buttplug", "c0ck", "c0cksucker", "carpet muncher", "cawk", "chink", "cl1t", "clit", "clitoris", "clits", "cnut", "cock", "cocksucker", "cockface", "cockhead", "cockmunch", "cockmuncher", "cocks", "cocksuck", "cocksucked", "cocksucker", "cocksucking", "cocksucks", "cocksuka", "cocksukka", "cok", "cokmuncher", "coksucka", "coon", "cox", "crap", "cum", "cummer", "cumming", "cums", "cumshot", "cunilingus", "cunillingus", "cunnilingus", "cunt", "cuntlick", "cuntlicker", "cuntlicking", "cuntscyalis", "cyberfuc", "cyberfuck", "cyberfucked", "cyberfucker", "cyberfuckers", "cyberfucking", "d1ckdamn", "dick", "dickhead", "dildo", "dildos", "dink", "dinks", "dog-fucker", "doggin", "dogging", "donkey", "ribber", "doosh", "duche", "dyke", "ejaculate", "ejaculated", "ejaculates", "ejaculating", "ejaculatings", "ejaculation", "ejakulate", "f u c k", "f_u_c_k", "f4nny", "fag", "fagging", "faggitt", "faggot", "faggs", "fagot", "fagots", "fags", "fanny", "fannyflaps", "fannyfucker", "fanyyfatass", "fcuk", "fcuker", "fcuking", "feck", "fecker", "felching", "fellate", "fellatio", "fingerfuck", "fingerfucked", "fingerfucker", "fingerfuckers", "fingerfucking", "fingerfucks", "fistfuck", "fistfucked", "fistfucker", "fistfuckers", "fistfucking", "fistfuckings", "fistfucks", "flange", "fook", "fooker", "fuck", "fucka", "fucked", "fucker", "fuckers", "fuckhead", "fuckheads", "fuckin", "fucking", "fuckings", "fuckingshitmotherfucker", "fuckme", "fucks", "fuckwhit", "fuckwit", "fudge", "fudgepacker", "fuk", "fuker", "fukker", "fukkin", "fuks", "fukwhit", "fukwit", "fux", "fux0r", "gangbang", "gangbanged", "gangbangs", "gaylord", "gaysex", "damned", "goddamn", "goddamned", "hardcoresex", "hell", "heshe", "hoar", "hoare", "hoer", "homo", "hore", "horniest", "horny", "hot", "sex", "jack-off", "jackoff", "jap", "jerk-off", "jism", "jiz", "jizm", "jizz", "kawk", "knob", "knobead", "knobed", "knobend", "knobhead", "knobjocky", "knobjokey", "kock", "kondum", "kondums", "kum", "kummer", "kumming", "labia", "lmfao", "lust", "lusting", "m0f0", "m0fo", "m45terbate", "ma5terb8", "ma5terbate", "masochist", "master-batemaster", "b8masterbat*", "masterbat3", "masterbate", "masterbation", "masterbations", "masturbate", "mofo", "mof0", "mofo", "mothafuck", "mothafucka", "mothafuckas", "mothafuckaz", "mothafucked", "mothafucker", "mothafuckers", "mothafuckin", "mothafucking", "mothafuckings", "mothafucks", "motherfucker", "motherfuck", "motherfucked", "motherfucker", "motherfuckers", "motherfuckin", "motherfucking", "motherfuckings", "motherfuckka", "motherfucks", "muthafecker", "muthafuckker", "muther", "mutherfucker", "n1gga", "n1gger", "nazi", "nigg3r", "nigg4h", "nigga", "niggah", "niggas", "niggaz", "nigger", "niggers", "nobnob jokey", "nobhead", "nobjocky", "nobjokey", "numb", "nuts", "nutsack", "orgasim", "orgasims", "orgasm", "orgasms", "p0rn", "pawn", "pecker", "penis", "penis", "fucker", "phonesex", "phuck", "phuk", "phuked", "phuking", "phukked", "phukking", "phuks", "phuq", "pigfucker", "pimp", "piss", "pissed", "pisser", "pissers", "pisses", "pissflaps", "pissin", "pissing", "pissoff", "poop", "porn", "pornopornography", "porno", "prick", "pricks", "pron", "pube", "pusse", "pussi", "pussies", "pussy", "pussys", "rectum", "retard", "rimjaw", "rimmings", "sadist", "schlong", "screwing", "scroat", "scrote", "scrotum", "semen", "sex", "sh!+", "sh!t", "sh1t", "shag", "shagger", "shaggin", "shagging", "shemale", "shi", "shit", "shitdick", "shite", "shited", "shitey", "shitfuck", "shitfull", "shithead", "shiting", "shitings", "shits", "shitted", "shitter", "shitters", "shitting", "shittings", "shitty", "skank", "slut", "sluts", "bitch", "spac", "spunk", "t1tt1e5", "t1tties", "teets", "teez", "testical", "testicle", "tit", "titfuck", "tits", "titt", "tittie5", "tittiefucker", "titties", "tittyfuck", "tittywank", "titwank", "tosser", "turd", "tw4t", "twat", "twathead", "twatty", "twunt", "twunt", "wang", "wank", "wanker", "wanky", "whoar", "whore", "willies", "willy", "xrated", "xxx");

    /* Connection Variable ("Servername",
    "username","password","database") */
    $con = mysqli_connect("localhost", 
            "ambrose", "373917", "leaderboard");

    // print_r($_REQUEST);echo "<br>";
    if (isset($_POST['type']) && $_POST['type'] == '1') {
        $type = 'pistol';
    } else if (isset($_POST['type']) && $_POST['type'] == '2') {
        $type = 'shotgun';
    } else if (isset($_POST['type']) && $_POST['type'] == '3') {
        $type = 'sniper';
    } else if (isset($_POST['type']) && $_POST['type'] == '4') {
        $type = 'minigun';
    }
    

    if (isset($_POST['userName']) && strlen($_POST['userName']) < 31) {
        $preUserName = $_POST['userName'];
        foreach($bannedNames as $bannedName){
            if(strpos($preUserName, $bannedName) !== false){
                for ($i = 0; $i < strlen($bannedName); $i++){
                    $replacement .= '*';
                }
                $preUserName = str_replace($bannedName, $replacement, $preUserName);
            } else {
                $userName = $preUserName;
            }
        }
    }

    if (isset($_POST['score'])) {
        $tempscore = $_POST['score'];
        $score = (int)$tempscore;
    }

    if (isset($_POST['userName']) || isset($_POST['score'])) {
        $query = "INSERT INTO $type (userName,score) VALUES ('$userName',$score)";
        if (mysqli_query($con, $query)) {
        }
    }


    // $result = mysqli_query($con, "SELECT userName, score FROM leaderboard ORDER BY score DESC");
    // $ranking = 1;
        
    // /* Fetch Rows from the SQL query */
    // if (mysqli_num_rows($result)) {
    //     echo "/";
    //     while ($row = mysqli_fetch_array($result)) {
    //         if ($ranking <= 10) {
    //             echo $ranking . ', ' . $row['userName'] . ', ' . $row['score'] . '<br>';
    //             $ranking++;
    //         } else {
    //             $chump = $row['score'];
    //             $deleteQuery = "DELETE FROM leaderboard WHERE score < $chump";
    //             if (mysqli_query($con, $deleteQuery)) {
    //                 echo $chump . " DELETED SUCCESSFULLY ";
    //             } else {
    //                 echo "<br>ERROR: " . mysqli_error($con);
    //             }
    //         }

    //     }
    // }

    $pistolResult = mysqli_query($con, "SELECT userName, score FROM pistol ORDER BY score DESC");
    $pistolRanking = 1;
        
    /* Fetch Rows from the SQL query */
    if (mysqli_num_rows($pistolResult)) {
        echo "/";
        while ($row = mysqli_fetch_array($pistolResult)) {
            if ($pistolRanking <= 10) {
                echo $pistolRanking . ', ' . $row['userName'] . ', ' . $row['score'] . '<br>';
                $pistolRanking++;
            } else {
                $chump = $row['score'];
                $deleteQuery = "DELETE FROM pistol WHERE score < $chump";
                if (mysqli_query($con, $deleteQuery)) {
                    echo $chump . " DELETED SUCCESSFULLY ";
                } else {
                    echo "<br>ERROR: " . mysqli_error($con);
                }
            }

        }
    }

    $shotgunResult = mysqli_query($con, "SELECT userName, score FROM shotgun ORDER BY score DESC");
    $shotgunRanking = 1;
        
    /* Fetch Rows from the SQL query */
    if (mysqli_num_rows($shotgunResult)) {
        echo "/";
        while ($row = mysqli_fetch_array($shotgunResult)) {
            if ($shotgunRanking <= 10) {
                echo $shotgunRanking . ', ' . $row['userName'] . ', ' . $row['score'] . '<br>';
                $shotgunRanking++;
            } else {
                $chump = $row['score'];
                $deleteQuery = "DELETE FROM shotgun WHERE score < $chump";
                if (mysqli_query($con, $deleteQuery)) {
                    echo $chump . " DELETED SUCCESSFULLY ";
                } else {
                    echo "<br>ERROR: " . mysqli_error($con);
                }
            }

        }
    }

    $sniperResult = mysqli_query($con, "SELECT userName, score FROM sniper ORDER BY score DESC");
    $sniperRanking = 1;
        
    /* Fetch Rows from the SQL query */
    if (mysqli_num_rows($sniperResult)) {
        echo "/";
        while ($row = mysqli_fetch_array($sniperResult)) {
            if ($sniperRanking <= 10) {
                echo $sniperRanking . ', ' . $row['userName'] . ', ' . $row['score'] . '<br>';
                $sniperRanking++;
            } else {
                $chump = $row['score'];
                $deleteQuery = "DELETE FROM sniper WHERE score < $chump";
                if (mysqli_query($con, $deleteQuery)) {
                    echo $chump . " DELETED SUCCESSFULLY ";
                } else {
                    echo "<br>ERROR: " . mysqli_error($con);
                }
            }

        }
    }

    $minigunResult = mysqli_query($con, "SELECT userName, score FROM minigun ORDER BY score DESC");
    $minigunRanking = 1;
        
    /* Fetch Rows from the SQL query */
    if (mysqli_num_rows($minigunResult)) {
        echo "/";
        while ($row = mysqli_fetch_array($minigunResult)) {
            if ($minigunRanking <= 10) {
                echo $minigunRanking . ', ' . $row['userName'] . ', ' . $row['score'] . '<br>';
                $minigunRanking++;
            } else {
                $chump = $row['score'];
                $deleteQuery = "DELETE FROM minigun WHERE score < $chump";
                if (mysqli_query($con, $deleteQuery)) {
                    echo $chump . " DELETED SUCCESSFULLY ";
                } else {
                    echo "<br>ERROR: " . mysqli_error($con);
                }
            }

        }
    }
    mysqli_close($con);
?>
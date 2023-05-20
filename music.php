<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  
   <style>
       @import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');
       @import url('https://fonts.googleapis.com/css2?family=Varela+Round&display=swap');
       body
       { 
           background-image: url('http://localhost/Shop%20Buddy/music/bgg.gif');
           background-size: 100% 100%;
       }
       *{
           margin: 0;
           padding: 0;
       }
       nav{
           font-family: 'Ubuntu',sans-serif;
       }
       nav ul{
           display: flex;
           list-style-type: none;
           height: 65px;
           background-color: black;
           color: white;
        }
        nav ul li{
            padding: 0 12px;
        }
       .brand img{
           width: 100px;
           padding: 0 8px;
       }
       .brand{
           display: flex;
           align-items: center;
           font-weight: bolder;
           font-size: 1.5rem;
       }
       .bottom{
           position: sticky;
           height: 100px;
           background-color: black;
           
           bottom: 0;
           display: flex;
           justify-content: center;
           align-items: center;
           color: white;
           flex-direction: column;
           
       }
       .container{
           min-height: 40vh;
           background-color: black;
           color: white;
           font-family: 'Varela Round', sans-serif;
           display: flex;
           margin: 23px auto;
           width: 70%;
           border-radius: 12px;
           padding: 34px;
           background-image: url('http://localhost/Shop%20Buddy/music/bg.gif');
           background-size: 130% 100%;
           

       }
       h2{
           color: white;
           font-family: 'Varela Round', sans-serif;
       }
       #myProgressBar{
           width: 80vw;
           cursor: pointer;
       }
       .icons{
           margin-top: 14px;
       }
       .icons i{
           cursor: pointer;
       }
       .songItem{
           height: 50px;
           display: flex;
           background-color: white;
           color: black;
           margin: 12px 0;
           justify-content: space-between;
           align-items: center;
           border-radius: 34px;

       }
       .songItem img{
           width: 53px;
           margin: 0 23px;
           border-radius: 34px;
           
        }
        .timestamp{
            margin: 0 23px;
        }
        .timestamp i{
            cursor: pointer;
        }
        .songItemContainer{
            margin-top: 34px;
        }
        .songInfo{
            position: absolute;
            left: 9vw;
            font-family: 'Varela Round', sans-serif;
        }
        .songInfo img{
            opacity: 0;
            transition: opacity 0.4s ease-in;
        }


    </style>
</head>

<body>
    <nav>
        <ul>
            <li class="brand">
                <a href="music.php">
                <span class="text-white font-bold text-2xl ml-3">Music</span></a></li>
            
                <li class="ml-auto mt-5 font-bold text-2xl"><a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                </svg></a></li>
            <li></li>

        </ul>
    </nav>
    <h2 class="font-bold text-3xl "><center>Remembering Lata Mangeshkar</center></h2>
    <div class="container">
     <div class="songItemContainer">
        <div class="songlist">
            <div class="songItem">
                <img src="http://localhost/Shop%20Buddy/music/cover1.jpg" alt="1">
                <span class="songName">Tujhse Naraz Nahi Zindagi</span>
                <span class="songlistplay"><span class="timestamp">04:23 <i id="0" class="far songItemPlay fa fa-play-circle-o fa-lg" aria-hidden="true"></i> </span></span>
            </div>
            <div class="songItem">
                <img src="http://localhost/Shop%20Buddy/music/cover1.jpg" alt="1">
                <span class="songName">Lag Ja Gale</span>
                <span class="songlistplay"><span class="timestamp">04:11 <i id="1" class="far songItemPlay fa fa-play-circle-o fa-lg" aria-hidden="true"></i> </span></span>
            </div>
            <div class="songItem">
                <img src="http://localhost/Shop%20Buddy/music/cover1.jpg" alt="1">
                <span class="songName">Didi Tera Dewar Deewana</span>
                <span class="songlistplay"><span class="timestamp">05:13 <i id="2" class="far songItemPlay fa fa-play-circle-o fa-lg" aria-hidden="true"></i> </span></span>
            </div>
            <div class="songItem">
                <img src="http://localhost/Shop%20Buddy/music/cover1.jpg" alt="1">
                <span class="songName">Dil toh Pagal Hai</span>
                <span class="songlistplay"><span class="timestamp">04:03 <i id="3" class="far songItemPlay fa fa-play-circle-o fa-lg" aria-hidden="true"></i> </span></span>
            </div>
            <div class="songItem">
                <img src="http://localhost/Shop%20Buddy/music/cover1.jpg" alt="1">
                <span class="songName">Bholi Si Surat</span>
                <span class="songlistplay"><span class="timestamp">04:20 <i id="4" class="far songItemPlay fa fa-play-circle-o fa-lg" aria-hidden="true"></i> </span></span>
            </div>
            <div class="songItem">
                <img src="http://localhost/Shop%20Buddy/music/cover1.jpg" alt="1">
                <span class="songName">Tere Bina Zindagi Se</span>
                <span class="songlistplay"><span class="timestamp">05:54 <i id="5" class="far songItemPlay fa fa-play-circle-o fa-lg" aria-hidden="true"></i> </span></span>
            </div>
            <div class="songItem">
                <img src="http://localhost/Shop%20Buddy/music/cover1.jpg" alt="1">
                <span class="songName">Chup Gaye Sare Nazare </span>
                <span class="songlistplay"><span class="timestamp">05:44 <i id="6" class="far songItemPlay fa fa-play-circle-o fa-lg" aria-hidden="true"></i> </span></span>
            </div>
            

        </div>
            <div class="songBanner"></div>
    </div>
    </div>
    <div class="bottom">
        <input type="range" name="range" id="myProgressBar" min="0" value="0" max="100">
        <div class="icons">
        <i class="fa fa-backward fa-2x" aria-hidden="true" id="previous"></i>
        <i class="fa fa-play-circle-o fa-2x" aria-hidden="true" id="masterPlay"></i>
        <i class="fa fa-forward fa-2x" aria-hidden="true" id="next"></i>
    </div>
    <div class="songInfo">
        <img src="http://localhost/Shop%20Buddy/music/playing.gif" width="42px" id="gif"> <span id="masterSongName">Tujhse Naraz Nahi Zindagi - Lata Mangeshkar</span>
    </div>
    </div>
    <script src="script.js"></script>
    
</body>
</html>
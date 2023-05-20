
    console.log("Welcome to Shopbuddy Music");
    let songIndex = 0;
    let audioElement = new Audio("http://localhost/Shop%20Buddy/music/1.mp3");
    let masterPlay = document.getElementById('masterPlay');
    let myProgressBar = document.getElementById('myProgressBar');
    let gif = document.getElementById('gif');
    let masterSongName = document.getElementById('masterSongName');
    let songItems = Array.from(document.getElementsByClassName('songItem'));

    let songs = [
    {songName: "Tujhse Naraz Nahi Zindagi", filePath: "http://localhost/Shop%20Buddy/music/1.mp3", coverPath: "http://localhost/Shop%20Buddy/music/cover1.jpg"},
    {songName: "Lag Ja Gale", filePath: "http://localhost/Shop%20Buddy/music/2.mp3", coverPath: "http://localhost/Shop%20Buddy/music/cover2.jpg"},
    {songName: "Didi Tera Dewar Deewana", filePath: "http://localhost/Shop%20Buddy/music/3.mp3", coverPath: "http://localhost/Shop%20Buddy/music/cover3.jpg"},
    {songName: "Dil toh Pagal Hai", filePath: "http://localhost/Shop%20Buddy/music/4.mp3", coverPath: "http://localhost/Shop%20Buddy/music/cover4.jpg"},
    {songName: "Bholi Si Surat", filePath: "http://localhost/Shop%20Buddy/music/5.mp3", coverPath: "http://localhost/Shop%20Buddy/music/cover5.jpg"},
    {songName: "Tere Bina Zindagi Se", filePath: "http://localhost/Shop%20Buddy/music/6.mp3", coverPath: "http://localhost/Shop%20Buddy/music/cover6.jpg"},
    {songName: "Chup Gaye Sare Nazare ", filePath: "http://localhost/Shop%20Buddy/music/7.mp3", coverPath: "http://localhost/Shop%20Buddy/music/cover7.jpg"},

]

songItems.forEach((element, i)=>{
    element.getElementsByTagName("img")[0].src = songs[i].coverPath;
    element.getElementsByClassName("songName")[0].innerText = songs[i].songName;
})
//handle play/pause click
masterPlay.addEventListener('click', ()=>{
    if(audioElement.paused || audioElement.currentTime<=0){
        audioElement.play();
        masterPlay.classList.remove('fa-play-circle');
        masterPlay.classList.add('fa-pause-circle');
        gif.style.opacity = 1;
    }
    else{
        audioElement.pause();
        masterPlay.classList.remove('fa-pause-circle');
        masterPlay.classList.add('fa-play-circle');
        gif.style.opacity = 0;
    }
})
audioElement.addEventListener('timeupdate', ()=>{
    progress = parseInt((audioElement.currentTime/audioElement.duration)* 100);
    myProgressBar.value = progress;

})
myProgressBar.addEventListener('change', ()=>{
    audioElement.currentTime = myProgressBar.value * audioElement.duration/100;

})

const makeAllPlays = ()=>{
    Array.from(document.getElementsByClassName('songItemPlay')).forEach((element)=>{
        element.classList.remove('fa-pause-circle');
        element.classList.add('fa-play-circle');

})
}
Array.from(document.getElementsByClassName('songItemPlay')).forEach((element)=>{
    element.addEventListener('click', (e)=>{
        makeAllPlays();
        songIndex = parseInt(e.target.id);
        e.target.classList.remove('fa-play-circle');
        e.target.classList.add('fa-pause-circle');
        audioElement.src = `http://localhost/Shop%20Buddy/music/${songIndex+1}.mp3`;
        masterSongName.innerText = songs[songIndex].songName;
        audioElement.currentTime = 0;
        audioElement.play();
        gif.style.opacity = 1;
        masterPlay.classList.remove('fa-play-circle');
        masterPlay.classList.add('fa-pause-circle');
    })

})

document.getElementById('next').addEventListener('click', ()=>{
    if(songIndex>=7){
        songIndex =0;
    }
    else{
        songIndex += 1;
    }
    audioElement.src = `http://localhost/Shop%20Buddy/music/${songIndex+1}.mp3`;
    masterSongName.innerText = songs[songIndex].songName;
    audioElement.currentTime = 0;
    audioElement.play();
    masterPlay.classList.remove('fa-play-circle');
    masterPlay.classList.add('fa-pause-circle');
})

document.getElementById('previous').addEventListener('click', ()=>{
    if(songIndex<=0){
        songIndex =0;
    }
    else{
        songIndex -= 1;
    }
    audioElement.src = `http://localhost/Shop%20Buddy/music/${songIndex+1}.mp3`;
    masterSongName.innerText = songs[songIndex].songName;
    audioElement.currentTime = 0;
    audioElement.play();
    masterPlay.classList.remove('fa-play-circle');
    masterPlay.classList.add('fa-pause-circle');
})

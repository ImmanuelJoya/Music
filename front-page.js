const lyricsBtn = document.getElementById('lyrics-btn');
const content = document.getElementById('content');

lyricsBtn.addEventListener('click', () => {
    content.innerHTML = `
    <div style="
    width: 50%;">
    <h2>Song Title: "Imagine"</h2><br>
    <h3>A song  by John Lennon from the album Imagine (1971)</h3>
    
    <p class="lyrics">Imagine there's no heaven, <br>
        It's easy if you try, <br>
        No hell below us, <br>
        Above us only sky, <br>
        Imagine all the people living for today, <br>
        Imagine there's no countries, <br>
        It isn't hard to do, <br>
        Nothing to kill or die for, <br>
        And no religion too, <br>
        Imagine all the people living life in peace, <br>
        You may say I'm a dreamer, <br>
        But I'm not the only one, <br>
        I hope someday you'll join us, <br>
        And the world will be as one.</p>
    </div>
    <div>
    <img src="JL.png" alt="" style="
    width: 100%;
    border-radius: 30%;
    padding: 20px;
    position: relative;
    top: 101px;
    width:50%;
    left:30%"/>
    </div>
    `;
});

const page2btn = document.getElementById('page2-btn');
page2btn.addEventListener('click', () => {
    content.innerHTML = `
    <div style="
    width: 50%;">
        <h2>Song Title:"Can't take my eyes of you"</h2><br>
        <h3>A song by Engelbert Humperdinck</h3>
        <p class="lyrics">You're just too good to be true<br>
        Can't take my eyes off of you<br>
        You'd be like Heaven to touch<br>
        I wanna hold you so much<br>
        At long last, love has arrived<br>
        And I thank God I'm alive<br>
        You're just too good to be true<br>
        Can't take my eyes off of you<br>
        Pardon the way that I stare<br>
        There's nothin' else to compare<br>
        The sight of you leaves me weak<br>
        There are no words left to speak<br>
        But if you feel like I feel<br>
        Please let me know that it's real<br>
        You're just too good to be true<br>
        Can't take my eyes off of you<br>
        I love you, baby<br>
        And if it's quite alright<br>
        I need you, baby<br>
        To warm the lonely night<br>
        I love you, baby<br>
        Trust in me when I say<br>
        Oh, pretty baby<br>
        Don't bring me down, I pray<br>
        Oh, pretty baby<br>
        Now that I've found you, stay<br>
        And let me love you, baby<br>
        Let me love you<br>
        You're just too good to be true<br>
        Can't take my eyes off of you<br>
        You'd be like Heaven to touch<br>
        I wanna hold you so much<br>
        At long last, love has arrived<br>
        And I thank God I'm alive<br>
        You're just too good to be true<br>
        Can't take my eyes off you<br>
        I love you, baby<br>
        And if it's quite alright<br>
        I need you, baby<br>
        To warm the lonely night<br>
        I love you, baby<br>
        Trust in me when I say<br>
        Oh, pretty baby<br>
        Don't bring me down, I pray<br>
        Oh, pretty baby<br>
        Now that I've found you, stay<br>
        Oh, pretty baby<br>
        Trust in me when I say<br>
        Oh, pretty baby<br>
        </div>
        <div>
        <img src="EH.jpg" alt="" style="
        width: 100%;
        border-radius: 30%;
        padding: 20px;
        position: relative;
        top: 101px;
        width:50%;
        left:30%"/>
        </div>
    `;
});

const page3btn = document.getElementById('page3-btn');

page3btn.addEventListener('click', () => {
    content.innerHTML = `
    <div style="
    width: 50%;">
        <h2>Song Title: "Fortunate son "</h2> <br>
        <h2>"A song by Creedence Clearwater Revival"</h2>
        
        Some folks are born made to wave the flag<br>
        Hoo, they're red, white and blue<br>
        And when the band plays "Hail to the chief"<br>
        Ooh, they point the cannon at you, Lord<br>
        It ain't me, it ain't me<br>
        I ain't no senator's son, son<br>
        It ain't me, it ain't me<br>
        I ain't no furtunate one, no<br>
        Some folks are born silver spoon in hand<br>
        Lord, don't they help themselves, Lord?<br>
        But when the taxman come to the door<br>
        Lord, the house lookin' like a rummage sale, yeah<br>
        It ain't me, it ain't me<br>
        I ain't no millionaire's son, no, no<br>
        It ain't me, it ain't me<br>
        I ain't no fortunate one, no<br>
        Yeah-yeah, some folks inherit star-spangled eyes<br>
        Hoo, they send you down to war, Lord<br>
        And when you ask 'em, "How much should we give?"<br>
        Hoo, they only answer, "More, more, more, more"<br>
        It ain't me, it ain't me<br>
        I ain't no military son, son, Lord<br>
        It ain't me, it ain't me<br>
        I ain't no fortunate one, one<br>
        It ain't me, it ain't me<br>
        I ain't no fortunate one, no, no, no<br>
        It ain't me, it ain't me<br>
        I ain't no fortunate son, no, no, no<br>
        It ain't me, it ain't me...<br>
        </div>
        <div>
        <img src="CCR.jpg" alt="" style="
        width: 100%;
        border-radius: 30%;
        padding: 20px;
        position: relative;
        top: 101px;
        width:50%;
        left:30%"/>
    ">
        </div>
    `;
});

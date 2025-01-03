<!DOCTYPE html>
<html lang="en">
<head>
    

    <!--Head of Page-->
    <meta charset="UTF-8">
    <title> FlixHub</title>
    <meta name="keywords" content="MVDR, About MVDR, mvdr" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Amiri' rel='stylesheet'>
    <link href="index_style.css" rel="stylesheet">
    
</head>

<body>
    <!--Navigation starts-->
    <section id ="header"> 
        <a class="logo" href="views/dashboard.php"> <img src = "logo.png" alt = ""></a>

        
        <div class="topnav">
        
            <ul id="nav">
                <input type="text" name="" id="find" placeholder="Search movie..." onkeyup="search()">
                <li ><a class="links active" href="views/dashboard.php">Home</a></li>
                <li ><a class="" href="https://www.cineplex.com/">Get Tickets</a></li>
                <li ><a class="links" href="oscars.html">Oscars</a></li>
                <li ><a class="links" href="toppicks.html">Top Picks</a></li>
            </ul>
        </div>
           
    </section>
    <!--Navigation ends-->

    <!--Carousal-->
    <section class="content">

        <!--Previous and Next buttons-->
        <img class="button prev" src="prev.png">
        <img class="button next" src="next.png">
    
        <!--Outer div-->
        <div class="slideout">
          <!--Inner div-->
          <div class="slidein">
            <!--Each div with images-->
            <div class="slide">
                <a href="about.html" class="movie-link" data-title="Avengers Endgame" data-image="carousal movies/avengersend.jpg" 
                data-storyline="After the devastating events of Avengers: Infinity War (2018), the universe is in ruins due to the efforts of the Mad Titan, Thanos. With the help of remaining allies, the Avengers must assemble once more in order to undo Thanos's actions and undo the chaos to the universe, no matter what consequences may be in store, and no matter who they face..."
                data-trailer="https://www.youtube.com/embed/TcMBFSGVi1c"
                data-headline="Action"
                data-cast1="Robert Downey Jr." 
                data-cast1-image="Cast/rdj.jpg"
                data-cast2="Chris Evans"
                data-cast2-image="Cast/chrisevans.jpg" 
                data-cast3="Mark Ruffalo"
                data-cast3-image="Cast/markruffalo.webp" 
                data-cast4="Chris Hemsworth"
                data-cast4-image="Cast/chrishem.webp" 
                data-cast5="Paul Rudd"
                data-cast5-image="Cast/paulrudd.webp"><img src="carousal movies/avengers.jpg" alt="Avengers" width="90%"></a>
            </div>
            <div class="slide" >
                <a href="about.html" class="movie-link" data-title="Intersteller" data-image="carousal movies/interstellars.jpg" 
                data-storyline="Earth's future has been riddled by disasters, famines, and droughts. There is only one way to ensure mankind's survival: Interstellar travel. A newly discovered wormhole in the far reaches of our solar system allows a team of astronauts to go where no man has gone before, a planet that may have the right environment to sustain human life."
                data-trailer="https://www.youtube.com/embed/zSWdZVtXT7E"
                data-headline="Science-Fiction"
                data-cast1="Matthew McConaughey" 
                data-cast1-image="Cast/matthewmc.jpg"
                data-cast2="Anne Hathaway"
                data-cast2-image="Cast/anne.webp" 
                data-cast3="Jessica Chastain"
                data-cast3-image="Cast/jessica.webp" 
                data-cast4="Michael Caine"
                data-cast4-image="Cast/michael.webp" 
                data-cast5="David Gyasi"
                data-cast5-image="Cast/david.jpg"><img src="carousal movies/interstellar.jpg" alt="Intersteller" width="90%"></a>
            </div>
            <div class="slide">
                <a href="about.html" class="movie-link" data-title="Inception" data-image="carousal movies/inceptions.jpg" 
                data-storyline="Dom Cobb is a skilled thief, the absolute best in the dangerous art of extraction, stealing valuable secrets from deep within the subconscious during the dream state, when the mind is at its most vulnerable. Cobb's rare ability has made him a coveted player in this treacherous new world of corporate espionage, but it has also made him an international fugitive and cost him everything he has ever loved. Now Cobb is being offered a chance at redemption. One last job could give him his life back but only if he can accomplish the impossible, inception. Instead of the perfect heist, Cobb and his team of specialists have to pull off the reverse: their task is not to steal an idea, but to plant one. If they succeed, it could be the perfect crime. But no amount of careful planning or expertise can prepare the team for the dangerous enemy that seems to predict their every move. An enemy that only Cobb could have seen coming."
                data-trailer="https://www.youtube.com/embed/Jvurpf91omw"
                data-headline="Thriller"
                data-cast1="Leonardo DiCaprio" 
                data-cast1-image="Cast/leonardo.webp"
                data-cast2="Joseph Gordon-Levitt"
                data-cast2-image="Cast/josephgordon.jpeg" 
                data-cast3="Ken Watanabe"
                data-cast3-image="Cast/ken.webp" 
                data-cast4="Tom Hardy"
                data-cast4-image="Cast/tomhardy.webp" 
                data-cast5="Cillian Murphy"
                data-cast5-image="Cast/cillian.jpg"><img src="carousal movies/inception.jpg" alt="Inception" width="90%"></a>
            </div>
            <div class="slide">
                <a href="about.html" class="movie-link" data-title="Kgf 2" data-image="carousal movies/kgf2s.jpg" 
                data-storyline="The blood-soaked land of Kolar Gold Fields (KGF) has a new overlord now - Rocky, whose name strikes fear in the heart of his foes. His allies look up to Rocky as their savior, the government sees him as a threat to law and order; enemies are clamoring for revenge and conspiring for his downfall. Bloodier battles and darker days await as Rocky continues on his quest for unchallenged supremacy."
                data-trailer="https://www.youtube.com/embed/oHShOOtLUaE"
                data-headline="Action"
                data-cast1="Yash" 
                data-cast1-image="Cast/yash.png"
                data-cast2="Srinidhi"
                data-cast2-image="Cast/srinidhi.jpg" 
                data-cast3="Sanjay Dutt"
                data-cast3-image="Cast/sanjayd.webp" 
                data-cast4="Raveena Tandon"
                data-cast4-image="Cast/raveena.jpg" 
                data-cast5="Prakash Raj"
                data-cast5-image="Cast/prakashr.jpg"><img src="carousal movies/kgf.jpg" alt="Kgf" width="90%"></a>
            </div>
            <div class="slide">
                <a href="about.html" class="movie-link" data-title="Forrest Gump" data-image="carousal movies/gumps.jpg" 
                data-storyline="Forrest Gump is a simple man with a low I.Q. but good intentions. He is running through childhood with his best and only friend Jenny. His 'mama' teaches him the ways of life and leaves him to choose his destiny. Forrest joins the army for service in Vietnam, finding new friends called Dan and Bubba, he wins medals, creates a famous shrimp fishing fleet, inspires people to jog, starts a ping-pong craze, creates the smiley, writes bumper stickers and songs, donates to people and meets the president several times. However, this is all irrelevant to Forrest who can only think of his childhood sweetheart Jenny Curran, who has messed up her life. Although in the end all he wants to prove is that anyone can love anyone."
                data-trailer="https://www.youtube.com/embed/XHhAG-YLdk8"
                data-headline="Drama"
                data-cast1="Tom Hanks" 
                data-cast1-image="Cast/tomhanks.jpg"
                data-cast2="Robin Wright"
                data-cast2-image="Cast/robinw.jpg" 
                data-cast3="Sally Field"
                data-cast3-image="Cast/sallyf.jpg" 
                data-cast4="Gary Sinise"
                data-cast4-image="Cast/garys.webp" 
                data-cast5="Haley Joel Osment"
                data-cast5-image="Cast/haley.jpg"><img src="carousal movies/gump.jpg" alt="Forrest Gump" width="90%"></a>
            </div>
        </div>
        
    </section>
    <!--Carousal Ends-->

    <!--Genre starts-->
    <section class="content1 genre" style="padding: 10px; margin-left: 200px;">
        <div class="content-item active g1" style="border: rgb(104, 197, 226) solid; border-radius: 0.1in; align-items: center; width: 45px; margin-right: 10px;">
            <h3 id="all" style="cursor: pointer;">All</h3>
        </div>
        <div class="content-item g2" style="border: rgb(104, 197, 226) solid; border-radius: 0.1in; align-items: center; width: 110px; margin-right: 10px;">
            <h3 id="ani" style="cursor: pointer;">Animations</h3>
        </div>
        <div class="content-item g3" style="border: rgb(104, 197, 226) solid; border-radius: 0.1in; align-items: center; width: 220px; margin-right: 10px;">
            <h3 id="chris" style="cursor: pointer;">Christopher Nolan Movies</h3>
        </div>
        <div class="content-item g4" style="border: rgb(104, 197, 226) solid; border-radius: 0.1in; align-items: center; width: 95px; margin-right: 10px;">
            <h3 id="com" style="cursor: pointer;">Comedies</h3>
        </div>
        <div class="content-item g5" style="border: rgb(104, 197, 226) solid; border-radius: 0.1in; align-items: center; width: 200px; margin-right: 10px;">
            <h3 id="thrill" style="cursor: pointer;">Thrillers and Mysteries</h3>
        </div>
    </section>
    <!--Genre Ends-->

    <!--Content starts-->
    <section class="content1 ani">
        <div class="heading" style="display: flex;">
            <div class="div"></div>
            <h1 style="color: white; margin-left: 13px; margin-bottom: 10px; color: rgb(255, 206, 116);">Animations</h1>
        </div>
        <div class="content-item">
            <a href="about.html" class="movie-link" data-title="Kung Fu Panda 3" data-image="movie images/kungFuPanda.jpg" 
            data-storyline="When Po's long-lost panda father suddenly reappears, the reunited duo travels to a secret panda paradise to meet scores of hilarious new panda characters. But when the supernatural villain Kai begins to sweep across China defeating all the kung fu masters, Po must do the impossible-learn to train a village full of his fun-loving, clumsy brethren to become the ultimate band of Kung Fu Pandas."
            data-trailer="https://www.youtube.com/embed/10r9ozshGVE"
            data-headline="Animations"
            data-cast1="Jack Black (Po-voice)" 
            data-cast1-image="Cast/jackblack.jpg"
            data-cast2="Dustin Hoffman (Shifu-voice)"
            data-cast2-image="Cast/dustinhoff.jpg" 
            data-cast3="Jackie Chan (Monkey-voice)"
            data-cast3-image="Cast/jackiechan.jpg" 
            data-cast4="Angelina Jolie (Tigress-voice)"
            data-cast4-image="Cast/angelina.jpg" 
            data-cast5="J.K. Simmons (Kai-voice)"
            data-cast5-image="Cast/jksimmons.jpg"><img src="movie images/kungFuPanda.jpg" alt="Kung Fu Panda 3" id="image1"></a>
            <h3>Kung Fu Panda 3</h3>
        </div>
        <div class="content-item">
            <a href="about.html" class="movie-link" data-title="Toy Story 2" data-image="movie images/toystory2.jpg" 
            data-storyline="While Andy is away at summer camp Woody has been toynapped by Al McWiggin, a greedy collector and proprietor of Al's Toy Barn! In this all-out rescue mission, Buzz and his friends Mr. Potato Head, Slinky Dog, Rex and Hamm springs into action to rescue Woody from winding up as a museum piece. They must find a way to save him before he gets sold in Japan forever and they will never see him again!"
            data-trailer="https://www.youtube.com/embed/xNWSGRD5CzU"
            data-headline="Animations"
            data-cast1="Tom Hanks (Woody-voice)" 
            data-cast1-image="Cast/tomhanks.jpg"
            data-cast2="Tim Allen (Buzz Lightyear-voice)"
            data-cast2-image="Cast/timallen.jpg" 
            data-cast3="Joan Cusack (Jessie-voice)"
            data-cast3-image="Cast/joancusack.jpg" 
            data-cast4="John Morries (Andy-voice)"
            data-cast4-image="Cast/johnmorris.jpg" 
            data-cast5="Jim Varney (Slinky Dog-voice)"
            data-cast5-image="Cast/jimvarney.jpg"><img src="movie images/toystory2.jpg" alt="Toy Story 2" id="image1"></a>
            <h3>Toy Story 2</h3>
        </div>
        <div class="content-item">
            <a href="about.html" class="movie-link" data-title="Wall-E" data-image="movie images/wall-e.jpg" 
            data-storyline="In a distant, but not so unrealistic, future where mankind has abandoned earth because it has become covered with trash from products sold by the powerful multi-national Buy N Large corporation, WALL-E, a garbage collecting robot has been left to clean up the mess. Mesmerized with trinkets of Earth's history and show tunes, WALL-E is alone on Earth except for a sprightly pet cockroach. One day, EVE, a sleek (and dangerous) reconnaissance robot, is sent to Earth to find proof that life is once again sustainable. WALL-E falls in love with EVE. WALL-E rescues EVE from a dust storm and shows her a living plant he found amongst the rubble. Consistent with her 'directive', EVE takes the plant and automatically enters a deactivated state except for a blinking green beacon. WALL-E, does not understand what has happened to his new friend, but, true to his love, he protects her from wind, rain, and lightning, even as she is unresponsive. One day a massive ship comes to reclaim EVE, but WALL-E, out of love or loneliness, hitches a ride on the outside of the ship to rescue EVE. The ship arrives back at a large space cruise ship, which is carrying all of the humans who evacuated Earth 700 years earlier. The people of Earth ride around this space resort on hovering chairs which give them a constant feed of TV and video chatting. They drink all of their meals through a straw out of laziness and bone loss, and are all so fat that they can barely move. When the auto-pilot computer, acting on hastily-given instructions sent many centuries before, tries to prevent the people of Earth from returning by stealing the plant, WALL-E, EVE, the portly captain, and a band of broken robots stage a mutiny."
            data-trailer="https://www.youtube.com/embed/CZ1CATNbXg0"
            data-headline="Animations"
            data-cast1="Ben Burtt (Wall-E)" 
            data-cast1-image="Cast/benb.jpg"
            data-cast2="Elissa Knight (Eve)"
            data-cast2-image="Cast/elissa.jpg" 
            data-cast3="Jeff Garlin (Captain B)"
            data-cast3-image="Cast/jeffg.jpg" 
            data-cast4="John Ratzenberger (John)"
            data-cast4-image="Cast/johnr.jpg" 
            data-cast5="Sigourney Weaver (Axiom's Computer)"
            data-cast5-image="Cast/sigourney.jpg"><img src="movie images/wall-e.jpg" alt="Wall-E" id="image1"></a>
            <h3>Wall-E</h3>
        </div>
        <div class="content-item">
            <a href="about.html" class="movie-link" data-title="Despicable Me" data-image="movie images/despicable.jpg" 
            data-storyline="In a happy suburban neighborhood surrounded by white picket fences with flowering rose bushes, sits a black house with a dead lawn. Unbeknownst to the neighbors, hidden beneath this house is a vast secret hideout. Surrounded by a small army of minions, we discover Gru (Steve Carell), planning the biggest heist in the history of the world. He is going to steal the moon. Gru delights in all things wicked. Armed with his arsenal of shrink rays, freeze rays, and battle-ready vehicles for land and air, he vanquishes all who stand in his way. Until the day he encounters the immense will of three little orphaned girls who look at him and see something that no one else has ever seen: a potential Dad. The world's greatest villain has just met his greatest challenge: three little girls named Margo (Miranda Cosgrove), Edith (Dana Gaier), and Agnes (Elsie Fisher)."
            data-trailer="https://www.youtube.com/embed/zzCZ1W_CUoI"
            data-headline="Animations"
            data-cast1="Steve Carell (Gru-voice)" 
            data-cast1-image="Cast/stevec.jpg"
            data-cast2="Jason Segel (Vector-voice)"
            data-cast2-image="Cast/jasons.jpg" 
            data-cast3="Russell Brand (Dr. Nefario-voice)"
            data-cast3-image="Cast/russellb.jpg" 
            data-cast4="Miranda Cosgrove (Margo-voice)"
            data-cast4-image="Cast/miranda.webp" 
            data-cast5="Elsie Fisher (Agnes-voice)"
            data-cast5-image="Cast/elsief.jpg"><img src="movie images/despicable.jpg" alt="Despicable Me" id="image1"></a>
            <h3>Despicable Me</h3>
        </div>
        <div class="content-item">
            <a href="about.html" class="movie-link" data-title="How To Train Your Dragon 2" data-image="movie images/dragon2.jpeg" 
            data-storyline="It's been five years since Hiccup and Toothless successfully united dragons and vikings on the island of Berk. While Astrid, Snotlout and the rest of the gang are challenging each other to dragon races (the island's new favorite contact sport), the now inseparable pair journey through the skies, charting unmapped territories and exploring new worlds. When one of their adventures leads to the discovery of a secret ice cave that is home to hundreds of new wild dragons and the mysterious Dragon Rider, the two friends find themselves at the center of a battle to protect the peace. Now, Hiccup and Toothless must unite to stand up for what they believe while recognizing that only together do they have the power to change the future of both men and dragons."
            data-trailer="https://www.youtube.com/embed/2BP38770KNo"
            data-headline="Animations"
            data-cast1="Jay Baruchel (Hiccup-voice)" 
            data-cast1-image="Cast/jayb.jpg"
            data-cast2="America Ferrera (Astrid-voice)"
            data-cast2-image="Cast/americaf.jpg" 
            data-cast3="Cate Blanchett (Valka-voice)"
            data-cast3-image="Cast/cateb.webp" 
            data-cast4="Gerard Butler (Stoick-voice)"
            data-cast4-image="Cast/gerardb.jpg" 
            data-cast5="Kit Harington (Eret-voice)"
            data-cast5-image="Cast/kith.jpg"><img src="movie images/dragon2.jpeg" alt="How To Train Your Dragon 2" id="image1"></a>
            <h3>How Train Your Dragon 2</h3>
        </div>
    </section>

    <!--Content continue-->
    <section class="content1 chris">
        <div class="heading" style="display: flex;">
            <div class="div"></div>
            <h1 style="color: white; margin-left: 13px; margin-bottom: 10px; color: rgb(255, 206, 116);">Christopher Nolan Movies</h1>
        </div>
        <div class="content-item">
            <a href="about.html" class="movie-link" data-title="The Dark Knight" data-image="movie images/darkknight.jpg" 
            data-storyline="Set within a year after the events of Batman Begins (2005), Batman, Lieutenant James Gordon, and new District Attorney Harvey Dent successfully begin to round up the criminals that plague Gotham City, until a mysterious and sadistic criminal mastermind known only as 'The Joker' appears in Gotham, creating a new wave of chaos. Batman's struggle against The Joker becomes deeply personal, forcing him to 'confront everything he believes' and improve his technology to stop him. A love triangle develops between Bruce Wayne, Dent, and Rachel Dawes."
            data-trailer="https://www.youtube.com/embed/EXeTwQWrcwY"
            data-headline="Christopher Nolan Movies"
            data-cast1="Christian Bale" 
            data-cast1-image="Cast/christianb.jpg"
            data-cast2="Heath Ledger"
            data-cast2-image="Cast/heathl.jpg" 
            data-cast3="Cillian Murphy"
            data-cast3-image="Cast/cillian.jpg" 
            data-cast4="Michael Caine"
            data-cast4-image="Cast/michael.webp" 
            data-cast5="Morgan Freeman"
            data-cast5-image="Cast/morganf.webp"><img src="movie images/darkknight.jpg" alt="The Dark Knight" id="image1"></a>
            <h3>The Dark Knight</h3>
        </div>
        <div class="content-item">
            <a href="about.html" class="movie-link" data-title="The Dark Night Rises" data-image="movie images/darkrises.jpg" 
            data-storyline="Despite his tarnished reputation after the events of The Dark Knight (2008), in which he took the rap for Dent's crimes, Batman feels compelled to intervene to assist the city and its Police force, which is struggling to cope with Bane's plans to destroy the city."
            data-trailer="https://www.youtube.com/embed/GokKUqLcvD8"
            data-headline="Christopher Nolan Movies"
            data-cast1="Christian Bale" 
            data-cast1-image="Cast/christianb.jpg"
            data-cast2="Joseph Gordon-Levitt"
            data-cast2-image="Cast/josephgordon.jpeg" 
            data-cast3="Cillian Murphy"
            data-cast3-image="Cast/cillian.jpg" 
            data-cast4="Michael Caine"
            data-cast4-image="Cast/michael.webp" 
            data-cast5="Morgan Freeman"
            data-cast5-image="Cast/morganf.webp"><img src="movie images/darkrises.jpg" alt="The Dark Night Rises" id="image1"></a>
            <h3>The Dark Night Rises</h3>
        </div>
        <div class="content-item">
            <a href="about.html" class="movie-link" data-title="Tenet" data-image="movie images/tenet.jpg" 
            data-storyline="In a twilight world of international espionage, an unnamed CIA operative, known as The Protagonist, is recruited by a mysterious organization called Tenet to participate in a global assignment that unfolds beyond real time. The mission: prevent Andrei Sator, a renegade Russian oligarch with precognitive abilities, from starting World War III. The Protagonist will soon master the art of 'time inversion' as a way of countering the threat that is to come."
            data-trailer="https://www.youtube.com/embed/LdOM0x0XDMo"
            data-headline="Christopher Nolan Movies"
            data-cast1="John David Washington" 
            data-cast1-image="Cast/johnd.jpg"
            data-cast2="Robert Pattinson"
            data-cast2-image="Cast/robertp.jpg" 
            data-cast3="Elizabeth Debicki"
            data-cast3-image="Cast/elizabethd.jpg" 
            data-cast4="Michael Caine"
            data-cast4-image="Cast/michael.webp" 
            data-cast5="Dimple Kapadia"
            data-cast5-image="Cast/dimplek.webp"><img src="movie images/tenet.jpg" alt="Tenet" id="image1"></a>
            <h3>Tenet</h3>
        </div>
        <div class="content-item">
            <a href="about.html" class="movie-link" data-title="The Prestige" data-image="movie images/prestige.jpg" 
            data-storyline="In the end of the nineteenth century, in London, Robert Angier, his beloved wife Julia McCullough, and Alfred Borden are friends and assistants of a magician. When Julia accidentally dies during a performance, Robert blames Alfred for her death, and they become enemies. Both become famous and rival magicians, sabotaging the performance of the other on the stage. When Alfred performs a successful trick, Robert becomes obsessed trying to disclose the secret of his competitor with tragic consequences."
            data-trailer="https://www.youtube.com/embed/RLtaA9fFNXU"
            data-headline="Christopher Nolan Movies"
            data-cast1="Christian Bale" 
            data-cast1-image="Cast/christianb.jpg"
            data-cast2="Hugh Jackman"
            data-cast2-image="Cast/hughj.jpg" 
            data-cast3="Scarlett Johansson"
            data-cast3-image="Cast/scarlettj.jpg" 
            data-cast4="Michael Caine"
            data-cast4-image="Cast/michael.webp" 
            data-cast5="Rebecca Hall"
            data-cast5-image="Cast/rebeccah.jpg"><img src="movie images/prestige.jpg" alt="The Prestige" id="image1"></a>
            <h3>The Prestige</h3>
        </div>
        <div class="content-item">
            <a href="about.html" class="movie-link" data-title="Memento" data-image="movie images/memento.jpg" 
            data-storyline="Memento chronicles two separate stories of Leonard, an ex-insurance investigator who can no longer build new memories, as he attempts to find the murderer of his wife, which is the last thing he remembers. One story line moves forward in time while the other tells the story backwards revealing more each time."
            data-trailer="https://www.youtube.com/embed/4CV41hoyS8A"
            data-headline="Christopher Nolan Movies"
            data-cast1="Guy Pearce" 
            data-cast1-image="Cast/guyp.jpg"
            data-cast2="Carrie-Anne Moss"
            data-cast2-image="Cast/carriea.jpg" 
            data-cast3="Joe Pantoliano"
            data-cast3-image="Cast/joep.jpg" 
            data-cast4="Mark Boone Junior"
            data-cast4-image="Cast/markb.jpg" 
            data-cast5="Jorja Fox"
            data-cast5-image="Cast/jorjaf.jpg"><img src="movie images/memento.jpg" alt="Memento" id="image1"></a>
            <h3>Memento</h3>
        </div>
    </section>

    <!--Content continue-->
    <section class="content1 com">
        <div class="heading" style="display: flex;">
            <div class="div"></div>
            <h1 style="color: white; margin-left: 13px; margin-bottom: 10px; color: rgb(255, 206, 116);">Comedies</h1>
        </div>
        <div class="content-item">
            <a href="about.html" class="movie-link" data-title="Avengers Endgame" data-image="movie images/avengers.jpg" 
            data-storyline=""
            data-trailer=""
            data-headline="Animations"
            data-cast1="" 
            data-cast1-image="Cast/"
            data-cast2=""
            data-cast2-image="Cast/" 
            data-cast3=""
            data-cast3-image="Cast/" 
            data-cast4=""
            data-cast4-image="Cast/" 
            data-cast5=""
            data-cast5-image="Cast/"><img src="movie images/mib3.jpg" alt="Men In Black 3" id="image1"></a>
            <h3>Men In Black 3</h3>
        </div>
        <div class="content-item">
            <a href="about.html" class="movie-link" data-title="Avengers Endgame" data-image="movie images/avengers.jpg" 
            data-storyline=""
            data-trailer=""
            data-headline="Animations"
            data-cast1="" 
            data-cast1-image="Cast/"
            data-cast2=""
            data-cast2-image="Cast/" 
            data-cast3=""
            data-cast3-image="Cast/" 
            data-cast4=""
            data-cast4-image="Cast/" 
            data-cast5=""
            data-cast5-image="Cast/"><img src="movie images/pixels.jpg" alt="Pixels" id="image1"></a>
            <h3>Pixels</h3>
        </div>
        <div class="content-item">
            <a href="about.html" class="movie-link" data-title="Avengers Endgame" data-image="movie images/avengers.jpg" 
            data-storyline=""
            data-trailer=""
            data-headline="Animations"
            data-cast1="" 
            data-cast1-image="Cast/"
            data-cast2=""
            data-cast2-image="Cast/" 
            data-cast3=""
            data-cast3-image="Cast/" 
            data-cast4=""
            data-cast4-image="Cast/" 
            data-cast5=""
            data-cast5-image="Cast/"><img src="movie images/johnny.jpg" alt="Johnny English Strikes Again" id="image1"></a>
            <h3>Johnny English Strikes Again</h3>
        </div>
        <div class="content-item">
            <a href="about.html" class="movie-link" data-title="Avengers Endgame" data-image="movie images/avengers.jpg" 
            data-storyline=""
            data-trailer=""
            data-headline="Animations"
            data-cast1="" 
            data-cast1-image="Cast/"
            data-cast2=""
            data-cast2-image="Cast/" 
            data-cast3=""
            data-cast3-image="Cast/" 
            data-cast4=""
            data-cast4-image="Cast/" 
            data-cast5=""
            data-cast5-image="Cast/"><img src="movie images/ci.jpg" alt="Central Intelligence" id="image1"></a>
            <h3>Central Intelligence</h3>
        </div>
        <div class="content-item">
            <a href="about.html" class="movie-link" data-title="Avengers Endgame" data-image="movie images/avengers.jpg" 
            data-storyline=""
            data-trailer=""
            data-headline="Animations"
            data-cast1="" 
            data-cast1-image="Cast/"
            data-cast2=""
            data-cast2-image="Cast/" 
            data-cast3=""
            data-cast3-image="Cast/" 
            data-cast4=""
            data-cast4-image="Cast/" 
            data-cast5=""
            data-cast5-image="Cast/"><img src="movie images/jumanji2.jpg" alt="Iron Man" id="image1"></a>
            <h3>Jumanji: The Next Level</h3>
        </div>
    </section>

    <!--Content continue-->
    <section class="content1 thrill">
        <div class="heading" style="display: flex;">
            <div class="div"></div>
            <h1 style="color: white; margin-left: 13px; margin-bottom: 10px; color: rgb(255, 206, 116);">Thriller and Mysteries</h1>
        </div>
        <div class="content-item">
            <a href="about.html" class="movie-link" data-title="Shutter Island" data-image="movie images/shutter.jpg" 
            data-storyline="In 1954, up-and-coming U.S. marshal Teddy Daniels is assigned to investigate the disappearance of a patient from Boston's Shutter Island Ashecliffe Hospital. He's been pushing for an assignment on the island for personal reasons, but before long he thinks he's been brought there as part of a twisted plot by hospital doctors whose radical treatments range from unethical to illegal to downright sinister. Teddy's shrewd investigating skills soon provide a promising lead, but the hospital refuses him access to records he suspects would break the case wide open. As a hurricane cuts off communication with the mainland, more dangerous criminals 'escape' in the confusion, and the puzzling, improbable clues multiply, Teddy begins to doubt everything - his memory, his partner, even his own sanity."
            data-trailer="https://www.youtube.com/embed/v8yrZSkKxTA"
            data-headline="Thriller and Mysteries"
            data-cast1="Leonardo DiCaprio" 
            data-cast1-image="Cast/leonardo.webp"
            data-cast2="Mark Ruffalo"
            data-cast2-image="Cast/markruffalo.webp" 
            data-cast3="Ben Kingsley"
            data-cast3-image="Cast/benk.jpg" 
            data-cast4="Michelle Williams"
            data-cast4-image="Cast/michellew.jpg" 
            data-cast5="Emily Mortimer"
            data-cast5-image="Cast/emilym.webp"><img src="movie images/shutter.jpg" alt="Shutter Island" id="image1"></a>
            <h3>Shutter Island</h3>
        </div>
        <div class="content-item">
            <a href="about.html" class="movie-link" data-title="Shawshank Redemption" data-image="movie images/shawshank.jpg" 
            data-storyline="Chronicles the experiences of a formerly successful banker as a prisoner in the gloomy jailhouse of Shawshank after being found guilty of a crime he did not commit. The film portrays the man's unique way of dealing with his new, torturous life; along the way he befriends a number of fellow prisoners, most notably a wise long-term inmate named Red."
            data-trailer="https://www.youtube.com/embed/PLl99DlL6b4"
            data-headline="Thriller and Mysteries"
            data-cast1="Tim Robbins" 
            data-cast1-image="Cast/timr.jpg"
            data-cast2="Morgan Freeman"
            data-cast2-image="Cast/morganf.webp" 
            data-cast3="Clancy Brown"
            data-cast3-image="Cast/clancyb.jpg" 
            data-cast4="Bob Gunton"
            data-cast4-image="Cast/bobg.jpg" 
            data-cast5="William Sadler"
            data-cast5-image="Cast/williams.jpg"><img src="movie images/shawshank.jpg" alt="Shawshank Redemption" id="image1"></a>
            <h3>Shawshank Redemption</h3>
        </div>
        <div class="content-item">
            <a href="about.html" class="movie-link" data-title="Se7en" data-image="movie images/seven.jpg" 
            data-storyline="A film about two homicide detectives' (Morgan Freeman and Brad Pitt) desperate hunt for a serial killer who justifies his crimes as absolution for the world's ignorance of the Seven Deadly Sins. The movie takes us from the tortured remains of one victim to the next as the sociopathic 'John Doe' (Kevin Spacey) sermonizes to Detectives Somerset and Mills -- one sin at a time. The sin of Gluttony comes first and the murderer's terrible capacity is graphically demonstrated in the dark and subdued tones characteristic of film noir. The seasoned and cultured but jaded Somerset researches the Seven Deadly Sins in an effort to understand the killer's modus operandi while the bright but green and impulsive Detective Mills (Pitt) scoffs at his efforts to get inside the mind of a killer..."
            data-trailer="https://www.youtube.com/embed/znmZoVkCjpI"
            data-headline="Thriller and Mysteries"
            data-cast1="Morgan Freeman" 
            data-cast1-image="Cast/morganf.webp"
            data-cast2="Brad Pitt"
            data-cast2-image="Cast/bradp.jpg" 
            data-cast3="Kevin Spacey"
            data-cast3-image="Cast/kevins.webp" 
            data-cast4="Gwyneth Paltrow"
            data-cast4-image="Cast/gwynethp.jpg" 
            data-cast5="John Cassini"
            data-cast5-image="Cast/johnc.webp"><img src="movie images/seven.jpg" alt="Se7en" id="image1"></a>
            <h3>Se7en</h3>
        </div>
        <div class="content-item">
            <a href="about.html" class="movie-link" data-title="Fight Club" data-image="movie images/fc.jpg" 
            data-storyline="A nameless first person narrator (Edward Norton) attends support groups in attempt to subdue his emotional state and relieve his insomniac state. When he meets Marla (Helena Bonham Carter), another fake attendee of support groups, his life seems to become a little more bearable. However when he associates himself with Tyler (Brad Pitt) he is dragged into an underground fight club and soap making scheme. Together the two men spiral out of control and engage in competitive rivalry for love and power."
            data-trailer="https://www.youtube.com/embed/qtRKdVHc-cE"
            data-headline="Thriller and Mysteries"
            data-cast1="Brad Pitt" 
            data-cast1-image="Cast/bradp.jpg"
            data-cast2="Edward Norton"
            data-cast2-image="Cast/edwardn.webp" 
            data-cast3="Helena Bonham Carter"
            data-cast3-image="Cast/helenab.jpg" 
            data-cast4="Holt McCallany"
            data-cast4-image="Cast/holtm.webp" 
            data-cast5="Eion Bailey"
            data-cast5-image="Cast/eionb.jpg"><img src="movie images/fc.jpg" alt="Fight Club" id="image1"></a>
            <h3>Fight Club</h3>
        </div>
        <div class="content-item">
            <a href="about.html" class="movie-link" data-title="The Sixth Sense" data-image="movie images/sixth.jpg" 
            data-storyline="Malcom Crowe (Bruce Willis) is a child psychologist who receives an award on the same night that he is visited by a very unhappy ex-patient. After this encounter, Crowe takes on the task of curing a young boy with the same ills as the ex-patient (Donnie Wahlberg) . This boy 'sees dead people'. Crowe spends a lot of time with the boy much to the dismay of his wife (Olivia Williams). Cole's mom (Toni Collette) is at her wit's end with what to do about her son's increasing problems. Crowe is the boy's only hope."
            data-trailer="https://www.youtube.com/embed/3-ZP95NF_Wk"
            data-headline="Thriller and Mysteries"
            data-cast1="Bruce Willis" 
            data-cast1-image="Cast/brucew.jpg"
            data-cast2="Haley Joel Osment"
            data-cast2-image="Cast/haley.jpg" 
            data-cast3="Toni Collette"
            data-cast3-image="Cast/tonic.webp" 
            data-cast4="Olivia Williams"
            data-cast4-image="Cast/oliviaw.jpg" 
            data-cast5="Trevor Morgan"
            data-cast5-image="Cast/trevorm.jpg"><img src="movie images/sixth.jpg" alt="The Sixth Sense" id="image1"></a>
            <h3>The Sixth Sense</h3>
        </div>
    </section>
    <!--Content ends-->

    <!--Back to top button-->
    <a href="#" class="to-top">
        <img src="up-arrow.png" width="116%">
    </a>

    <!--Footer styles-->
    <style>
    .footer1{
        display: flex;
    }

    .button_signout{
        width: 100px;
        height: 35px;
        font-size: 20px;
        font-weight: bolder;
        background-color: rgb(104, 197, 226);
        border-radius: 0.07in;
        text-decoration: none;
        color: black;
        text-align: center;
        margin-left: 20px;
        margin-top: 5px;
    }

    .button_signout:hover{
        background-color: rgb(175, 228, 244);
    }
    </style>

    <!--Footer starts-->
    <footer>

        <div class="footer1">
            <img src="views/user.png" style="width: 42px">
            <h3 style="margin: 5px 0px 0px 5px"><?php echo $model->getUsername(); ?></h3>
            <a class="button_signout" href="logout.php">Log out</a>
        </div>
        <div class="footer2">
            <a id="icons"><img src="icons8-facebook-100.png"></a>
            <a id="icons"><img src="icons8-instagram-100.png"></i></a>
            <a id="icons"><img src="icons8-twitter-100.png"></i></a>
            <a id="icons"><img src="icons8-youtube-100.png"></i></a>
        </div>

    </footer>
    <!--Footer ends-->

    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
    <script src="script.js"></script>
    
    <!--Script for search-->
    <script type="text/javascript">
        function search() {
            let filter = document.getElementById('find').value.toUpperCase();
    
            let movies = document.querySelectorAll('.content-item');
            let contentSection = document.querySelector('.content'); 
    
            let movieFound = false;
    
            for (let i = 0; i < movies.length; i++) {
                let titleElement = movies[i].getElementsByTagName('h3')[0];
                let title = titleElement.innerHTML || titleElement.innerText || titleElement.textContent;
    
                if (filter === "") {
                    // Reset everything to initial state if no search query
                    movies[i].style.display = "";
                    contentSection.style.display = "";
                } else if (title.toUpperCase().indexOf(filter) > -1) {
                    // Show the matched movie
                    movies[i].style.display = "block";
                    movieFound = true;
                } else {
                    // Hide non-matching movies
                    movies[i].style.display = "none";
                }
            }
    
            // Hide the content section only if a movie is found during the search
            contentSection.style.display = movieFound ? "none" : "block";
        }
    </script>
    <!--Script for search ends-->
</body>
</html>
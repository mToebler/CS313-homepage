<?php
$imgNum = rand(1, 5);
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Mark's Home Page</title>
   <meta name="description" content="Mark Tobler's home page for CS313. Will contain links to future assignments as well as a little blurb about a worthy foundation.">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="week2a.css">
   <link href="https://fonts.googleapis.com/css?family=Bungee|Bungee+Shade|Montserrat&display=swap" rel="stylesheet">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <script src="week02.js" async defer></script>
</head>

<body>
   <header class="header">
      <div class="container">
         <h1 class="site-title">Mark Tobler's CS313 Home Page!</h1>
         <span class="site-tagline">Welcome!</span>
      </div>
   </header>
   <nav class="main-nav">
      <div class="container">
         <ul>
            <li class="mobile-button"><a href="#">Menu</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Assignments</a></li>
            <li id="id_cheat"><a>Toggle Images</a></li>
            <li><a href="index.php">Shuffle Images</a></li>
         </ul>
      </div>
   </nav>

   <section class="content">
      <div class="full-bleed mark-photo1"></div>

      <article class="post">
         <div class="container">
            <h2>It Must Needs Be</h2>
            <div class="columns">
               <div class="item">
                  <h4 class="item-title">Opposition in all things!</h4>
                  <img src="fdhum-<?php echo ($imgNum++); ?>.jpg" alt="punk bear" class="item-image" onclick="jqFade()" />
                  <p>Opposition is both the bane and salvation of my existance. With it, I toil and bang my head up against the nature of things. Without it, I would fade into oblivion. I often wonder why we as humans need opposition. If, indeed, we were made in the image of God, then he must also need it. Perhaps at that level things change; however, if opposition is needed in all things and righteousness would not exist with out it, then, yeah, God has opposition in his life. But from where, other than all the little things humanity and whatever else is out there throws his way in terms of the rebeliousness? That can't be it, can it? <br>It's a rabbit hole.</p>

               </div>

               <div class="item">
                  <h4 class="item-title">My dad hikes with broken glogs</h4>
                  <p>Me, my brother, and my dad, all go on a hike to the Colorado River from an access trail just after Hoover Damn to enjoy some hot (so super hot!) springs that had been recently renovated. There are two ways in and out: one is moderately tough over mountainous terrain; the other is long, sandy, and tricky when it rains. We went the mountain path. While it's certainly no <a href="http://tolkiengateway.net/wiki/Caradhras">Caradhras</a>, it's no picnic either. It's a challenge for me—I'm huffing and sweating, hoping someone calls for a break. No dice. There are drop-offs and steep switchbacks to maneuver on the backside. So, we're at the last drop-off before the pools, and I look down at my dad's shoes and notice he's wearing Crocs. MoFo'ing Crocs—and one is missing its strap! <br>He's 82.</p>
                  <img src="fdhum-<?php
                                    if ($imgNum > 5) $imgNum = 1;
                                    echo ($imgNum++);
                                    ?>.jpg" alt="spring blosson" class="item-image" />
               </div>
            </div>
         </div>
      </article>

      <div class="full-bleed cool-photo2"></div>

      <article class="post">
         <div class="container">

            <h3>This is another section sub-title</h3>

            <div class="columns thirds">
               <div class="item">
                  <h4 class="item-title">I like rocks!</h4>
                  <img src="fdhum-<?php
                                    if ($imgNum > 5) $imgNum = 1;
                                    echo ($imgNum++);
                                    ?>.jpg" alt="curious cat" class="item-image" />
                  <p>Before there was the I-like-turtles-kid, a Christmas Story had the I like Rocks kid. Deathstroke zeus gargoyle abattoir boomerang spectre pennyworth azrael gearhead two. Society crane fairchild, lantern atomic batarang? Cypher grayson montoya batman cobblepot lillian hugo catwoman jim caird clayface. Rumor zucco mister kobra fright owl edward nocturna abbott echo. Metallo fox elongated alcor nigma bane raatko deathstroke batcave. Cluemaster amanda quinn metallo. Helena nyssa canary oracle ghul scarecrow tumbler.</p>
                  <div class="social">
                  </div>

               </div>

               <div class="item">
                  <h4 class="item-title">Citizen Kane Opening Scene</h4>
                  <p>Stream of consciousness notes: The bold and domineering title; the dark imagery; the ominous music, the monkey cages; the odd, exotic boats; the great, dark house on top of a hill; the no trespassing sign; the series of gates of increasing complexity culminating in a wrought(iron), encircled K; the thick fog, the estate in disrepair; the sudden extinguishing of a light from within; then the appearance of what could be likened to a sunrise — is this hope? [The rosebud sequence here] The nurse entering, not to comfort or mourn, but to matter-of-factly confirm what is suspected by pulling a sheet over the now lifeless body; but there again is that sunrise glow framing his dead body. It's saying to those that witness, &quot;though this man died lonely and in ruins of his own making, do not judge him yet. For in his life, he achieved great things, good things, things that deserve at least passing respect.&quot; Then too, the sunrise fades into blackness.)</p>
                  <p><img src="fdhum-<?php
                                       if ($imgNum > 5) $imgNum = 1;
                                       echo ($imgNum++);
                                       ?>.jpg" alt="white apricot blossoms" class="item-image" />
                  </p>
                  <div class="social">
                  </div>
               </div>

               <div class="item">

                  <h4 class="item-title">Oedipus</h4>
                  <img src="fdhum-<?php
                                    if ($imgNum > 5) $imgNum = 1;
                                    echo ($imgNum++);
                                    ?>.jpg" alt="sassy" class="item-image" />
                  <p>That sharp disapproving pain, once shirked from but now craved, sewn into my soul now reflects from my formation. A young heart malnourished, starved of true affection soon turned to the only source of sustenance available—you. You—made up of all the disapproving looks, the curt words, the sharp cuffs—were my heart’s mulch, fertilizer, and Miracle grow. The cruel promises broken like Roundup shriveling any roots a nascent shoot might shoot in the supportive soils of respect, safety, morality, consistency that in return might blossom into confidence, empathy, and—lo, love. These things are like sunshine to mold simile. What capacity have I for such burdensome affects. Can you yet see, despite your antipathy, your apple fell not far from your tree?</p>
                  <div class="social">
                  </div>
               </div>

               <div class="item">

                  <h4 class="item-title">Not far from the tree</h4>
                  <img src="apsaraAngkor.jpg" alt="Image does not shuffle" class="item-image" />
                  <p>Now, master gardener, as your sun dims on your winter, know that I will miss you. Like moon must miss the worldly waters it whenced so long ago when umbilical cord cosmos did cut from telestial earth, yet still moon pulls at the missed waves with an endless wave of so long. When felled from life, I wonder if like moon I will orbit around your progenitorial memory. What will sustain me? What choices will sprout with such peripetian pruning?</p>
                  <div class="social">
                  </div>
               </div>


            </div>
         </div>
         </div>
      </article>
   </section>

   <footer class="footer">
      <div class="container">
         <div class="tooltip">It must needs be oppostition in all things.
            <span class="tooltiptext">Opposition permits us to grow</span>
         </div>
      </div>
   </footer>
</body>

</html>
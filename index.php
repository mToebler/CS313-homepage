<?php 
   $imgNum = rand(1, 5);
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Mark's Home Page</title>
   <meta name="description"
      content="Mark Tobler's home page for CS313. Will contain links to future assignments as well as a little blurb about a worthy foundation.">
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
         </ul>
      </div>
   </nav>

   <section class="content">
      <div class="full-bleed mark-photo1"></div>

      <article class="post">
         <div class="container">
            <h2>This is the super cool section title</h2>
            <div class="columns">
               <div class="item">
                  <h4 class="item-title">This is the post title</h4>
                  <img src="fdhum-<?php echo ($imgNum++);?>.jpg" alt="punk bear" class="item-image" onclick="jqFade()"/>
                  <p>Frankly, it's ludicrous to have these interlocking bodies and not...interlock. My Uncle Rory was
                     the stodgiest taxidermist you've ever met by day. But I haven't spent any money! I was all... dead
                     and frugal. The only way some people can find a purpose in life is by becoming obsessed with
                     demons. Should I start this program over? It's a real burn, being right so often. Can't call to
                     mom, can't say a word. Nobody could do that much decoupage without calling on the powers of
                     darkness. I'll never leave. Not even if you kill me. If I could make you purtier, I would.</p>
               </div>

               <div class="item">
                  <h4 class="item-title">This is the post title</h4>
                  <p>Everybody started singing and dancing. I've got four brothers, none of them Democrats. They need to
                     take seven and they might take yours. Any self-respecting demon should be living in a pit of filth
                     or a nice crypt. Who's calling me? Everybody I know lives here. Can't even shout, can't even cry.
                     And I'm a huge fan of the way you lose control and turn into an enormous green rage monster. I
                     wanna hurt you, but I can't resist the sinister attraction of your cold and muscular body! In their
                     resting state, our actives are as innocent and vulnerable as children.</p>
                     <img src="fdhum-<?php 
                     if($imgNum > 5) $imgNum=1; 
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
                  <h4 class="item-title">This is the post title</h4>
                  <img src="fdhum-<?php 
                     if($imgNum > 5) $imgNum=1; 
                     echo ($imgNum++);
                     ?>.jpg" alt="curious cat" class="item-image" />
                  <p>From beneath you, it devours. Y'all see the man hanging out of the spaceship with the really big
                     gun? No, Angel, it's not you. If I was blind, I would see you. Yes, I'd forgotten you're
                     moonlighting as a criminal mastermind now.</p>
                  <p>The human body can be drained of blood in 8.6 seconds given adequate vacuuming systems. Actually, I
                     was fired from a fry-cook opportunity. I'm a comfortador also. Oh my god, I find lentils completely
                     incomprehensible. The human mind is like Van Halen; if you just pull out one piece and keep
                     replacing it, it just degenerates.</p>
                  <div class="social">
                  </div>

               </div>

               <div class="item">
                  <h4 class="item-title">This is the post title</h4>
                  <p>I saw their production of 'Giselle' in 1890. I wept like a baby, and I was evil! And zombies don't
                     eat brains anyway, unless instructed to by their zombie master. It's about power and it's about
                     women and you just hate those two words in the same sentence, don't you? She is the slayer. I
                     recognize the council has made a decision, but given that it's a stupid-ass decision, I've elected
                     to ignore it.</p>
                  <p><img src="fdhum-<?php 
                     if($imgNum > 5) $imgNum=1; 
                     echo ($imgNum++);
                     ?>.jpg" alt="white apricot blossoms" class="item-image" />
                  </p>
                  <div class="social">
                  </div>
               </div>

               <div class="item">

                  <h4 class="item-title">This is the post title</h4>
                  <img src="fdhum-<?php 
                     if($imgNum > 5) $imgNum=1; 
                     echo ($imgNum++);
                     ?>.jpg" alt="sassy" class="item-image" />
                  <p>Everybody started singing and dancing. I saw their production of 'Giselle' in 1890. I wept like a
                     baby, and I was evil! So, are we gonna sing army songs or something? I am obsolete. This must be
                     what old people feel like, and Blockbuster. In their resting state, our actives are as innocent and
                     vulnerable as children. I'm a rogue demon hunter now. Hey I could whip up a love slave any day I
                     wanted. Oh my god, I find lentils completely incomprehensible. Well we could grind our enemies into
                     talcum powder with a sledgehammer but, gosh, we did that last night.</p>
                  <div class="social">
                  </div>
               </div>

               <div class="item">

                  <h4 class="item-title">This is the post title</h4>
                  <p>It's funny how the Earth never opens up and swallows you when you want it to. Why can't you just
                     masturbate like the rest of us? It's a real burn, being right so often. They need to take seven and
                     they might take yours. We're old friends from Navy. Friends from Old Navy. I worked retail, he'd
                     come in, buy slacks My entire existence was constructed by a sociopath in a sweater vest; what do
                     you suggest I do?</p>
                  <div class="social">
                  </div>
               </div>

               <div class="item">

                  <h4 class="item-title">This is the post title</h4>
                  <img src="apsaraAngkor.jpg" alt="Sample Image" class="item-image" />
                  <p>Stay away from hyena people, or any loser athletes, or if you see anyone who's invisible. From
                     beneath you, it devours. Somebody put her tiny little thinking cap on! We'll have to call it early
                     quantum state phenomenon.</p>
                  <p>Only way to fit 5000 species of mammal on the same boat. I've seen the best and the worst of you.
                     The only thing Willow was ever good for, the only thing I ever had going for me were those moments,
                     just moments, where Tara would look at me and I was wonderful. We've got a bunch of fighters with
                     nothing to hit, a wicca who won't-a, and the brains of our operation wears oven mitts. They
                     rampaged through half the known world until Angel got his soul.</p>
                  <div class="social">
                  </div>
               </div>

               <div class="item">

                  <h4 class="item-title">This is the post title</h4>
                  <p>Oh my god you will never believe what happened at school today. We're old friends from Navy.
                     Friends from Old Navy. I worked retail, he'd come in, buy slacks I'm not planning on presiding over
                     the end of Western Civilization. She is the slayer. Everyone's a hero in their own way, in their
                     own not that heroic way. Stay away from hyena people, or any loser athletes, or if you see anyone
                     who's invisible. These endless days are finally ending in a blaze. What, you think this isn't real
                     just because of all the vampires, and demons, and ex-vengeance demons, and the sister that used to
                     be a big ball of universe-destroying energy? They need to take seven and they might take yours. I
                     swallowed a bug.</p>
                  <div class="social">
                     </div>
               </div>

               <div class="item">
                  <h4 class="item-title">This is the post title</h4>
                  <p>Love keeps her in the air when she ought to fall down. Bunnies aren't just cute like everybody
                     supposes. And I understand with perfect clarity exactly what you are. Occasionally, I'm callous and
                     strange. You can't spend the rest of your life waiting for Xander to wake up and smell the hottie.
                  </p>
                  <div class="social">
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
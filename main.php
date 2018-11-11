<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--[if lt IE 7 ]><html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#" class="ie6 "> <![endif]-->  
<!--[if IE 7 ]><html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#" class="ie7 "> <![endif]-->  
<!--[if IE 8 ]><html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#" class="ie8 "> <![endif]-->  
<!--[if IE 9 ]><html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#" class="ie9 "> <![endif]--> 
<!--[if (gt IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#" class=""> <!--<![endif]-->
<body>
  <font color="white">
  <form name="myform" action="" method="GET" class = "margin">
    <fieldset>
   <p></p>
   <p>Team: <select id="teams" name="teams">
            <option value="14">Select a team</option>
            <option value="1">Arizona Diamondbacks</option>
            <option value="38">Atlanta Braves</option>
            <option value="25">Baltimore Orioles</option>
            <option value="26">Boston Red Sox</option>
            <option value="28">Chicago Cubs</option>
            <option value="27">Chicago White Sox</option>
            <option value="29">Cincinnati Reds</option>
            <option value="30">Cleveland Indians</option>
            <option value="31">Colorado Rockies</option>
            <option value="32">Detroit Tigers</option>
            <option value="33">Houston Astros</option>
            <option value="34">Kansas City Royals</option>
            <option value="9">Los Angeles Angels</option>
            <option value="17">Los Angeles Dodgers</option>
            <option value="10">Miami Marlins</option>
            <option value="18">Milwaukee Brewers</option>
            <option value="21">Minnesota Twins</option>
            <option value="11">New York Mets</option>
            <option value="3">New York Yankees</option>
            <option value="2">Oakland Athletics</option>
            <option value="39">Philadelphia Phillies</option>
            <option value="35">Pittsburgh Pirates</option>
            <option value="42">San Diego Padres</option>
            <option value="43">San Francisco Giants</option>
            <option value="13">Seattle Mariners</option>
            <option value="36">St. Louis Cardinals</option>
            <option value="22">Tampa Bay Rays</option>
            <option value="23">Texas Rangers</option>
            <option value="24">Toronto Blue Jays</option>
            <option value="14">Washington Nationals</option>
           </select>
    &nbsp;&nbsp;&nbsp;Player's Name: <input type="text" name="name">
    <p>Choose a story type: <select id ="stories" name = "stories">
            <option value = "7">Select a story type</option>
            <option value = "1">Scrappy player knows how to win</option>
            <option value = "2">Old veteran returns for one last run</option>
            <option value = "3">New free agent acquisition adjusts</option>
            <option value = "4">New trade acquisition adjusts</option>
            <option value = "5">Star player ready to take it to next level</option>
            <option value = "9">Injured player looking for fresh start</option>
            <option value = "10">Statistically speaking: Player due to regress</option>
            <option value = "11">Free Agent has personal Spring Training</option>
            <option value = "12">Top prospect creates buzz</option>
            <option value = "6">Team adjusting to higher expectations (TEAM ONLY)</option>
            <option value = "7">Team believes in itself (TEAM ONLY)</option>
            <option value = "8">Team wants to bounce back (TEAM ONLY)</option>
    &nbsp;<input type="submit" name="submit_form" value="Submit" /></p>
    </fieldset>
  </form>  

<?php
if($_GET['submit_form'] == "Submit"){

    $team_array = array("Arizona Diamondbacks","Oakland Athletics", "New York Yankees", "Radford University", "Old Dominion", "University of Virginia", "William & Mary", "Virginia Military Insitute", "Los Angeles Angels", "Miami Marlins", "New York Mets", "Virginia State University", "Seattle Mariners", "Washington Nationals", "Rutgers", "Texas A&M University", "Los Angeles Dodgers", "Milwaukee Brewers", "University of Texas at Austin", "Purdue University", "Minnesota Twins", "Tampa Bay Rays", "Texas Rangers", "Toronto Blue Jays", "Baltimore Orioles", "Boston Red Sox", "Chicago White Sox", "Chicago Cubs", "Cincinnati Reds", "Cleveland Indians", "Colorado Rockies", "Detroit Tigers", "Houston Astros", "Kansas City Royals", "Pittsburgh Pirates", "St. Louis Cardinals", "University of Wisconsin, Madison", "Atlanta Braves", "Philadelphia Phillies", "Texas Southern University", "Texas Tech University", "San Diego Padres", "San Francisco Giants");

    $teamname_array = array("Diamondbacks","Athletics", "Yankees", "Radford University", "Old Dominion", "University of Virginia", "William & Mary", "Virginia Military Insitute", "Angels", "Marlins", "Mets", "Virginia State University", "Mariners", "Nationals", "Rutgers", "Texas A&M University", "Dodgers", "Brewers", "University of Texas at Austin", "Purdue University", "Twins", "Rays", "Rangers", "Blue Jays", "Orioles", "Red Sox", "White Sox", "Cubs", "Reds", "Indians", "Rockies", "Tigers", "Astros", "Royals", "Pirates", "Cardinals", "University of Wisconsin, Madison", "Braves", "Phillies", "Texas Southern University", "Texas Tech University", "Padres", "Giants");

    $name = trim($_GET['name']);
    $namearray = explode(' ', $name);
    $first_name = $namearray[0];
    $last_name = $namearray[1];

    if((empty($first_name) or empty($last_name)) and ($_GET['stories'] != "6" and $_GET['stories'] != "7" and $_GET['stories'] != "8")){
    	echo "<p>You need to enter both a first and last name. A default has been provided.<p>";
    }

    if($_GET['stories'] == "1"){
        if(empty($first_name) or empty($last_name)){
            $first_name = "Steve";
            $last_name = "Lombardozzi";
        }
        echo "<h3>Despite lackluster stats ".$last_name." makes things happen</h3>";
        echo "<p>While many will be paying attention to the big stars as Spring Training begins, perhaps the most important player on the ".$team_array[$_GET["teams"] - 1]." will go overlooked. He may not hit tape measure home runs or impress anyone with his arm, but his hustle cannot be understated. </p>

<p>".$first_name." ".$last_name." wasn't born with the natural talents that some of his teammates were, but that hasn't held him back from being one of the key contributors to the ".$teamname_array[$_GET["teams"] - 1].". ".$last_name." has been told his entire life that he would never be a professional baseball player and he's used that as fuel to prove those critics wrong. </p>

<p>&quot;All my life, all I heard was that I couldn't do it,&quot; said ".$last_name.".&quot;Well here I am.&quot;</p>

<p>".$last_name."'s scrappy style of play and fun-loving attitude has endeared him to teammates and fans alike. Fans go crazy whenever ".$last_name." comes to bat and it's no surprise, whenever ".$last_name." has a bat in his hand good things happen. </p>

<p>Whenever a clutch hit or play is needed, ".$last_name." is there to deliver it. He willingly sacrifices himself for the good of the team and puts 110 percent effort into everything he does on the field. That selflessness is not found in many professional baseball players anymore and is why he is the glue that holds the team together.</p>

<p>Grit, hustle, sacrifice, these things won't show up in the stats column, but are what a team needs to win. As a proven winner, ".$last_name." just knows how to win. </p>

<p>When ".$last_name." is given the opportunity he makes things happen and the ".$teamname_array[$_GET["teams"] - 1]." would be wise to give him more opportunities in the future. ".$last_name." doesn't complain about his lack of playing time though, he just gives it his all every time he has the chance. </p>

<p>&quot;If I have one at-bat or 1000 it doesn't matter, I'm going to do whatever it takes to get the team a win,&quot; ".$last_name." said. &quot;I'm happy when the team is happy.&quot;</p>

<p>So while all the attention and praise is heaped on his more well-known teammates, ".$last_name." will take comfort knowing that he has contributed in some small way to the team's success. </p>" ;

    }

    if($_GET['stories'] == "2"){
        if(empty($first_name) or empty($last_name)){
            $first_name = "Justin";
            $last_name = "Morneau";
        }
        echo "<h3>".$last_name." is looking for one last shot at a ring</h3>";

        echo "<p>Among the rising stars and young prospects looking for their big break at ".$team_array[$_GET["teams"] - 1]."' Spring Training there will be one crafty veteran looking for one last shot at the World Series ring that has eluded him. </p>

<p>".$first_name." ".$last_name." may not put up the stats that made him an All-Star anymore, but he can still be a valued contributor, both on the field and in the clubhouse. ".$last_name." will bring a veteran presence to the young team and can help teach the young guys a thing or two about how to play the game the right way. </p>

<p>Few players have a better knowledge of the game than ".$last_name." and it's that knowledge that has helped him transition gracefully into the twilight of his career. At an age when many players, even some of the best, falter, ".$last_name." has thrived, using his wits and a little elbow grease to get the job done. </p>

<p>&quot;The individual accolades are nice, but all I've wanted my entire career was a championship,&quot; said ".$last_name.". &quot;This might be last chance to get one and I'll do whatever it takes to make sure the ".$teamname_array[$_GET["teams"] - 1]." are the ones celebrating in October.&quot;</p>

<p>Signed to a short-term deal this offseason, ".$last_name." isn't worried about the money &mdash; he has plenty already &mdash; he just wants to win a title before he is forced to hang up his cleats for good. He knows he doesn't have much time left in the Majors and he's determined to make the best of his last years playing the game he loves.</p>

<p>Even if ".$last_name."'s production isn't what it used to be, what he brings to the ".$teamname_array[$_GET["teams"] - 1]." can't be measured on a stat sheet. The young players on the ".$teamname_array[$_GET["teams"] - 1]." will benefit greatly from his calming influence during the long, grueling 162-game regular season. Just being around a guy like ".$last_name." will raise his teammate's baseball IQ.</p>

<p>&quot;I've been around the ballpark a few times,&quot; said ".$last_name.". &quot;I definitely have a thing or two I can teach these kids.&quot;</p>

<p>".$last_name." will essentially be an extra coach out there, who can also play some ball. For this reason the move makes sense for the".$teamname_array[$_GET["teams"] - 1].". While ".$last_name." wasn't the flashiest name out there this offseason, he will bring a toughness and mentality to the team that many players couldn't. </p>";
    }

    if($_GET['stories'] == "3"){
        if(empty($first_name) or empty($last_name)){
            $first_name = "Max";
            $last_name = "Scherzer";
        }
        echo "<h3>".$last_name." just trying to fit in with ".$teamname_array[$_GET["teams"] - 1]."</h3>";
        echo "<p>The ".$team_array[$_GET["teams"] - 1]." made some noise this offseason when they signed ".$first_name." ".$last_name." to a huge free agent deal, one of the richest in the club's history. With the signing, the ".$teamname_array[$_GET["teams"] - 1]." signaled to the baseball world that they weren't comfortable with the status quo. </p>

<p>For his part, ".$last_name." is excited to join the ".$teamname_array[$_GET["teams"] - 1]." and is ready to get acclimated with his new teammates at Spring Training. </p>

<p>&quot;I'm honored to be a member of a great organization like the ".$team_array[$_GET["teams"] - 1].",&quot; said ".$last_name.". &quot;They have some of the best fans in baseball and I can't wait to get out there and play for them.&quot;</p>

<p>When the ".$teamname_array[$_GET["teams"] - 1]." announced the deal, many in the baseball world were shocked. While some have balked at the high price tag that came attached to ".$last_name.", others say that this is the price the ".$teamname_array[$_GET["teams"] - 1]." have to pay if they want to be competitive in today's Major League Baseball. </p>

<p>".$last_name." is a bona fide star, there's no denying that. If he continues to play that way, the ".$teamname_array[$_GET["teams"] - 1]." will be getting a bargain. 

<p>For those worried about how a free agent signing will affect the team's chemistry, they don't need to be concerned about ".$last_name.". ".$last_name." has been described as a model citizen by his former teammates and coaches and doesn't have the oversized personality that some All-Stars have, he will fit right in to the ".$teamname_array[$_GET["teams"] - 1]."' family atmosphere. </p>

<p>&quot;I'm not here to ruffle feathers or make demands, I'm here to play baseball,&quot; said ".$last_name.". &quot;My teammates are my brothers and I'll go out and fight for them every single night.&quot; </p>

<p>".$last_name." is expected to contibute immediately to the ".$teamname_array[$_GET["teams"] - 1]." and could be the difference maker the team was lacking during last season's campaign. While some free agents have struggled to perform after signing a big deal, there should be no concern that ".$last_name." will have the same problems, he's a proven winner and competitor who will take on the challenge with ease. </p>";
        
    }

    if($_GET['stories'] == "4"){
        if(empty($first_name) or empty($last_name)){
            $first_name = "Doug";
            $last_name = "Fister";
        }
        echo "<h3>".$teamname_array[$_GET["teams"] - 1]." confident ".$last_name." will be worth the cost</h3>";
        echo "<p>The ".$team_array[$_GET["teams"] - 1]." made a splash when they traded for ".$first_name." ".$last_name." this offseason. ".$last_name." will be expected to contribute immediately to the ".$teamname_array[$_GET["teams"] - 1]." as they look to compete in the upcoming season. </p>

<p>".$last_name." will meet his new teammates when Spring Training begins and will quickly have to adjust to an entirely new team and clubhouse. To his credit, ".$last_name." has said that he will have no trouble becoming familiar with his new surroundings. </p>

<p>&quot;Baseball is a business and you have to be prepared to be thrown into an entirely new environment at a moment's notice,&quot; said ".$last_name.". &quot;I'm just excited to be able to play for such a wonderful organization like the ".$team_array[$_GET["teams"] - 1]." and in front of their awesome fans.&quot;</p>

<p>When the trade was first reported, many baseball observers were surprised. Most didn't know the ".$teamname_array[$_GET["teams"] - 1]." were even in talks to acquire ".$last_name.". ".$last_name." himself said he was surprised by the news.</p>

<p>&quot;I was just driving home from dinner when I got a call saying that I was being traded to the ".$teamname_array[$_GET["teams"] - 1]." and then minutes later it was all over the news,&quot; ".$last_name." said.</p>

<p>Reaction to the trade has been mixed so far. While most people inside baseball recognize what ".$last_name." will bring to the ".$teamname_array[$_GET["teams"] - 1].", they remain unconvinced that the ".$teamname_array[$_GET["teams"] - 1]." didn't give up too much in return. </p>

<p>However, when you have the opportunity to acquire a player of ".$last_name."'s caliber, you don't pass up that chance. This is a player who can contribute to the ".$teamname_array[$_GET["teams"] - 1]." for years to come. He is a proven winner and makes things happen every time he steps on the diamond. </p>

<p>".$last_name." isn't concerned with who won the trade, he's just concerned with winning games. </p>

<p>&quot;I don't care about the past,&quot; said ".$last_name.". &quot;I'm on the ".$teamname_array[$_GET["teams"] - 1]." now and that means my job is making sure the ".$teamname_array[$_GET["teams"] - 1]." win some baseball games.&quot;</p>";
        
    }

    if($_GET['stories'] == "5"){
        if(empty($first_name) or empty($last_name)){
            $first_name = "Bryce";
            $last_name = "Harper";
        }
        echo "<h3>".$last_name." is ready to raise his game to the next level</h3>";
        echo "<p>".$first_name." ".$last_name." is already a bona fide star for the ".$team_array[$_GET["teams"] - 1].", he's been an All-Star and one of the team's best players in recent years, but that doesn't mean he's done trying to improve. </p>

<p>".$last_name." has been working out as hard as he can this offseason to be the best he can be this season. </p>

<p>&quot;I'm in the best shape of my life,&quot; said ".$last_name.". &quot;I've been working hard every day, just trying to get bigger, faster, strong, just better all around.&quot;</p>

<p>While many players take the offseason to relax from the grueling regular season, ".$last_name." refuses to take a break. The second the ".$teamname_array[$_GET["teams"] - 1]."' season ended he was in the gym and working hard to improve his game; a work ethic rarely seen in a player of his caliber. </p>

<p>&quot;I don't know the meaning of quit,&quot; said ".$last_name.". &quot;Everything I do, I do at maximum effort. My best is never good enough, I can always do better and I'm always working towards that.&quot;</p>

<p>But ".$last_name." hasn't just spent all of his time in the gym and on the field, he's also been in the film room looking for that extra advantage.</p>

<p>&quot;I've watched all of my swings from last year, just breaking them down, picking out what went wrong so I can avoid the same mistakes this year,&quot; said ".$last_name.". </p>

<p>The ".$teamname_array[$_GET["teams"] - 1]." and their fans will get their first look at how all that hard work has paid off for ".$last_name." at Spring Training. </p>

<p>Baseball is a game of inches and any little advantage can make the difference between a successful season and a failure. To see a star player like ".$last_name." take that difference so seriously is refreshing and shows why he's one of the best players in the game already. That work ethic is what children today should be trying to imitate. </p>

<p>While some players might be in commercials or releasing their own brand of baseball equipment, ".$last_name." is out there every day trying to be a better ballplayer. Fans of the ".$teamname_array[$_GET["teams"] - 1]." are lucky to have such a humble star be a part of their team for years to come. </p>";
    }

    if($_GET['stories'] == "6"){
        echo "<h3>".$teamname_array[$_GET["teams"] - 1]." will have to get used to higher expectations</h3>";
        echo "<p>The ".$team_array[$_GET["teams"] - 1]." had a good year last season and with that success has come raised expectations heading into this year. Expectations which the ".$teamname_array[$_GET["teams"] - 1]." players and coaches will have to deal with if they want to replicate or improve upon their success of last season.</p>

<p>The ".$teamname_array[$_GET["teams"] - 1]." themselves are eager to prove that last year was no fluke and that they can play at such a high level for the years to come. With the right mix of stars and role players, they seem to be in good position to do so. </p>

<p>Many prognosticators have put out their preseason projections and the results are mixed for the ".$teamname_array[$_GET["teams"] - 1].". While projections are usually conservative, the ".$teamname_array[$_GET["teams"] - 1]." are hoping they can beat their computer projected win total. They'll likely have to do so if they want to make the playoffs, even with the second Wild Card spot. </p>

<p>As we all know, baseball isn't played in spreadsheets and while the projections are a fun what-if scenario for a rainy day, that's all they are. If the ".$teamname_array[$_GET["teams"] - 1]." want to live up to the expectations that have been set for them, they will need to go out and play their best night in and night out. </p>

<p>Going into Spring Training everyone on the ".$teamname_array[$_GET["teams"] - 1]." have been saying the right things, from the front office to the coaches to the players, but those are just words. Soon, the ".$teamname_array[$_GET["teams"] - 1]." will have to put their money where their mouth is and produce on the field. </p>

<p>Many a team has been crushed under the pressure of raised expectations and the ".$teamname_array[$_GET["teams"] - 1]." could be the next to fall victim. However, if all goes according to plan, fans will be in for a real treat when they watch the hometown team play.</p>";
        
    }

    if($_GET['stories'] == "7"){
        echo "<h3>".$teamname_array[$_GET["teams"] - 1]." ignoring critics who say they can't compete</h3>";
        echo "<p>When preseason prognostications were being given by every publication under the sun this offseason, one team that was left consistently out of the playoff picture was the ".$team_array[$_GET["teams"] - 1].". The ".$teamname_array[$_GET["teams"] - 1]." aren't going to let the critics get to them though, they know they can compete with the other teams in their division if given the chance and are confident they will be able to do so this year. </p>

<p>However, most projections have pegged the ".$teamname_array[$_GET["teams"] - 1]." not only as a team on the outside of the playoff hunt, but also as a sure-to-be cellar dweller this season. But as we all know, the game of baseball isn't played on a spreadsheet, it's played on the field and the ".$teamname_array[$_GET["teams"] - 1]." know that when they get out on the field they are just as good as any other team.</p>

<p>The ".$teamname_array[$_GET["teams"] - 1]." will be united under one banner as they attempt to prove the world wrong and it all begins at Spring Training. Already players are flocking to the team's spring complex and practice grounds to start putting in the work needed to make their confidence a reality. </p>

<p>While they don't have the stars like some of the popular postseason picks, they have something that those teams don't: heart and the will to win. While stars will take a day off, this ".$teamname_array[$_GET["teams"] - 1]." team won't, they'll grind out every game regardless of the score or their record at the time. With that kind of grit and determination it's hard not to believe that anything truly is possible for the ".$teamname_array[$_GET["teams"] - 1].".</p>

<p>While the favorites are walking around with a target on their backs, the ".$teamname_array[$_GET["teams"] - 1]." are comfortable with flying under the radar. They know they will get the attention they deserve when they start proving themselves on the field. The ".$teamname_array[$_GET["teams"] - 1]." are hoping they can turn some heads this season and show everyone why you should never count them out. </p>

<p>In any case, it's an exciting time to be a ".$teamname_array[$_GET["teams"] - 1]." fan. The team camaraderie is infectious and it's hard not to feel like a part of their us against the world mentality.</p>";
    }

    if($_GET['stories'] == "8"){
        echo "<h3>".$teamname_array[$_GET["teams"] - 1]." looking to bounce back from last year's disappointment</h3>";
        echo "<p>Last season the ".$team_array[$_GET["teams"] - 1]." were expected to be one of the better teams in all of baseball. However, the team was unable to deliver on that promise and after an offseason dwelling on their failures they're ready to take another crack at it this year. </p>

<p>At the end of the season, the ".$teamname_array[$_GET["teams"] - 1]." were counted among the biggest disappointments in Major League Baseball. The team didn't need the media or fans to tell them that though, they knew they had let both the fans and themselves down with their performance last year and are determined to rectify that this year. </p>

<p>Spring Training is right around the corner and with it comes a new season and a new opportunity to succeed. While many, both inside the game and out, have lowered their expectations for the ".$teamname_array[$_GET["teams"] - 1]." after last season's disappointment, the team itself has not. They still think they can be one of the best teams in the game and they intend to prove it. </p>

<p>The team fell into the trap of reading their own press clippings too much and getting an inflated ego that prevented them from putting in the effort and determination required to be a winning baseball team. </p>

<p>But now the ".$teamname_array[$_GET["teams"] - 1]." have learned their lesson and are much humbler entering this season. Ask any player, coach or front office personnel what their expectations are for the upcoming season and the answer is the same, we aren't going to make the same mistakes we did last season.</p>

<p>While many called for the front office to blow up the team and start over, the ".$teamname_array[$_GET["teams"] - 1]." weren't convinced that they needed to take such drastic action. They know the talent that built up the expectations in the first place is still there and they think it's just a matter of more experience and effort that will bring the team success. </p>

<p>For that reason, the ".$teamname_array[$_GET["teams"] - 1]." stayed quiet this offseason, just making a few minor moves here and there. While the spotlight shifted to other teams as they brought in marquee free agents, the ".$teamname_array[$_GET["teams"] - 1]." became more and more anxious to prove to the baseball world why you don't count them out. The more people sleep on the ".$teamname_array[$_GET["teams"] - 1].", the more motivated they are to prove them wrong. ".$teamname_array[$_GET["teams"] - 1]." fans everywhere hope they do.</p>";
        
    }

    if($_GET['stories'] == "9"){
        if(empty($first_name) or empty($last_name)){
            $first_name = "Ryan";
            $last_name = "Zimmerman";
        }
        echo "<h3>".$last_name." to turn page on injury plagued year</h3>";
        echo "<p>This time last year ".$first_name." ".$last_name." was getting ready for what he thought would be another full season playing the game he loved for the ".$team_array[$_GET["teams"] - 1].". The optimism of that spring quickly turned to dread though, as he suffered through a shortened campaign due to injuries.</p>

<p>After missing a large chunk of last season, ".$last_name." is determined not to let that happen again. He has been spending all offseason working hard to get healthy and ready for a fresh start this season.</p>

<p>&quot;Last season was a huge disappointment,&quot; said ".$last_name.". &quot;I hated having to sit out and watch my teammates play on TV, instead of being out there on the field with them.&quot;</p>

<p>The injury has served as motivation for ".$last_name.". While many players were taking the offseason to relax and get away from the game, ".$last_name." was doing the exact opposite as he tried to get back into playing shape. </p>

<p>&quot;I'm not going to let an injury hold me back from my goals,&quot; said ".$last_name.". &quot;I've been working as hard as I can to get back to the player I know I am so I can help this team make it to the playoffs.&quot;</p>

<p>If anything, ".$last_name." is more prepared coming into Spring Training this year than he has been at any time in his career. Some have said that he may be in the best shape of his life entering camp.</p>

<p>The ".$teamname_array[$_GET["teams"] - 1]." and their fans will get their first look at how all that hard work has paid off for ".$last_name." at Spring Training. After the troubles he went through last season, it will be a sight for sore eyes.</p>

<p>Baseball is a cruel mistress and sometimes even the best get cut down by the game. Last season was a disappointment for both ".$last_name." and his fans, but he's worked hard to make sure history doesn't repeat itself this time.</p>

<p>The toughness ".$last_name." has shown throughout his injury and rehab has been inspiring and goes to show that there are still some role models in this game for kids to look up to. Hopefully ".$last_name." has his injury problems under control for years to come.</p>";
    }

   if($_GET['stories'] == "10"){
        if(empty($first_name) or empty($last_name)){
            $first_name = "Tanner";
            $last_name = "Roark";
        }
        echo "<h3>Statistically Speaking: ".$last_name." is due to regress</h3>";
        echo "<p>Last year ".$first_name." ".$last_name." of the ".$team_array[$_GET["teams"] - 1]." was one of the biggest surprises of the season. After barely winning a starting role, ".$last_name." seized the opportunity and broke out in a big way.

<p>This time last year, few if any would've guessed ".$last_name." would be a star, both ZiPS and Steamer pegged him to be worth just a notch above replacement level. However, ".$last_name." blew his projections out of the water and finished among the top players in the league in WAR according to FanGraphs. Last season was a huge success for ".$last_name." and nobody can take that away from him, but there are still some questions about his future. While ".$last_name." had excellent standard stats, his peripheral numbers showed some chinks in the armor.</p>

<p>To start, ".$last_name." had a very abnormal batting average on balls in play. As we know, players have little control over their BABIPs and that number is likely due for some heavy regression back to the mean this coming season. Of course ".$last_name."'s success wasn't entirely fueled by his BABIP, but that isn't the only concerning number. His strikeout rate and walk rate were both about league average, which is still good, but isn't best in the league good.</p>

<p>Taking all of those numbers into consideration, it's clear that ".$last_name." benefited from a lot of good fortune last season. While he could still be a contibutor for the ".$teamname_array[$_GET["teams"] - 1].", that seems like a best case scenario and he isn't going to be close to being the superstar he appeared to be last year.</p>";
    }

    if($_GET['stories'] == "11"){
        if(empty($first_name) or empty($last_name)){
            $first_name = "Ian";
            $last_name = "Desmond";
        }
        echo "<h3>Free Agent ".$last_name." having personal Spring Training</h3>";
        echo "<p>When ".$first_name." ".$last_name." became a free agent at the end of last season, it's safe to say he didn't anticipate still being a free agent when Spring Training rolled around. </p>

<p>&quot;Being a free agent this late in the year was not part of the plan,&quot; ".$last_name." said. &quot;However, I've learned over the years that in baseball, things often don't go according to plan.&quot;</p>

<p>Yet here he is, after an offseason of wheeling and dealing still searching for the city he'll call his baseball home for at least the next year. Unlike his peers who are making their way to team complexes in Arizona or Florida, ".$last_name." will be making his way down to the local high school field, where he will be having his own personal Spring Training. </p>

<p>&quot;I'm a baseball player and when the calendar turns to spring I start getting ready to play baseball again, whether I'm on a team or not,&quot; said ".$last_name.". </p>

<p>While he certainly doesn't have all of the amenities one will find in Arizona or Florida, the most important thing remains, baseball. ".$last_name." has put together his own training routine to keep his skills sharp, and he's out on the field every day at 8 AM like clockwork. </p>

<p>&quot;I just want to show teams that they don't have to worry about signing me so late in the process, I'll still be ready to play from day one,&quot; said ".$last_name.". </p>

<p>And that's the kind of solid work ethic ".$last_name." has displayed throughout his Major League career. While other players might take advantage of their extended offseason vacation, he's working harder than any player in the game. For him, each day brings a steady diet of drills, workouts and a hope that today's the day he learns who his new team will be. </p>";
    }

     if($_GET['stories'] == "12"){
        if(empty($first_name) or empty($last_name)){
            $first_name = "Lucas";
            $last_name = "Giolito";
        }
        echo "<h3>".$last_name." turning heads at first Spring Training</h3>";
        echo "<p>When the ".$team_array[$_GET["teams"] - 1]." convened for the first of their annual Spring Training workouts there were a number of familiar faces and the typical stars and fan favorites were getting plenty of attention. However, there was one new face who was drawing his fair share of attention, top prospect ".$first_name." ".$last_name.". </p>

<p>While ".$last_name." isn't expected to break camp with the Major League club, he's getting his feet wet in the low stakes fields of Spring Training, getting to know what will be expected of him soon. </p>

<p>&quot;I'm so excited to be here, part of a real Major League Spring Training, getting to feel like a real member of the ".$teamname_array[$_GET["teams"] - 1].",&quot; said ".$last_name.". &quot;This is what I've been dreaming about since I was a kid, being a real Major Leaguer.&quot;</p>

<p>That ".$last_name." is expected to return to the minors for more seasoning hasn't tempered the expectations of fans, coaches or ".$teamname_array[$_GET["teams"] - 1]." front office managers. </p>

<p>&quot;I'll be able to say I was there when ".$last_name." first got his start, so that's pretty cool,&quot; said one fan walking away with a ".$last_name." signed ball. </p>

<p>The future is certainly bright for ".$last_name.", but right now he's just trying to soak it all in and make sure he makes a good first impression on his new teammates.</p>

<p>&quot;My focus right now is playing baseball and being one of the guys,&quot; said ".$last_name.". &quot;I'm nothing special, these guys are the real Major Leaguers, I need to learn from them.&quot; </p>

<p>So far ".$last_name." has shown a great attitude to go with his great talent and it isn't hard to imagine a time soon when he will be the star all the prospects are looking up to. For now though, fans and the team will have to be content with seeing a young player taking the next step in his journey to the majors. </p>";
    }
}
?>
</font>
</body>
</html>
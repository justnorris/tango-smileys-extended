<?php
/*
#	This page contains the core function of Tango Smileys Extended.
#	It controls the actual replacement of smileys.
#	Please do not edit this file.
*/

// Function to swap smiley shorthand with the actual smiley images
function tse_switcher( $content ) {
	$output  = '';
	$smileys = get_tse_smileys();
	$tse = get_option( 'tango_smileys_extended' );
	$smileypx = $tse['smileysize'];
	$folder = ( $smileypx >= 18 ) ? 'tango24' : 'tango';
	for ( $i = 0; $i < sizeof( $smileys ); $i++ ) {
		$matches[] = "#{$smileys[$i][0]}#i";
		$smiley = plugins_url( "/{$folder}/{$smileys[$i][1]}", __FILE__ );
		$imgs[] = "<img src='{$smiley}' alt='{$smileys[$i][2]}' title='{$smileys[$i][2]}' class='tse-smiley' height='{$smileypx}' width='{$smileypx}' />";
	}
	$sections = preg_split( "~(<.*>)|(\&[a-zA-Z0-9#]*;)~U", $content, -1, PREG_SPLIT_DELIM_CAPTURE );
	for ( $j = 0; $j < count( $sections ); $j++ ) {
		$section = $sections[$j];
		if ( ( strlen( $section ) > 0 ) && ( '<' != $section{0} ) ) {
			$section = preg_replace( $matches, $imgs, $section );
		}
		$output .= $section;
	}
	return $output;
}

// Smiley shorthand as array($shorthand, $img, $alttext)
function get_tse_smileys() {
	$smileys = array(
		array(':afraid:','tremble.png','Afraid'),
		array(':airplane:','airplane.png','Airplane'),
		array(':alien:','alien.png','Alien'),
		array(':angel:','angel.png','Angel'),
		array(':angry:','angry.png','Angry'),
		array(':angryrazz:','razz-mad.png','Angry Razz'),
		array(':anger:','angry.png','Anger'),
		array(':announce:','announce.png','Announce'),
		array(':arrest:','handcuffs.png','Arrest'),
		array(':arrogant:','arrogant.png','Arrogant'),
		array(':bashful:','bashful.png','Bashful'),
		array(':beatup:','beat-up.png','Beat Up'),
		array(':beauty:','beauty.png','Beauty'),
		array(':beer:','beer.png','Beer'),
		array(':bigfrown:','frown-big.png','Big Frown'),
		array(':bigsmile:','smile-big.png','Big Smile'),
		array(':blah:','neutral.png','Blah'),
		array(':blush:','blush.png','Blush'),
		array(':bomb:','bomb.png','Bomb'),
		array(':boo:','ghost.png','Boo!'),
		array(':bow:','worship.png','Bow'),
		array(':bowl:','bowl.png','Bowl'),
		array(':brb:','brb.png','BRB'),
		array(':brokenheart:','heart-broken.png','Broken Heart'),
		array(':bugeyes:','bug-eyes.png','Bug Eyes'),
		array(':bunny:','bunny.png','Bunny'),
		array(':bye:','bye.png','Bye'),
		array(':cake:','cake.png','Cake'),
		array(':callme:','call-me.png','Call Me'),
		array(':camera:','camera.png','Camera'),
		array(':can:','can.png','Can'),
		array(':car:','car.png','Car'),
		array(':cat:','cat.png','Cat'),
		array(':cat2:','cat2.png','Cat 2'),
		array(':cell:','mobile.png','Cell'),
		array(':chic:','chic.png','Chic'),
		array(':chick:','chick.png','Chick'),
		array(':chicken:','chicken.png','Chicken'),
		array(':chicken2:','chicken2.png','Chicken 2'),
		array(':chuckle:','giggle.png','Chuckle'),
		array(':cigarette:','cigarette.png','Cigarette'),
		array(':clap:','clap.png','Clap'),
		array(':clock:','clock.png','Clock'),
		array(':cloudy:','cloudy.png','Cloudy'),
		array(':clover:','clover.png','Clover'),
		array(':clown:','clown.png','Clown'),
		array(':coffee:','coffee.png','Coffee'),
		array(':coins:','coins.png','Coins'),
		array(':computer:','computer.png','Computer'),
		array(':confused:','confused.png','Confused'),
		array(':console:','console.png','Console'),
		array(':cool:','cool.png','Cool'),
		array(':cow:','cow.png','Cow'),
		array(':cow2:','cow2.png','Cow 2'),
		array(':cowboy:','cowboy.png','Cowboy'),
		array(':crap:','crap.png','Crap'),
		array(':crazy:','crazy.png','Crazy'),
		array(':cry:','crying.png','Cry'),
		array(':crying:','crying.png','Crying'),
		array(':curl:','curl-lip.png','Heh'),
		array(':curse:','curse.png','Curse'),
		array(':cute:','cute.png','Cute'),
		array(':cyclops:','cyclops.png','Cyclops'),
		array(':dance:','dance.png','Dance'),
		array(':dazed:','dazed.png','Dazed'),
		array(':deadrose:','rose-dead.png','Dead Rose'),
		array(':devil:','devil.png','Devil'),
		array(':disdain:','disdain.png','Disdain'),
		array(':doctor:','doctor.png','Doctor'),
		array(':dog:','dog.png','Dog'),
		array(':dog2:','dog2.png','Dog 2'),
		array(':doh:','doh.png','DOH!'),
		array(':drink:','drink.png','Drink'),
		array(':drool:','drool.png','Drool'),
		array(':duck:','duck.png','Duck'),
		array(':eat:','eat.png','Eat'),
		array(':eek:','bug-eyes.png','Eek!'),
		array(':email:','mail.png','Email'),
		array(':evil:','devil.png','Evil'),
		array(':evilgrin:','evil-grin.png','Evil Grin'),
		array(':eyeroll:','eyeroll.png','Rolls Eyes'),
		array(':female:','female.png','Female'),
		array(':ffighter:','fighter-f.png','Female Fighter'),
		array(':fighterf:','fighter-f.png','Female Fighter'),
		array(':fighterm:','fighter-m.png','Male Fighter'),
		array(':film:','film.png','Film'),
		array(':find:','search.png','Find'),
		array(':fingersxd:','fingers-xd.png','Fingers Crossed'),
		array(':flagus:','flag-us.png','US Flag'),
		array(':footmouth:','foot-in-mouth.png','Foot-In-Mouth'),
		array(':fright:','fright.png','Fright'),
		array(':frown:','frown.png','Frown'),
		array(':geek:','nerd.png','Geek'),
		array(':goodluck:','fingers-xd.png','Good Luck'),
		array(':ghost:','ghost.png','Ghost'),
		array(':giggle:','giggle.png','Giggle'),
		array(':goat:','goat.png','Goat'),
		array(':goaway:','go-away.png','Go Away'),
		array(':grin:','grin.png','Grin'),
		array(':hammer:','hammer.png','Hammer'),
		array(':handcuffs:','handcuffs.png','Handcuffs'),
		array(':handshake:','handshake.png','Handshake'),
		array(':heart:','heart.png','Heart'),
		array(':heartbroken:','heart-broken.png','Heart Broken'),
		array(':heh:','curl-lip.png','Heh'),
		array(':highfive:','highfive.png','High Five!'),
		array(':hippo:','hippo.png','Hippo'),
		array(':hmm:','thinking.png','Thinking'),
		array(':hugleft:','hug-left.png','Hug Left'),
		array(':hugright:','hug-right.png','Hug Right'),
		array(':huh:','dont-know.png','Huh?'),
		array(':hungry:','hungry.png','Hungry'),
		array(':hypnotized:','hypnotized.png','Hypnotized'),
		array(':idea:','lamp.png','Lamp'),
		array(':idk:','dont-know.png','IDK'),
		array(':inlove:','in-love.png','In Love'),
		array(':island:','island.png','Island'),
		array(':jump:','jump.png','Jump'),
		array(':kiss:','kiss.png','Kiss'),
		array(':kissblow:','kiss-blow.png','Blowing Kisses'),
		array(':kissed:','kissed.png','Kissed'),
		array(':kissing:','kissing.png','Kissing'),
		array(':knife:','knife.png','Knife'),
		array(':koala:','koala.png','Koala'),
		array(':lamp:','lamp.png','Lamp'),
		array(':lashes:','lashes.png','Lashes'),
		array(':laugh:','laugh.png','Laugh'),
		array(':lion:','lion.png','Lion'),
		array(':liquor:','liquor.png','Liquor'),
		array(':lol:','rotfl.png','LOL'),
		array(':loser:','loser.png','Loser'),
		array(':luke:','skywalker.png','Luke Skywalker'),
		array(':lying:','lying.png','Lying'),
		array(':mad:','angry.png','Mad'),
		array(':mail:','mail.png','Mail'),
		array(':male:','male.png','Male'),
		array(':mean:','mean.png','Mean'),
		array(':meet:','meeting.png','Meeting'),
		array(':meeting:','meeting.png','Meeting'),
		array(':mfighter:','fighter-m.png','Male Fighter'),
		array(':mobile:','mobile.png','Mobile'),
		array(':mohawk:','mohawk.png','Mohawk'),
		array(':moneymouth:','moneymouth.png','Money Mouth'),
		array(':monkey:','monkey.png','Monkey'),
		array(':monkey2:','monkey2.png','Monkey 2'),
		array(':moon:','moon.png','Moon'),
		array(':mouse:','mouse.png','Mouse'),
		array(':mrgreen:','alien.png','Alien'),
		array(':music:','music.png','Listening to Music'),
		array(':musicnote:','music-note.png','Music Note'),
		array(':nailbite:','nailbiting.png','Nailbiting'),
		array(':nailbiting:','nailbiting.png','Nailbiting'),
		array(':nerd:','nerd.png','Nerd'),
		array(':neutral:','neutral.png','Neutral'),
		array(':no:','thumbs-down.png','No'),
		array(':numb:','wilt.png','Numb'),
		array(':onthephone:','on-the-phone.png','On the Phone'),
		array(':oops:','shame.png','Oops!'),
		array(':ouch:','pain.png','Ouch'),
		array(':pain:','pain.png','Pain'),
		array(':panda:','panda.png','Panda'),
		array(':party:','party.png','Party'),
		array(':peace:','peace.png','Peace'),
		array(':phone:','phone.png','Phone'),
		array(':pig:','pig.png','Pig'),
		array(':pig2:','pig2.png','Pig 2'),
		array(':pill:','pill.png','Pill'),
		array(':pirate:','pirate.png','Pirate'),
		array(':pissedoff:','pissed-off.png','Pissed Off'),
		array(':pissed:','pissed-off.png','Pissed'),
		array(':pissed!:','really-pissed.png','Really Pissed'),
		array(':pizza:','pizza.png','Pizza'),
		array(':plain:','neutral.png','Plain'),
		array(':plate:','plate.png','Plate'),
		array(':poop:','poop.png','Poop'),
		array(':pray:','pray.png','Pray'),
		array(':present:','present.png','Present'),
		array(':pumpkin:','pumpkin.png','Pumpkin'),
		array(':question:','question.png','Question'),
		array(':quiet:','quiet.png','Quiet'),
		array(':rain:','rain.png','Rain'),
		array(':rainbow:','rainbow.png','Rainbow'),
		array(':razz:','razz.png','Razz'),
		array(':razzdrunk:','razz-drunk.png','Drunken Razz'),
		array(':razzmad:','razz-mad.png','Mad Razz'),
		array(':reallyangry:','really-angry.png','Really Angry'),
		array(':reallypissed:','really-pissed.png','Really Pissed'),
		array(':reindeer:','reindeer.png','Reindeer'),
		array(':roll:','eyeroll.png','Rolls Eyes'),
		array(':rose:','rose.png','Rose'),
		array(':rotfl:','rotfl.png','ROTFL'),
		array(':rotflol:','rotfl.png','ROTFLOL'),
		array(':sad:','frown.png','Sad'),
		array(':sarcastic:','sarcastic.png','Sarcastic'),
		array(':sarcasm:','sarcastic.png','Sarcasm'),
		array(':scream:','scream.png','Scream'),
		array(':search:','search.png','Search'),
		array(':secret:','secret.png','Secret'),
		array(':shakehands:','handshake.png','Shake Hands'),
		array(':shame:','shame.png','Shame'),
		array(':sheep:','sheep.png','Sheep'),
		array(':sheep2:','sheep2.png','Sheep 2'),
		array(':shh:','quiet.png','Shh!'),
		array(':shock:','shock.png','Shock'),
		array(':shout:','shout.png','Shout'),
		array(':shutmouth:','shut-mouth.png','Shut Mouth'),
		array(':shy:','bashful.png','Shy'),
		array(':sick:','sick.png','Sick'),
		array(':sidefrown:','sidefrown.png','Side Frown'),
		array(':silly:','silly.png','Silly'),
		array(':skeleton:','skeleton.png','Skeleton'),
		array(':skull:','skeleton.png','Skull'),
		array(':skywalker:','skywalker.png','Luke Skywalker'),
		array(':sleep:','sleepy.png','Sleepy'),
		array(':sleepy:','sleepy.png','Sleepy'),
		array(':smile:','smile.png','Smile'),
		array(':smilebig:','smile-big.png','Big Smile'),
		array(':smirk:','smirk.png','Smirk'),
		array(':smug:','arrogant.png','Smug'),
		array(':snail:','snail.png','Snail'),
		array(':snicker:','snicker.png','Snicker'),
		array(':snowman:','snowman.png','Snowman'),
		array(':soccer:','soccerball.png','Soccer'),
		array(':soccerball:','soccerball.png','Soccer Ball'),
		array(':soldier:','soldier.png','Soldier'),
		array(':star:','star.png','Star'),
		array(':starving:','starving.png','Starving'),
		array(':stop:','stop.png','Stop'),
		array(':storm:','thunder.png','Storm'),
		array(':struggle:','struggle.png','Struggle'),
		array(':sun:','sun.png','Sun'),
		array(':suspense:','nailbiting.png','Suspense'),
		array(':sweat:','sweat.png','Sweat'),
		array(':talktothehand:','talktohand.png','Talk to the Hand'),
		array(':teeth:','teeth.png','Teeth'),
		array(':television:','tv.png','Television'),
		array(':think:','thinking.png','Thinking'),
		array(':thinking:','thinking.png','Thinking'),
		array(':thumbsdown:','thumbs-down.png','Thumbs Down'),
		array(':thumbsup:','thumbs-up.png','Thumbs Up'),
		array(':thunder:','thunder.png','Thunder'),
		array(':tiger:','tiger.png','Tiger'),
		array(':timeout:','time-out.png','Time Out'),
		array(':tremble:','tremble.png','Tremble'),
		array(':turtle:','turtle.png','Turtle'),
		array(':tv:','tv.png','TV'),
		array(':twisted:','devil.png','Twisted'),
		array(':umbrella:','umbrella.png','Umbrella'),
		array(':usflag:','flag-us.png','US Flag'),
		array(':vamp:','vampire.png','Vampire'),
		array(':vampire:','vampire.png','Vampire'),
		array(':verysad:','frown-big.png','Very Sad'),
		array(':victory:','victory.png','Victory'),
		array(':vomit:','sick.png','Vomit'),
		array(':wait:','waiting.png','Waiting'),
		array(':waiting:','waiting.png','Waiting'),
		array(':watermelon:','watermelon.png','Watermelon'),
		array(':wave:','waving.png','Wave'),
		array(':waving:','waving.png','Waving'),
		array(':weep:','weep.png','weep'),
		array(':what:','question.png','What?'),
		array(':whatever:','disdain.png','Whatever'),
		array(':wilt:','wilt.png','Wilt'),
		array(':wink:','wink.png','Wink'),
		array(':worship:','worship.png','Worship'),
		array(':X-P:','razz-drunk.png','Drunken Razz'),
		array(':XP:','razz-drunk.png','Drunken Razz'),
		array(':yawn:','yawn.png','Yawn'),
		array(':yes:','thumbs-up.png','Yes'),
		array(':yinyang:','yin-yang.png','Yin Yang'),
		array(':zombiekiller:','zombie-killer.png','Zombie Killer'),
		array(':ZZZ:','sleepy.png','Sleepy'),
		array(':\?\?\?:','confused.png','Confused'),
		array(':\?','confused.png','Confused'),
		array(':@\)-:','rose.png','Rose'),
		array(':@!-:','rose-dead.png','Dead Rose'),
		array(':\*:','star.png','Star'),
		array(':@:','mail.png','Email'),
		array(':&lt;3:','heart.png','Heart'),
		array(':&lt;!3:','heart-broken.png','Broken Heart'),
		array(':-\(\(','frown-big.png','Big Frown'),
		array(':-\)\)','smile-big.png','Big Smile'),
		array(':\(\(','frown-big.png','Big Frown'),
		array(':\)\)','smile-big.png','Big Smile'),
		array(':-\*!','kissing.png','Kissing'),
		array(':\*!','kissing.png','Kissing'),
		array('\?:-\)','question.png','Question'),
		array('\?:\)','question.png','Question'),
		array('8-\)','cool.png','Cool'),
		array('8-O','bug-eyes.png','Eek!'),
		array('O:-\)','angel.png','Angel'),
		array(':-\$','moneymouth.png','Money Mouth'),
		array(':-\(','frown.png','Frown'),
		array(':-\)','smile.png','Smile'),
		array(':-\*','kiss.png','Kiss'),
		array(':-\/','thinking.png','Thinking'),
		array(':-\?','confused.png','Confused'),
		array(':-D','grin.png','Grin'),
		array(':-O','shock.png','Shock'),
		array(':-P','razz.png','Razz'),
		array(':-X','angry.png','Mad'),
		array(':-\|','neutral.png','Neutral'),
		array(';-\)','wink.png','Wink'),
		array('O-\)','cyclops.png','Cyclops'),
		array('O:\)','angel.png','Angel'),
		array(':\(','frown.png','Frown'),
		array(':\)','smile.png','Smile'),
		array(';\)','wink.png','Wink'),
		array(':D','grin.png','Grin'),
		array(':O','shock.png','Shock'),
		array(':P','razz.png','Razz'),
		array(':X','angry.png','Mad'),
		array(':\|','neutral.png','Neutral'),
		array('&gt;:-\(','angry.png','Angry'),
		array('&gt;:\(','angry.png','Angry'),
		array('&gt;:-D','evil-grin.png','Evil Grin'),
		array('&gt;:D','evil-grin.png','Evil Grin'),
		array('&lt;3-\)','in-love.png','In Love'),
		array('&lt;3\)','in-love.png','In Love'),
		array('&gt;:-\)','mean.png','Mean'),
		array('&gt;:\)','mean.png','Mean'),
		array('&gt;:-O','pissed-off.png','Pissed Off'),
		array('&gt;:O','pissed-off.png','Pissed Off'),
		array('&gt;:-P:','razz-mad.png','Mad Razz'),
		array('&gt;:P','razz-mad.png','Mad Razz'),
		array('&gt;:-&lt;','really-angry.png','Really Angry'),
		array('&gt;:&lt;','really-angry.png','Really Angry'),
		array('&gt;:-O!','really-pissed.png','Really Pissed'),
		array('&gt;:O!','really-pissed.png','Really Pissed'),
		array('[.{0}|\s+]:\/','thinking.png','Thinking'),
		array('^:\/$','thinking.png','Thinking'),
		array(':\/[.{0}|\s+]','thinking.png','Thinking')
	);
	return $smileys;
}

?>
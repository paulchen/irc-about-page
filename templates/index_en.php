<?php /* <div class="language"><a href="<?php echo $language_links['de']; ?>" title="Deutsch"><img alt="Deutsch" src="/images/de.png" /></a></div> */ ?>
<h1>irc.rueckgr.at</h1>
<div class="introduction">
	<p>
		This server runs an <a href="http://en.wikipedia.org/wiki/Internet_Relay_Chat">IRC</a> server together with some related stuff:
	</p>
	<ul>
		<li>InspIRCd (<a href="http://www.inspircd.org/">project page</a>)</li>
		<li>ChatServies (providing numerous services known from many IRC networks such as NickServ, ChanServ etc.; <a href="https://bitbucket.org/chatlounge/chatservices/overview">project page</a>)</li>
		<li><a href="https://irc.rueckgr.at/">KiwiIRC</a> (web chat; <a href="https://kiwiirc.com/">project page</a>)</li>
		<li>a <a href="status.php">status page</a></li>
	</ul>
	<h4>Connecting to the network</h4>
	<p>
		Maybe you want to connect to the IRC server using your favourite IRC client instead of KiwiIRC:
	</p>
	<ul>
		<li>Hostname: <span style="font-family: monospace; font-weight: bold;">irc.rueckgr.at</span></li>
		<li>Port: <strong>6667</strong> (non-SSL), <strong>7776</strong> (non-SSL), or <strong>6697</strong> (SSL)</li>
	</ul>
	<p>
		In case of a DoS attack, service on port 6667 may be blocked without further notice. If you fail to connect to port 6667, try port 7776 instead. Or, even better, use the SSL enabled service on port 6697.
	</p>
	<p>
		The username and the password entered in your client will automatically be forwarded to NickServ. The server is configured to use <i>cloaking</i> to hide your IP address and hostname from other users.
	</p>
	<h4>Connecting via Tor</h4>
	<p>
		The IRC network can be used via a <a href="https://www.torproject.org/">Tor</a> hidden service. Simply use the hostname <span style="font-family: monospace;">ni2gugu4mvx7l4fe.onion</span> in your Tor-enabled IRC client. The ports are the same as above.
	</p>
	<h4>Background</h4>
	<p>
		The IRC network hosted on this server was introduced on March 10, 2015 in reaction to complaints by some members
		<a href="https://www.fsinf.at/">Fachschaft Informatik</a> at <a href="https://www.tuwien.ac.at/">TU Wien</a>
		(the student council for Computer Science at <a href="https://www.tuwien.ac.at/en/">TU Wien</a>)
		regarding the web-based chat (called &quot;ChatBox&quot;) at <a href="http://www.informatik-forum.at/">Informatik-Forum.at</a>.
		Many people who previously communicated using this ChatBox now reside in the channel <span style="font-family: monospace;">#chatbox</span> on <span style="font-family: monospace;">irc.rueckgr.at</span>.
		<br /><br />
		Since September 22, 2015, there is no Chatbox at Informatik-Forum.at anymore. Informatik-Forum.at now provides a link named &quot;Webchat&quot; which features the IRC server at irc.rueckgr.at.
		<br /><br />
		<b>This paragraph shall commemorate the ChatBox which served 469 members of Informatik-Forum.at as a platform to exchange over a million messages over a period of more than five years. Thanks to everyone who made the Chatbox a place where people enjoyed to reside, where students readily supported others, where jokes where made, where people wrote about their worries, and where friendships were formed.</b>
	</p>

	<p>
		On this server, there are several pages which are not related to IRC as well; see <a href="https://rueckgr.at">rueckgr.at</a> for details.
	</p>

	<hr />

	<p>
	This page is written using <a href="http://validator.w3.org/check?uri=https%3A%2F%2Firc.rueckgr.at%2Fabout%2F">valid HTML5</a> code.
	</p>

	<p>
	<a href="https://paul.staroch.name">Paul Staroch</a>
	</p>
</div>

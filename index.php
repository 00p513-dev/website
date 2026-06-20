<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="title" content="amy's website">
	<title>amy's website</title>

	<style>
		body {
			font-family: 'Times New Roman', Times, serif;
			color: #000000;
			background-color: #E8AEE8;
		}

		a:link {
			color: #000066;
		}

		a:active {
			color: #660000;
		}

		a:visited {
			color: #333366;
		}

		.good-service {
			color: #004700;
		}

		.minor-delays,
		.special-service,
		.reduced-service {
			color: #8A4000;
		}

		.severe-delays,
		.part-closure,
		.planned-closure,
		.part-suspended,
		.service-suspended,
		.service-closed,
		.suspended {
			color: #700000;
		}

		@media (prefers-color-scheme: dark) {
			body {
				color: #ffffff;
				background-color: #512951;
			}

			a:link {
				color: #ccccff;
			}

			a:active {
				color: #ffcccc;
			}

			a:visited {
				color: #9999ff;
			}

		.good-service {
			color: #66ff66;
		}

		.minor-delays,
		.special-service,
		.reduced-service {
			color: #ffcc66;
		}

		.severe-delays,
		.part-closure,
		.planned-closure,
		.part-suspended,
		.service-suspended,
		.service-closed,
		.suspended {
			color: #ff6666;
		}
		}
	</style>
</head>

<body text="#ffffff" vlink="#9999ff" bgcolor="#663366" alink="#ffcccc" link="#ccccff">
	<font face="Times New Roman, Times, serif">
		<!--Header-->
		<h1 align="center">amy's website</h1>
		<h2 align="center">
			<a href="https://t.me/amyschat">Telegram Group</a> | <a href="https://frosty.mobile">Frosty</a> | <a
				href="https://github.com/00p513-dev">GitHub</a> | <a href="#">Guestbook</a>
		</h2>

		<!--Main body-->
		<hr size="2" width="100%" color="#333333">
		<h2>Welcome!</h2>

		<p>Hello there!! I'm Amy and this is my website.</p>
		<p>I wrote this with some php because I thought it would be kinda nice to have a webpage that works on older browsers. If you get this page to load on something interesting I would love to see a picture!<p>
		<p>If you want to contact me, the best way is to join my Telegram group.</p>

		<hr size="2" width="100%" color="#333333">

		<h2>Site News</h2>
		<h3>20th June 2026</h3>
		<ul>
			<li>Guestbook temporarily offline after moving to new server</li>
			<li>Site now hosted at <a href="https://amyk.ing">amyk.ing</a>, non-HSTS domain eta soon?</li>
			<li>Small fixes to tube widget</li>
			<li>Dark mode support</li>
		</ul>

		<hr size="2" width="100%" color="#333333">
		
		<!--Tube status -->
		<h2>Tube Status</h2>
		<?php
			// Fetch tube status data
			$tube_data = file_get_contents('https://api.tfl.gov.uk/Line/Mode/tube,overground,elizabeth-line,dlr,tram/Status');
			$tube_status = json_decode($tube_data, true);

			// Display tube status
			foreach ($tube_status as $line) {
				$name = $line['name'];
				$status = $line['lineStatuses'][0]['statusSeverityDescription'];
				$statusClass = strtolower(str_replace(' ', '-', $status));

				echo "<span class='$statusClass'>$name: $status</span><br>";
			}
		?>
		<p>For more information visit <a href="https://tfl.gov.uk/tube-dlr-overground/status/">Transport for London Status</a></p>


		<!--Train pictures-->
		<hr size="2" width="100%" color="#333333">

		<p>Enjoy some train pictures!</p>
		<table width="100%" cellspacing="2" cellpadding="2" border="1">
			<tbody>
				<tr>
					<td valign="top" width="50%">
						<img src="/img/700145.jpg" title="Thameslink 700145 &quot;Desiro City&quot;"
							alt="Thameslink 700145 &quot;Desiro City&quot;" width="100%">
					</td>
					<td valign="top" width="50%">
						<img src="/img/Z2N-RERC.jpg" title="Z 2N on RER C" alt="Z 2N on RER C" width="100%" />
					</td>
				</tr>
				<tr>
					<td valign="top" width="50%">
						<img src="/img/700111.jpg" title="Thameslink 700111 &quot;Desiro City&quot; in NHS livery"
							alt="Thameslink 700111 &quot;Desiro City&quot; in NHS livery" width="100%" />
					</td>
					<td valign="top" width="50%">
						<img src="/img/150247.jpg" title="GWR 150247 &quot;Sprinter&quot;"
							alt="GWR 150247 &quot;Sprinter&quot" width="100%">
					</td>
				</tr>
			</tbody>
		</table>

		<!--Footer-->
		<hr size="2" width="100%" color="#333333">

		<div align="center">
			<img src="/gif/anyie_anim.gif" title="Any Browser" alt="Any Browser" width="88" hspace="2"
				height="31">
			<a href="https://bsky.app/profile/memediatek.bsky.social"><img src="/gif/bluesky.gif" title="Bluesky" alt="Bluesky" width="88" border="0" hspace="2" height="31"></a>
			<img
				src="/gif/macos.gif" title="Made with MacOS" alt="Made with MacOS" width="88" border="0" hspace="2"
				height="31">
			<a href="https://sublimetext.com"><img src="/gif/sublime.gif" title="Made with Sublime Text Editor" alt="Made with Sublime Text Editor" width="88" border="0" hspace="2" height="31"></a>
			<a href="https://t.me/amyschat"><img src="/gif/telegram.gif" title="Telegram - a
new era of messaging" alt="Telegram - a new era of messaging" width="88" border="0" hspace="2" height="31"></a>
			<img src="/gif/tyg.gif" title="TRANS YOUR GENDER" alt="TRANS YOUR GENDER"
					width="88" border="0" hspace="2" height="31">
		</div>
	</font>
</body>

</html>

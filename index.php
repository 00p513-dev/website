<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>amy's website</title>

	<style>
		body {
			font-family: 'Times New Roman', Times, serif;
			color: #ffffff;
			background-color: #663366;
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
		.service-closed {
			color: #ff6666;
		}
	</style>
</head>

<body text="#ffffff" vlink="#9999ff" bgcolor="#663366" alink="#ffcccc" link="#ccccff">
	<font face="Times New Roman, Times, serif">
		<!--Header-->
		<h1 align="center">amy's website</h1>
		<h2 align="center">
			<a href="https://t.me/amyschat">Telegram Group</a> | <a href="https://amyrom.tech">amyROM</a> | <a
				href="https://github.com/00p513-dev">GitHub</a> | <a href="/gbook/gbook.php">Guestbook</a>
		</h2>

		<!--Main body-->
		<hr size="2" width="100%" color="#fff">

		<p>Hello there!! I'm Amy and this is my website.</p>
		<p>I am studying with the <a href="https://www.open.ac.uk/">Open University</a>, and work on various projects in
			my spare time including my custom ROM linked in the header.</p>
		<p>If you want to contact me, the best way is to join my Telegram group.</p>

		<!--Tube status -->
		<h2>Tube Status</h2>
		<?php
		// Fetch tube status data
		$tube_data = file_get_contents('https://api.tfl.gov.uk/Line/Mode/tube/Status');
		$tube_status = json_decode($tube_data, true);

		// Display tube status
		foreach ($tube_status as $line) {
			$name = $line['name'];
			$status = $line['lineStatuses'][0]['statusSeverityDescription'];
			$statusClass = strtolower(str_replace(' ', '-', $status));

			echo "<span class='$statusClass'>$name: $status</span><br>";
		}
		?>
		<!--Train pictures-->
		<hr size="2" width="100%" color="#fff">

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
		<hr size="2" width="100%">

		<div align="center"><img src="/gif/anyie_anim.gif" title="Any Browser" alt="Any Browser" width="88" hspace="2"
				height="31">
			<a href="https://hrtcafe.net"><img src="/gif/tyg.gif" title="TRANS YOUR GENDER" alt="TRANS YOUR GENDER"
					width="88" border="0" hspace="2" height="31"></a>
			<a href="https://t.me/amyschat"><img src="/gif/telegram.gif" title="Telegram - a
new era of messaging" alt="Telegram - a new era of messaging" width="88" border="0" hspace="2" height="31"></a><img
				src="/gif/macos.gif" title="Made with MacOS" alt="Made with MacOS" width="88" border="0" hspace="2"
				height="31">
		</div>
	</font>
</body>

</html>
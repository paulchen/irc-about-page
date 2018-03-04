<?php /* <div class="language"><a href="<?php echo $language_links['de']; ?>" title="Deutsch"><img alt="Deutsch" src="/images/de.png" /></a></div> */ ?>
<?php
require_once(dirname(__FILE__) . '/../lib/icinga-status.php');

$services = array(
	array('description' => 'ircd IPv4 Port 6667 (non-SSL)', 'host' => 'alpha', 'service' => 'ircd IPv4 non-ssl'),
	array('description' => 'ircd IPv4 Port 6697 (SSL)', 'host' => 'alpha', 'service' => 'ircd IPv4 ssl'),
	array('description' => 'ircd IPv4 Port 7776 (non-SSL)', 'host' => 'alpha', 'service' => 'ircd IPv4 non-ssl 7776'),

	array('description' => 'ircd IPv6 Port 6667 (non-SSL)', 'host' => 'irc6', 'service' => 'ircd IPv6 non-ssl'),
	array('description' => 'ircd IPv6 Port 6697 (SSL)', 'host' => 'irc6', 'service' => 'ircd IPv6 ssl'),
	array('description' => 'ircd IPv6 Port 7776 (non-SSL)', 'host' => 'irc6', 'service' => 'ircd IPv6 non-ssl 7776'),

	array('description' => 'Tor hidden service Port 6667 (non-SSL)', 'host' => 'alpha', 'service' => 'ircd IPv4 localhost non-ssl'),
	array('description' => 'Tor hidden service Port 6697 (SSL)', 'host' => 'alpha', 'service' => 'ircd IPv4 localhost ssl'),

	array('description' => 'Kiwi IRC', 'host' => 'alpha', 'service' => 'Kiwi IRC'),

	array('description' => 'Virtual host irc.rueckgr.at IPv4 non-SSL', 'host' => 'alpha', 'service' => 'vhost irc.rueckgr.at'),
	array('description' => 'Virtual host irc.rueckgr.at IPv4 SSL', 'host' => 'alpha', 'service' => 'vhost irc.rueckgr.at ssl'),

	array('description' => 'Virtual host irc.rückgr.at IPv4 non-SSL', 'host' => 'alpha', 'service' => 'vhost irc.rückgr.at'),
	array('description' => 'Virtual host irc.rückgr.at IPv4 SSL', 'host' => 'alpha', 'service' => 'vhost irc.rückgr.at ssl'),

	array('description' => 'Virtual host irc.rueckgr.at IPv6 non-SSL', 'host' => 'irc6', 'service' => 'vhost irc.rueckgr.at'),
	array('description' => 'Virtual host irc.rueckgr.at IPv6 SSL', 'host' => 'irc6', 'service' => 'vhost irc.rueckgr.at ssl'),

	array('description' => 'Virtual host irc.rückgr.at IPv6 non-SSL', 'host' => 'irc6', 'service' => 'vhost irc.rückgr.at'),
	array('description' => 'Virtual host irc.rückgr.at IPv6 SSL', 'host' => 'irc6', 'service' => 'vhost irc.rückgr.at ssl'),

	array('description' => 'IRC services', 'host' => 'alpha', 'service' => 'IRC services'),
);

function find_service_data($service) {
	global $icinga_service_data;

	$service_data = $icinga_service_data[$service['host']][$service['service']];

	$status_data = array(
		0 => array('class' => 'ok', 'name' => 'OK'),
		1 => array('class' => 'warning', 'name' => 'WARNING'),
		2 => array('class' => 'critical', 'name' => 'CRITICAL'),
		3 => array('class' => 'unknown', 'name' => 'UNKNOWN'),
	);

	return array(
		'description' => $service['description'],
		'status_class' => $status_data[$service_data['current_state']]['class'],
		'status_name' => $status_data[$service_data['current_state']]['name'],
	);
}

?>
<h1>irc.rueckgr.at :: Status</h1>
<div class="introduction">
	<p style="text-align: center;">
		<a href="./">About irc.rueckgr.at</a>
	</p>

	<div class="status_container">
		<table class="status">
			<thead>
				<tr><th>Service</th><th>Status</th></tr>
			</thead>
			<tbody>
				<?php
					foreach($services as $service):
						$service_data = find_service_data($service);
				?>
					<tr><td><?php echo $service_data['description'] ?></td><td class="<?php echo $service_data['status_class'] ?>"><?php echo $service_data['status_name'] ?></td></tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>

	<p style="text-align: center;">
		<img src="graphs/ircu_cached-day.png" alt="" /><br />
		<img src="graphs/ircu_cached-week.png" alt="" /><br />
		<img src="graphs/ircu_cached-month.png" alt="" /><br />
		<img src="graphs/ircu_cached-year.png" alt="" /><br />
	</p>

	<hr />

	<p>
	This page is written using <a href="http://validator.w3.org/check?uri=https%3A%2F%2Firc.rueckgr.at%2Fabout%2Fstatus.php">valid HTML5</a> code.
	</p>

	<p>
	<a href="https://paul.staroch.name">Paul Staroch</a>
	</p>
</div>

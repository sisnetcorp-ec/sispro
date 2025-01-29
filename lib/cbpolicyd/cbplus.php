<?php
# Real time mail counter
# Copyleft (L) 2019, Anahuac - anahuac@anahuac.eu

# Based on Policy groups main screen
# Copyright (C) 2009-2015, AllWorldIT
# Copyright (C) 2008, LinuxRulz
# 
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.
# 
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
# 
# You should have received a copy of the GNU General Public License along
# with this program; if not, write to the Free Software Foundation, Inc.,
# 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.

$v = 1;

include_once("includes/header.php");
include_once("includes/footer.php");
include_once("includes/db.php");

$db = connect_db();

printHeader(array(
));


# deleting sender from quota and session tracker
if(!empty($_POST['sender'])){

	$sql = "delete FROM session_tracking WHERE sender = '" . $_POST['sender'] . "' ; delete FROM quotas_tracking WHERE TrackKey = 'Sender:" . $_POST['sender'] . "'";
	$db->query($sql);

}


header("Refresh: 60; url = kya.php");

	# Get local domains
	$sql = "SELECT member FROM policy_groups,policy_group_members WHERE PolicyGroupID = policy_groups.ID AND Name = 'internal_domains' ORDER BY member";
	$res = $db->query($sql);

	while ($row = $res->fetchObject()) {
		$d_m = explode('@', $row->member);
		$domains[] = $d_m[1];
	}

	# Get whitelisted
	$sql = "SELECT member FROM policy_groups,policy_group_members WHERE PolicyGroupID = policy_groups.ID AND Name = 'whitelist_ratelimit' AND policy_groups.Disabled = '0' AND policy_group_members.Disabled = '0'";
	$res = $db->query($sql);

	while ($row = $res->fetchObject()) {
		$whitelist[] = $row->member;
	}


?>
	<p class="pageheader">Real Time Mail Counter</p>


	<form id="main_form" action="kya.php" method="post">

		<p />

		<table class="" style="table-layout: auto; width: 100%" border=0 >
		<tr>
		<td style="vertical-align: top">

		<table class="results" >
			<tr class="resultstitle"><td colspan=3 class="textcenter">SENT MESSAGES</td></tr>
			<tr class="resultstitle">
				<td class="textcenter" style="width: 1%;">Status</td>
				<td class="textcenter" style="width: 70%;">Account</td>
				<td class="textcenter" nowrap>#mes</td>
			</tr>
			<tr><td colspan=3><br /></tr></td>
<?php

			# Getting limits
			$sql = "SELECT trackkey,counterlimit,counter FROM ${DB_TABLE_PREFIX}quotas_limits,quotas_tracking WHERE id = quotaslimitsid";
			$res = $db->query($sql);
			while ($row = $res->fetchObject()) {
				
				if($row->counter >= $row->counterlimit){
					$sender = explode(':', $row->trackkey);
					$blocked_array[$sender[1]] = $row->counterlimit;
				}
			}
			#$blocked_array["claudia@famacris.com.br"] = "60";
			#echo "<pre>"; print_r($blocked_array); echo "<br>";
			$res->closeCursor();


			# Getting tracking
			$sql = "select sender,count(sender) as howmany FROM ${DB_TABLE_PREFIX}session_tracking WHERE sender != '' GROUP BY sender HAVING howmany >= 10 ORDER BY howmany DESC, sender ASC";
			$res = $db->query($sql);

			$i = 0;
			while ($row = $res->fetchObject()) {

				$sender = explode('@', $row->sender);
				if (in_array($sender[1], $domains)) {

?>
				<tr class="resultsitem">
<?php
					if (in_array($row->sender, $whitelist)) {
?>
						<td bgcolor="#000000" class="textcenter">
							<font color="white">white</font>
						</td>
<?php
					} else {
						if(array_key_exists($row->sender,$blocked_array)){
							$counterlimit = $blocked_array[$row->sender];
?>
							<td bgcolor="red" class="textcenter">
								<input type="hidden" name="sender" value="<?php echo $row->sender ?>" />
								<a href="#" onClick="document.getElementById('main_form').submit();" style="color: white">
									<font color="white"><?php echo $counterlimit ?></font>
								</a>
							</td>
<?php
						} else {
?>
							<td>
<?php
						}
					}
?>
					</td>
					<td style="word-wrap: break-word;"><?php echo $row->sender ?></td>
					<td class="textcenter"><?php echo $row->howmany ?></td>
				</tr>
<?php
				}
				$i++;
			}
			$res->closeCursor();
?>
		</table>

		</td>
		<td style="vertical-align: top">

		<table class="results">
			<tr class="resultstitle"><td colspan=3 class="textcenter">RECEIVED MESSAGES</td></tr>
			<tr class="resultstitle">
				<td class="textcenter" style="width: 1%;">Status</td>
				<td class="textcenter" style="width: 40%;">Account</td>
				<td class="textcenter" nowrap>#mes</td>
			</tr>
			<tr><td colspan=3><br /></tr></td>
<?php
			$sql = "select sender,count(sender) as howmany FROM ${DB_TABLE_PREFIX}session_tracking WHERE sender != '' GROUP BY sender HAVING howmany >= 10 ORDER BY howmany DESC, sender ASC";
			$res = $db->query($sql);

			while ($row = $res->fetchObject()) {

				$sender = explode('@', $row->sender);
				if (!in_array($sender[1], $domains)) {

?>
				<tr class="resultsitem">
<?php
					if (in_array($row->sender, $whitelist)) {
						echo "<td bgcolor=\"#000000\" class=\"textcenter\"><font color=\"white\">white</font></td>";
					} else {
						echo "<td>";
					}
?>
					</td>
					<td style="word-wrap: break-word;"><?php echo $row->sender ?></td>
					<td class="textcenter"><?php echo $row->howmany ?></td>
				</tr>
<?php
				}
			}
			$res->closeCursor();
?>
		</table>


		</tr>
		</table>

	</form>
<?php



printFooter();

# vim: ts=4
?>

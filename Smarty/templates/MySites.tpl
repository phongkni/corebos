{*<!--
/*********************************************************************************
 ** The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ********************************************************************************/
-->*}
<script type="text/javascript" src="modules/Portal/Portal.js"></script>

{include file="Buttons_List.tpl"}

<table border=0 cellspacing=0 cellpadding=0 width=98% align=center>
	<tr>
		<td class="" valign="top" width="100%" align=center >
			<!-- MySites UI Starts -->
			<br>
			<table border="0" cellpadding="0" cellspacing="0" width="100%" align="center" class="mailClient">
				<tbody>
					<tr>
						<td colspan="4">
							<!-- BOOKMARK PAGE -->
							<div id="portalcont" style="padding:0px 10px 10px 10px; overflow: hidden; width: 100%;">
								{include file="MySitesContents.tpl"}
							</div>
						</td>
					</tr>
				</tbody>
			</table>
			<br><br>
			<div id="editportal_cont" style="z-index:100001;position:absolute;width:510px;"></div>
		</td>
	</tr>
</table>

<?php
/**
 * Open Source Social Network
 *
 * @package   Open Source Social Network
 * @author    Open Social Website Core Team <info@softlab24.com>
 * @copyright (C) SOFTLAB24 LIMITED
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
$el = array(
		'ossnsmilies' => 'Smilies',
		'ossn:smilies:admin:settings:compat:title' => 'Backward compatibility mode',
		'ossn:smilies:admin:settings:compat:note' => '<i class="fa fa-info-circle"></i><br><i>
		Leave this mode <b><u>disabled</u></b> when starting a new social network from scratch with Ossn 4.5 and higher.<br>
		A complete set of more than 1000 unicode emojis is available now, thus using old style smilies like :) has become obsolete.<br>
		With backward compatibility mode <b><u>enabled</u></b> the following list of old style smilies will be replaced as before:</i><br>
		:(&#x1f641;&nbsp;&nbsp;:)&#x1f642;&nbsp;&nbsp;=D&#x1f600;&nbsp;&nbsp;;)&#x1f609;&nbsp;&nbsp;:p&#x1f61b;&nbsp;&nbsp;8)&#x1f60e;&nbsp;&nbsp;o.O&#x1f62f;&nbsp;&nbsp;:O&#x1f632;&nbsp;&nbsp;:*&#x1f618;&nbsp;&nbsp;a:&#x1f607;&nbsp;&nbsp;:h:&#x2764;&nbsp;&nbsp;3:|&#x1f608;&nbsp;&nbsp;u:&#x1f620;&nbsp;&nbsp;:v&#x1f47b;&nbsp;&nbsp;g:&#x1f61f;&nbsp;&nbsp;c:&#x1f62a;<i><br>
		<br></i>',
		'ossn:smilies:admin:settings:compat:off' => 'Απενεργοποιημένο',
		'ossn:smilies:admin:settings:compat:on' => 'Ενεργοποιημένο',
		'ossn:smilies:admin:settings:save:error' => 'Δεν είναι δυνατή η αποθήκευση ρυθμίσεων! Ελέγξτε το αρχείο error_log.',
		'ossn:smilies:admin:settings:saved' => 'Η ρύθμιση αποθηκεύτηκε!',
);
ossn_register_languages('el', $el);

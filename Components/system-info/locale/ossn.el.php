<?php
/**
 * Open Source Social Network
 *
 * @package   Open Source Social Network
 * @author    Informatikon Core Team <info@softlab24.com>
 * @copyright (C) SOFTLAB24 LIMITED
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licen
 * @link      http://www.informatikon.com/
 */
$el = array(
	'com-system-info-section' => 'Πληροφορίες συστήματος',

	'com-system-info-admin-settings-label-protection-password' => 'Προστασία',
	'com-system-info-admin-settings-label-protection-password-description' => 
"Από προεπιλογή, όλη η έξοδος του στοιχείου (Πληροφορίες συστήματος) δεν είναι ορατή για τα κανονικά μέλη ή οποιονδήποτε αλλο εκτός των διαχειριστών.<br>
Έτσι, για να επιτρέψετε σε κάποιον άλλο (για παράδειγμα την ομάδα του Ossn Core) να έχει πρόσβαση στα δεδομένα σας, πρέπει να ορίσετε έναν κωδικό πρόσβασης εδώ.<br>
Για να κάνετε τα πράγματα ποιο εύκολα, απλώς χρησιμοποιήστε ακριβώς το ίδιο Email που χρησιμοποιείται στο <code style=display:inline-block>https://www.opensource-socialnetwork.org/</code><br><br>
Σε περίπτωση που δεν μπορείτε να θυμηθείτε το Email:<br>
<ul>
<li>Συνδεθείτε στο <code style=display:inline-block>https://www.opensource-socialnetwork.org/login</code></li>
<li>Προχωρήστε στη σελίδα του προφίλ σας και κάντε κλικ στο πράσινο <code style=display:inline-block>Update Info</code> κουμπί</li>
<li>Αντιγράψτε τη διεύθυνση ηλεκτρονικού ταχυδρομείου σας από το πεδίο που ονομάζεται <code style=display:inline-block>Email</code></li>
<li>Επικολλήστε το στο <code style=display:inline-block>Protection Email</code> παρακάτω πεδίο</li>
<li>κάντε κλικ στην επιλογή 'Αποθήκευση'</li>
</ul>
<br>
Αν προτιμάτε να λύσετε τα προβλήματά σας χωρίς βοήθεια, αφήστε το <code style=display:inline-block>Protection Email</code> κενό και κάντε κλικ στην επιλογή 'Αποθήκευση' <br>
",
	'com-system-info-admin-settings-label-protection-password-input' => 'Προστασία Email:',
	'com-system-info-admin-settings-protection-password-saved' => 'Οι ρυθμίσεις αποθηκεύτηκαν!',
	'com-system-info-admin-settings-protection-password-save-error' => 'Δεν είναι δυνατή η αποθήκευση των ρυθμίσεων! Ελέγξτε το αρχείο error_log.',
	
	'com-system-info-page-remember-password-setting-msg' => '<pre class=warning><b>REMEMBER: To set up a protection password from your Ossn admin panel
in case you want to make this output available for the Ossn core team</b></pre>',
);
ossn_register_languages('el', $el); 

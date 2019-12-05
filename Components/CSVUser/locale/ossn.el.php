<?php
/**
 * Open Source Social Network
 *
 * @packageOpen Source Social Network
 * @author    Open Social Website Core Team <info@informatikon.com>
 * @copyright 2014-2016 SOFTLAB24 LIMITED
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
$el = array(
    'csvuser' => 'CSV Εισαγωγή χρήστη',
    'CSVUser' => 'CSV Εισαγωγή χρήστη',
	'com:csvuser:send:activation:request' => 'Mail activation key to imported users',
	'com:csvuser:add:group:membership' => 'Κάντε τους εισαγόμενους χρήστες μέλος του ',
	'com:csvuser:group:selection:no:group' => 'Καμία ομάδα',
	'com:csvuser:file:name:label' => 'Επιλέξτε αρχείο CSV για μεταφόρτωση',
	'com:csvuser:button:import' => 'Εισαγωγή',
	'com:csvuser:instruction' => 'Αποστολή έγκυρου αρχείου CSV (<i>example.csv</i>) με τα στοιχεία χρηστών που εισάγονται στην κοινότητά σας.',
	// processing ...
	'com:csvuser:import:success' => 'Το αρχείο CSV εισήχθη με επιτυχία',
	// upload errors
	'com:csvuser:upload:max:file:size:exceeded' => 'Σφάλμα φόρτωσης 1: Το αρχείο CSV υπερβαίνει το όριο PHP <i>upload_max_filesize</i> ',
	'com:csvuser:upload:incomplete' => 'Σφάλμα φόρτωσης 3: ανεβάστε το αρχείο CSV ελλιπές - δοκιμάστε ξανά',
	'com:csvuser:upload:no:file:selected' => 'Σφάλμα μεταφόρτωσης 4: Λείπει όνομα αρχείου - επιλέξτε ένα έγκυρο αρχείο CSV και δοκιμάστε ξανά',
	'com:csvuser:upload:tmpfolder:missing' => 'Σφάλμα μεταφόρτωσης 6: Στον διακομιστή σας λείπει ένας κατάλογος για προσωρινά αρχεία',
	'com:csvuser:upload:write:failed' => 'Σφάλμα μεταφόρτωσης 7: Ο διακομιστής σας απέτυχε να αποθηκεύσει το αρχείο CSV',
	'com:csvuser:upload:stopped:by:extension' => 'Σφάλμα μεταφόρτωσης 8:  Κάποια επέκταση PHP έχει σταματήσει την μεταφόρτωση',
	'com:csvuser:upload:unknown:error' => 'Άγνωστο σφάλμα αποστολής %s - Παρακαλώ συμβουλευτείτε τον παροχέα σας',
	// csv file errors
	'com:csvuser:file:structure:invalid' => 'Μη έγκυρη δομή αρχείου CSV ή λείπουν καταχωρήσεις εντολοδόχου',
	'com:csvuser:duplicate:entries' => 'Διπλά ονόματα χρήστη ή / και μηνύματα ηλεκτρονικού ταχυδρομείου που βρέθηκαν στο αρχείο CSV',
	// ossn compatibility/database errors
	'com:csvuser:username:invalid' => "Το όνομα χρήστη '%s' είναι πολύ σύντομο ή μη έγκυρο στη γραμμή %s",
	'com:csvuser:username:exists' => "Το όνομα χρήστη '%s' στη γραμμή %s Είναι ήδη σε χρηση",
	'com:csvuser:email:invalid' => "Το Email '%s' δεν είναι έγκυρο στη γραμμή %s",
	'com:csvuser:email:exists' => "Το Email '%s' στη γραμμή %s Είναι ήδη σε χρηση",
	'com:csvuser:firstname:short' => "Το όνομα '%s' είναι πολύ σύντομο ή λείπει στη γραμμή %s",
	'com:csvuser:lastname:short' => "Το Επίθετο '%s' είναι πολύ σύντομο ή λείπει στη γραμμή %s",
	'com:csvuser:db:insert:failed' => "Σφάλμα βάσης δεδομένων: Αποτυχία εισαγωγής %s των χρηστών %s και %s των μελών της ομάδας ",
);
ossn_register_languages('el', $el); 

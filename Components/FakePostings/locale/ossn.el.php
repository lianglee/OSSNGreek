<?php
/**
 * Open Source Social Network
 *
 * @package   Open Source Social Network
 * @author    OSSN Core Team <info@softlab24.com>
 * @copyright (C) SOFTLAB24 LIMITED
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
$el = array(
    'fakepostings' => 'Ψεύτικες Δημοσιεύσεις',
    'FakePostings' => 'Ψεύτικες Δημοσιεύσεις',
	'com:fakepostings:button:post' => 'Δημιουργία',
	'com:fakepostings:instruction' => 'Δημιουργήστε τυχαίες δημοσιεύσεις στην κοινότητά σας',
	'com:fakepostings:input:postings:count' => 'Αριθμός δημοσιεύσεων',
	// processing ...
	'com:fakepostings:post:success' => 'Η δημοσίευση %s δημιουργήθηκε με επιτυχία',
	'com:fakepostings:no:inactive:users' => 'Δεν βρέθηκαν ανενεργά μέλη - η ανάρτηση απορρίφθηκε',
	'com:fakepostings:component:missing' => 'Wall/FakePostings δεν έχει εγκατασταθεί ή εχει απενεργοποιηθεί - Η δημοσίευση ματαιώθηκε',
	'com:fakepostings:no:postings:available' => 'Δεν υπάρχουν διαθέσιμες δημοσιεύσεις - Βεβαιωθείτε ότι έχετε εγκαταστήσει μια έγκυρη βάση δεδομένων Fortunes',
	// database errors
	'com:fakepostings:db:insert:failed' => "Σφάλμα βάσης δεδομένων: Δεν ήταν δυνατή η αποθήκευση της δημοσιεύσεις",
);
ossn_register_languages('el', $el); 

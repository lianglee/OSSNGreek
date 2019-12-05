<?php
/**
 * Open Source Social Network
 *
 * @package   (softlab24.com).ossn
 * @author    OSSN Core Team <info@softlab24.com>
 * @copyright (C) SOFTLAB24 LIMITED
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */

$el = array(
	'signupfields' => 'Πεδία Εγγραφής',
    'com:signupfields:mobile:label' => 'Αριθμός κινητού',
	'com:signupfields:mobile' => ' ',
	
	'com:signupfields:admin:settings:about:title' => "Εμφάνιση αριθμού κινητού στη σελίδα 'About' με το στοιχείο 'Custom Profile Fields' ?",
	'com:signupfields:admin:settings:about:note' => "<i class='fa fa-info-circle'></i><br><i>
	Since the Premium <u>Custom Profile Fields</u> component is using its own display manager that does not recognize <u>Signup Fields</u>,
	the visibility of the <u>mobile number</u> on the Premium component's <u>About</u> page can be controlled from here, only.</i>
	<br><br>
	",
	'com:signupfields:admin:settings:about:no' => 'Όχι',
	'com:signupfields:admin:settings:about:yes' => 'Ναι',
	'com:signupfields:admin:settings:save:error' => 'Δεν είναι δυνατή η αποθήκευση της ρύθμισης! Ελέγξτε το αρχείο error_log.',
	'com:signupfields:admin:settings:saved' => 'Η ρύθμιση αποθηκεύτηκε!',
);
ossn_register_languages('el', $el); 
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
	'blog' => 'Blog',
	'blogs' => 'Blogs',
	'com:blog:blog:add' => 'Δημιουργία Blog',
	'com:blog:blog:add:failed' => 'Δεν είναι δυνατή η δημιουργία Blog.',
	'com:blog:blog:added' => 'Το Blog δημιουργήθηκε με επιτυχία.',
	
	'com:blog:blog:contents' => 'Περιεχόμενα Blog',
	'com:blog:blog:title' => 'Τίτλος Blog',
	'com:blog:blog:title:warning' => 'Υποχρεωτικό πεδίο, Παρακαλώ εισάγετε έναν ουσιαστικό τίτλο.',
	'com:blog:blog:edit' => 'Επεξεργασία Blog',
	'com:blog:blog:edit:timestamp' => "Τελευταία επεξεργασία: %s",
	'com:blog:blog:edit:timestamp:format' => 'm-d-Y H:i', // this format will give a stamp like '03-31-2019 16:45', see http://php.net/manual/en/function.date.php for the all available formatting placeholders
	
	'com:blog:blog:edit:failed' => 'Δεν είναι δυνατή η επεξεργασία blog',
	'com:blog:blog:edited' => 'Το Blog έχει επεξεργαστεί με επιτυχία',
	
	'com:blog:blog:my' => 'Τα Blogs Μου',
	'com:blog:blog:all' => 'Όλα Τα Blogs',
	'com:blog:blog:deleted' => 'Το Blog έχει διαγραφεί',
	'com:blog:blog:delete:failed' => 'Δεν είναι δυνατή η διαγραφή blog',
	
	'com:blog:list:sort:by:date' => 'Ταξινόμηση κατά ημερομηνία',
	'com:blog:list:sort:by:date:page:header' => 'Όλα τα blogs - ταξινομημένα κατά ημερομηνία',

	'com:blog:list:sort:by:member' => 'Ταξινόμηση ανά μέλος',
	'com:blog:list:sort:by:member:page:header' => 'Όλα τα blogs - ταξινομημένα ανά μέλος',
	
	'com:blog:list:member:page:header' => 'Blogs από %s',
	'com:blog:list:by:author:' => 'από %s',
	
	'com:blog:wall:post:subject' => 'Δημιουργήθηκε ένα νέο blog', 
	'com:blog:wall:post:view:complete' => 'Προβολή πλήρους blog',
	
    'ossn:notifications:like:entity:blog' => "%s άρεσε το blog σας.",
    'ossn:notifications:comments:entity:blog' => '%s σχολίασε στο blog σας.',
);
ossn_register_languages('el', $el); 

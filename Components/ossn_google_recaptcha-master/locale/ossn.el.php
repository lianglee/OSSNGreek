<?php

$el = array(
  'recaptcha' => 'Google reCAPTCHA',
  'recaptcha:text' => 'Παρακαλώ, συμπληρώστε το reCAPTCHA',
  'recaptcha:error' => 'Έχετε εισάγει μη έγκυρο reCaptcha',
  'recaptcha:com:site_key' => 'Google reCAPTCHA SITE_KEY',
  'recaptcha:com:secret_key' => 'Google reCAPTCHA SECRET_KEY',
  'recaptcha:com:note' => 'Χρειαζόμαστε τα κλειδιά API, πηγαίνετε στο <a href="https://www.google.com/recaptcha/admin">https://www.google.com/recaptcha/admin</a>. Για να αποκτήσετε πρόσβαση σε αυτήν τη σελίδα, θα πρέπει να έχετε πρόσβαση στον Λογαριασμό σας Google. Καταχωρίστε το όνομα του ιστοτόπου σας (e.g., '. ossn_site_url() . ') όπου θα χρησιμοποιηθεί το reCAPTCHA. Στη συνέχεια, επικολλήστε και τα δύο SECRET_KEY και SITE_KEY σε κάθε πεδίο εδώ.',
  'recaptcha:site_key:empty' => 'The SITE_KEY is empty.',
  'recaptcha:secret_key:empty' => 'The SECRET_KEY is empty.',
  'recaptcha:saved' => 'API keys stored.',
  'recaptcha:save:error' => 'The API keys couldn\'t be saved.',
);
ossn_register_languages('el', $el);
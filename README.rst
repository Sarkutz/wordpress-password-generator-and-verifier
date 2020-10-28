
##########################
Wordpress Password Utility
##########################

Inspired from `this source
<https://www.kvcodes.com/2016/09/wordpress-password-hash-generator/>`__


*****
Usage
*****

Place required script in Wordpress root folder.  

.. note::

   The scripts need several resources from you Wordpress installation to generate
   the correct password like-

   - "Authentication Unique Keys and Salts" in :file:`wp-config.php`.
   - Some Wordpress source code PHP files.


Usage: Generate Password
========================

Syntax::

   $ php genpass.php <plain_text_password>

Example::

   $ php genpass.php lJaZ0LIjT4Nw9hHBnm
   Hashed password: $P$BPi9/9YB7mUTTgIiLdaIyYuFb0unaI/
   $ php genpass.php lJaZ0LIjT4Nw9hHBnm
   Hashed password: $P$BAi.qcAqSL3SII7D7NrHPOYNO4roNr0
   $ php genpass.php lJaZ0LIjT4Nw9hHBnm
   Hashed password: $P$Bv8wv7.o4NCM4nF8VtGtXII9B03ThS.


Usage: Verify Password
======================

Syntax::

   $ php verifypass.php <plain_text_actual_password> <hashed_password_to_verify>

Example::

   $ php verifypass.php lJaZ0LIjT4Nw9hHBnm '$P$BPi9/9YB7mUTTgIiLdaIyYuFb0unaI/'
   Yes password is correct
   $ php verifypass.php lJaZ0LIjT4Nw9hHBnm '$P$BAi.qcAqSL3SII7D7NrHPOYNO4roNr0'
   Yes password is correct
   $ php verifypass.php lJaZ0LIjT4Nw9hHBnm '$P$Bv8wv7.o4NCM4nF8VtGtXII9B03ThS.'
   Yes password is correct


.. note::

   As passwords can contain special shell characters, you might need to escape
   or quote them.


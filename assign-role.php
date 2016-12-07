<?php

// Registration script

add_action( 'wpmem_post_register_data', 'my_reg_hook' );
function my_reg_hook( $fields ) {

   $registerid = $fields['ID'];
   $userrole = $fields['induction_type'];

   //Get a users info and change their role
   //If user picked X role then assign X role

   if ($userrole === 'contractor') {

         //SELECT USER WHO HAS JUST REGISTERED
         $u = new WP_User($registerid);
         // Remove default subscriber role
         $u->remove_role('subscriber');
         // Add specific role
         $u->add_role('contractor');
   }

   else if ($userrole === 'site') {

         //SELECT USER WHO HAS JUST REGISTERED
         $u = new WP_User($registerid);
         // Remove default subscriber role
         $u->remove_role('subscriber');
         // Add specific role
         $u->add_role('site_inductee');
   }

   else if ($userrole === 'driver') {

         //SELECT USER WHO HAS JUST REGISTERED
         $u = new WP_User($registerid);
         // Remove default subscriber role
         $u->remove_role('subscriber');
         // Add specific role
         $u->add_role('driver');
   }

   // Note this is an action, so nothing needs+ to be
   // returned from the function.
   return;
}

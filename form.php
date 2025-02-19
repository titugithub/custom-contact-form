<?php  


/*
 * Plugin Name: Test Plugin
 * Plugin URI: https://example.com/test-plugin
 * Description: This is a simple test plugin for demonstrating WordPress plugin structure.
 * Version: 1.0.0
 * Author: Your Name
 * Author URI: https://example.com
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: test-plugin
 */





function contact_form(){

   if($_SERVER['REQUEST_METHOD'] == 'POST'){


      $name = sanitize_text_field($_POST['name']) ;
      $email = sanitize_email($_POST['email']);
      $message = sanitize_textarea_field($_POST['message']);


      wp_mail('google@gmail.com','Hello Goolge',$message,$email);


   }



   return '
   
   <form method="POST">
      <input type="text" name="name" placeholder ="Your Name">
      <br>
      <input type="email" name="email" placeholder ="Your Email">
      <br>
      <textarea name ="message" placeholder ="Your Message"></textarea>
      <br>
      <input type="submit" value="Send Message">
   </form>
   
   
   ';





}


add_shortcode('contact_form', 'contact_form');













<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" role="main">
  <div class="container">
    <div class="row">
      <div id="logIn">
      <?php if(!is_user_logged_in()): ?>
        <?php wp_login_form(); ?>
      <?php else: ?>
        <p>You have been successfully logged in</p>
        <a href="http://learnpress.ecubes.business/wp-admin/admin.php?page=sch-dashboard">Go to Dashboard</a>
        <style>
          div#logIn p {
              display: block;
              width: 100%;
              text-align: center;
              font-size: 30px;
          }

          div#logIn {
              flex-flow: column;
          }

          div#logIn a {
              background-color: #333;
              padding: 10px;
              border-radius: 4px;
              text-decoration: blink;
          }
        </style>
      <?php endif; ?>
      </div>
    </div>
  </div>
</main><!-- #site-content -->



<?php
get_footer();

<?php /**
 * 
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 * 
 *  @link https:/www.hamzoooz.com
 *
 * @since 1.0
 * @version 1.0
 * @package hamzooz
 */
// $theme_options = hamzoooz_theme_options();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset = "<?php bloginfo("charset"); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>
        <?php wp_title('|' , 'true' , 'right') ?>
        <?php bloginfo('name') ?>
    </title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback"  href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

<?php do_action( 'wp_body_open' ); ?>


<div class="container">
    <div class="row">
    <img class="name-site" src="/assets/img/name_logo-alukari1439.png" alt="">
    <!-- <div class="col-md-9 col-sm-9 col-lg-9  ">
            <div class="name-site">
            </div>
        </div>
        <div class="col-md-3 col-sm-3 col-lg-3 ">
            <div class="logo-site">
            </div>
        </div> -->
    </div> <!-- row -->
</div> <!-- container -->

<div id="page" class="hfeed site">
<div class="container">
    <!-- anination awoesome -->
    <!-- <div id="particle-canvas" class="particle-canvas"> </div> -->

    <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
        <div id="content " class="site-content container clearfix">
            <!-- Brand and toggle get grouped for better mobile display -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="<?php bloginfo("url") ?>"><?php bloginfo("name") ?></a>
                <?php hamzoooz_bootstrap_menu() ?>
        </div>
    </nav>
</div><!-- container -->
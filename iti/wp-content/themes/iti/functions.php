<?php

add_theme_support('post-thumbnails');

add_theme_support('title-tag');

function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'style-normalize',  get_template_directory_uri().'/css/normalize.css' );
    wp_enqueue_style( 'style-fonts',  get_template_directory_uri(). '/font/fonts.css');
    wp_enqueue_style( 'style-style2',  get_template_directory_uri().'/css/style2.css' );
    wp_enqueue_style( 'style-main',  get_template_directory_uri().'/css/main.css' );

    wp_enqueue_script( 'script-modernizr', get_template_directory_uri() . '/js/vendor/modernizr-2.6.2.min.js' );
    wp_enqueue_script( 'script-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(jquery), '1.4.1', true );
    wp_enqueue_script( 'script-easing', get_template_directory_uri() . '/js/jquery.easing.js', array(jquery), '1.0.0', true );
    wp_enqueue_script( 'script-script1', get_template_directory_uri() . '/js/script.js', array(jquery), '1.0.0', true );
    wp_enqueue_script( 'script-plugins', get_template_directory_uri() . '/js/plugins.js', array(jquery), '1.0.0', true );
    wp_enqueue_script( 'script-easing1', get_template_directory_uri() . '/js/jquery.easing.1.3.min.js', array(jquery), '1.0.0', true );
    wp_enqueue_script( 'script-mousewheel', get_template_directory_uri() . '/js/jquery.mousewheel.min.js', array(jquery), '1.0.0', true );
    wp_enqueue_script( 'script-sliderkit', get_template_directory_uri() . '/js/jquery.sliderkit.1.9.pack.js', array(jquery), '1.0.0', true );
    wp_enqueue_script( 'script-selectbox',get_template_directory_uri() . '/js/jquery.selectbox-0.1.3.js', array(jquery), '1.0.0', true );
    wp_enqueue_script( 'script-main', get_template_directory_uri() . '/js/main.js', array(jquery), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

        
   register_sidebar( array(
        'name' => 'Main Sidebar',
        'id' => 'main-sidebar',
       ) 
       );
   
register_nav_menus(
            array(
                'header-menu' => 'Header Menu', // header-menu == key for this menu to be ableto showed , Hearder Menu == the title wich showed for admin
                'footer-menu' => 'Footer Menu'
            )
        );

// for theme setting (like social or phone in footer ) by 
// create custom plugin settings menu
add_action('admin_menu', 'my_cool_plugin_create_menu');

function my_cool_plugin_create_menu() {

	//create new top-level menu
	add_menu_page('My Cool Plugin Settings', 'Theme Options', 'administrator', __FILE__, 'my_cool_plugin_settings_page'  );

	//call register settings function
	add_action( 'admin_init', 'register_my_cool_plugin_settings' );
}


function register_my_cool_plugin_settings() {
	//register our settings
	register_setting( 'my-theme-option', 'facebook_url' );
	register_setting( 'my-theme-option', 'twitter_url' );
	register_setting( 'my-theme-option', 'instagram_url' );
        register_setting( 'my-theme-option', 'address' );
        register_setting( 'my-theme-option', 'phone_no1' );
        register_setting( 'my-theme-option', 'phone_no2' );
        register_setting( 'my-theme-option', 'email_no1' );
        register_setting( 'my-theme-option', 'email_no2' );

}

function my_cool_plugin_settings_page() {
?>
<div class="wrap">
<h1>My setting option</h1>

<form method="post" action="options.php">
    <?php settings_fields( 'my-theme-option' ); ?>
    <?php do_settings_sections( 'my-theme-option' ); ?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Address</th>
        <td><input type="text" name="address" value="<?php echo esc_attr( get_option('address') ); ?>" /></td>  <!-- get option fn to get value of old option and display it to be edited -->
        </tr>
        
         <tr valign="top">
        <th scope="row">phone no1</th>
        <td><input type="text" name="phone_no1" value="<?php echo esc_attr( get_option('phone_no1') ); ?>" /></td>  <!-- get option fn to get value of old option and display it to be edited -->
        </tr>
        
        <tr valign="top">
        <th scope="row">phone no2</th>
        <td><input type="text" name="phone_no2" value="<?php echo esc_attr( get_option('phone_no2') ); ?>" /></td>  <!-- get option fn to get value of old option and display it to be edited -->
        </tr>
        
        <tr valign="top">
        <th scope="row"> email no1</th>
        <td><input type="text" name="email_no1" value="<?php echo esc_attr( get_option('email_no1') ); ?>" /></td>  <!-- get option fn to get value of old option and display it to be edited -->
        </tr>
        
          <tr valign="top">
        <th scope="row"> email no2</th>
        <td><input type="text" name="email_no2" value="<?php echo esc_attr( get_option('email_no2') ); ?>" /></td>  <!-- get option fn to get value of old option and display it to be edited -->
        </tr>
        
        <tr valign="top">
        <th scope="row">Facebook Url</th>
        <td><input type="text" name="facebook_url" value="<?php echo esc_attr( get_option('facebook_url') ); ?>" /></td>  <!-- get option fn to get value of old option and display it to be edited -->
        </tr>
         
        <tr valign="top">
        <th scope="row">Twitter Url</th>
        <td><input type="text" name="twitter_url" value="<?php echo esc_attr( get_option('twitter_url') ); ?>" /></td>
        </tr>
        
        <tr valign="top">
        <th scope="row">Instagram Url</th>
        <td><input type="text" name="instagram_url" value="<?php echo esc_attr( get_option('instagram_url') ); ?>" /></td>
        </tr>
    </table>
    
    <?php submit_button(); ?>

</form>
</div>
<?php } 

//<!--slider customization-->
function codex_custom_init() {
    $args = array(
      'public' => true,
      'label'  => 'Slider',
      'supports' => array('title','editor','thumbnail')
    );
    register_post_type( 'slider', $args );
    
    $args = array(
      'public' => true,
      'label'  => 'News',
      'supports' => array('title','editor')
    );
    
    register_post_type( 'news', $args );
    
        $args = array(
      'public' => true,
      'label'  => 'Partner',
      'supports' => array('title','editor','thumbnail')
    );
    register_post_type( 'partner', $args );
    
    register_post_type( 'service', $args );
    
        $args = array(
      'public' => true,
      'label'  => 'service',
      'supports' => array('title','editor','excerpt','thumbnail')
    );
    register_post_type( 'service', $args );
    
    register_post_type( 'team', $args );

    $args = array(
    'public' => true,
    'label'  => 'team',
    'supports' => array('title','thumbnail')
    );
    register_post_type( 'team', $args );
}
add_action( 'init', 'codex_custom_init' );

// create short code
add_shortcode('test_shortcode', 'test_shortcode_func');
function test_shortcode_func($attr){ // $attr ==> asociative array take from user key and value and there is no limit
    ob_start(); // to appeare at right position
    echo "shortcode content";
    print_r($attr);
    return ob_get_clean();
}

// meta box (custom field)
add_action('add_meta_boxes','team_extra_field');

//create field
function team_extra_field(){
    add_meta_box('team-fields','Position','team_extra_field_func','team'); // screen parameter(last one) ==> put the name of post type which i want add it to
}

function team_extra_field_func(){
    global $post;

?>
<input type="text" name="team_position" value="<?php echo get_post_meta($post->ID,'team_position',true)?>" /> 
<input type="hidden" name="noncename" value="<?php echo wp_create_nonce(__FILE__); ?>" /> 

<?php
}

//save custom field
add_action("save_post","save_team_data");

function save_team_data($post_id){
    if(isset($_POST['noncename']) && !wp_verify_nonce($_POST['noncename'], __FILE__))
        return;
    
    if(isset($_POST['post_type']) && $_POST['post_type'] == "team"){
        if(isset($_POST['team_position'])){
            $data = $_POST['team_position'];
            update_post_meta($post_id, 'team_position', $data);
        }
    }
    
}
?>
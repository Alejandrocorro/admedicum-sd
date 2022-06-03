<?php
var_dump($appearance_fields);
?>
<div class="wrap">
    <h1>Appearance - Header</h1>
    <form method="post" action="options.php">
        <?php settings_fields( 'all_theme_options_group' ); ?>
        <?php do_settings_sections( 'all_theme_options_group' ); ?>
        <div class="form-table">
            <h2>Logo</h2>
            <div class="column">
                <label for=""><i>Puedes cargar una imagen desde los medios o colocar la url de la imagen</i></label>
                <img id="image-preview" width="200" src="<?php echo esc_attr( get_option($appearance_fields->navigation . 'logo') ); ?>" alt="">
                <div class="input-gruop is-hidden">
                    <span id="current-domain-url" style="margin-right: 10px;"><?php echo home_url(); ?></span>
                    <input id="image-url" type="text" style="width: 100%;" name="<?php echo $appearance_fields->navigation . 'logo'; ?>" value="<?php echo esc_attr( get_option($appearance_fields->navigation . 'logo') ); ?>"/>
                </div>
                <input id="upload-button" type="button" class="button" value="Upload Image" />
            </div>
        </div>
        
        <?php submit_button(); ?>
    </form>
</div>
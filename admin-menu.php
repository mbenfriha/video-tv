<div class="wrap">
    <div class="admin-video-tv">
        <h2>Video-TV settings</h2>

        <form method="post" action="options.php">
            <?php settings_fields( 'video-tv' ); ?>

            <div class="main-admin">

                <input id="toggleAll" type="button" class="btn" value="hide/show all"/>

                <h1>Header <i class="fa fa-arrows-v" aria-hidden="true"></i> </h1>

                <div class="section-admin">
                    <table class="form-table">
                        <tr valign="top">
                            <th scope="row"><label for="top_logo">Logo top</label></th>
                            <td>
                                <label for="upload_image">
                                    <input class="upload_image" name="top_logo" type="text" size="36" name="ad_image" placeholder="http://myimage.." value="<?php echo get_option( 'top_logo', '' ); ?>" />
                                    <input class="upload_image_button btn" placeholder="http://myimage.." name="top_logo" class="button" type="button" value="Upload Image" />
                                    <br />upload an image (recommand 150x150px)
                                </label>
                            </td>
                        </tr>
                        <tr valign="footer">
                            <th scope="row"><label for="footer_logo">Logo footer</label></th>
                            <td>
                                <label for="upload_image">
                                    <input class="upload_image" name="footer_logo" type="text" size="36" name="ad_image" value="<?php echo get_option( 'footer_logo', '' ); ?>" />
                                    <input class="upload_image_button btn" name="footer_logo" class="button" type="button" value="Upload Image" />
                                    <br />upload an image (recommand 150x150px)
                                </label>
                            </td>
                        </tr>
                    </table>
                </div>

                <h1>Footer <i class="fa fa-arrows-v" aria-hidden="true"></i> </h1>

                <div class="section-admin">
                    <table class="form-table">
                        <tr valign="top">
                            <th scope="row"><label for="color-menu-top">Color footer</label></th>
                            <td>
                                <label for="color-footer">
                                    <input name="color-footer" id="color-footer" type='text' class='color-field' value="<?php echo get_option( 'color-footer', '#2196f3' ); ?>">
                                    <br />
                                </label>
                            </td>
                        </tr>
                    </table>
                </div>

                <h1>Nav <i class="fa fa-arrows-v" aria-hidden="true"></i> </h1>
                <div class="section-admin">
                    <table class="form-table">
                        <tr valign="top">
                            <th scope="row"><label for="color-menu-top">Color nav</label></th>
                            <td>
                                <label for="color-menu-top">
                                    <input name="color-menu-top" id="color-menu-top" type='text' class='color-field' value="<?php echo get_option( 'color-menu-top', '#468FBE' ); ?>">
                                    <br />
                                </label>
                            </td>
                        </tr>
                        <tr valign="top">
                            <th scope="row"><label for="color-social-top">Color socials button</label></th>
                            <td>
                                <label for="color-social-top">
                                    <input name="color-social-top" id="color-social-top" type='text' class='color-field' value="<?php echo get_option( 'color-social-top', '#468FBE' ); ?>">
                                    <br />
                                </label>
                            </td>
                        </tr>
                    </table>
                </div>

                <h1>Home <i class="fa fa-arrows-v" aria-hidden="true"></i> </h1>
                <div class="section-admin">
                    <table class="form-table">
                        <tr valign="top">
                            <th scope="row"><label for="index_title">Index title</label></th>
                            <td><input type="text" id="index_title" name="index_title" class="text" value="<?php echo get_option( 'index_title', 'OTHERS' ); ?>" /></td>
                        </tr>
                    </table>

                    <h2>Slider</h2>
                    <table class="form-table">
                        <tr valign="top">
                            <th scope="row"><label for="slider_title">Slider title</label></th>
                            <td><input type="text" id="slider_title" name="slider_title" class="text" value="<?php echo get_option( 'slider_title', 'NEWEST' ); ?>" /></td>
                        </tr>
                        <tr valign="top">
                            <th scope="row"><label for="slider_active">Slider newest</label></th>
                            <td><input type="checkbox" id="slider_active" name="slider_active" value="1" <?= checked( get_option('slider_active'), 1, false );?>" /></td>
                        </tr>
                        <tr valign="top">
                            <th scope="row"><label for="slider_number">slider number item</label></th>
                            <td>  <select id="slider_number" name="slider_number">
                                    <option value="<?= get_option( 'slider_number', '3' ); ?>" selected><?= get_option( 'slider_number', '3' ); ?></option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                        </tr>

                        <tr valign="top">
                            <th scope="row"><label for="color-menu-top">Color slider</label></th>
                            <td>
                                <label for="color-slider">
                                    <input name="color-slider" id="color-slider" type='text' class='color-field' value="<?php echo get_option( 'color-slider', '#2196f3' ); ?>">
                                    <br />
                                </label>
                            </td>
                        </tr>
                    </table>
                </div>

                <h1>Single <i class="fa fa-arrows-v" aria-hidden="true"></i> </h1>
                <div class="section-admin">
                    <table class="form-table">
                        <tr valign="top">
                            <th scope="row"><label for="color-menu-top">Color background video</label></th>
                            <td>
                                <label for="color-video">
                                    <input name="color-video" id="color-video" type='text' class='color-field' value="<?php echo get_option( 'color-video', '#2196f3' ); ?>">
                                    <br />
                                </label>
                            </td>
                        </tr>

                        <tr valign="top">
                            <th scope="row"><label for="single_title">Single sub video title</label></th>
                            <td><input type="text" id="single_title" name="single_title" class="text" value="<?php echo get_option( 'single_title', 'OTHERS' ); ?>" /></td>
                        </tr>


                        <tr valign="top">
                            <th scope="row"><label for="single_color_navigation">Color navigation link</label></th>
                            <td>
                                <label for="single_color_navigation">
                                    <input name="single_color_navigation" id="single_color_navigation" type='text' class='color-field' value="<?php echo get_option( 'single_color_navigation', 'black' ); ?>">
                                    <br />
                                </label>
                            </td>
                        </tr>
                    </table>
                </div>

                <h1>Social <i class="fa fa-arrows-v" aria-hidden="true"></i> </h1>
                <div class="section-admin">
                    <table class="form-table">
                        <tr valign="top">
                            <th scope="row"><label for="facebook_id">facebook app id</label></th>
                            <td><input type="text" id="facebook_id" name="facebook_id" class="text" value="<?php echo get_option( 'facebook_id', '' ); ?>" />
                                Put here your FB app ID get ID</td>
                        </tr>
                        <tr valign="top">
                            <th scope="row"><label for="facebook_menu">facebook</label></th>
                            <td><input type="text" id="facebook_menu" name="facebook_menu" class="text" placeholder="http://facebok.com/pagename" value="<?php echo get_option( 'facebook_menu', '' ); ?>" /></td>
                        </tr>
                        <tr valign="top">
                            <th scope="row"><label for="twitter_menu">Twitter</label></th>
                            <td><input type="text" id="twitter_menu" name="twitter_menu" class="text" placeholder="http://twitter.com/twittename" value="<?php echo get_option( 'twitter_menu', '' ); ?>" /></td>
                        </tr>
                        <tr valign="top">
                            <th scope="row"><label for="instagram_menu">Instagram</label></th>
                            <td><input type="text" id="instagram_menu" name="instagram_menu" class="text" placeholder="http://instagram.com/instaname" value="<?php echo get_option( 'instagram_menu', '' ); ?>" /></td>
                        </tr>
                        <tr valign="top">
                            <th scope="row"><label for="snapchat_menu">Snapchat</label></th>
                            <td><input type="text" id="snapchat_menu" name="snapchat_menu" placeholder="http://snapchat.com/add/snapname" class="text" value="<?php echo get_option( 'snapchat_menu', '' ); ?>" /></td>
                        </tr>
                        <tr valign="top">
                            <th scope="row"><label for="youtube_menu">Youtube</label></th>
                            <td><input type="text" id="youtube_menu" name="youtube_menu" class="text" value="<?php echo get_option( 'youtube_menu', '' ); ?>" /></td>
                        </tr>
                    </table>
                </div>

                <h1>Custom button <i class="fa fa-arrows-v" aria-hidden="true"></i> </h1>
                <div class="section-admin">
                    <table class="form-table">
                        <!-- <tr valign="top">
                            <th scope="row"><label for="send_button">send video</label></th>
                            <td><input type="text" id="send_button" name="send_button" class="text" value="<?php //echo get_option( 'send_button', '' ); ?>" /></td>
                        </tr> -->
                        <tr valign="top">
                            <th scope="row"><label for="contact_button">contact</label></th>
                            <td><input type="text" id="contact_button" name="contact_button" class="text" value="<?php echo get_option( 'contact_button', '' ); ?>" /></td>
                        </tr>

                    </table>
                </div>

                <h1>Advertisement <i class="fa fa-arrows-v" aria-hidden="true"></i> </h1>
                <div class="section-admin">


                    <table class="form-table">
                        <tr valign="top">
                            <th scope="row"><label for="ad_index">Ad home page</label></th>
                            <td><textarea type="text" id="ad_index" cols="10" row="6" name="ad_index" class="text"><?php echo get_option( 'ad_index', '' ); ?></textarea>
                                <span>recommends using 728x120</span>
                            </td>
                        </tr>
                        <tr valign="top">
                            <th scope="row"><label for="ad_single">ad video page</label></th>
                            <td><textarea type="text" id="ad_single" cols="10" row="6" name="ad_single" class="text"><?php echo get_option( 'ad_single', '' ); ?></textarea>
                                <span>recommends using 728x120</span>
                            </td>
                        </tr>
                    </table>
                </div>

                <h1>Other <i class="fa fa-arrows-v" aria-hidden="true"></i> </h1>
                <div class="section-admin">
                    <table class="form-table">
                        <tr valign="top">
                            <th scope="row"><label for="ad_index">Header code</label></th>
                            <td><textarea type="text" id="header_code" cols="10" row="6" name="header_code" class="text"><?php echo get_option( 'header_code', '' ); ?></textarea>
                                <span>google analytics, etc...</span>
                            </td>
                        </tr>
                    </table>
                </div>

                <p class="submit">
                    <input type="submit" class="btn" value="Mettre à jour" />
                </p>
            </div>
        </form>
    </div>
</div>
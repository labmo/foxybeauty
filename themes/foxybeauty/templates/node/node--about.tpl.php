<?php

/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct URL of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type; for example, "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type; for example, story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode; for example, "full", "teaser".
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined; for example, $node->body becomes $body. When needing to
 * access a field's raw values, developers/themers are strongly encouraged to
 * use these variables. Otherwise they will have to explicitly specify the
 * desired field language; for example, $node->body['en'], thus overriding any
 * language negotiation rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>



<?php  $wrapper = entity_metadata_wrapper('node', $node); # wrapper node data?>
<?php  $banner_wrapper = entity_metadata_wrapper('field_collection_item', $wrapper->field_banner->value()); ?>
<?php  $team_wrapper = entity_metadata_wrapper('field_collection_item', $wrapper->field_team->value()[0]); ?>
<?php $social_wrapper = entity_metadata_wrapper('field_collection_item', $team_wrapper->field_social->value()) ?>


 <?php
// $client_wrapper = entity_metadata_wrapper('field_collection_item', $wrapper->field_client->value()[0]);
//foreach($wrapper->field_client->value() as $client):
//    $client_wrapper = entity_metadata_wrapper('field_collection_item', $client);
//
// echo '<pre>';
//
// print_r(
//     $team_wrapper->field_description->value->value()
//    #getPropertyInfo()
//   );  echo '</pre>';

   ?>
<?php #endforeach;exit;?>


<!-- about section -->
<div class="container">
    <div class="empty-space col-xs-b60 col-sm-b120"></div>
    <div class="row vertical-aligned-columns">
        <div class="col-sm-7 col-sm-push-5 col-xs-b30 col-sm-b0">
            <div class="thumbnail-shortcode-4">
                <div class="content">
                    <div class="layer-1 background" style="background-image: url(<?php print drupal_get_path('theme','foxybeauty')?>/img/thumbnail-59.jpg);"></div>
                    <div class="layer-2 border border-image" style="border-image-source: url(<?php print drupal_get_path('theme','foxybeauty')?>/img/thumbnail-60.jpg);"></div>
                    <div class="layer-3 background" style="background-image: url(<?php print drupal_get_path('theme','foxybeauty')?>/img/thumbnail-61.jpg);"></div>
                </div>
            </div>
        </div>
        <div class="col-sm-5 col-sm-pull-7">
            <div class="sa">
                <?php print $wrapper->body->value->value()?>
            </div>
        </div>
    </div>
    <div class="empty-space col-xs-b45 col-sm-b90"></div>
    <div class="row">
        <div class="col-md-12 text-center">
            <article class="sa">
                <h3>Our clients</h3>
                <p>Et harum quidem rerum facilis est et expedita distinctio.</p>
            </article>
            <div class="empty-space col-xs-b25 col-sm-b50"></div>
        </div>
    </div>
    <div class="row">
        <?php foreach($wrapper->field_client->value() as $client): ?>
            <?php $client_wrapper = entity_metadata_wrapper('field_collection_item',$client); ?>
            <div class="col-xs-6 col-sm-3">
                <a href="#" class="client-logo mouseover-2"><img src="<?php print file_create_url($client_wrapper->field_image->value()[0]['uri'])?>" alt="" /></a>
            </div>
        <?php endforeach;?>
    </div>
    <div class="empty-space col-xs-b45 col-sm-b90"></div>
    <div class="row">
        <div class="col-md-12 text-center">
            <article class="sa">
                <h3>Our team</h3>
                <p>Et harum quidem rerum facilis est et expedita distinctio.</p>
            </article>
            <div class="empty-space col-xs-b25 col-sm-b50"></div>
        </div>
    </div>
</div><!-- /. about section -->
<!-- team member section -->
<div class="swiper-entry slider-about">
    <div class="swiper-container" data-slides-per-view="1" data-initialslide="1" data-center="1" data-speed="1000">
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-wrapper">
            <?php foreach ($wrapper->field_team->value() as $member):?>
            <?php $team_wrapper = entity_metadata_wrapper('field_collection_item', $member) ?>
            <?php $social_wrapper = entity_metadata_wrapper('field_collection_item', $team_wrapper->field_social->value()) ?>
                <div class="swiper-slide">
                    <div class="align full-screen-height">
                        <div class="container">
                            <div class="row vertical-aligned-columns">
                                <div class="col-sm-6">
                                    <div class="thumbnail-shortcode-5-wrapper">
                                        <div class="thumbnail-shortcode-5">
                                            <div class="content">
                                                <div class="layer-1 border-image" style="border-image-source: url(<?php print drupal_get_path('theme','foxybeauty')?>/img/thumbnail-63.jpg);"></div>
                                                <div class="layer-2"><img src="<?php print file_create_url($team_wrapper->field_image->value()[0]['uri'])?>" alt=""></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="slider-about-text">
                                        <?php if($team_wrapper->field_title->value()):?>
                                        <div class="h1 slider-about-title"><?php print $team_wrapper->field_title->value();?></div>
                                        <?php endif; ?>
                                        <div class="slider-about-subtitle">Project Director<?php #print $team_wrapper->field_title->value->value();?></div>
                                        <?php if($team_wrapper->field_description->value->value()):?>
                                        <div class="sa slider-about-description"><?php print $team_wrapper->field_description->value->value();?></div>
                                        <?php endif; ?>
                                        <div class="follow">
                                            <?php if($social_wrapper->field_facebook->value()):?>
                                            <a class="entry" href="<?php print $social_wrapper->field_facebook->value();?>" target="_blank"><i class="fa fa-instagram"></i></a>
                                            <?php endif; ?>
                                            <?php if($social_wrapper->field_instagram->value()):?>
                                            <a class="entry" href="<?php print $social_wrapper->field_instagram->value();?>" target="_blank"><i class="fa fa-facebook"></i></a>
                                            <?php endif; ?>
                                            <?php if($social_wrapper->field_twitter->value()):?>
                                            <a class="entry" href="<?php print $social_wrapper->field_twitter->value();?>" target="_blank"><i class="fa fa-twitter"></i></a>
                                            <?php endif; ?>
                                            <?php if($social_wrapper->field_google_plus->value()):?>
                                            <a class="entry" href="<?php print $social_wrapper->field_google_plus->value();?>" target="_blank"><i class="fa fa-google-plus"></i></a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="swiper-pagination relative-pagination visible-xs visible-sm"></div>
    </div>
</div><!-- /. team member section -->

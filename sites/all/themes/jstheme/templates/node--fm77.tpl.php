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
 * - $node_url: Direct url of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type, i.e., "theming hook".
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
 * - $type: Node type, i.e. story, page, blog, etc.
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
 * - $view_mode: View mode, e.g. 'full', 'teaser'...
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
 * variable is defined, e.g. $node->body becomes $body. When needing to access
 * a field's raw values, developers/themers are strongly encouraged to use these
 * variables. Otherwise they will have to explicitly specify the desired field
 * language, e.g. $node->body['en'], thus overriding any language negotiation
 * rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 */
?>
<style type="text/css">
  #content-wrapper p{
    margin-bottom: 0;
  }
</style>
<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>> <?php print $user_picture; ?> <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
  <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
  <?php if ($display_submitted): ?>
  <div class="submitted"> <?php print $submitted; ?> </div>
  <?php endif; ?>
  <div class="content"<?php print $content_attributes; ?>>
    <?php
    if(isset($node->field_mp3_file[LANGUAGE_NONE][0]))
        $url = file_create_url($node->field_mp3_file[LANGUAGE_NONE][0]['uri']);
    if(isset($node->field_mp3url[LANGUAGE_NONE][0]))
        $url = $node->field_mp3url[LANGUAGE_NONE][0]['value'];
    if(isset($url) && $view_mode=='full'){
    ?>
   <div class="audio-wrapper">
        <div id="demo" class="audio state-stop" role="application" aria-label="media player">
            <div class="play-control control">
                <button class="play button" role="button" aria-label="play" tabindex="0"></button>
            </div>
            <div class="bar">
                <div class="seek-bar seek-bar-display loaded" style="width: 0%;"></div>
                <div class="seek-bar" style="width: 100%;">
                    <div class="play-bar" style="width: 0%; overflow: hidden;">
                    </div>
                    <div class="details">
                        <span class="title" aria-label="title">永不止息 - 需要有你</span>
                    </div>
                    <div class="timing">
                        <span class="duration" role="timer" aria-label="duration">0:00</span>
                    </div>
                </div>
            </div>
            <div class="no-solution" style="display: none;">出错啦<br>请使用谷歌浏览器</div>
            <div id="player" class="playercount" style="display: none;">
            </div>
        </div>
        <div id="playlist" style="display: none;"></div>
    </div>
    <script type="text/javascript">
        var playlist = [
                {
                    title: 'FM77 <?php echo $node->title;?>',
                    artist: '',
                    album: '',
                    cover:'',
                    mp3: '<?php echo $url;?>',
                    ogg: ''
                }
            ];
        var autoplay = false;
    </script>
    <?php
      }
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      hide($content['field_image2']);
      hide($content['field_term']);
      print render($content);
       if($view_mode=='full'){
      ?>
      <div class="field-name-field-mp3-img">
      <?php
      if($node->field_image2){
        print render($content['field_image2']);
      }else{
        $temp_user = user_load($uid);
        print theme_image_style(
                  array(
                      'style_name' => 'large',
                      'path' => $temp_user->picture->uri,
                      'width' => NULL,
                      'height' => NULL,
                      'attributes' => array(
                          'class' => 'ybzx-avatar',
                      )
                  )
              );
      }
      ?>
      </div>
      <?php }
      print render($content['field_term']);
    ?>
  </div>
  <?php print render($content['links']); ?>
  <?php if($view_mode == 'full'):?>
    <?php
      include('prev-next-post.php');
      include('wx_bottom.php');
    ?>
  <?php endif;?>
  <?php print render($content['comments']); ?>
</article>

<nav class="breadcrumbs">
  <div class="inner">
    <ol class="breadcrumbs_list">
      <li class="breadcrumbs_item"><a href="<?php echo esc_url(home_url('/')); ?>" class="breadcrumbs_link">トップ</a></li>

      <?php
      if(is_archive() || is_category()){
        echo '<li class="breadcrumbs_item">' . get_current_term()->name . 'の記事一覧</li>';
      }

      if(is_singular()){
        $post_type = get_post_type();
        if($post_type == 'post'){
          echo '<li class="breadcrumbs_item"><a href="'. get_category_link(get_the_category()[0]). ' " class="breadcrumbs_link">' . get_the_category()[0]->name . 'の記事一覧</a></li>';
        }
        echo '<li class="breadcrumbs_item">'.get_the_title().'</li>';
      }
      ?>



    </ol>
  </div>
</nav>
<!-- /.breadcrumb -->

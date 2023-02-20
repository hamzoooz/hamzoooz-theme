<?php
    $all_cats = get_the_category();
?>

<div class="breadcrumb-holder">
    <div class="container">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <!-- <li class="breadcrumb-item" > <a href="<?php echo get_home_url() ?>"> <i class="fa fa-home fa-lg "></i>  <?php echo bloginfo('name') ?></a> </li> -->
                <li class="breadcrumb-item" > <a href="<?php echo get_home_url() ?>"> <i class="fa fa-home fa-lg "></i>   </a> </li>
                <li class="breadcrumb-item"> <a href="<?php echo esc_url(get_category_link($all_cats[0]->tera_id)) ?>"><?php echo esc_html($all_cats[0]->name ) ?></a>
                <li class="breadcrumb-item active" aria-current="page" >  <?php echo get_the_title() ?>  </li>
            </ol>
        </nav>
    </div>
</div>


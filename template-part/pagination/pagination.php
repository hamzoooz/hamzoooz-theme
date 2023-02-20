<?php
// Add next and previous
    echo '<div class="post-pagination">';
        if(get_previous_posts_link() ){
            previous_posts_link('<i class="fa fa-chevron-left fa-fw fa-lg" aria-hidden="true"></i> Prev');
        }else{
            echo '<span class="d-none  pagination-prev-span" >prev</span>';
        }
        if (get_next_posts_link() ){
            next_posts_link( ' Next <i class="fa fa-chevron-right fa-fw fa-lg" aria-hidden="true"></i>');
        } else {
            echo '<span class="d-none pagination-next-span" > Next </span>';
        }
    echo '</div>';  

    echo '<div class="numbering_pagination">';
    echo numbering_pagination(); //Get Current Page 
    echo '</div>';?>
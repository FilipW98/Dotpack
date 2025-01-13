<div class="breadcrumbs fade animate">
    <?php  
    if (is_404()) { 
     if (function_exists('yoast_breadcrumb')) {
    echo '<div class="breadcrumb-box">';
    echo '<img src="/wp-content/uploads/2024/10/arrow-left.svg" alt="arrow left">';
    echo '<span class="back" onclick="window.history.back();">Wróć</span>';
    echo '</div>';
}

    } else {
            yoast_breadcrumb('<p class="body-16" id="breadcrumb"> ', '</p>');
    }
    ?>
</div>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="Description" content="site description goes here">
    <title><?php if(is_front_page() || is_home()){echo 'Home';}else{ wp_title('', true,''); }?> |
        <?php bloginfo( 'title' ); ?></title>
    <?php wp_head();?>
</head>

<body <?php body_class(); ?>>
    <header>
        header
    </header>
    <div class="sitecontent">
<?php
$c = array('13' => '#363b3f', '14' => '#2d3134', '15' => '#ffffff', '16' => '#69a8bb', '17' => '#ffffff', '18' => '#cfdce7', '19' => '#e14d43', '20' => '#26292c', '21' => '#cfdce7', '22' => '#ffffff', '23' => '#cfdce7', '24' => '#ffffff', '25' => '#ffffff', '26' => '#e14d43', '27' => '#ffffff', '28' => '#ffffff', '29' => '#ffffff', '30' => '#f2e0de', '31' => '#ffffff', '32' => '#ffffff', '33' => '#4a5158', '34' => '#26292c', '35' => '#ffffff', '36' => '#cfdce7', '37' => '#cfdce7', '38' => '#ffffff', '39' => '#4a5158', '40' => '#ffffff', '41' => '#cfdce7', '42' => '#ffffff', '43' => '#363b3f', '44' => '#26292c', '45' => '#e14d43', '46' => '#dd382d', '47' => '#e7ebee', '48' => '#e7ebee', '49' => '#e14d43', '50' => '#ffffff', '51' => '#dd382d', '52' => '#ffffff', '53' => '#e7ebee', '54' => '#363b3f', '55' => '#c5c9cc', '56' => '#26292c', '57' => '#e7ebee', '58' => '#363b3f', '59' => '#c5c9cc', '60' => '#26292c', '61' => '#e7ebee', '62' => '#363b3f', '63' => '#26292c', '64' => '#e14d43', '65' => '#dd382d', '66' => '#363b3f', '67' => '#d5dadd', '68' => '#e14d43', '69' => '#ffffff', '70' => '#dd382d', '71' => '#ffffff', '72' => '#c1cbd2', '73' => '#363b3f', '74' => '#363b3f', '75' => '#ffffff', '76' => '#363b3f',);
?>

<style type="text/css" media="screen">#adminmenuback {
        background-color: <?php echo $c['13']; ?>;
    }

    @media only screen and (max-width: 782px) {
        #adminmenuwrap {
            background-color: <?php echo $c['13']; ?>;
        }
    }

    #adminmenu li.wp-menu-separator, #adminmenu #collapse-menu {
        border-top-color: <?php echo $c['14']; ?>;
    }

    #adminmenu a, #adminmenu div.wp-menu-image:before, #collapse-menu, #collapse-menu #collapse-button div:after {
        color: <?php echo $c['17']; ?>;
    }

    #adminmenu .wp-submenu a:focus, #adminmenu .wp-submenu a:hover, #adminmenu a:hover, #adminmenu li.menu-top > a:focus, #adminmenu li:hover div.wp-menu-image:before, #adminmenu li.opensub a, #collapse-menu:hover, #collapse-menu:hover #collapse-button div:after {
        color: <?php echo $c['18']; ?>;
    }

    #adminmenu li.current a.menu-top, #adminmenu li.wp-has-current-submenu a.wp-has-current-submenu, #adminmenu .current div.wp-menu-image:before, #adminmenu .wp-has-current-submenu div.wp-menu-image:before, #adminmenu a.current:hover div.wp-menu-image:before, #adminmenu a.wp-has-current-submenu:hover div.wp-menu-image:before, #adminmenu li.wp-has-current-submenu:hover div.wp-menu-image:before {
        color: <?php echo $c['19']; ?>;
    }

    #adminmenu .wp-submenu .wp-submenu-head, .folded #adminmenu .wp-submenu .wp-submenu-head {
        color: <?php echo $c['27']; ?>;
    }

    #adminmenu .wp-has-current-submenu.opensub .wp-submenu .wp-submenu-head, .folded #adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head {
        color: <?php echo $c['28']; ?>;
    }

    .folded #adminmenu li.wp-has-current-submenu a.wp-has-current-submenu {
        background: <?php echo $c['26']; ?>;
    }

    @media only screen and (max-width: 960px) {
        .auto-fold #adminmenu li.wp-has-current-submenu a.wp-has-current-submenu, #adminmenu .wp-has-current-submenu.opensub .wp-submenu {
            background: <?php echo $c['26']; ?>;
        }
    }

    .folded #adminmenu .current div.wp-menu-image:before, .folded #adminmenu .wp-has-current-submenu div.wp-menu-image:before, .folded #adminmenu a.current:hover div.wp-menu-image:before, .folded #adminmenu a.wp-has-current-submenu:hover div.wp-menu-image:before, .folded #adminmenu li.wp-has-current-submenu:hover div.wp-menu-image:before {
        color: <?php echo $c['29']; ?>;
    }

    @media only screen and (max-width: 960px) {
        .auto-fold #adminmenu .current div.wp-menu-image:before, .auto-fold #adminmenu .wp-has-current-submenu div.wp-menu-image:before, .auto-fold #adminmenu a.current:hover div.wp-menu-image:before, .auto-fold #adminmenu a.wp-has-current-submenu:hover div.wp-menu-image:before, .auto-fold #adminmenu li.wp-has-current-submenu:hover div.wp-menu-image:before {
            color: <?php echo $c['29']; ?>;
        }
    }

    @media only screen and (max-width: 782px) {
        .auto-fold #adminmenu .current div.wp-menu-image:before, .auto-fold #adminmenu .wp-has-current-submenu div.wp-menu-image:before, .auto-fold #adminmenu a.current:hover div.wp-menu-image:before, .auto-fold #adminmenu a.wp-has-current-submenu:hover div.wp-menu-image:before, .auto-fold #adminmenu li.wp-has-current-submenu:hover div.wp-menu-image:before {
            color: <?php echo $c['19']; ?>;
        }
    }

    #adminmenu .wp-submenu a, #adminmenu .wp-has-current-submenu .wp-submenu a, #adminmenu .wp-has-current-submenu.opensub .wp-submenu a {
        color: <?php echo $c['23']; ?>;
    }

    #adminmenu .wp-submenu a:hover, #adminmenu .wp-has-current-submenu .wp-submenu a:hover, #adminmenu .wp-has-current-submenu.opensub .wp-submenu a:hover {
        color: <?php echo $c['24']; ?>;
    }

    #adminmenu .opensub .wp-submenu li.current a, #adminmenu .wp-submenu li.current, #adminmenu .wp-submenu li.current a, #adminmenu .wp-submenu li.current a:focus, #adminmenu .wp-submenu li.current a:hover, #adminmenu a.wp-has-current-submenu:focus + .wp-submenu li.current a {
        color: <?php echo $c['25']; ?>;
    }

    #adminmenu .wp-submenu {
        background: <?php echo $c['20']; ?>;
    }

    #adminmenu li.wp-has-submenu.wp-not-current-submenu.opensub:hover:after {
        border-right-color: <?php echo $c['20']; ?>;
    }

    #adminmenu .opensub .wp-submenu a {
        color: <?php echo $c['21']; ?>;
    }

    #adminmenu .opensub .wp-submenu a:hover {
        color: <?php echo $c['22']; ?>;
    }

    .folded #adminmenu .wp-has-current-submenu a:hover, .folded #adminmenu .wp-has-current-submenu.opensub .wp-submenu a:hover {
        color: <?php echo $c['31']; ?>;
    }

    .folded.sticky-menu #adminmenu .wp-has-current-submenu.opensub .wp-submenu a:hover {
        color: <?php echo $c['31']; ?>;
    }

    @media only screen and (max-width: 960px) {
        .sticky-menu #adminmenu .wp-has-current-submenu.opensub .wp-submenu a:hover {
            color: <?php echo $c['31']; ?>;
        }
    }

    .folded #adminmenu .wp-has-current-submenu a, .folded #adminmenu .wp-has-current-submenu.opensub .wp-submenu a {
        color: <?php echo $c['30']; ?>;
    }

    .folded.sticky-menu #adminmenu .wp-has-current-submenu.opensub .wp-submenu a {
        color: <?php echo $c['30']; ?>;
    }

    @media only screen and (max-width: 960px) {
        .sticky-menu #adminmenu .wp-has-current-submenu.opensub .wp-submenu a {
            color: <?php echo $c['30']; ?>;
        }
    }

    @media only screen and (max-width: 782px) {
        .folded #adminmenu .wp-has-current-submenu a, .folded #adminmenu .wp-has-current-submenu.opensub .wp-submenu a {
            color: <?php echo $c['23']; ?>;
        }

        .folded #adminmenu .wp-has-current-submenu a:hover, .folded #adminmenu .wp-has-current-submenu.opensub .wp-submenu a:hover {
            color: <?php echo $c['24']; ?>;
        }
    }

    .folded #adminmenu .wp-submenu li.current, .folded #adminmenu .wp-submenu li.current a, .folded #adminmenu .opensub .wp-submenu li.current, .folded #adminmenu .opensub .wp-submenu li.current a, .folded #adminmenu .opensub .wp-submenu li.current a:focus, .folded #adminmenu .opensub .wp-submenu li.current a:hover {
        color: <?php echo $c['32']; ?>;
    }

    @media only screen and (max-width: 960px) {
        #adminmenu .wp-submenu li.current a, #adminmenu .opensub .wp-submenu li.current, #adminmenu .opensub .wp-submenu li.current a, #adminmenu .opensub .wp-submenu li.current a:focus, #adminmenu .opensub .wp-submenu li.current a:hover {
            color: <?php echo $c['25']; ?>;
        }

        .sticky-menu #adminmenu .wp-submenu li.current a .sticky-menu #adminmenu .opensub .wp-submenu li.current, .sticky-menu #adminmenu .opensub .wp-submenu li.current a, .sticky-menu #adminmenu .opensub .wp-submenu li.current a:focus, .sticky-menu #adminmenu .opensub .wp-submenu li.current a:hover {
            color: <?php echo $c['32']; ?>;
        }
    }

    @media only screen and (max-width: 960px) {
        .sticky-menu #adminmenu .wp-has-current-submenu.opensub.wp-menu-open .wp-submenu, .sticky-menu #adminmenu .wp-menu-open.opensub .wp-submenu, .sticky-menu #adminmenu a.wp-has-current-submenu.wp-menu-open:focus + .wp-submenu, .sticky-menu .no-js li.wp-has-current-submenu.wp-menu-open:hover .wp-submenu {
            background: <?php echo $c['26']; ?>;
        }
    }

    .folded #adminmenu .wp-has-current-submenu .wp-submenu, .folded #adminmenu .wp-has-current-submenu.opensub .wp-submenu, .folded #adminmenu a.wp-has-current-submenu:focus + .wp-submenu, .folded #adminmenu a.wp-has-current-submenu.opensub:focus + .wp-submenu, .folded #adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head, .folded #adminmenu .wp-has-current-submenu.opensub .wp-submenu .wp-submenu-head, .folded #adminmenu .wp-menu-arrow, .folded #adminmenu .wp-menu-arrow div, .folded #adminmenu li.current a.menu-top, .folded #adminmenu li.wp-has-current-submenu a.wp-has-current-submenu, .folded #adminmenu li.current.menu-top, .folded #adminmenu li.wp-has-current-submenu {
        background: <?php echo $c['26']; ?>;
        color: <?php echo $c['28']; ?>;
    }

    .folded #adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head, .folded #adminmenu .wp-has-current-submenu.opensub .wp-submenu .wp-submenu-head {
        background: none;
    }

    @media only screen and (max-width: 782px) {
        .folded #adminmenu .wp-has-current-submenu .wp-submenu, .folded #adminmenu .wp-has-current-submenu.opensub .wp-submenu, .folded #adminmenu a.wp-has-current-submenu:focus + .wp-submenu, .folded #adminmenu a.wp-has-current-submenu.opensub:focus + .wp-submenu, .folded #adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head, .folded #adminmenu .wp-has-current-submenu.opensub .wp-submenu .wp-submenu-head, .folded #adminmenu .wp-menu-arrow, .folded #adminmenu .wp-menu-arrow div, .folded #adminmenu li.current a.menu-top, .folded #adminmenu li.wp-has-current-submenu a.wp-has-current-submenu, .folded #adminmenu li.current.menu-top, .folded #adminmenu li.wp-has-current-submenu {
            background: none;
            color: <?php echo $c['19']; ?>;
        }
    }

    @media only screen and (max-width: 960px) {
        #adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head, #adminmenu .wp-menu-arrow, #adminmenu .wp-menu-arrow div, #adminmenu li.current a.menu-top, .folded #adminmenu li.current.menu-top, .folded #adminmenu li.wp-has-current-submenu {
            background: <?php echo $c['26']; ?>;
            color: <?php echo $c['28']; ?>;
        }
    }

    @media only screen and (max-width: 782px) {
        #adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head, #adminmenu .wp-menu-arrow, #adminmenu .wp-menu-arrow div, #adminmenu li.current a.menu-top, .wp-responsive-open #adminmenu li.current a.menu-top, .folded #adminmenu .wp-has-current-submenu .wp-submenu, .folded #adminmenu a.wp-has-current-submenu:focus + .wp-submenu, .folded #adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head, .folded #adminmenu li.current.menu-top, .folded #adminmenu li.wp-has-current-submenu {
            background: none;
            color: <?php echo $c['19']; ?>;
        }
    }

    #adminmenu .awaiting-mod, #adminmenu .update-plugins, #sidemenu li a span.update-plugins, #adminmenu li a.wp-has-current-submenu .update-plugins, #adminmenu li.current a .awaiting-mod {
        background: <?php echo $c['16']; ?>;
        color: <?php echo $c['15']; ?>;
    }

    #wpadminbar {
        background-color: <?php echo $c['33']; ?>;
    }

    #wpadminbar .ab-top-menu > li.hover > .ab-item, #wpadminbar .ab-top-menu > li:hover > .ab-item, #wpadminbar .ab-top-menu > li > .ab-item:focus, #wpadminbar.nojq .quicklinks .ab-top-menu > li > .ab-item:focus, #wpadminbar .menupop .ab-sub-wrapper, #wpadminbar .quicklinks .menupop ul.ab-sub-secondary, #wpadminbar .quicklinks .menupop ul.ab-sub-secondary .ab-submenu, .wp-responsive-open #wpadminbar #wp-admin-bar-menu-toggle a {
        background: <?php echo $c['34']; ?>;
    }

    #wpadminbar #adminbarsearch:before, #wpadminbar .ab-icon:before, #wpadminbar .ab-item:before, #wpadminbar a.ab-item, #wpadminbar > #wp-toolbar span.ab-label, #wpadminbar > #wp-toolbar span.noticon {
        color: <?php echo $c['35']; ?>;
    }

    #wpadminbar li .ab-item:focus:before, #wpadminbar li a:focus .ab-icon:before, #wpadminbar li.hover .ab-icon:before, #wpadminbar li.hover .ab-item:before, #wpadminbar li:hover #adminbarsearch:before, #wpadminbar li:hover .ab-icon:before, #wpadminbar li:hover .ab-item:before, #wpadminbar > #wp-toolbar a:focus span.ab-label, #wpadminbar > #wp-toolbar li.hover span.ab-label, #wpadminbar > #wp-toolbar li:hover span.ab-label, #wpadminbar .ab-top-menu > li.hover > .ab-item, #wpadminbar .ab-top-menu > li:hover > .ab-item {
        color: <?php echo $c['36']; ?>;
    }

    #wpadminbar .ab-submenu .ab-item, #wpadminbar .quicklinks .menupop ul li a, #wpadminbar .quicklinks .menupop ul li a strong, #wpadminbar .quicklinks .menupop.hover ul li a, #wpadminbar.nojs .quicklinks .menupop:hover ul li a {
        color: <?php echo $c['37']; ?>;
    }

    #wpadminbar .quicklinks .menupop ul li a:focus, #wpadminbar .quicklinks .menupop ul li a:focus strong, #wpadminbar .quicklinks .menupop ul li a:hover, #wpadminbar .quicklinks .menupop ul li a:hover strong, #wpadminbar .quicklinks .menupop.hover ul li a:focus, #wpadminbar .quicklinks .menupop.hover ul li a:hover, #wpadminbar.nojs .quicklinks .menupop:hover ul li a:focus, #wpadminbar.nojs .quicklinks .menupop:hover ul li a:hover {
        color: <?php echo $c['38']; ?>;
    }

    #wpfooter {
        background-color: <?php echo $c['39']; ?>;
        color: <?php echo $c['40']; ?>;
    }

    #wpfooter a {
        color: <?php echo $c['41']; ?>;
    }

    #wpfooter a:hover {
        color: <?php echo $c['42']; ?>;
    }

    a, .view-switch a.current:before {
        color: <?php echo $c['45']; ?>;
    }

    a:hover {
        color: <?php echo $c['46']; ?>;
    }

    #poststuff #post-body.columns-2 #side-sortables, .comment-php #submitdiv, #postbox-container-2, .howto, .ac_match, .subsubsub a.current {
        color: <?php echo $c['43']; ?>;
    }

    span.wp-media-buttons-icon:before, .post-format-icon:before, .post-state-format:before, input[type=radio]:checked + label:before, input[type=checkbox]:checked:before {
        color: <?php echo $c['43']; ?>;
    }

    .insert-media.add_media:hover span.wp-media-buttons-icon:before {
        color: <?php echo $c['56']; ?>;
    }

    input[type=radio]:checked:before {
        background: <?php echo $c['43']; ?>;
    }

    .accordion-section-title:after, .handlediv, .item-edit, .sidebar-name-arrow, .widget-action {
        color: <?php echo $c['43']; ?>;
    }

    .wrap h2, #poststuff h3, .welcome-panel-content h3, #dashboard-widgets-wrap h3, .widefat tfoot tr th, .widefat thead tr th, th.manage-column a, th.sortable a:active, th.sortable a:focus, th.sortable a:hover {
        color: <?php echo $c['44']; ?>;
    }

    input[type=checkbox]:focus, input[type=color]:focus, input[type=date]:focus, input[type=datetime-local]:focus, input[type=datetime]:focus, input[type=email]:focus, input[type=month]:focus, input[type=number]:focus, input[type=password]:focus, input[type=radio]:focus, input[type=search]:focus, input[type=tel]:focus, input[type=text]:focus, input[type=time]:focus, input[type=url]:focus, input[type=week]:focus, select:focus, textarea:focus {
        border-color: <?php echo $c['46']; ?>;
    }

    .tablenav .tablenav-pages a:focus, .tablenav .tablenav-pages a:hover {
        background: <?php echo $c['46']; ?>;
        color: #fff;
    }

    #side-sortablesback, .comment-php #submitdiv-back, #poststuff #post-body.columns-2 #side-sortables, .comment-php #submitdiv, #normal-sortables .postbox, #dashboard-widgets-wrap #normal-sortables .postbox, #dashboard-widgets-wrap #side-sortables .postbox, #dashboard-widgets-wrap #column3-sortables .postbox, #dashboard-widgets-wrap #column4-sortables .postbox, #dashboard-widgets-wrap #column5-sortables .postbox, #contextual-help-link-wrap, #screen-options-link-wrap {
        background-color: <?php echo $c['61']; ?>;
        color: <?php echo $c['62']; ?>;
    }

    @media only screen and (max-width: 850px) {
        .postbox {
            background-color: <?php echo $c['61']; ?>;
            color: <?php echo $c['62']; ?>;
        }
    }

    .wp-list-table tr:hover, table.comments tr:hover, .edit-tags-php #col-left, #col-leftback {
        background: <?php echo $c['47']; ?>;
    }

    #poststuff h3 {
        color: <?php echo $c['63']; ?>;
    }

    .postbox #misc-publishing-actions label[for=post_status]:before, #post-body .postbox #visibility:before, #post-body .postbox .misc-pub-revisions:before, .postbox .curtime #timestamp:before {
        color: <?php echo $c['66']; ?>;
    }

    .postbox .howto, .postbox input[type=radio]:checked:before, .postbox input[type=checkbox]:checked:before {
        color: <?php echo $c['62']; ?>;
    }

    .postbox a {
        color: <?php echo $c['64']; ?>;
    }

    .postbox a:hover {
        color: <?php echo $c['65']; ?>;
    }

    .postbox input[type=checkbox]:focus, .postbox input[type=color]:focus, .postbox input[type=date]:focus, .postbox input[type=datetime-local]:focus, .postbox input[type=datetime]:focus, .postbox input[type=email]:focus, .postbox input[type=month]:focus, .postbox input[type=number]:focus, .postbox input[type=password]:focus, .postbox input[type=radio]:focus, .postbox input[type=search]:focus, .postbox input[type=tel]:focus, .postbox input[type=text]:focus, .postbox input[type=time]:focus, .postbox input[type=url]:focus, .postbox input[type=week]:focus, .postbox select:focus, .postbox textarea:focus {
        border-color: <?php echo $c['64']; ?>;
    }

    .postbox .accordion-section-title:after, .postbox .handlediv, .postbox .item-edit, .postbox .sidebar-name-arrow, .postbox .widget-action {
        color: <?php echo $c['63']; ?>;
    }

    .postbox .accordion-section-title:after:hover, .postbox .handlediv:hover, .postbox .item-edit:hover, .postbox .sidebar-name-arrow:hover, .postbox .widget-action:hover {
        color: <?php echo $c['65']; ?>;
    }

    .postbox {
        border-color: <?php echo $c['67']; ?>;
    }

    .wp-core-ui .button.button-primary {
        background: <?php echo $c['49']; ?>;
        border-color: <?php echo $c['49']; ?>;
        color: <?php echo $c['50']; ?>;
    }

    .wp-core-ui .button.button-primary:hover, .wrap .add-new-h2:hover, .wrap .page-title-action:hover {
        background: <?php echo $c['51']; ?>;
        border-color: <?php echo $c['51']; ?>;
        color: <?php echo $c['52']; ?>;
    }

    .wp-core-ui .button, .wp-core-ui .button-secondary, .comment-php #minor-publishing .button {
        background: <?php echo $c['53']; ?>;
        border-color: <?php echo $c['53']; ?>;
        color: <?php echo $c['54']; ?>;
    }

    .comment-php #minor-publishing .button:hover, .wp-core-ui .button-secondary:focus, .wp-core-ui .button-secondary:hover, .wp-core-ui .button.focus, .wp-core-ui .button.hover, .wp-core-ui .button:focus, .wp-core-ui .button:hover {
        background: <?php echo $c['55']; ?>;
        border-color: <?php echo $c['55']; ?>;
        color: <?php echo $c['56']; ?>;
    }

    .wp-switch-editor.switch-html, .wp-switch-editor:hover {
        background: <?php echo $c['48']; ?> !important;
    }

    .html-active .switch-html, .tmce-active .switch-tmce {
        background: <?php echo $c['53']; ?> !important;
    }

    .wrap .add-new-h2, .wrap .add-new-h2:active {
        background: <?php echo $c['49']; ?>;
        color: <?php echo $c['50']; ?>;
    }

    .wrap .add-new-h2:hover {
        background: <?php echo $c['51']; ?>;
        color: <?php echo $c['52']; ?>;
    }

    .wp-core-ui .postbox .button.button-primary {
        background: <?php echo $c['68']; ?>;
        border-color: <?php echo $c['68']; ?>;
        color: <?php echo $c['69']; ?>;
    }

    .wp-core-ui .postbox .button.button-primary:hover {
        background: <?php echo $c['70']; ?>;
        border-color: <?php echo $c['70']; ?>;
        color: <?php echo $c['71']; ?>;
    }

    .wp-core-ui .postbox .button, .wp-core-ui .postbox .button-secondary, .comment-php .postbox #minor-publishing .button {
        background: <?php echo $c['72']; ?>;
        border-color: <?php echo $c['72']; ?>;
        color: <?php echo $c['73']; ?>;
    }

    .wp-core-ui .postbox .button:hover, .comment-php .postbox #minor-publishing .button:hover, .wp-core-ui .postbox .button-secondary:focus, .wp-core-ui .postbox .button-secondary:hover, .wp-core-ui .postbox .button.focus, .wp-core-ui .postbox .button.hover, .wp-core-ui .postbox .button:focus, .wp-core-ui .postbox .button:hover {
        background: <?php echo $c['74']; ?>;
        border-color: <?php echo $c['74']; ?>;
        color: <?php echo $c['75']; ?>;
    }

    #screen-meta-links a, #screen-meta-links button, #screen-meta-links a.show-settings, #screen-meta-links button.show-settings {
        color: <?php echo $c['58']; ?>;
        background: <?php echo $c['57']; ?> !important;
    }

    #screen-meta-links a:hover, #screen-meta-links button.show-settings:hover {
        color: <?php echo $c['60']; ?>;
        background: <?php echo $c['59']; ?> !important;
    }

    #screen-meta-links a.show-settings:after, #screen-meta-links button.show-settings:after {
        color: <?php echo $c['58']; ?>;
    }

    #screen-meta-links a:hover:after, #screen-meta-links button:hover:after {
        color: <?php echo $c['60']; ?>;
    }

    .wrap h2, #post-body-content > h2, .widefat thead th, .widefat tfoot th, .slate-settings .pageSection section, #undefined__colorSchemes .colorNav ul, #welcome-panel, #wp-content-editor-tools, .wp-editor-expand #wp-content-editor-tools {
        border-color: <?php echo $c['48']; ?>;
    }

    .nav-tab {
        background: <?php echo $c['48']; ?>;
        border-color: <?php echo $c['48']; ?>;
        color: <?php echo $c['43']; ?>;
    }

    .nav-tab:hover {
        color: <?php echo $c['43']; ?>;

    /* Post State */
    .post-state, .admin-color-fresh .post-state {
        background: <?php echo $c['76']; ?>;
    }

    }</style>
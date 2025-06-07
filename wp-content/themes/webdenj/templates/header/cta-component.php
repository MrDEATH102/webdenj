<div class="cta__header">
    <div class="cta__header__right">
        <a href="#!" class="cta__header__right--search cta__header__item">
            <svg fill="#7454fc" width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M11,2 C15.9705627,2 20,6.02943725 20,11 C20,13.124779 19.2636898,15.0775836 18.0323074,16.6171757 L21.7071068,20.2928932 C22.0976311,20.6834175 22.0976311,21.3165825 21.7071068,21.7071068 C21.3466228,22.0675907 20.7793918,22.0953203 20.3871006,21.7902954 L20.2928932,21.7071068 L16.6171757,18.0323074 C15.0775836,19.2636898 13.124779,20 11,20 C6.02943725,20 2,15.9705627 2,11 C2,6.02943725 6.02943725,2 11,2 Z M11,4 C7.13400675,4 4,7.13400675 4,11 C4,14.8659932 7.13400675,18 11,18 C14.8659932,18 18,14.8659932 18,11 C18,7.13400675 14.8659932,4 11,4 Z" />
            </svg>
        </a>
        <a href="#!" class="cta__header__right--mode cta__header__item">
            <svg class="moon" width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M2.02997 12.42C2.38997 17.57 6.75997 21.76 11.99 21.99C15.68 22.15 18.98 20.43 20.96 17.72C21.78 16.61 21.34 15.87 19.97 16.12C19.3 16.24 18.61 16.29 17.89 16.26C13 16.06 8.99997 11.97 8.97997 7.14002C8.96997 5.84002 9.23997 4.61002 9.72997 3.49002C10.27 2.25002 9.61997 1.66002 8.36997 2.19002C4.40997 3.86002 1.69997 7.85002 2.02997 12.42Z"
                    stroke="#7454fc" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
        </a>
        <a href="<?php bloginfo('url') ?>/cart" class="cta__header__right--cart cta__header__item">
            <svg width="20px" height="20px" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.17708 2.08333L5.40625 5.86458" stroke="#7454fc" stroke-width="1.5" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M15.8229 2.08333L19.5937 5.86458" stroke="#7454fc" stroke-width="1.5" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round"></path>
                <path
                    d="M2.08337 8.17708C2.08337 6.25 3.11462 6.09375 4.39587 6.09375H20.6042C21.8855 6.09375 22.9167 6.25 22.9167 8.17708C22.9167 10.4167 21.8855 10.2604 20.6042 10.2604H4.39587C3.11462 10.2604 2.08337 10.4167 2.08337 8.17708Z"
                    stroke="#7454fc" stroke-width="1.5"></path>
                <path d="M10.1666 14.5833V18.2812" stroke="#7454fc" stroke-width="1.5" stroke-linecap="round"></path>
                <path d="M14.9584 14.5833V18.2812" stroke="#7454fc" stroke-width="1.5" stroke-linecap="round"></path>
                <path
                    d="M3.64587 10.4167L5.11462 19.4167C5.44796 21.4375 6.25004 22.9167 9.22921 22.9167H15.5105C18.75 22.9167 19.2292 21.5 19.6042 19.5417L21.3542 10.4167"
                    stroke="#7454fc" stroke-width="1.5" stroke-linecap="round"></path>
            </svg>
            <span class="cart_count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
        </a>
    </div>
    <div class="cta__header__left">
        <?php
        if (is_user_logged_in()): ?>
            <a class="cta__header__left--login loggedin">
                <?php
                $user = wp_get_current_user();
                $user_id = $user->ID;
                $dispay_name = $user->display_name;
                ?>
                <?php
                echo $dispay_name;
                ?>
            </a>
        <?php else: ?>
            <a href="<?php bloginfo('url') ?>/my-account" class="cta__header__left--login">
                <i class="fa-light fa-user-unlock"></i>
                پنل کاربری
            </a>
        <?php endif; ?>
    </div>
</div>
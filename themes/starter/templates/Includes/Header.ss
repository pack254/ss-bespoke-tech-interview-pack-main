<header class="header">
    <nav class="container">
        <div class="header__title">
            <a href="$BaseHref" class="header__title-link">$SiteConfig.Title</a>
        </div>
        <ul class="header__items">
            <% loop $Menu(1) %>
                <li class="nav-item">
                    <a class="nav-item__link" href="$Link">$MenuTitle</a>
                </li>
            <% end_loop %>
            
        </ul>
        
        <button @click="openMobileMenu" class="header__menu-button">Open menu</button>

        <flyout-panel
            :open="mobileMenuOpen"
            @close="closeMobileMenu"
        >
            <h1>Navigation links</h1>
            <ul class="header__mobile-items">
                <% loop $Menu(1) %>
                    <li class="nav-item">
                        <a class="nav-item__link" href="$Link">$MenuTitle</a>
                    </li>
                <% end_loop %>
            </ul>
        </flyout-panel>
    </nav>
</header>

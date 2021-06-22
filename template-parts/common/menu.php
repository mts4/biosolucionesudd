<section class="menu">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <?php $menu_nav = get_field("menu_nav", "option"); ?>
            <a class="navbar-brand menu__logo" style="background-image: url(<?= $menu_nav["logo_menu"]["sizes"]["medium"]; ?>)" href="<?= get_site_url(); ?>">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <?php foreach ($menu_nav["menu"] as $menu) : ?>
                        <?php if ($menu["type_menu"] === "normal") : ?>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="<?php echo ($menu["link_site_external"] === "site") ? $menu["link_site"] : $menu["link_external"]; ?>"><?= $menu["title"] ?></a>
                            </li>
                        <?php elseif ($menu["type_menu"] === "submenu") : ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?= $menu["title"] ?>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <?php foreach ($menu["sub_menu"] as $sub_menu) : ?>
                                        <li>
                                            <a class="dropdown-item" href="<?php echo ($sub_menu["link_site_external"] === "site") ? $sub_menu["link_site"] : $sub_menu["link_external"]; ?>" target="_blank"><?= $sub_menu["titulo"] ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            </div>
        </nav>
    </div>
</section>
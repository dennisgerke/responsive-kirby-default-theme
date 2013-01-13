<a href="#menu" class="menu-link">&#9776;</a>

<nav id="menu" role="navigation">
  <ul>
    <?php foreach($pages->visible() AS $p): ?>
    <li><a<?php echo ($p->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a></li>
    <?php endforeach ?>
  </ul>
</nav>
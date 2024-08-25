<?php include(__DIR__ . '/inc/header.php'); ?>

<div class="row">
  <div class="col-md-12">
    <?php foreach($entry as $row): ?>
    <div class="card border-0" itemscope itemtype="https://schema.org/BlogPosting">
      <div class="card-body">
        <h1 class="card-title fw-bold fs-4 text-start" itemprop="name"><a href="<?php echo $router->getUrl([\Chriskapp\Blog\Controller\Detail::class, 'show'], ['title' => $row->title_slug]); ?>"><?php echo $row->title; ?></a></h1>
        <p><small>posted by <a href="<?php echo $row->author_uri; ?>"><?php echo $row->author_name; ?></a> on <time datetime="<?php echo $row->updated; ?>" itemprop="datePublished"><?php echo $row->updated; ?></time></small></p>
        <div itemprop="articleSection"><?php echo $row->summary; ?></div>
        <div class="mt-3"><?php foreach(explode(',', $row->category) as $category): ?><span class="badge rounded-pill text-bg-primary"><?php echo $category; ?></span><?php endforeach; ?></div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</div>

<nav class="text-center mt-3">
  <a href="<?php echo $links[1]->href; ?>" class="btn btn-secondary"><span aria-hidden="true">&larr;</span> Previous</a>
  <a href="<?php echo $links[2]->href; ?>" class="btn btn-secondary">Next <span aria-hidden="true">&rarr;</span></a>
</nav>

<?php include(__DIR__ . '/inc/footer.php'); ?>


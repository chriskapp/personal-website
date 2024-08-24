<?php include(__DIR__ . '/../inc/header.php'); ?>

<div class="row">
  <div class="col-md-12">
    <div class="card border-0" itemscope itemtype="https://schema.org/BlogPosting">
      <div class="card-body">
        <h1 class="card-title fw-bold fs-4 text-start" itemprop="name"><?php echo $entry->title; ?></h1>
        <p><small>posted by <a href="<?php echo $entry->author_uri; ?>"><?php echo $entry->author_name; ?></a> on <time datetime="<?php echo $entry->updated; ?>" itemprop="datePublished"><?php echo $entry->updated; ?></time></small></p>
        <div itemprop="articleBody"><?php echo $entry->content; ?></div>
        <div class="mt-3"><?php foreach(explode(',', $entry->category) as $category): ?><span class="badge rounded-pill text-bg-primary"><?php echo $category; ?></span><?php endforeach; ?></div>
      </div>
    </div>
  </div>
</div>

<?php include(__DIR__ . '/../inc/footer.php'); ?>

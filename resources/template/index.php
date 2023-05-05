<?php include(__DIR__ . '/inc/header.php'); ?>

<div class="row">
  <div class="col-md-12">
    <div class="card border-0" itemscope itemtype="https://schema.org/Person">
      <div class="card-body">
        <img src="<?php echo $base ?>/img/avatar_nature.jpg" width="140" alt="logo" itemprop="image" class="img-thumbnail ms-4 rounded float-end" />
        <h5 class="card-title fw-bold" itemprop="name"><a href="<?php echo $url ?>" itemprop="url">Christoph Kappestein</a></h5>
        <p class="card-text" itemprop="description">
          <?php foreach ($about as $line): ?>
            <p><?php echo $line; ?></p>
          <?php endforeach; ?>
        </p>
        <a class="github-button" href="https://github.com/sponsors/chriskapp" data-icon="octicon-heart" data-size="large" aria-label="Sponsor @chriskapp on GitHub">Sponsor</a>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h2>Open-Source:</h2>
    <ul>
      <?php foreach ($projects->opensource as $project): ?>
        <?php if ($project->status == 1): ?>
        <li>
          <a href="<?php echo $project->href; ?>"><?php echo $project->name; ?></a><br><span><?php echo $project->description; ?></span>
        </li>
        <?php else: ?>
        <li>
          <a href="<?php echo $project->href; ?>"><s><?php echo $project->name; ?></s></a><br><span><?php echo $project->description; ?></span>
        </li>
        <?php endif; ?>
      <?php endforeach; ?>
    </ul>
    <h2>Github:</h2>
    <ul>
      <?php foreach ($projects->github as $project): ?>
        <?php if ($project->status == 1): ?>
        <li>
          <div style="float:right">
            <a class="github-button" href="https://github.com/<?php echo $project->name; ?>" data-size="large" data-show-count="true" aria-label="Star <?php echo $project->name; ?> on GitHub">Star</a>
          </div>
          <a href="<?php echo $project->href; ?>"><?php echo $project->name; ?></a><br>
          <span><?php echo $project->description; ?></span>
        </li>
        <?php else: ?>
        <li>
          <a href="<?php echo $project->href; ?>"><s><?php echo $project->name; ?></s></a><br><span><?php echo $project->description; ?></span>
        </li>
        <?php endif; ?>
      <?php endforeach; ?>
    </ul>
    <h2>Projects:</h2>
    <ul>
      <?php foreach ($projects->websites as $project): ?>
        <?php if ($project->status == 1): ?>
        <li>
          <a href="<?php echo $project->href; ?>"><?php echo $project->name; ?></a><br><span><?php echo $project->description; ?></span>
        </li>
        <?php else: ?>
        <li>
          <a href="<?php echo $project->href; ?>"><s><?php echo $project->name; ?></s></a><br><span><?php echo $project->description; ?></span>
        </li>
        <?php endif; ?>
      <?php endforeach; ?>
    </ul>
    <h2>Other:</h2>
    <ul>
      <?php foreach ($projects->other as $project): ?>
        <?php if ($project->status == 1): ?>
        <li>
          <a href="<?php echo $project->href; ?>"><?php echo $project->name; ?></a><br><span><?php echo $project->description; ?></span>
        </li>
        <?php else: ?>
        <li>
          <a href="<?php echo $project->href; ?>"><s><?php echo $project->name; ?></s></a><br><span><?php echo $project->description; ?></span>
        </li>
        <?php endif; ?>
      <?php endforeach; ?>
    </ul>
    <h2>Contact:</h2>
    <ul>
      <li>
        You can <a href="https://www.apioo.de/en/contact">contact me</a> directly
      </li>
      <li>
        To send me an encrypted mail use the following <a href="<?php echo $base ?>/pub.key">Public-Key</a>
      </li>
    </ul>
  </div>
</div>

<?php include(__DIR__ . '/inc/footer.php'); ?>


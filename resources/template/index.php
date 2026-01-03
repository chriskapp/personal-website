<?php include(__DIR__ . '/inc/header.php'); ?>

<div class="row">
  <div class="col-md-12">
    <div class="card border-0" itemscope itemtype="https://schema.org/Person">
      <div class="card-body">
        <img src="<?php echo $base ?>/img/avatar_nature.jpg" width="140" alt="logo" class="img-thumbnail ms-4 rounded float-end" />
        <h1 class="card-title fw-bold fs-4 text-start"><a href="<?php echo $url ?>">Christoph Kappestein</a></h1>
        <p class="card-text">
          <?php foreach ($profile->about as $line): ?>
            <p><?php echo $line; ?></p>
          <?php endforeach; ?>
        </p>
        <a class="github-button" href="https://github.com/sponsors/chriskapp" data-icon="octicon-heart" data-size="large" aria-label="Sponsor @chriskapp on GitHub">Sponsor</a>
        <h2 class="mt-3">Open-Source:</h2>
        <ul>
          <?php foreach ($profile->projects->opensource as $project): ?>
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
          <?php foreach ($profile->projects->github as $project): ?>
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
          <?php foreach ($profile->projects->projects as $project): ?>
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
        <h2>Social:</h2>
        <ul>
          <?php foreach ($profile->projects->social as $project): ?>
            <?php if ($project->status == 1): ?>
            <li>
              <a <?php echo isset($project->rel) ? 'rel="' . $project->rel . '" ' : ''; ?>href="<?php echo $project->href; ?>"><?php echo $project->name; ?></a><br><span><?php echo $project->description; ?></span>
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
          <li>You can <a href="https://www.apioo.de/en/contact">contact me</a> directly</li>
          <li>To send me an encrypted mail use the following <a href="<?php echo $base ?>/pub.key">Public-Key</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Person",
    "url": "https://chrisk.app",
    "name": "Christoph Kappestein",
    "image": "https://chrisk.app/img/avatar_nature.jpg",
    "description": "<?php echo $profile->about[0] ?? ''; ?>",
    "givenName": "Christoph",
    "familyName": "Kappestein",
    "jobTitle": "Developer",
    "birthDate": "1986-10-09",
    "owns": {
      "@type": "Organization",
      "@id": "https://apioo.de/"
    }
  }
</script>

<?php include(__DIR__ . '/inc/footer.php'); ?>


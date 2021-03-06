<?php include(__DIR__ . '/inc/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <header class="h-card">
            <h1><a href="<?php echo $url ?>" class="p-name u-url">Christoph Kappestein</a></h1>
            <div class="media">
                <div class="pull-left">
                    <img src="<?php echo $base ?>/img/avatar_real.jpg" width="140" alt="logo" class="media-object u-photo" />
                </div>
                <div class="media-body">
                    <p><?php echo $about; ?></p>
                    <a class="github-button" href="https://github.com/sponsors/chriskapp" data-icon="octicon-heart" data-size="large" aria-label="Sponsor @chriskapp on GitHub">Sponsor</a>
                </div>
            </div>
        </header>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <h2>Projects:</h2>
        <ul>
            <?php foreach($projects->opensource as $project): ?>
                <?php if($project->status == 1): ?>
                <li><a href="<?php echo $project->href; ?>"><?php echo $project->name; ?></a><br><span><?php echo $project->description; ?></span></li>
                <?php else: ?>
                <li><a href="<?php echo $project->href; ?>"><s><?php echo $project->name; ?></s></a><br><span><?php echo $project->description; ?></span></li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
        <h2>Github:</h2>
        <ul>
            <?php foreach($projects->github as $project): ?>
                <?php if($project->status == 1): ?>
                <li>
                  <div style="float:right"><a class="github-button" href="https://github.com/<?php echo $project->name; ?>" data-size="large" data-show-count="true" aria-label="Star <?php echo $project->name; ?> on GitHub">Star</a></div>
                  <a href="<?php echo $project->href; ?>"><?php echo $project->name; ?></a><br>
                  <span><?php echo $project->description; ?></span>
                </li>
                <?php else: ?>
                <li><a href="<?php echo $project->href; ?>"><s><?php echo $project->name; ?></s></a><br><span><?php echo $project->description; ?></span></li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
        <h2>Websites:</h2>
        <ul>
            <?php foreach($projects->websites as $project): ?>
                <?php if($project->status == 1): ?>
                <li><a href="<?php echo $project->href; ?>"><?php echo $project->name; ?></a><br><span><?php echo $project->description; ?></span></li>
                <?php else: ?>
                <li><a href="<?php echo $project->href; ?>"><s><?php echo $project->name; ?></s></a><br><span><?php echo $project->description; ?></span></li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
        <h2>Other:</h2>
        <ul>
            <?php foreach($projects->other as $project): ?>
                <?php if($project->status == 1): ?>
                <li><a href="<?php echo $project->href; ?>"><?php echo $project->name; ?></a><br><span><?php echo $project->description; ?></span></li>
                <?php else: ?>
                <li><a href="<?php echo $project->href; ?>"><s><?php echo $project->name; ?></s></a><br><span><?php echo $project->description; ?></span></li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
        <h2>My PGP key:</h2>
        <ul>
            <li>
                You can send me an <a href="<?php echo htmlspecialchars($contact->href); ?>">email</a>, my fingerprint is:<br><?php echo $contact->fingerprint; ?>
            </li>
        </ul>
    </div>
</div>

<?php include(__DIR__ . '/inc/footer.php'); ?>


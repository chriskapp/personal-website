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
                    <iframe src="https://github.com/sponsors/chriskapp/button" title="Sponsor chriskapp" height="35" width="107" style="border: 0;"></iframe>
                </div>
            </div>
        </header>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <h2>My open-source projects:</h2>
        <ul>
            <?php foreach($projects->opensource as $project): ?>
                <?php if($project->status == 1): ?>
                <li><a href="<?php echo $project->href; ?>"><?php echo $project->name; ?></a><br><span><?php echo $project->description; ?></span></li>
                <?php else: ?>
                <li><a href="<?php echo $project->href; ?>"><s><?php echo $project->name; ?></s></a><br><span><?php echo $project->description; ?></span></li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
        <h2>My websites:</h2>
        <ul>
            <?php foreach($projects->websites as $website): ?>
                <?php if($website->status == 1): ?>
                <li><a href="<?php echo $website->href; ?>"><?php echo $website->name; ?></a><br><span><?php echo $website->description; ?></span></li>
                <?php else: ?>
                <li><a href="<?php echo $website->href; ?>"><s><?php echo $website->name; ?></s></a><br><span><?php echo $website->description; ?></span></li>
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


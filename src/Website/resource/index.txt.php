<pre>
# Christoph Kappestein

<?php echo $about; ?>


## Projects:

<?php foreach($projects->opensource as $project): ?>
  * <?php echo $project->name; ?> (<?php echo $project->href; ?>)
    <?php echo $project->description; ?>


<?php endforeach; ?>

## Github:


<?php foreach($projects->github as $project): ?>
  * <?php echo $project->name; ?> (<?php echo $project->href; ?>)
    <?php echo $project->description; ?>


<?php endforeach; ?>

## Websites:

<?php foreach($projects->websites as $project): ?>
  * <?php echo $project->name; ?> (<?php echo $project->href; ?>)
    <?php echo $project->description; ?>


<?php endforeach; ?>

## Other:

<?php foreach($projects->other as $project): ?>
  * <?php echo $project->name; ?> (<?php echo $project->href; ?>)
    <?php echo $project->description; ?>


<?php endforeach; ?>

## My PGP key:

You can send me an email:

Contact: <?php echo $contact->href; ?>

Fingerprint: <?php echo $contact->fingerprint; ?>

</pre>
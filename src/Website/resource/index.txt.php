<pre>
# Christoph Kappestein

<?php echo $about; ?>


## My open-source projects:

<?php foreach($projects->opensource as $project): ?>
  * <?php echo $project->name; ?> (<?php echo $project->href; ?>)
    <?php echo $project->description; ?>


<?php endforeach; ?>

## My websites:

<?php foreach($projects->websites as $project): ?>
  * <?php echo $project->name; ?> (<?php echo $project->href; ?>)
    <?php echo $project->description; ?>


<?php endforeach; ?>

## My PGP key:

You can send me an email:

Contact: <?php echo $contact->href; ?>

Fingerprint: <?php echo $contact->fingerprint; ?>

</pre>
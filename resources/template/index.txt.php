<pre>
# Christoph Kappestein

<?php foreach($profile->about as $line): ?>
<?php echo wordwrap($line, 120); ?>


<?php endforeach; ?>

## Open-Source:

<?php foreach($profile->projects->opensource as $project): ?>
  * <?php echo $project->name; ?> (<?php echo $project->href; ?>)
    <?php echo $project->description; ?>


<?php endforeach; ?>

## Github:

<?php foreach($profile->projects->github as $project): ?>
  * <?php echo $project->name; ?> (<?php echo $project->href; ?>)
    <?php echo $project->description; ?>


<?php endforeach; ?>

## Projects:

<?php foreach($profile->projects->projects as $project): ?>
  * <?php echo $project->name; ?> (<?php echo $project->href; ?>)
    <?php echo $project->description; ?>


<?php endforeach; ?>

## Social:

<?php foreach($profile->projects->social as $project): ?>
  * <?php echo $project->name; ?> (<?php echo $project->href; ?>)
    <?php echo $project->description; ?>


<?php endforeach; ?>

## Contact:

You can contact me directly at:
https://www.apioo.de/en/contact

To send me an encrypted mail use the following Public-Key:
<?php echo $url ?>pub.key

</pre>
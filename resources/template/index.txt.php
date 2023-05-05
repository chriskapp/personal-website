<pre>
# Christoph Kappestein

<?php foreach($about as $line): ?>
<?php echo $line; ?>


<?php endforeach; ?>

## Open-Source:

<?php foreach($projects->opensource as $project): ?>
  * <?php echo $project->name; ?> (<?php echo $project->href; ?>)
    <?php echo $project->description; ?>


<?php endforeach; ?>

## Github:

<?php foreach($projects->github as $project): ?>
  * <?php echo $project->name; ?> (<?php echo $project->href; ?>)
    <?php echo $project->description; ?>


<?php endforeach; ?>

## Projects:

<?php foreach($projects->websites as $project): ?>
  * <?php echo $project->name; ?> (<?php echo $project->href; ?>)
    <?php echo $project->description; ?>


<?php endforeach; ?>

## Other:

<?php foreach($projects->other as $project): ?>
  * <?php echo $project->name; ?> (<?php echo $project->href; ?>)
    <?php echo $project->description; ?>


<?php endforeach; ?>

## Contact:

You can contact me directly at:
https://www.apioo.de/en/contact

To send me an encrypted mail use the following Public-Key:
<?php echo $url ?>pub.key

</pre>
<pre>
# Christoph Kappestein

<?php foreach($about as $line): ?>
<?php echo wordwrap($line, 80); ?>


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

<?php foreach($projects->projects as $project): ?>
  * <?php echo $project->name; ?> (<?php echo $project->href; ?>)
    <?php echo $project->description; ?>


<?php endforeach; ?>

## Social:

<?php foreach($projects->social as $project): ?>
  * <?php echo $project->name; ?> (<?php echo $project->href; ?>)
    <?php echo $project->description; ?>


<?php endforeach; ?>

## Contact:

You can contact me directly at:
https://www.apioo.de/en/contact

To send me an encrypted mail use the following Public-Key:
<?php echo $url ?>pub.key

</pre>
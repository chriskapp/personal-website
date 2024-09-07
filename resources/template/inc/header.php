<!DOCTYPE html>
<html>
<head>
    <title>Christoph Kappestein</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="psx" />
    <meta name="description" content="Personal website about Christoph Kappestein" />
    <link rel="icon" href="<?php echo $base; ?>/img/favicon.ico" type="image/x-icon" />
    <link href="<?php echo $base; ?>/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo $base; ?>/css/default.css" rel="stylesheet" media="screen" />
    <link type="text/plain" rel="author" href="<?php echo $url ?>humans.txt" />
    <link type="application/atom+xml" rel="alternate" href="<?php echo $router->getUrl([\Chriskapp\Blog\Controller\Feed::class, 'show']); ?>" />
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CD5HX0MS9D"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-CD5HX0MS9D', {anonymize_ip: true});
    </script>
    <?php if(isset($about)): ?><script async defer src="https://buttons.github.io/buttons.js"></script><?php endif; ?>
</head>
<body>

<div class="container">
  <nav class="navbar navbar-expand">
    <div class="container-fluid">
      <ul class="navbar-nav me-auto fw-bold">
        <li class="nav-item">
          <a class="nav-link active nav-separator" href="<?php echo $router->getUrl([\App\Controller\Index::class, 'show']); ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?php echo $router->getUrl([\Chriskapp\Blog\Controller\Index::class, 'show']); ?>">Blog</a>
        </li>
      </ul>
    </div>
  </nav>

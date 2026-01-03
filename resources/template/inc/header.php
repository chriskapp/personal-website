<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?? 'Christoph Kappestein'; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="psx" />
    <meta name="description" content="<?php echo $description ?? 'Software developer, API-enthusiast & open source contributor'; ?>" />
    <meta name="fediverse:creator" content="@chriskapp@phpc.social">
    <link rel="icon" href="<?php echo $base; ?>/img/favicon.ico" type="image/x-icon" />
    <link href="<?php echo $base; ?>/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo $base; ?>/css/default.css" rel="stylesheet" media="screen" />
    <link type="text/plain" rel="author" href="<?php echo $url ?>humans.txt" />
    <link type="application/atom+xml" rel="alternate" href="<?php echo $router->getUrl([\Chriskapp\Blog\Controller\Feed::class, 'show']); ?>" />
    <link rel="canonical" href="<?php echo $canonical ?? $url ?>" />
    <script>
      var _paq = window._paq = window._paq || [];
      _paq.push(['trackPageView']);
      _paq.push(['enableLinkTracking']);
      (function() {
          var u="//matomo.apioo.de/";
          _paq.push(['setTrackerUrl', u+'matomo.php']);
          _paq.push(['setSiteId', '2']);
          var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
          g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
      })();
    </script>
    <?php if(isset($profile)): ?><script async defer src="https://buttons.github.io/buttons.js"></script><?php endif; ?>
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


<div class="row">
    <div class="col-md-12">
        <footer>
            <p>powered by <a href="https://www.phpsx.org">PSX</a>
              | <a href="<?php echo $router->getUrl([\App\Controller\Text::class, 'show']); ?>">humans.txt</a>
              | <a href="<?php echo $router->getUrl([\App\Controller\Imprint::class, 'show']); ?>">Imprint</a>
              | <a href="<?php echo $router->getUrl([\Chriskapp\Blog\Controller\Feed::class, 'show']); ?>">Feed</a>
              | <a href="https://github.com/chriskapp/personal-website">GitHub</a>
            </p>
        </footer>
    </div>
</div>
</div>

</body>
</html>

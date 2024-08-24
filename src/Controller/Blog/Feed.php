<?php

namespace App\Controller\Blog;

use App\Controller\Blog;
use App\Table;
use App\Service\Slugify;
use PSX\Api\Attribute\Get;
use PSX\Api\Attribute\Path;
use PSX\Framework\Config\ConfigInterface;
use PSX\Framework\Controller\ControllerAbstract;
use PSX\Framework\Loader\ReverseRouter;
use PSX\Http\Environment\HttpResponse;

class Feed extends ControllerAbstract
{
    public function __construct(private ConfigInterface $config, private Table\Blog $blogTable, private ReverseRouter $reverseRouter)
    {
    }

    #[Get]
    #[Path('/feed')]
    public function show(): mixed
    {
        $dom = new \DOMDocument('1.0', 'utf-8');
        $dom->formatOutput = true;

        $feed = $dom->createElement('feed');
        $feed->setAttribute('xmlns', 'http://www.w3.org/2005/Atom');
        $dom->appendChild($feed);

        $feed->appendChild($dom->createElement('id', $this->reverseRouter->getUrl([Blog::class, 'show'])));
        $feed->appendChild($dom->createElement('title', 'chrisk.app'));
        $feed->appendChild($dom->createElement('updated', $this->blogTable->getLastUpdated()->toString()));

        $link = $feed->appendChild($dom->createElement('link'));
        $link->setAttribute('rel', 'self');
        $link->setAttribute('href', $this->reverseRouter->getUrl([Feed::class, 'show']));
        $link->setAttribute('type', 'application/atom+xml');

        $link = $feed->appendChild($dom->createElement('link'));
        $link->setAttribute('rel', 'alternate');
        $link->setAttribute('href', $this->reverseRouter->getUrl([Blog::class, 'show']));
        $link->setAttribute('type', 'text/html');

        $root = $feed->appendChild($dom->createElement('entry'));

        $entries = $this->blogTable->findAll();
        foreach ($entries as $entry) {
            $url = $this->reverseRouter->getUrl([Detail::class, 'show'], ['title' => $entry->getTitleSlug()]);

            $root->appendChild($dom->createElement('id', $url));
            $root->appendChild($dom->createElement('title', $entry->getTitle()));
            $root->appendChild($dom->createElement('updated', $entry->getUpdated()->toString()));

            $linkElement = $dom->createElement('link');
            $linkElement->setAttribute('rel', 'alternate');
            $linkElement->setAttribute('href', $url);
            $linkElement->setAttribute('type', 'text/html');
            $root->appendChild($linkElement);

            $authorElement = $dom->createElement('author');
            $authorElement->appendChild($dom->createElement('name', $entry->getAuthorName()));
            $authorElement->appendChild($dom->createElement('uri', $entry->getAuthorUri()));
            $root->appendChild($authorElement);

            $summaryElement = $dom->createElement('summary', $entry->getSummary());
            $root->appendChild($summaryElement);

            $categories = explode(',', $entry->getCategory());
            foreach ($categories as $category) {
                $categoryElement = $dom->createElement('category');
                $categoryElement->setAttribute('term', $category);
                $root->appendChild($categoryElement);
            }

            $contentElement = $dom->createElement('content', $entry->getContent());
            $contentElement->setAttribute('type', 'html');
            $root->appendChild($contentElement);
        }

        return new HttpResponse(
            200,
            ['Content-Type' => 'application/atom+xml'],
            $dom
        );
    }
}

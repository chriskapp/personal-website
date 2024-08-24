<?php

namespace App\Controller;

use App\Table;
use PSX\Api\Attribute\Get;
use PSX\Api\Attribute\Path;
use PSX\Api\Attribute\Query;
use PSX\Framework\Controller\ControllerAbstract;
use PSX\Framework\Http\Writer\Template;
use PSX\Framework\Loader\ReverseRouter;

class Blog extends ControllerAbstract
{
    private const ITEMS_PER_PAGE = 8;

    public function __construct(private Table\Blog $blogTable, private ReverseRouter $reverseRouter)
    {
    }

    #[Get]
    #[Path('/blog')]
    public function show(#[Query] ?int $startIndex = null): Template
    {
        $totalResults = $this->blogTable->getCount();
        $selfUrl      = $this->reverseRouter->getUrl([self::class, 'show']) ?? throw new \RuntimeException('Could not find controller');
        $startIndex   = $this->getStartIndex($startIndex);

        $data = [
            'title' => 'chriskapp | Blog',
            'canonical' => $this->reverseRouter->getUrl([self::class, 'show']) . (($startIndex > 0) ? '?startIndex=' . $startIndex : ''),
            'totalResults' => $totalResults,
            'startIndex' => $startIndex,
            'entry' => $this->blogTable->findIndexEntries($startIndex),
            'links' => $this->getLinks($selfUrl, $startIndex, $totalResults),
        ];

        $templateFile = __DIR__ . '/../../resources/template/blog.php';
        return new Template($data, $templateFile, $this->reverseRouter);
    }

    /**
     * Returns the HATEOAS links for further navigation
     */
    private function getLinks(string $selfUrl, ?int $startIndex, int $totalResults): array
    {
        $prev = $startIndex - self::ITEMS_PER_PAGE;
        $prev = max($prev, 0);
        $next = $startIndex + self::ITEMS_PER_PAGE;
        $next = $next >= $totalResults ? $startIndex : $next;

        return [[
            'rel'  => 'self',
            'href' => $selfUrl,
        ],[
            'rel'  => 'next',
            'href' => $selfUrl . '?startIndex=' . $next,
        ],[
            'rel'  => 'prev',
            'href' => $selfUrl . '?startIndex=' . $prev,
        ]];
    }

    /**
     * Returns the startIndex GET parameter
     */
    private function getStartIndex(?int $startIndex): int
    {
        $startIndex = max((int) $startIndex, 0);
        $startIndex = $startIndex % self::ITEMS_PER_PAGE !== 0 ? $startIndex - ($startIndex % self::ITEMS_PER_PAGE) : $startIndex;

        return $startIndex;
    }
}

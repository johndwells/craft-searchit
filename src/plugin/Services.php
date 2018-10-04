<?php
namespace fruitstudios\searchit\plugin;

use Craft;
use fruitstudios\searchit\services\SearchFilters;

trait Services
{
    // Public Methods
    // =========================================================================

    public function getSearchFilters(): SearchFilters
    {
        return $this->get('searchFilters');
    }

    // Private Methods
    // =========================================================================

    private function _setPluginComponents()
    {
        $this->setComponents([
            'searchFilters' => SearchFilters::class,
        ]);
    }
}

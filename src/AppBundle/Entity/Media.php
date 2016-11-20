<?php
// src/AppBundle/Entity/Media.php
namespace AppBundle\Entity;


class Media
{
// ...

    /**
     * @var string The path - typically stored in the database
     */
    private $path;

// ...

    /**
     * Get the image URL
     *
     * @return null|string
     */
    public function getWebPath()
    {
// ... $webPath being the full image URL, to be used in templates

        return $webPath;
    }
}

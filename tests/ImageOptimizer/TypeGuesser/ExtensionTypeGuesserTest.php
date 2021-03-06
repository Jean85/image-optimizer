<?php


namespace ImageOptimizer\TypeGuesser;


class ExtensionTypeGuesserTest extends AbstractTypeGuesserTest
{
    protected function createTypeGuesser()
    {
        return new ExtensionTypeGuesser();
    }

    public function validImageFileProvider()
    {
        $images = parent::validImageFileProvider();
        $images[] =  array(
            __DIR__.'/../Resources/sample.svg',
            TypeGuesser::TYPE_SVG,
        );

        return $images;
    }
}
 
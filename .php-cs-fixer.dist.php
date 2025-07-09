<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->exclude('bootstrap')
    ->exclude('storage')
    ->exclude('vendor')
    ->notPath('src/Symfony/Component/Translation/Tests/fixtures/resources.php');

$config = new PhpCsFixer\Config();
return $config->setRules([
        '@PSR12' => true,
        'strict_param' => true,
        'array_syntax' => ['syntax' => 'short'],
    ])
    ->setFinder($finder);

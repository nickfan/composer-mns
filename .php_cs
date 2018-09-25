<?php

$header = <<<EOF
Composer-Mns -- 阿里云消息队列（MNS）的 Composer 适配。

This file is part of the nickfan/composer-mns.

(c) Nick Fan <nickfan81@gmail.com>
@link: https://github.com/nickfan/composer-mns

This source file is subject to the MIT license that is bundled
with this source code in the file LICENSE.
EOF;

$level = Symfony\CS\FixerInterface::PSR2_LEVEL;

$fixers = [
    'header_comment',
    'blankline_after_open_tag',
    'multiline_array_trailing_comma',
    'no_blank_lines_after_class_opening',
    'no_empty_lines_after_phpdocs',
    'phpdoc_no_package',
    'phpdoc_var_without_name',
    'remove_lines_between_uses',
    'return',
    'single_array_no_trailing_comma',
    'single_quote',
    'ternary_spaces',
    'trim_array_spaces',
    'unary_operators_spaces',
    'ordered_use',
    'short_array_syntax',
    'whitespacy_lines',
    'spaces_cast'
];

Symfony\CS\Fixer\Contrib\HeaderCommentFixer::setHeader($header);

$finder = Symfony\CS\Finder\DefaultFinder::create()->in(__DIR__)->exclude('lib');

return Symfony\CS\Config\Config::create()->level($level)->fixers($fixers)->finder($finder);

# Change log
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/)
and this project adheres to [Semantic Versioning](http://semver.org/).

## [[*next-version*]] - YYYY-MM-DD
### Changed
- Ported setup of `php-project`, leading to optimization of dependencies and tools.
Code refactored to fix.
- BC Breaking: Removed support for PHP 5. PHP 7 is now required.

### Removed
- `TranslatorInterface`. It does not appear possible to generalize translation
in a meaningful way at this point.
- `I18nExceptionInterface` and `TranslationExceptionInterface` as consequence
of above.

## [0.2] - 2017-03-14
Corrected API docs.

### Fixed
- Issue where CodeClimate would consider underscore-prefixed private methods to
be breaking the naming convention.

### Changed
- `ArrayAccess` type no longer used for params.

## [0.1] - 2017-03-12
Initial release. Interfaces and tests included.

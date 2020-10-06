# Change log
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/)
and this project adheres to [Semantic Versioning](http://semver.org/).

## [[*next-version*]] - YYYY-MM-DD
### Changed
- Ported setup of `php-project`, leading to optimization of dependencies and tools.
Code refactored to fix.
- BC Breaking: Removed support for PHP 5. PHP 7.1 is now required.
- BC Breaking: `TranslatorInterface` is now `StringTranslatorInterface`. It no longer supports
translation of mixed type, but only of string.
- BC Breaking: Added typehints wherever reasonable. Implementations would need to adapt.

### Removed
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

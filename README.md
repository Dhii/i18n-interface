## Dhii - Internationalization Interface
![Continuous Integration](https://github.com/Dhii/i18n-interface/workflows/Continuous%20Integration/badge.svg?branch=develop)
[![Latest Stable Version](https://poser.pugx.org/dhii/i18n-interface/version)](https://packagist.org/packages/dhii/i18n-interface)

Interfaces for internationalization.

## Details
When using a technology like the [gettext][] PHP implementaiton to internationalize strings in PHP code,
one often comes across several problems:

1. The implementation is written in procedural style.
2. The implementation does not use a formal PHP standard.
3. The implementation requires specifying the text domain every time it is invoked.
4. As a result of the previous problems, one cannot use OOP Dependency Injection.

This package aims to address the above by specifying a formal PHP standard for gettext-like
translation mechanisms, e.g. those that can translate a single string, optionally with
content.

Additionally, it specifies a standard for translators that interpolate strings.
This is useful because the translator has to translate a string with tokens first,
and then interpolate values into them. This is also available with optional context.

Finally, it defines a standard for a simple translator that just retrieves a string
for another string. This means that consumers to which context or token interpolation
are irrelevant don't have to depend on an API that they don't use, increasing [ISP][].


[gettext]: https://www.gnu.org/software/gettext/
[ISP]: https://en.wikipedia.org/wiki/Interface_segregation_principle

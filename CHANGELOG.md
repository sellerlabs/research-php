### v0.2.0:
- The client has gone some moderate refactoring in order to use Guzzle ~6.0 and
PSR-7. While this presents some breaking changes, most applications won't have
to perform many changes besides updating their `composer.json` dependencies.

> NOTE: Before upgrading to this version, make sure that no other package on
your dependencies uses an older version of Guzzle (5).

### v0.1.1:
- Use Guzzle 5

### v0.1.0:
- Moved remaining classes to the Research namespace. This introduces a BC for
code explicitly depending on this classes.
- The `NodeMwsClientInterface`, which was deprecated, has now been completely
removed. Use `ResearchClientInterface` instead.
- Some small bugs in unit tests were fixed.
- Composer dependencies have been cleaned up and stabilized. A `composer.lock`
file is now included as well.
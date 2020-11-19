[![codecov](https://codecov.io/gh/freekup/PHP-Codecov-Sample/branch/master/graph/badge.svg?token=ln9TinTd59)](https://codecov.io/gh/freekup/PHP-Codecov-Sample)

You can generate your code coverage with this command
```bash
./vendor/bin/phpunit --coverage-php covergae.cov
```

To upload your code coverage
```bash
bash <(curl -s https://codecov.io/bash) -t YOUR_TOKEN
```

Get Your badge in the codecov.io setting
# phpBB Extension — Antibot 42

[Topic on phpbbguru.net](https://www.phpbbguru.net/community/viewtopic.php?t=49868)

This phpBB extension completely eliminates spam on phpBB forums posted by any kind of spambots, using a set of know-hows. It operates completely invisibly to normal users, without captchas or other methods that might annoy them. Source code is partially obfuscated because the spambot creators also read GitHub :)

## Requirements

* phpBB 3.2.9+
* PHP 7.1+

## Quick Install

You can install this on the latest release of phpBB 3.3 by following the steps below:

* Create `nekstati/antibot42` in the `ext` directory.
* Download and unpack the repository into `ext/nekstati/antibot42`
* Enable `Antibot 42` in the ACP at `Customise -> Manage extensions`.

## Uninstall

* Disable `Antibot 42` in the ACP at `Customise -> Extension Management -> Extensions`.
* To permanently uninstall, click `Delete Data`. Optionally delete the `/ext/nekstati/antibot42` directory.

## Support

* Report bugs and other issues to the [Issue Tracker](https://github.com/nekstati/phpBB-Antibot42/issues).

## Third-party software

This extension uses [MaxMing GeoIP database](https://www.maxmind.com/en/geoip2-services-and-databases).

## License

[GPL-2.0](license.txt)

## Screenshots

### ACP

![ACP](/doc/acp.png)

# TechTopiaRSSFix

The [RSS feed](http://tv.ida.dk/audiopodcast/channel/16944635) for the [TechTopia](https://universe.ida.dk/techtopia/) podcast does not work with the [AntennaPod](https://github.com/AntennaPod/AntennaPod) app

The [issue](https://github.com/AntennaPod/AntennaPod/issues/2354) is that the feed contains both `media:content` and `enclosure` and that the `media:content` has the attribute `isDefault="true"`.

This script changes the `isDefault` attribute value to `false` which makes it work with AntennaPod.
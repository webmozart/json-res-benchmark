ICU .json/.res Benchmark
========================

This benchmark tries to analyze the performance of .json vs. ICU .res files in PHP.

The resource files where taken from the Symfony2 currency data *as is*. Optimizations
could probably be done, but that shouldn't matter a lot, as the optimizations
would affect both benchmarks.

The benchmark is merging all currency names from both the "en_GB" and the "en" locale.
It then loads generic mapping data from the meta locale "root".

Console Output (.json)
----------------------

```
$ php benchmark-json.php 
Nb of Currencies: 296
Nb of Alpha3-Numeric mappings: 1
Time: 1.6300678253174ms
Memory: 768kB
Peak Memory: 768kB
```

Note: The number of Alpha3-Numeric mappings in this sample is 1 since `json_decode()` returns (uncountable) objects instead of arrays here.

Console Output (.res)
----------------------

```
$ php benchmark-res.php 
Nb of Currencies: 296
Nb of Alpha3-Numeric mappings: 255
Time: 1.054048538208ms
Memory: 512kB
Peak Memory: 512kB
```

Results
-------

Benchmark        | .json      | .res
---------------- | ---------- | -------
Time             | 1.63ms     | **1.05ms**
Memory           | 768kB      | **512kB**
File Size (raw)  | **23.2kB** | 33.4kB
File Size (.zip) | **9.7kB**  | 15.3kB

ICU .json/.res Benchmark
========================

This benchmark tries to analyze the performance of .json vs. ICU .res files in PHP.

The resource files where taken from the Symfony2 currency data *as is*. Optimizations
could probably be done, but that shouldn't matter a lot, as the optimizations
would affect both benchmarks.

The benchmark is merging all currency names from both the "en_GB" and the "en" locale.
It then loads generic mapping data from the meta locale "root".

Results (opcache disabled)
--------------------------

Benchmark        | .json      | .json array | .res       | .php
---------------- | ---------- | ----------- | ---------- | --------
Time             | 13.5ms     | 11.8ms      | **5.66ms** | 25.25ms
Memory           | 1024kB     | 1024kB      | **512kB**  | 1024kB
Peak Memory      | 1024kB     | 1024kB      | **512kB**  | 1536kB

Results (opcache enabled)
-------------------------

Benchmark        | .json      | .json array | .res       | .php
---------------- | ---------- | ----------- | ---------- | --------
Time             | 13.4ms     | 11.8ms      | **5.9ms**  | 10ms
Memory           | 1024kB     | 1024kB      | **512kB**  | 1024kB
Peak Memory      | 1024kB     | 1024kB      | **512kB**  | 1280kB

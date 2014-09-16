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
Time             | 1.52ms     | 1.42ms      | **0.96ms** | 2.9ms
Memory           | 768kB      | 768kB       | **512kB**  | 768kB
Peak Memory      | 768kB      | 768kB       | **512kB**  | 768kB

Results (opcache enabled)
-------------------------

Benchmark        | .json      | .json array | .res       | .php
---------------- | ---------- | ----------- | ---------- | --------
Time             | 1.6ms      | 1.45ms      | **0.9ms**  | 4.25ms
Memory           | 768kB      | 768kB       | **512kB**  | 768kB
Peak Memory      | 768kB      | 768kB       | **512kB**  | 1280kB

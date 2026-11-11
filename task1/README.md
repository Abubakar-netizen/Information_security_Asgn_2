# Task 1: Memory-Safety Lab

This task studies how unsafe handling of input can compromise memory safety in a small C program. The lab is intended for an isolated, authorized environment and uses only local, fictional test data.

## Public repository contents

This folder contains documentation only. Operational exploit code, generated payloads, and compiled binaries are intentionally not included.

## Learning goals

- Understand why copying untrusted input into a fixed-size buffer without checking its length is unsafe.
- Recognize that memory corruption can affect program control flow.
- Apply defensive coding practices, including validating input lengths, using bounded operations carefully, and avoiding unsafe string-copy functions.
- Use compiler and operating-system protections as additional layers, not as substitutes for fixing unsafe code.

## Safety

Do not deploy intentionally vulnerable lab programs or test them against systems you do not own or have explicit permission to assess. Keep any local experimentation isolated and use non-sensitive test data.

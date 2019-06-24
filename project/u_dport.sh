#!/bin/bash

grep "IPv4" udp | cut -f 12 -d " " > usrc
grep "IPv6" udp | cut -f 12 -d " " > usrc1


cut -f 5 -d "." usrc | cut -f 1 -d ":"
cut -f 2 -d "." usrc1 | cut -f 1 -d ":"

rm usrc
rm usrc1
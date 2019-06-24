#!/bin/bash

grep "IPv4" tcp | cut -f 12 -d " " > tdstn
grep "IPv6" tcp | cut -f 12 -d " " > tdstn1

cut -f 5 -d "." tdstn | cut -f 1 -d ":"
cut -f 2 -d "." tdstn1 | cut -f 1 -d ":"

rm tdstn
rm tdstn1
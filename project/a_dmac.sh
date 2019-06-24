#!/bin/bash

cut -f 4 -d " " arp | cut -f 1 -d ","

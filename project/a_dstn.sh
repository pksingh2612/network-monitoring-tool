#!/bin/bash

grep "Request" a.pcap | cut -f 7 -d " " | cut -f 1  -d "," && grep "Reply" a.pcap | cut -f 6 -d " " | cut -f 1  -d ","

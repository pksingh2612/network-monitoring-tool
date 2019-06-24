#!/bin/bash

tcpdump -ne -c 3000 > pack
grep "Flags" pack > tcp
grep "UDP" pack > udp
grep "ARP" pack > arp
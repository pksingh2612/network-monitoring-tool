#!/bin/bash

tcpdump -nn -r packet_arp.pcap | cut -f 1 -d " "


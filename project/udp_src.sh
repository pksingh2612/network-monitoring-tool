#!/bin/bash

#tcpdump -nn -r packet_udp.pcap | cut -f 1 -d " "


cut -f 10 -d " " udp | cut -d '.'  -f 1-4

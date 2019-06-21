#!/bin/bash


grep "Reply" a.pcap | cut -f 4 -d " " && grep "Request" a.pcap | cut -f 5 -d " "

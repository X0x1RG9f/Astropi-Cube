# AstroPi v1 2021

## Description
AstroPi is a DiY project and aims to provide different tools for astronomy (Dew Controllers, Power Supplies, USB, Network, Remote Access, GPS, Meteo, DSLR Shutter release, etc.), implemented as Raspberry Pi 4 Hat, under Astroberry (https://www.astroberry.io/) operating system. The whole project is packaged within FR-4 (PCB) enclosures for cost reduction.

AstroPi is composed of two main enclosures :
 - Raspberry Pi + AstroPi Hat (110 x 130 x 40mm)
 - AstroPi GPS & Meteo Module (50 x 40 x 35mm)

AstroPi Hat can be used without the GPS & Meteo Module.

## Disclaimers
 - <strong style="color: red;">Date of 06.07.2021, project is still under construction and being electronically tested. Please do not use it if this disclaimer is written!</strong>
 - Dew Controllers & Meteo modules are largely inspired by Robert Brown Projects (https://sourceforge.net/projects/esp32-dew-controller/). However, code and implementation are fully different (Raspberry Pi 4, SMD electronics, Web App, etc.)
 - I am neither an electronician nor an astronomist. This is my first electronic project, being used with SkyWatcher EQ6-R Pro & PDS 200/1000. All your commentaries and improvements about electronics will be, of course, welcome!

## Licensing
 - &copy; Copyright Ludovic COURGNAUD 2021. All Rights Reserved.
 - Permission is granted for personal and Academic use only.
 - Code or portions of code may not be copied or used without appropriate credit given to author.

## Donations
[![Donate](https://img.shields.io/badge/Donate-PayPal-green.svg)](https://www.paypal.com/donate?business=S8L7CRH3CVYDG&no_recurring=0&currency_code=EUR)

## Functionalities: AstroPi Hat
 - Operating System (Astroberry / Raspberry Pi 4) / Remote Access via VNC Viewer
 - 4x Automated Dew Controllers / Dew Point sensors (12v - 3A MAX)
 - 2x USB 2.0 inputs / 2x USB 3.0 inputs
 - 1x GX-12 12v Power Supply
 - 4x DC Power Supplies
 - 1x GX-16 10 pins for additional module(s)
 - DSLR Shutter Release
 - Power consumption monitoring in real time
 - Dark Mode

<p align="center"><img align="center" src="/AstroPi%20Hat/Images/enclosure.png?raw=true" height="300" />&nbsp;<img align="center" src="/AstroPi%20Hat/Images/pcb.png?raw=true" height="300" /></p>


## Functionalities: AstroPi Meteo & GPS Module
 - GPS (Max-M8Q)
 - Rain drops sensor (with buzzer)
 - Humidity sensor
 - Temperature sensor
 - Light sensor
 - Sky Quality sensor
 - Cloud sensor
 - Pressure sensor

<p align="center"><img align="center" src="/AstroPi%20GPS%20&%20Meteo/Images/enclosure.png?raw=true" height="300" />&nbsp;<img align="center" src="/AstroPi%20GPS%20&%20Meteo/Images/pcb.png?raw=true" height="300" /></p>




[![Last Release][release-shield]][release-url]
[![Issues][issues-shield]][issues-url]
[![Stars][stars-shield]][stars-url]
[![Donate][donate-shield]][donate-url]

<br />
<p align="center">
  <a href="https://github.com/X0x1RG9f/astropi/">
    <img src="/AstroPi%20Hat/Images/saturn.png?raw=true" alt="AstroPi" height="150">
  </a>
</p>
  <h1 align="center">AstroPi (v1, 2021)</h1>
  <p align="center">
    A free "Do it Yourself (DiY)" Astrophotography, GPS & Meteo solution
    <br />
    <a href="https://github.com/X0x1RG9f/astropi/issues">Report a bug</a>
    ·
    <a href="https://github.com/X0x1RG9f/astropi/issues">Request a feature</a>
    ·
    <a href="https://github.com/X0x1RG9f/astropi/discussions">Ask questions</a>
  </p>

- [Disclaimers](#disclaimers)
- [About AstroPi](#about-astropi)
  - [Purpose](#purpose)
  - [Features: AstroPi Hat](#features-astropi-hat)
  - [Features: AstroPi Meteo & GPS Module](#features-astropi-meteo--gps-module)
  - [Who's it for?](#whos-it-for)
- [Getting Started](#getting-started)
- [Pricing](#pricing)
- [Contributing](#contributing)
  - [Support the development of AstroPi](#support-the-development-of-astropi)
- [Licensing](#licensing)
- [Contact](#contact)

<br/>

## Disclaimers
 - <strong style="color: red;">Date of 06.07.2021, project is still under construction and being electronically tested. Please do not use it if this disclaimer is written!</strong>
 - Dew Controllers & Meteo modules are largely inspired by [Robert Brown Projects](https://sourceforge.net/projects/esp32-dew-controller/). However, code and implementation are fully different (Raspberry Pi 4, Remote Access, SMD electronics, Web App, etc.)
 - I am neither an electronician nor an astronomist. This is my first electronic project, being used with SkyWatcher EQ6-R Pro & PDS 200/1000. All your commentaries and improvements about electronics (or code) will be, of course, very welcome!

<br/>

## About AstroPi
### Purpose
AstroPi is a DiY project, based on [Astroberry Server operating system](https://www.astroberry.io/) and aims to provide different tools for Astronomy and Astrophotography (Dew Controllers, Power Supplies, USB, Network, Remote Access, GPS, Meteo, DSLR Shutter release, ...). 

The use of Astroberry Server allows you to benefit from all the free software commonly used in astrophotography (INDI Framework, KStars, Cartes du Ciel, FireCapture, PHD2, etc.). However, please note that AstroPi project is not dependant from AstroBerry Server and can also be installed with Raspbian or any other Raspberry Pi distribution. Anyway, I strongly suggest you to use Astroberry Server, as it already provide very useful astrophotography tools.

AstroPi is based on Raspberry Pi 4 and implemented as Raspberry Pi Hat. The whole project is packaged within FR-4 (PCB) enclosures for cost reduction.

AstroPi is composed of two main enclosures :
 - Raspberry Pi + AstroPi Hat (110 x 130 x 40mm)
 - AstroPi GPS & Meteo Module (50 x 40 x 35mm)

AstroPi Hat can be used without the GPS & Meteo Module. Total cost of the DiY project is arround 200$ (including Raspberry, cases, components, Sensors & Controllers).

### Features: AstroPi Hat

<table>
    <tr>
        <td width="300px">Astroberry Server Operating System</td>
        <td width="300px">2x USB 2.0 inputs (Data + 5v - 1A MAX)</td>
        <td width="300px">DSLR Shutter Release</td>
    </tr>
    <tr>
        <td width="300px">Remote Access via VNC Viewer and / or Browser</td>
        <td width="300px">2x USB 3.0 inputs (Data + 5v - 1A MAX)</td>
        <td width="300px">Dark Mode</td>
    </tr>
    <tr>
        <td width="300px">4x Automated Dew Controllers with Dew Point sensors (12v - 3A MAX)</td>
        <td width="300px">1x GX-12 12v Power Supply</td>
        <td width="300px">Real Time power consumption monitoring</td>
    </tr>
    <tr>
        <td width="300px"></td>
        <td width="300px">4x DC 12v Power Supplies</td>
        <td width="300px">1x GX-16 10 pins for additional module(s)</td>
    </tr>
</table>

<p align="center"><img align="center" src="/AstroPi%20Hat/Images/enclosure.png?raw=true" height="300" />&nbsp;<img align="center" src="/AstroPi%20Hat/Images/pcb.png?raw=true" height="300" /></p>

### Features: AstroPi Meteo & GPS Module
<table>
    <tr>
        <td width="300px">GPS (Max-M8Q)</td>
        <td width="300px">Rain drops sensor (with buzzer)</td>
        <td width="300px">Humidity sensor</td>
    </tr>
    <tr>
        <td width="300px">Temperature sensor</td>
        <td width="300px">Light sensor</td>
        <td width="300px">Sky Quality sensor</td>
    </tr>
    <tr>
        <td width="300px">Cloud sensor</td>
        <td width="300px">Pressure sensor</td>
        <td width="300px"></td>
    </tr>
</table>

<p align="center"><img align="center" src="/AstroPi%20GPS%20&%20Meteo/Images/enclosure.png?raw=true" height="300" />&nbsp;<img align="center" src="/AstroPi%20GPS%20&%20Meteo/Images/pcb.png?raw=true" height="300" /></p>

### Who's it for?
AstroPi is intended for "Low Cost", but experienced astrophotographer keen to have all the features listed above at a reasonable price (arround 200$ in total versus 200$ minimum for only a good Dew Controller). 

<br/>

## Getting Started
Before installing all components necessary for AstroPi, please install first Astroberry Server on your Raspberry Pi 4 using [this procedure](https://www.astroberry.io/docs/index.php?title=Astroberry_Server#Installation). Please note that Raspberry Pi 3 can also be used, but will suffer from slowdowns, especially when using high performance software (KStars, etc.) and when using the remote desktop.

Once installed and Internet available, please follow the following steps in order to ensure AstroPi Hat & Modules will be working properly :
```bash
# apt-get update && apt-get upgrade
# apt-get install git
# git clone https://github.com/X0x1RG9f/astropi.git
# cd ./astropi/
# sh ./install.sh
```

<br/>

## Pricing
AstroPi Hat / AstroPi GPS & Meteo modules are both free but DiY projects. Thus, whole project price will depend on the components you will use and equipments you already have. For the following price estimates, I consider that you already own all equipments used for soldering :
 - AstroPi Hat Price (including RPi4, Case, Components) : Arround 120$
 - AstroPi Meteo Module (including Case, Components) : Arround 30$

<br/>

## Contributing
Your help is always welcome! Feel free to open issues, ask questions, talk about it and discuss this tool.

### Support the development of AstroPi
If you like AstroPi and if it helps you save lots of money, you can donate using the following button. Thank you for considering donating to AstroPi! 

[![Donate](https://img.shields.io/badge/Donate-PayPal-green.svg)](https://www.paypal.com/donate?business=S8L7CRH3CVYDG&no_recurring=0&currency_code=EUR)

<br/>

## Licensing
 - &copy; Copyright Ludovic COURGNAUD 2021. All Rights Reserved.
 - Permission is granted for personal and Academic use only.
 - Code or portions of code may not be copied or used without appropriate credit given to author.

<br/>

## Contact
You can contact me at [ludovic.courgnaud@gmail.com](mailto:ludovic.courgnaud@gmail.com), you may open an issue or contact me through the various social media pages there are: [Twitter](https://twitter.com/x0x1rg9f).

[release-shield]: https://img.shields.io/github/last-commit/X0x1RG9f/astropi?style=plastic
[release-url]: https://github.com/X0x1RG9f/astropi
[issues-shield]: https://img.shields.io/github/issues/X0x1RG9f/astropi?style=plastic
[issues-url]: https://github.com/X0x1RG9f/astropi/issues
[stars-shield]: https://img.shields.io/github/stars/X0x1RG9f/astropi.svg?style=plastic
[stars-url]: https://github.com/X0x1RG9f/astropi/stargazers
[donate-shield]: https://img.shields.io/badge/donate-%24%20%E2%82%AC-brightgreen?style=plastic
[donate-url]: #support-the-development-of-astropi

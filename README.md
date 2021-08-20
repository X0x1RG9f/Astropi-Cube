[![Last Release][release-shield]][release-url]
[![Issues][issues-shield]][issues-url]
[![Stars][stars-shield]][stars-url]
[![Donate][donate-shield]][donate-url]
[![Watchers][watchers-shield]][stars-url]
[![Instagram][insta-shield]][insta-url]

<br />
<p align="center">
  <a href="https://github.com/X0x1RG9f/astropi/">
    <img src="https://github.com/X0x1RG9f/astropi/blob/main/AstroPi/Images/saturn.png?raw=true" alt="AstroPi" height="150">
  </a>
</p>
  <h1 align="center">AstroPi (v1, 2021)</h1>
  <p align="center">
<a href="https://github.com/X0x1RG9f/astropi/wiki"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f2/Flag_of_Great_Britain_%281707%E2%80%931800%29.svg/1200px-Flag_of_Great_Britain_%281707%E2%80%931800%29.svg.png" alt="" height="15"></a>
<a href="https://github.com/X0x1RG9f/astropi/wiki/home-[fr]"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Flag_of_France.svg/2560px-Flag_of_France.svg.png" alt="" height="15"></a>
    <br />
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
  - [Who's it for?](#whos-it-for)
  - [Features: AstroPi Hat](#features-astropi-hat)
  - [Features: AstroPi Meteo & GPS Module](#features-astropi-meteo--gps-module)
- [Getting Started](#getting-started)
- [Pricing](#pricing)
- [Contributing](#contributing)
  - [Support the development of AstroPi](#support-the-development-of-astropi)
- [Licensing](#licensing)
- [Contact](#contact)

<br/>

## Disclaimers
 - <strong style="color: red;">Date of 20.08.2021, project is still under construction and being electronically tested. Please do not use it if this disclaimer is written!</strong>
 - Dew Controllers part of my project is largely inspired by [Robert Brown Projects](https://sourceforge.net/projects/esp32-dew-controller/). However, code and implementation are fully different (Raspberry Pi 4, Remote Access, SMD electronics, Web App, etc.)
 - I am neither an electronician nor an astronomist. This is my first electronic project, being used with my SkyWatcher EQ6-R Pro & PDS 200/1000. All your commentaries and improvements about electronics (or code) will be, of course, very welcome!
 - Wiki is very complete and with up-to-date information. Please read it entirely before starting the project or if you have any doubts!

<br/>

## About AstroPi
### Purpose
AstroPi is a DiY project aiming to provide different tools for Astronomy and Astrophotography (Dew Controllers, Power Supplies, USB, Network, Remote Access, GPS, Meteo, DSLR Shutter release, etc.). It is based on Raspberry Pi 4 (hat format) and on well known [Astroberry Server operating system](https://www.astroberry.io/). The whole project is packaged within FR-4 (PCB) enclosures (for cost reduction) and composed of one main enclosure (110 x 130 x 40mm).

The use of Astroberry Server allows you to benefit from all the free software commonly used in astrophotography (INDI Framework, KStars, Cartes du Ciel, FireCapture, PHD2, etc.). However, please note that AstroPi project is not dependant from AstroBerry Server and can also be installed with Raspbian or any other Raspberry Pi distribution. Anyway, I strongly suggest you to use Astroberry Server, as it already provide very useful astrophotography tools. Some installation configuration could be necessary.

The project aims to be scalable by providing the possibility of adding optional and unlimited modules (USB Type C). For now, there is only one existing module:
 - AstroPi Meteo Module (50 x 40 x 35mm)
 - Focuser Module (To Be Implemented)

### Who's it for?
AstroPi is intended for "Low Cost", but experienced astrophotographer and electronicians keen to have all the features listed above at a reasonable price (arround $175 without options) in total versus $200$ minimum for a good Dew Controller only. 

### Features: AstroPi Hat

<table>
    <tr>
        <td width="300px">Astroberry Server OS <br />Remote Access</td>
        <td width="300px">GPS (Optional) <br/>Accelerometer (Optional)</td>
      <td width="300px">DSLR Shutter Release <br/>Dark / Silent Modes</td>
    </tr>
    <tr>
        <td width="300px">Battery Mode</td>
        <td width="300px">4x Smart Dew Heaters with Dew Point Sensors (12v - 2A MAX)</td>
        <td width="300px">3x USB Type C for additional module(s)</td>
    </tr>
    <tr>
        <td width="300px">2x USB 2.0 inputs <br/>2x USB 3.0 inputs</td>
        <td width="300px">1x GX-12 12v Power Supply <br />4x DC 12v Power Supplies</td>
        <td width="300px">Real Time power consumption monitoring</td>
    </tr>
</table>

<p align="center"><img align="center" src="https://github.com/X0x1RG9f/astropi/blob/main/AstroPi/Images/enclosure.png?raw=true" height="300" />&nbsp;<img align="center" src="https://github.com/X0x1RG9f/astropi/blob/main/AstroPi/Images/pcb.png?raw=true" height="300" /></p>

### Features: AstroPi Meteo & GPS Module
<table>
    <tr>
        <td width="300px">Rain Drops Sensor (with buzzer)</td>
        <td width="300px">Barometric Pressure Sensor</td>
        <td width="300px">Humidity Sensor</td>
    </tr>
    <tr>
        <td width="300px">Temperature Sensor</td>
        <td width="300px">Light / Lux Sensors</td>
        <td width="300px">Sky Quality sensor</td>
    </tr>
    <tr>
        <td width="300px">Cloud sensor</td>
        <td width="300px">IR Sensor</td>
        <td width="300px">Free Slots Available</td>
    </tr>
</table>

<p align="center"><img align="center" src="https://github.com/X0x1RG9f/astropi/blob/main/AstroPi Module - Meteo/Images/enclosure.png?raw=true" height="300" />&nbsp;<img align="center" src="https://github.com/X0x1RG9f/astropi/blob/main/AstroPi Module - Meteo/Images/pcb.png?raw=true" height="300" /></p>

<br/>

## Getting Started
Before begining the projet, I suggest you to read the entire Wiki to understand how things works globally, if you have capabilities of building the project (soldering, mounting, etc.). If you have any doubt, feel free to ask, I'll be glad to help!

Please refer to Wiki PCB Soldering / Mounting sections in order to know how to perform the electronic part of the project!
Please refer to Wiki Software Installation section in order to know how to install the project on Astroberry OS once everything is soldered!
<br/>

## Pricing
AstroPi Hat / AstroPi Modules are all "free" but DiY projects. Thus, whole project price will depend on the components you will use, options you will choose and equipments you already have. For the following price estimates, I consider that you already own all equipments used for soldering :
 - AstroPi Hat (including RPi4, Case, Components) : From 175$ (without options)
 - AstroPi Meteo Module (including Case, Components) : From 45$ (without options)

Please see the Wiki Price section in order to know real price of the project regarding options you will chose. Optional components refers to components that are not needed for the whole project to work and that can be added in the future.

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
[watchers-shield]:https://img.shields.io/github/watchers/X0x1RG9f/astropi?style=plastic
[insta-shield]:https://img.shields.io/badge/Instagram-Follow%20Me!-red?style=plastic
[insta-url]:https://www.instagram.com/ludoastro/

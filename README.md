<div align="center">

[![Last Release][release-shield]][release-url]
[![Issues][issues-shield]][issues-url]
[![Stars][stars-shield]][stars-url]
[![Donate][donate-shield]][donate-url]
[![Watchers][watchers-shield]][stars-url]
[![Instagram][insta-shield]][insta-url]
[![Wiki][wiki-shield]][wiki-url]

</div>

<br />
<p align="center">
  <a href="https://github.com/X0x1RG9f/astropi-cube/">
    <img align="center" src="https://github.com/X0x1RG9f/astropi-cube/blob/main/AstroPi Cube/Images/PCB/pcb_front.png?raw=true" width="50%" alt="AstroPi Cube"/>
  </a>
</p>
  <h1 align="center">AstroPi Cube (v1, 2021) <br/>
<a href="https://github.com/X0x1RG9f/astropi-cube/wiki"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f2/Flag_of_Great_Britain_%281707%E2%80%931800%29.svg/1200px-Flag_of_Great_Britain_%281707%E2%80%931800%29.svg.png" alt="" height="15"></a>
<a href="https://github.com/X0x1RG9f/astropi-cube/wiki/home-[fr]"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Flag_of_France.svg/2560px-Flag_of_France.svg.png" alt="" height="15"></a></h1>
  <p align="center">
    A free "Do it Yourself (DiY)" Astrophotography solution
    <br/>
    (Focuser, Meteo Station, Sky Quality Meter, GPS, etc.)
    <br />
    <a href="https://github.com/X0x1RG9f/astropi-cube/issues">Report a bug</a>
    ·
    <a href="https://github.com/X0x1RG9f/astropi-cube/issues">Request a feature</a>
    ·
    <a href="https://github.com/X0x1RG9f/astropi-cube/discussions">Ask questions</a>
    .
    <a href="https://github.com/X0x1RG9f/astropi-cube/wiki">Documentation</a>
  </p>

- [Disclaimers](#disclaimers)
- [About AstroPi Cube](#about-astropi-cube)
  - [Purpose](#purpose)
  - [Who's it for?](#whos-it-for)
- [Features](#features)
  - [AstroPi Cube](#astropi-cube)
  - [Module 1: Focuser](#module-1-focuser)
  - [Module 2: Sky Quality](#module-2-sky-quality)
- [Getting Started](#getting-started)
- [Pricing](#pricing)
- [Contributing](#contributing)
  - [Support the development of AstroPi Cube](#support-the-development-of-astropi-cube)
- [Licensing](#licensing)
- [Contact](#contact)

<br/>

# Disclaimers
 - <strong>Date of 28.08.2023, project is still under construction and being electronically tested. Please do not use it if this disclaimer is written!</strong> First official release is planed on September 2023.
 - I am neither an electronician nor an astronomist. This is my first electronic project, being used with my SkyWatcher EQ6-R Pro & PDS 200/1000. All your commentaries and improvements about electronics (or code) will be, of course, very welcome!
 - Dew Controllers part of my project is largely inspired by [Robert Brown Projects](https://sourceforge.net/projects/esp32-dew-controller/). However, code and implementation are fully different (Raspberry Pi 4, Remote Access, SMD electronics, Web App, etc.).
 - <strong>Please read carefully disclamers included in the [PCB Disclaimers](https://github.com/X0x1RG9f/astropi-cube/wiki/disclaimers) and [List of Don'ts](https://github.com/X0x1RG9f/astropi-cube/wiki/List-of-Don'ts)section before anything.</strong> Soldering is not that easy (SMD, few space) and you will need skills and patience!
 - Wiki is very complete and with up-to-date information. Please read it entirely before starting the project or if you have any doubts! If you don't understand something, feel free to ask before starting! My english is not perfect (and my french neither)!

<br/>
<br/>

# About AstroPi Cube
## Purpose
AstroPi Cube is a DiY project aiming to provide different tools for Astronomy and Astrophotography (Dew Controllers, Power Supplies, USB, Network, Remote Access, GPS, Meteo, DSLR Shutter release, etc.). It is based on Raspberry Pi 4 (hat format) and on well known [Astroberry Server operating system](https://www.astroberry.io/). The whole project is packaged within FR-4 (PCB) enclosures (for cost reduction) and composed of one main enclosure (110 x 130 x 40mm).

The use of Astroberry Server allows you to benefit from all the free software commonly used in astrophotography (INDI Framework, KStars, Cartes du Ciel, FireCapture, PHD2, etc.). However, please note that AstroPi Cube project is not dependant from AstroBerry Server and can also be installed with Raspbian or any other Raspberry Pi distribution. Anyway, I strongly suggest you to use Astroberry Server, as it already provide very useful astrophotography tools. Some installation configuration could be necessary.

The project aims to be scalable by providing the possibility of adding optional and unlimited modules (GX12-7 connectors). For now, there is two modules implemented:
 - Module - Focuser (55 x 55 x 70mm)
 - [IN PROGRESS - Coding...] Module - Sky Quality (50 x 40 x 35mm)

## Who's it for?
AstroPi Cube is intended for "Low Cost", but experienced astrophotographer and electronicians keen to have all the features listed above at a reasonable price (arround $175 without options) in total versus >= $200 for a good Dew Controller only. 

<br/>
<br/>

# Features
## AstroPi Cube

<table>
    <tr>
        <td width="300px">Astroberry Server OS <br />Remote Access</td>
        <td width="300px">GPS (Optional) <br/>Accelerometer (Optional)</td>
      <td width="300px">DSLR Shutter Release <br/>Dark / Silent Modes</td>
    </tr>
    <tr>
        <td width="300px">Battery Mode</td>
        <td width="300px">4x Smart Dew Heaters with Dew Point Sensors (12v - 2A MAX)</td>
        <td width="300px">3x 12-7 connectors for additional module(s)</td>
    </tr>
    <tr>
        <td width="300px">2x USB 2.0 inputs <br/>2x USB 3.0 inputs</td>
        <td width="300px">1x GX12-2 12v Power Supply <br />4x DC 12v Power Supplies</td>
        <td width="300px">Real Time power consumption monitoring</td>
    </tr>
</table>

<p align="center"><img align="center" src="https://github.com/X0x1RG9f/astropi-cube/blob/main/AstroPi Cube/Images/Enclosure/enclosure.png?raw=true" width="35%" />&nbsp;<img align="center" src="https://github.com/X0x1RG9f/astropi-cube/blob/main/AstroPi Cube/Images/PCB/pcb_front.png?raw=true" width="40%" /></p>

## Module 1: Focuser
<table>
    <tr>
        <td width="300px">Move backward or forward</td>
        <td width="300px">Speed control</td>
        <td width="300px">Autofocus (To Come)</td>
    </tr>
</table>

<p align="center"><img align="center" src="https://github.com/X0x1RG9f/astropi-cube/blob/main/Module 1 - Focuser/Images/Enclosure/enclosure.png?raw=true" width="38.3%" />&nbsp;<img align="center" src="https://github.com/X0x1RG9f/astropi-cube/blob/main/Module 1 - Focuser/Images/PCB/pcb_front.png?raw=true" width="20%" /></p>

<br/>

## Module 2: Sky Quality
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

<p align="center"><img align="center" src="https://github.com/X0x1RG9f/astropi-cube/blob/main/Module 2 - Sky Quality/Images/Enclosure/enclosure.png?raw=true" width="40%" />&nbsp;<img align="center" src="https://github.com/X0x1RG9f/astropi-cube/blob/main/Module 2 - Sky Quality/Images/PCB/pcb_front.png?raw=true" width="22.7%" /></p>

<br/>
<br/>

# Getting Started
Before begining the projet, I suggest you to read the entire Wiki to understand how things works globally, if you have capabilities of building the project (soldering, mounting, etc.). If you have any doubt, feel free to ask, I'll be glad to help!

Please refer to Wiki PCB Soldering / Mounting sections in order to know how to perform the electronic part of the project!
Please refer to Wiki Software Installation section in order to know how to install the project on Astroberry OS once everything is soldered!
<br/>
<br/>

# Pricing
AstroPi Cube / AstroPi Modules are all "free" but DiY projects. Thus, whole project price will depend on the components you will use, options you will choose and equipments you already have. For the following price estimates, I consider that you already own all equipments used for soldering :
 - AstroPi Cube (including RPi4, Case, Components) : From 175$ (without options)
 - Module 1: Focuser (including Case, Components) : About 45$
 - Module 2: Sky Quality (including Case, Components) : From 45$ (without options)

Please see the Wiki Price section in order to know real price of the project regarding options you will chose. Optional components refers to components that are not needed for the whole project to work and that can be added in the future.

<br/>
<br/>

# Contributing
Your help is always welcome! Feel free to open issues, ask questions, talk about it and discuss this tool.

## Support the development of AstroPi Cube
If you like AstroPi Cube and if it helps you save lots of money, you can donate using the following button. Thank you for considering donating to AstroPi Cube! 

<div align="center">
  
[![Donate](https://img.shields.io/badge/Donate-PayPal-green.svg)](https://www.paypal.com/donate?business=S8L7CRH3CVYDG&no_recurring=0&currency_code=EUR)

</div>
<br/>
<br/>

# Licensing
 - &copy; Copyright Ludovic COURGNAUD 2021. All Rights Reserved.
 - Permission is granted for personal and Academic use only.
 - Code or portions of code may not be copied or used without appropriate credit given to author.

<br/>
<br/>

# Contact
You can contact me at [ludovic.courgnaud@gmail.com](mailto:ludovic.courgnaud@gmail.com), you may open an issue or contact me through the various social media pages there are: [Twitter](https://twitter.com/x0x1rg9f).

[release-shield]: https://img.shields.io/github/last-commit/X0x1RG9f/astropi?style=plastic
[release-url]: https://github.com/X0x1RG9f/astropi-cube
[issues-shield]: https://img.shields.io/github/issues/X0x1RG9f/astropi-cube?style=plastic
[issues-url]: https://github.com/X0x1RG9f/astropi-cube/issues
[stars-shield]: https://img.shields.io/github/stars/X0x1RG9f/astropi-cube.svg?style=plastic
[stars-url]: https://github.com/X0x1RG9f/astropi-cube/stargazers
[donate-shield]: https://img.shields.io/badge/donate-%24%20%E2%82%AC-brightgreen?style=plastic
[donate-url]: #support-the-development-of-astropi-cube
[watchers-shield]:https://img.shields.io/github/watchers/X0x1RG9f/astropi-cube?style=plastic
[insta-shield]:https://img.shields.io/badge/Instagram-Follow%20Me!-red?style=plastic&logo=instagram
[insta-url]:https://www.instagram.com/astroludo/
[wiki-shield]:https://img.shields.io/badge/Wiki-Wiki-Blue?style=plastic&logo=wikipedia
[wiki-url]:https://github.com/X0x1RG9f/astropi-cube/wiki


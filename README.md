![Stryber Logo](https://g8i2b2u8.rocketcdn.me/wp-content/uploads/2019/12/Stryber-white-logo-1.png)


# Stryber UUID Helper Package

## Table of Contents

- [Requirements](#requirements)
- [Installation](#installation)
- [Configuration](#usage)

## Requirements

- PHP ^7.4
- Laravel ^7.0

## Installation

```bash
composer require stryber/laravel-uuid-helper
```

## Usage

This package includes middleware that adds ```X-Request-ID``` header to your requests and responses
with UUIDv4 value and some useful classes for DDD entities ids.

To use ```SetRequestId``` middleware you may simple add it class ```\Stryber\Uuid\SetRequestId```
to your Kernel or just use it alias ```'requestId'```

To use ```ID``` and ```UuidId``` classes - just extend them in your project

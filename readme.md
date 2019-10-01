<h2 align="center">prismic-lumen</h2>

<p align="center">
  <a href="https://github.com/c0nst4ntin/prismic-lumen/blob/master/LICENSE">
    <img alt="License" src="https://img.shields.io/github/license/c0nst4ntin/prismic-lumen.svg?color=orange">
  </a>
  <a href="https://github.com/c0nst4ntin/prismic-lumen/">
    <img src="https://img.shields.io/github/package-json/v/c0nst4ntin/prismic-lumen?color=success">
  </a>
  <a href="https://sass-lang.com">
    <img src="https://img.shields.io/github/package-json/dependency-version/c0nst4ntin/prismic-lumen/dev/laravel-mix?color=ff69b4">
  </a>
</p>

<p align="center">
  <em>
  A simple boilerplate using @prismicio & @laravel's lumen
  </em>
</p>

This Lumen & Prismic.io boilerplate contains all the features and scripts you need to start developing websites using the Lumen PHP Framework and the Headless CMS Prismic.io.


## Getting Started

### Lumen: Official Documentation
Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

### Prismic Config
In the `.env` file you need to fill in your API Endpoint and your Access Token.
If you don't have your repository set up to require an Access Token, go into the Prismic Settings and make sure that under "API & Security" you have your API access set to the 'Private API' option. Then generate a new Access Token.

```
PRISMIC_URL=https://your-repo-name.prismic.io/api/v2
PRISMIC_TOKEN=your-access-token
```

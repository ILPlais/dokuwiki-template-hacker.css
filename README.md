# Hacker Theme for DokuWiki

Minimalist terminal-style theme (green on black) for DokuWiki, preserving all features of the default theme.

## Theme Files

- [`main.php`](main.php) — main template (pages, editing, search, etc.)
- [`detail.php`](detail.php) — image detail page
- [`mediamanager.php`](mediamanager.php) — media manager popup
- [`style.ini`](style.ini) — CSS loading and placeholders for plugins
- [`template.info.txt`](template.info.txt) — theme metadata
- [`css/hacker.css`](css/hacker.css) — main stylesheet
- [`assets/nerd-fonts/`](assets/nerd-fonts/) — CSS fonts files used by the template
- [`assets/nerd-fonts/fonts/`](assets/nerd-fonts/fonts/) — font files used by the template
- [`lang/`](lang/) — localization files used by the template

## Installation

1. Copy the contents of this repository into `lib/tpl/hacker/` of your DokuWiki installation (the folder must be named `hacker`).
2. In DokuWiki: **Configuration Manager** → **Customization** → **Template** → select **Hacker**.
3. Save.

## Configuration

After selecting the template, you can customize it by choosing a font from those offered by Nerd Fonts. To do this, go to the "Template/Hacker" section and select the main font.

## Screenshot

![Screenshot](/assets/screenshot.png)

## Sources

### Hacker.css

The CSS template is from the [Hacker Style Library](https://github.com/webshahab-ir/hacker.css).

### Nerd Fonts

The [Nerd Fonts](https://www.nerdfonts.com/) for the Web is from [Nerd Font Web Fonts](https://github.com/mshaugh/nerdfont-webfonts).

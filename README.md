# Hacker Theme for DokuWiki

Minimalist terminal-style theme (green on black) for DokuWiki, preserving all features of the default theme.

## Theme Files

- `main.php` — main template (pages, editing, search, etc.)
- `detail.php` — image detail page
- `mediamanager.php` — media manager popup
- `style.ini` — CSS loading and placeholders for plugins
- `template.info.txt` — theme metadata
- `css/hacker.css` — main stylesheet
- `css/print.css` — print styles

## Installation

1. Copy the contents of this repository into `lib/tpl/hacker/` of your DokuWiki installation (the folder must be named `hacker`).
2. In DokuWiki: **Configuration Manager** → **Customization** → **Template** → select **Hacker**.
3. Save.

## Expected Structure in DokuWiki

```
lib/tpl/hacker/
├── main.php
├── detail.php
├── mediamanager.php
├── style.ini
├── template.info.txt
└── css/
    ├── hacker.css
    └── print.css
```

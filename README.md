# SoccerLoy

Public front for SoccerLoy (static PHP template, exported to HTML for Netlify).

## Local

```bash
npm install
npm run build
php -S localhost:8088
```

## Netlify

This repo is set up to publish the `out/` folder. Connect it at:

https://app.netlify.com/start/deploy?repository=https://github.com/pachristo/soccer-loy

Build command and publish directory are already in `netlify.toml`.

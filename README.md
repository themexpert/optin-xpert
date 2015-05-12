# Xpert Optin for Wordpress
Xpert Optin is lightweight and easy to use shortcdoe generator for Wrodpress. It's interactive Drag&Drop interface will give you an unique experience.

## Install
You can install the plugin in several way

1. `Download zip` file and extract it to your `wp-content/plugins` folder. Rename the folder to `xpert-optin` 
2. Clone the git repo directly inside yoru `plugin` folder

```
git clone https://github.com/themexpert/xpert-optin-wp.git xpert-optin
```

## Developer

First of all, install Node. We use Gulp to build XpertOptin. If you haven't used Gulp before, you need to install the gulp package as a global install.

```
npm install --global gulp
```

If you haven't done so already, clone the XpertOptin git repo.

```
git clone https://github.com/themexpert/xpert-optin-wp.git
```

Install the Node dependencies.

```
cd xpert-optin
npm install
```

Run `gulp compile` to compile the less into css

Run `gulp watch` so it can watch all your changes inside less folder, compile when you make changes and live reload the browser.

#Copyright and License
Copyright [ThemeXpert](http://www.themexpert.com) under GPLv2 or later license.

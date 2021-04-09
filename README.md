1. Install Symfony tradition WebApplication:
```
composer create-project symfony/website-skeleton xippo_erp
```

2. In composer.json Add the following lines:
```
"require" : { ...,
        "xippogmbh/xippo-erp-core-bundle": "dev-main"
		},
"repositories": [
	{
		"type": "git",
		"url": "https://github.com/xippoGmbH/xippo-erp-core-bundle.git"
	}
],
....
"config": {
	...
	"preferred-install": {
		"xippogmbh/*": "source",
		...
	},
	...
},
```

3. Change to your project folder and type: composer update

The xippo.erp Core Bundle is now installed. We have to change some configuration

4. In the file twig.yaml in your projectfolder/config/packages you have to add the following line:
```
	paths:
		'%kernel.project_dir%/vendor/xippogmbh/xippo-erp-core-bundle/templates': xippo-erp-core
```

5. In the folder projectfolder/config/routes you have to add a file: **xippo_erp_core.yaml** and put the content:
```
	xippo_erp_core:
		resource: '@XippoErpCoreBundle/Resources/config/routing/'
		type:     directory
```

6. Enter a valid Database config in **.env** file (we do not use it at the moment).

When you start now Symfony, you will get an emtpy home route.